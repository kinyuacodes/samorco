<?php

class Admin extends CI_Controller{
    public function __construct()
     {
       parent::__construct();  
        //security to prevent url admin access
       if( !$this->session->userdata('user_id')){
            return redirect('Auth');
       }
       //if level user 
       if(  $this->session->userdata('level') =='2'){
            return redirect('Access');
       }
     }


    public function index()
    {
         
    
            $this->load->view('admin/index');
    }


   //uder page
   public function user(){
    $this->load->view('admin/user');
   }
 
 
   public function messages(){
    $data['messages']  = $this ->Admin_model->getmessages();
    $this->load->view('admin/messages',$data);
   }
   public function category(){
    $data['title'] ="Categories";
    $data['categories']  = $this ->Category_model->getallcategories();
    $this->load->view('admin/category',$data);
   }
   public function delete_category($id){
    $data['categories']  = $this ->Category_model->delete_category($id);
    $data['title'] ="Categories";
    $data['categories']  = $this ->Category_model->getallcategories();
    $this->session->set_flashdata('message','Category deleted');
    $this->load->view('admin/category',$data);
   }

   public function Add_category(){
    $this->form_validation->set_rules('category','Category','required');
    if($this->form_validation->run()===FALSE){
        $data['title'] ="Categories";
        $data['categories']  = $this ->Category_model->getallcategories();
        $this->load->view('admin/category',$data);
    }else{
        $this->Category_model->create_category();
        $this->session->set_flashdata('message', 'Category added  successfully');
        return redirect('Admin/category');
    }
   }



   public function posts($offset = 0) {
       
    $config['base_url'] = site_url('Admin/posts');
    $config['total_rows'] = $this->News_model->countall();
    $config['per_page'] = 3;
    $config['attributes'] = array('class' => 'page-link');
    $config['next_link'] = 'Next';
    $config['prev_link'] = 'Previous';

   $this->pagination->initialize($config);
  

   $data['posts']  = $this ->News_model->paginatedposts($config['per_page'],$offset);
   
    $data['title']="posts";

 $this->load->view('admin/posts',$data);
 }


 
//delete mess
  public function delete_message($id){

   $this->Admin_model->delete_message($id);
    $this->session->set_flashdata('message','You deleted message ');
    return redirect('Admin/messages');
  }
 //delete post
 public function delete_post($id){

    $this->Admin_model->delete_post($id);
     $this->session->set_flashdata('message','You deleted post ');
     return redirect('Admin/posts');
  }
  //create post
  public function addpost(){
    $data['categories']  = $this ->Category_model->getallcategories();
    $data['title'] ="Add  post";
    $this->load->view('admin/addpost',$data);
   }
   //create post
   public function createpost(){

    $this->form_validation->set_rules('title','Title','trim|required');
    $this->form_validation->set_rules('editor1','Editor1','trim|required');
   
    
   // $this->form_validation->set_rules('userfile','Userfile','required');

    if($this->form_validation->run()===FALSE){
        $data['categories']  = $this ->Category_model->getallcategories();
        $data['title'] = "perps you did not add image,report-error,kinyuacodes@gmail.com";
       $this->load->view('Admin/addpost',$data);       
    }else{
           //upload post image
    $config['upload_path'] ='./images/users/posts/';
    $config['allowed_types'] ='png|jpg|jpeg|gif';
    $config['max_size'] ='204800';
    $config['max_width'] ='1800';
    $config['max_height'] ='1800';

    $this->load->library('upload',$config);
    $this->upload->initialize($config);
    if(!$this->upload->do_upload($field='userfile')){
        $data['categories']  = $this ->Category_model->getallcategories();
        $data['title'] = "Addpost";
        $data['errors'] = array('error'=>$this->upload->display_errors());
        $this->load->view('Admin/addpost',$data);
        
        $post_image='noimage.jpg';

       
    }else{
       $data = array( 'upload_data'=>$this->upload->data());
      $post_image=$_FILES['userfile']['name'];
    
    }
   $this->Admin_model->create_post($post_image);
   $this->session->Set_flashdata('success','Your post has been created');
   redirect('Admin/posts');

  }
}
 //update post
  public function edit_post($id){
      $data['post'] =$this->News_model->get_editpost($id);
      $data['title'] ="Edit post";
      $data['categories']  = $this ->Category_model->getallcategories();
   $this->load->view('admin/editpost',$data);
  }
  //update post
  public function updatepost(){
           
    $this->form_validation->set_rules('title','Title','required');
    $this->form_validation->set_rules('editor1','Editor1','required');
   
    
   // $this->form_validation->set_rules('userfile','Userfile','required');

    if($this->form_validation->run()===FALSE){
        $this->session->set_flashdata('message','All fields must be filled to  edit post  ');
       return redirect('Admin/posts');     
    }else{
           //upload post image
    $config['upload_path'] ='./images/users/posts/';
    $config['allowed_types'] ='png|jpg|jpeg|gif';
    $config['max_size'] ='204800';
    $config['max_width'] ='1800';
    $config['max_height'] ='1800';

    $this->load->library('upload',$config);
    $this->upload->initialize($config);
    if(!$this->upload->do_upload($field='userfile')){
       
        $data['errors'] = array('error'=>$this->upload->display_errors());
        $data['post'] =$this->News_model->get_editpost($id);
        $data['title'] ="Edit post";
        $data['categories']  = $this ->Category_model->getallcategories();
        $this->load->view('Admin/editpost',$data);
        
        $post_image='noimage.jpg';

       
    }else{
       $data = array( 'upload_data'=>$this->upload->data());
      $post_image=$_FILES['userfile']['name'];
    
    }
     $this ->Admin_model->update_post($post_image);
      $this->session->Set_flashdata('success','Your post has been Updated');
     redirect('Admin/posts');
     }
  }//end update post




}