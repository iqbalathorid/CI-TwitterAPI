<?php


class Auth extends CI_Controller 
{

  public function register()
  {
  	if(isset($_POST['register'])){
  		$this->form_validation->set_rules('username', 'Username' , 'required');
      $this->form_validation->set_rules('email', 'Email' , 'required');
      $this->form_validation->set_rules('password', 'Password' , 'required');
      $this->form_validation->set_rules('name', 'Your name' , 'required');
      
  		
      if($this->form_validation->run() == TRUE)
      {

        $data = array(
          'username' => $_POST ['username'],
          'email' => $_POST ['email'],
          'password' => md5($_POST ['password']),
          'name' => $_POST ['name'],
          'level' => $_POST ['level'], 
           );

        $this->db->insert('twitter_account', $data);

        $this->session->set_flashdata("success" , "your account has been registered . you can login now");
        redirect ("Auth/register", "refresh");

  	  }

  	}

  	$this->load->view('register');
  }

  public function cview()
  {
    $this->load->view('login');    

  }
  public function ceklogin(){
  if(isset($_POST['login'])){
    $this->form_validation->set_rules('username', 'Username' , 'required');
      $this->form_validation->set_rules('password', 'Password' , 'required');
      
    $user=$_POST['username'];
    $pass=md5($_POST['password']);
    $cek=$this->login_model->proseslogin($user,$pass);
    $hasil=count($cek);

    echo $hasil;

    if($hasil>0)
    {
      
      $pelogin = $this->db->get_where('twitter_account',array('username'=>$user , 'password' =>$pass))->row();
      if($pelogin->level == 'admin'){
        redirect('admin/C_admin/home_admin');
      }else
      {
        redirect('/user_authentication');
      }
      
    }else
    {
      redirect('login/index'); 
    }
  }
}
public function coba(){
  $this->load->view('coba');
}
public function dasboard()
    {
      $this->load->view('navigasi');
      $this->load->view('dasboard_user');
    }

    }
