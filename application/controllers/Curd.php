<?php


class Curd extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model('Crud_model');
}
	public function curd_view(){
		$this->load->view('admin_view/navigasi.php');
		$data['users']=$this->Crud_model->get_all_users();
		$this->load->view('admin_view/curd/curd_view',$data);
			
}

	public function add(){
		$data=array(
		   'username' => $_POST ['username'],
          'email' => $_POST ['email'],
          'password' => md5($_POST ['password']),
          'name' => $_POST ['name'],
          'level' => $_POST ['level'], 


			);

			$this->Crud_model->add($data);
			echo json_encode(array("status"==TRUE));
}
		
public function ajax_edit(){
	$data=$this->Crud_model->get_by_id($id);

	echo json_encode($data);

}
public function user_update(){
	$data=array(
		'username'=>$this->input->post('username'),
		'password'	  =>$this->input->post('password'),
		'email'=>$this->input->post('email'),					
		'name'=>$this->input->post('name'),
		'level'=>$this->input->post('level'),	
	);
	$this->Crud_model->user_update(array('user_id'=>$this->input->post('user_id')),$data);
	echo json_encode(array("status"=>TRUE));
}
public function user_delete($id){
	$this->Crud_model->delete_by_id($id);
	echo json_encode(array("status"=>TRUE));
}
}
