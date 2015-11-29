<?php
/**
 * Created by IntelliJ IDEA.
 * User: urandu
 * Date: 11/29/15
 * Time: 10:47 AM
 */

class Attendance_log extends CI_Model{

    public function new_attendance($data_array)
    {

        return $this->db->insert('student_attendance_log',$data_array);
    }




    public function get_attendance_by_student_id($student_id)
    {
        $this->db->where('student_id',$student_id);
        $result=$this->db->get('student_attendance_log');
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