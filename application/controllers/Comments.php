<?php

class Comments extends CI_Controller{


     //create comment
    public function create_comment($post_id){
        $slug = $this->input->post('slug');
        $data['title']='post-detail';
        $data['view']=$slug;
        //echo $slug;die();
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('comment','comment','required');
       
        if($this->form_validation->run()===FALSE){
          $post_id = $post_id;
          //var_dump($post_id); die();
          $data['comments'] = $this ->Comments_model->display_comments($post_id);
           $data['post'] = $this ->News_model->getonepost($slug);
           $data['sideposts']  = $this ->News_model->getlimitedposts();
          $data['categories']  = $this ->Category_model->getallcategories();
          $data['comment_count']=$this->Comments_model->countcomments($post_id);
          $data['message'] = "hi there something went wrong";
          $this->load->view('News/view',$data);       
       }else{
            $this->Comments_model->create_comment($post_id);
            $this->session->set_flashdata('commented', 'Comment created.Thank you');
            return redirect('News/view/'.$slug);
      }
   }






}