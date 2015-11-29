<?php
/**
 * Created by IntelliJ IDEA.
 * User: urandu
 * Date: 11/29/15
 * Time: 10:47 AM
 */

class Student extends CI_Model{

    public function create_student($student_array)
    {
       // todo implement: check whether student exists function
        return $this->db->insert('students',$student_array);
    }

    public function edit_student($student_array,$student_id)
    {

        $this->db->where('student_id',$student_id);
        return $this->db-update('students',$student_array);

    }


    public function get_one_student($student_id)
    {
        $this->db->where('student_id',$student_id);
        $result=$this->db->get('students');
        if($result->num_rows()>0)
        {
            return $result->result();
        }
        else
        {
            return false;
        }
    }

    public function get_all_students()
    {


        $result=$this->db->get('students');
        if($result->num_rows()>0)
        {
            return $result->result();
        }
        else
        {
            return false;
        }
    }

}