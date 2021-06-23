<?php
defined('BASEPATH') OR exit ('no direct script access allowed');

class Auth_model extends CI_Model{

    public function registeruser($data){
          return $this->db->insert('users',$data);
    }

    public function checkadmin_exists(){
    $checkadmin = $this ->db->where(['level'=>1])->get('users');
       if($checkadmin->num_rows() > 0 ){

          return $checkadmin->row();
        }
    }

    //getting logged in users and admin and users data to store in session
    public function userExists($email,$password){

        $checkuser = $this->db->where(
                 ['email'=>$email,'password'=>$password]
            )->get('users');
             if($checkuser->num_rows() > 0){
                 return $checkuser->row();
             }





    }






}
