<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

session_start();

class Room extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('room_model');
	}
	
	function index(){
		echo 'hic';
	}
	
	
	function show(){
		$data=array();
		$data['title']='room_list';
		$this->load->view('_view',$data);
	}
	
	function update(){
		$data=array();
		$data['title']='update_room';
		$this->load->view('_view',$data);
	}
	
	function check_update(){
	}
	
	function delete(){
		$data=array();
		$data['title']='delete_room';
		$this->load->view('_view',$data);
	}
	
	function check_delete(){
	}
	
	function create(){
		$data=array();
		$data['title']='create_room';
		$this->load->view('create_room_view',$data);
	}
	
	function check_create(){
	}
	
}

?>
