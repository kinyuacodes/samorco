<?php

class Home_model extends CI_Model
{

   public function create_contact(){
        $date = date("D-M-Y  H:i:sa");
        $status = 1;
       
        $data=array(
            'status'=>$status,
            
            'body'=>$this->input->post('body'),
            'subject'=>$this->input->post('subject'),
            'name'=>$this->input->post('name'),
            'email'=>$this->input->post('email'),
           
            'recieved_date'=>$date,
           
        );
       return $this->db->insert('messages',$data);
    }

}