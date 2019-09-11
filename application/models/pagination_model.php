<?php

class Pagination_model extends CI_Model{
 
 public function get_user_list($limit,$star){
 	$query=$this->db->get('users',$limit,$star);
 	return $query;
 }
 function get_username(){
 	$this->db->from('users');
	$query=$this->db->get();
	return $query->result();
 }
}