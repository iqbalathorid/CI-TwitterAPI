<?php

class Crud_model extends CI_Model {
	var $table='twitter_account';
function __construct(){
	
	parent::__construct();
	$this->load->database();
}
function get_all_users() {
	$this->db->from('twitter_account');
	$query=$this->db->get();
	return $query->result();
}
function get_by_id($id){
	$this->db->from($this->table);
	$this->db->where('user_id',$id);
	$query=$this->db->get();
	return $query->row();	 
}
function add($data){
	$this->db->insert($this->table , $data);
	return $this->db->insert_id();
}
function user_update($where, $data){
	$this->db->update($this->table,$data,$where);
	return $this->db->affected_rows();
}
function delete_by_id($id){
	$this->db->where('user_id',$id);
	$this->db->delete($this->table);
}
function ubah($data,$id){
	$this->db->where('user_id',$id);
	$this->db->update('twitter_account',$data);

}
function orang(){
	$query=$this->db->get('twitter_account');
	return $query->result_array();
}
function tambah($data){
	$this->db->insert('twitter_account',$data);
	return TRUE;
}
}