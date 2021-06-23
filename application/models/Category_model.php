<?php

class Category_model extends CI_Model{
//count all category posts on single category
public function countallcateory($id){
    return $this->db->get_where('posts',array('category_id'=>$id))->num_rows();
}

//all categories
public function getallcategories(){
        
    $this->db->select(
     [
        'category.id','category.category_name','category.create_date']
     );
     $this->db->from('category');
    
     
     $this->db->order_by('category.id','DESC');
     //$this->db->limit(5);
     $categories = $this->db->get();

     return  $categories->result();
    }

    public function create_category(){
          $date = date("D-M-Y  H:i:sa");
         $data= array(
     
        'category_name'=>$this->input->post('category'),
        'create_date'=> $date

       );
      return $this->db->insert('category',$data);
    }
    public function delete_category($id){
      $where = $this->db->where('id',$id);
      $result= $this->db->delete('category');
      return $result;
    }





}