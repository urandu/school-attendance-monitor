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



    public function save()
    {
        $student_names=$this->input->post('names');
        $student_registration_number=$this->input->post('registration_number');
        $student_parent_contact=$this->input->post('parent_contact');
        $student_card_number=$this->input->post('card_number');
        $student_finger_print=$this->input->post('finger_print');

        $student_array=array(
            'student_names'=>$student_names,
            'student_registration_number'=>$student_registration_number,
            'student_parent_contact'=>$student_parent_contact,
            'student_card_number'=>$student_card_number,
            'student_finger_print'=>$student_finger_print
        );
        $this->load->model('student');
        $this->student->create_student($student_array);
        echo("success!!");
        //$this->load->view('register_student');
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
