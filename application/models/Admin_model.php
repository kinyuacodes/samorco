<?php
defined('BASEPATH') OR exit ('no direct script access allowed');

class Admin_model extends CI_Model{



         public function getmessages(){
             $this->db->select(
        ['messages.id','messages.name','messages.email','messages.recieved_date','messages.body','messages.subject','messages.status']);

        $this->db->order_by('messages.id','DESC');
       $this->db->from('messages');
        $messages = $this->db->get();
        return  $messages->result();
   
    }
    //delete mess
    public function delete_message($id){
        $where = $this->db->where('id',$id);
       $result= $this->db->delete('messages');
      return $result;
    }
    //delete post
    public function delete_post($id){
        $where = $this->db->where('id',$id);
       $result= $this->db->delete('posts');
      return $result;
    }

//update post
public function update_post($post_image){
    $slug = preg_replace('/\s+/','-',$this->input->post('title'));

    //var_dump($slug);die();
    $date = date("D-M-Y  H:i:sa");
    $status = 0;
    $users_id = $this->session->userdata('user_id');
    $data=array(
        'status'=>$status,
        'user_id'=>$users_id,
        'image' =>$post_image,
        'body'=>$this->input->post('editor1'),
        'title'=>$this->input->post('title'),
        'category_id'=>$this->input->post('category_id'),
        'slug'=>$slug,
        'post_date'=>$date,
       
    ); 
     $this->db->where('id',$this->input->post('id')); 
 
      return $this->db->update('posts',$data);
     
   }
   //create post
   public function  create_post($post_image){
    $slug = preg_replace('/\s+/','-',$this->input->post('title','trim'));
    $date = date("D-M-Y  H:i:sa");
    $status = 0;
    $users_id = $this->session->userdata('user_id');
    $data=array(
        'status'=>$status,
        'user_id'=>$users_id,
        'image' =>$post_image,
        'body'=>$this->input->post('editor1'),
        'title'=>$this->input->post('title'),
        'category_id'=>$this->input->post('category'),
        'slug'=>$slug,
        'post_date'=>$date,
       
    );
   return $this->db->insert('posts',$data);

}







}