<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

session_start();

class Student extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('student_model');
	}
	
	//~ function index(){
	//~ }
	
	function show(){
		$data=array();
		$data['title']='student_list';
		$this->load->view('_view',$data);
	}
	
	function update(){
		$data=array();
		$data['title']='update_student';
		$this->load->view('_view',$data);
	}
	
	function check_update(){
	}
	
	
	function delete(){
		$data=array();
		$data['title']='delete_student';
		$this->load->view('_view',$data);
	}
	
	function check_delete(){
	}
	
	function create(){
		$data=array();
		$data['title']='create_student';
		$this->load->view('create_student_view',$data);
	}
	
	function check_create(){
	}
	
	function swap(){
		$data=array();
		$data['title']='swap_student';
		$this->load->view('_view',$data);
	}
	
	
	function check_swap(){
	}
}

?>
