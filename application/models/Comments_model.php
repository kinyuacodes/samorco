<?php 

class Comments_model extends CI_Model{


     //display coomments
    public function display_comments($post_id){
        // echo $post_id;die();
         $query = $this->db->get_where('comments',array('post_id'=>$post_id));
         return $query->result_array();
    }

    public function countcomments($post_id){
        //$this->db->get_where('comments',array('post_id'=>$post_id));
        $comment_count =$this->db->get_where('comments',array('post_id'=>$post_id))->num_rows();
        //var_dump($comment_count);die();
       return $comment_count; 
      }

       //create comment
     public function create_comment($post_id){
        $date = date("D-M-Y  H:i:sa");
         $data= array(
           'post_id'=>$post_id,
           'comment'=>$this->input->post('comment'),
           'name' =>$this->input->post('name'),
           'comment_date'=> $date
  
         );
         return $this->db->insert('comments',$data);
       }
  


}