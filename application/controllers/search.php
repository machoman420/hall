<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

session_start();

class Search extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('room_model');
		$this->load->model('student_model');
	}

	function index(){
		$type = $this->input->get('t');
		$s = $this->input->get('q');
		if($t == 'room')$this->search_room($s);
		else if($t == 'student')$this->search_student($s);
	}

	private function search_room($s){
	}

	private function search_student($s){
	}

}

?>
