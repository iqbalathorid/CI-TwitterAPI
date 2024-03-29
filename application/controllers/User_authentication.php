<?php defined('BASEPATH') OR exit('No direct script access allowed');
class User_Authentication extends CI_Controller
{
    function __construct() {
		parent::__construct();
		//Load user model
		$this->load->model('user');
    }
    
    public function index(){
		$userData = array();
		
		//Include the twitter oauth php libraries
		include_once APPPATH."libraries/twitter-oauth-php-codexworld/twitteroauth.php";
		
		//Twitter API Configuration
		$consumerKey = 'py3GMvYfbFi7FNLn0rQBe2Qce';
		$consumerSecret = 'kOhm7k7fNvB1S1F82mmFrERNw8GxKJYGqzWXWtzGyATUF3gPuR';
		$oauthCallback = base_url().'user_authentication/';
		
		//Get existing token and token secret from session
		$sessToken = $this->session->userdata('token');
		$sessTokenSecret = $this->session->userdata('token_secret');
		
		//Get status and user info from session
		$sessStatus = $this->session->userdata('status');
		$sessUserData = $this->session->userdata('userData');
		
		if(isset($sessStatus) && $sessStatus == 'verified'){
			//Connect and get latest tweets
			$connection = new TwitterOAuth($consumerKey, $consumerSecret, $sessUserData['accessToken']['oauth_token'], $sessUserData['accessToken']['oauth_token_secret']); 
			$data['tweets'] = $connection->get('statuses/user_timeline', array('screen_name' => $sessUserData['username'], 'count' => 3));

			//User info from session
			$userData = $sessUserData;
		}elseif(isset($_REQUEST['oauth_token']) && $sessToken == $_REQUEST['oauth_token']){
			//Successful response returns oauth_token, oauth_token_secret, user_id, and screen_name
			$connection = new TwitterOAuth($consumerKey, $consumerSecret, $sessToken, $sessTokenSecret); //print_r($connection);die;
			$accessToken = $connection->getAccessToken($_REQUEST['oauth_verifier']);
			if($connection->http_code == '200'){
				//Get user profile info
				$userInfo = $connection->get('account/verify_credentials');
				$friend= $connection->get('https://api.twitter.com/1.1/friends/list.json');

				//Preparing data for database insertion
				$name = explode(" ",$userInfo->name);
				$first_name = isset($name[0])?$name[0]:'';
				$last_name = isset($name[1])?$name[1]:'';
				$userData = array(
					'oauth_provider' => 'twitter',
					'account_id' => $userInfo->id,
					'username' => $userInfo->screen_name,
					'first_name' => $first_name,
					'last_name' => $last_name,
					'profile_url' => 'https://twitter.com/'.$userInfo->screen_name,
					'picture_url' => $userInfo->profile_image_url,
					'followers_count' => $userInfo->followers_count,
					'following_count' => $userInfo->friends_count,
					'tweet_count' => $userInfo->listed_count,
					'created_at' => $userInfo->created_at


				);
				
				//Insert or update user data
				$userID = $this->user->checkUser($userData);
				
				//Store status and user profile info into session
				$userData['accessToken'] = $accessToken;
				$this->session->set_userdata('status','verified');
				$this->session->set_userdata('userData',$userData);
				
				//Get latest tweets
				$data['tweets'] = $connection->get('statuses/user_timeline', array('screen_name' => $userInfo->screen_name, 'count' => 3));
			}else{
				$data['error_msg'] = 'Some problem occurred, please try again later!';
			}
		}else{
			//unset token and token secret from session
			$this->session->unset_userdata('token');
			$this->session->unset_userdata('token_secret');
			
			//Fresh authentication
			$connection = new TwitterOAuth($consumerKey, $consumerSecret);
			$requestToken = $connection->getRequestToken($oauthCallback);
			
			//Received token info from twitter
			$this->session->set_userdata('token',$requestToken['oauth_token']);
			$this->session->set_userdata('token_secret',$requestToken['oauth_token_secret']);
			
			//Any value other than 200 is failure, so continue only if http code is 200
			if($connection->http_code == '200'){
				//redirect user to twitter
				$twitterUrl = $connection->getAuthorizeURL($requestToken['oauth_token']);
				$data['oauthURL'] = $twitterUrl;
			}else{
				$data['oauthURL'] = base_url().'user_authentication';
				$data['error_msg'] = 'Error connecting to twitter! try again later!';
			}
        }

		$data['userData'] = $userData;
		$this->load->view('user_authentication/index',$data);
    }

	public function logout() {
		$this->session->unset_userdata('token');
		$this->session->unset_userdata('token_secret');
		$this->session->unset_userdata('status');
		$this->session->unset_userdata('userData');
        $this->session->sess_destroy();
		redirect('Auth/cview');
    }
   
}
