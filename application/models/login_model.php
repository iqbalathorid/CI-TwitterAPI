<?php 

class Login_model extends CI_Model {

public function proseslogin($user,$pass){

	$this->db->where('username',$user);
	$this->db->where('password',$pass);
	return $this->db->get('twitter_account')->row();


}

}