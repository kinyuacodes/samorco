<?php

class News extends CI_Controller{

  
    public function index($offset = 0) {
       
        $config['base_url'] = site_url('News/index');
        $config['total_rows'] = $this->News_model->countall();
        $config['per_page'] = 4;
        //$config['attributes'] = array('class' => 'active');
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';

       $this->pagination->initialize($config);
       $data['sideposts']  = $this ->News_model->getlimitedposts();       
       $data['categories']  = $this ->Category_model->getallcategories();

       $data['posts']  = $this ->News_model->paginatedposts($config['per_page'],$offset);
       
        $data['title']="News";

    $this->load->view('news/index',$data);
   }

   public function View($slug = NULL){
       
    $data['post'] = $this ->News_model->getonepost($slug);
      // var_dump( $data['post']); die();
   $post_id = $data['post']->main_id;
    //var_dump($post_id); die();
   $data['comments'] = $this ->Comments_model->display_comments($post_id);
   $data['comment_count']=$this->Comments_model->countcomments($post_id);

    $data['title']="post-detail";
    $data['view']=$slug;

  /* foreach($data['post'] as $post){
       $user_id = $post->user_id;
   }
   //echo $user_id; die();
   */
  $data['sideposts']  = $this ->News_model->getlimitedposts();
  //$user_id = $data['post']->user_id;
 // echo $user_id; die();
   $data['categories']  = $this ->Category_model->getallcategories();



    $this->load->view('news/view', $data);
}

  //News in one category
  public function category($id) {
       
  
   $data['sideposts']  = $this ->News_model->getlimitedposts(); 

   $data['categories']  = $this ->Category_model->getallcategories();
   $data['posts']  = $this ->News_model->one_category($id);
   
    $data['title']=$this->News_model->category_name($id)->category_name;
   $this->load->view('news/news_category',$data);
}







}