<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Students extends CI_Controller {


	public function index()
	{
		$this->load->view('all_students');
	}


    public function register()
	{
		$this->load->view('register_student');
	}


    public function update()
	{
		$this->load->view('update_student');
	}

    public function view_student()
	{
		$this->load->view('view_student');
	}

}
