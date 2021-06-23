<?php

class News_model extends CI_Model{
//count all news posts
   public function countall(){
       return $this->db->get('posts')->num_rows();
   }
   //count all category posts on sinle category
   public function countallcateory($id){
       return $this->db->get_where('posts',array('category_id'=>$id))->num_rows();
   }
      //paginated  posts
   public function paginatedposts($limit ,$offset){
     $this->db->limit($limit);
     $this->db->offset($offset);
    $users_id = $this->session->userdata('user_id');

    $this->db->select(
      [
         'posts.id as main_id','posts.title','posts.body','posts.image','posts.post_date','posts.slug','users.user_id','users.name',
         'category.id','category.category_name'

      ]
      );
      $this->db->from('posts');
      $this->db->join('users','users.user_id = posts.user_id');
      $this->db->join('category','category.id = posts.category_id','left');
      $this->db->order_by('posts.id','DESC');

      $posts = $this->db->get();
            
      return  $posts->result();

   }
   //limited posts
   public function getlimitedposts(){
    $users_id = $this->session->userdata('user_id');

    $this->db->select(
      [
         'posts.id','posts.title','posts.body','posts.image','posts.slug','posts.post_date','users.user_id','users.name','category.id'
         ,'category.category_name','personal.bio','personal.profile_image'
      ]
      );
      $this->db->from('posts');
      $this->db->join('users','users.user_id = posts.user_id');
      $this->db->join('category','category.id = posts.category_id');
      $this->db->join('personal','posts.user_id = personal.user_id');
      
      $this->db->order_by('posts.id','DESC');
      $this->db->limit(4);
      $posts = $this->db->get();

      return  $posts->result();
   }
 

  public function getonepost($slug = FALSE){
 

    if($slug === FALSE){
        $query = $this->db->get('posts');
    }

    //$users_id = $this->session->userdata('user_id');

    $this->db->select(
      [
         'posts.id as main_id','posts.category_id','posts.title','posts.body','posts.image','posts.post_date','posts.slug','users.user_id','users.name',
        'personal.bio','personal.profile_image'
         
      ]
      );
     // $this->db->from('posts');
      $this->db->join('users','users.user_id = posts.user_id');

      $this->db->join('personal','posts.user_id = personal.user_id');
      

      $posts = $this->db->get_where('posts',array('slug'=>$slug));

      return  $posts->row();
    }


    public function get_editpost($id){
      
    $this->db->select(
      [
         'posts.id as main_id',
         'posts.category_id',
         'posts.title',
         'posts.body',
         'posts.image',
         'posts.post_date',
         'posts.slug',
        
         
      ]
      );
   
      $posts = $this->db->get_where('posts',array('posts.id'=>$id));
      
      return  $posts->row();
  }
  //news under one category
  public function category_name($id){
    
   $query = $this->db->get_where('category',array(
     'category.id'=>$id
   ));
    
   return $query->row();
 } 
  public function one_category($id){
  /* $this->db->limit($limit);
   $this->db->offset($offset);*/
   $this->db->select(
      [
         'posts.id as main_id','posts.title','posts.body','posts.image','posts.post_date','posts.slug','users.user_id','users.name',
         'category.id','category.category_name'

      ]
      );


     $this->db->order_by('posts.id','DESC');

     $this->db->join('category','category.id= posts.category_id');
     $this->db->join('users','users.user_id= posts.user_id');

     $query =$this->db->get_where('posts',array(
       'posts.category_id'=>$id
     ));
     return $query->result();

  }

}
