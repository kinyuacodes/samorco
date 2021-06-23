<?php
class Auth extends CI_Controller{
  public function __construct()
  {
    parent::__construct();  
     
    if($this->session->userdata('user_id') =='1'){
         return redirect('Admin');
    }else if(  $this->session->userdata('user_id') >'1'){
         return redirect('News');
    }
  }





     public function  index(){
      $data['checkingadmin'] = $this->Auth_model->checkadmin_exists();
      $this->load->view('Auth/index',$data);

    }

     public function  register(){

      $data['checkingadmin'] = $this->Auth_model->checkadmin_exists();
      $this->load->view('Auth/register',$data);

    }

    public function user(){

      $this->form_validation->set_rules('name','Name','required');
      $this->form_validation->set_rules('username','Username','required|is_unique[users.username]');
      $this->form_validation->set_rules('email','Email','required|valid_email|is_unique[users.email]');
      $this->form_validation->set_rules('level','Level','required');
      $this->form_validation->set_rules('password','Password','required');
      $this->form_validation->set_rules('conf_password','Conf_Password','matches[password]');

      if($this->form_validation->run()){
         
        
       $password =      $data['password'] = sha1($this->input->post('password'));
       $conf_password = $data['conf_password'] = sha1($this->input->post('conf_password'));

              if($password == $conf_password){

                $data= $this->input->post();
                $data['password'] = sha1($this->input->post('password'));
                $data['conf_password'] = sha1($this->input->post('conf_password'));
                 
                 if($this->Auth_model->registeruser($data) ){
                   $this->session->set_flashdata('message','Your Account has been created, login and have fun. .');
                   return redirect('Auth');
                 }else{
                  $this->session->set_flashdata('message','failed to register user.');
                  return redirect('Auth/register');
                 }
                

              }else{

                $this->session->set_flashdata('message','passwords do not match');
                return redirect('Auth/register');
              }
              
      }else{
         $this->register();
      }

    }

    public function login(){

            $this->form_validation->set_rules('email','Email','required|valid_email');
            $this->form_validation->set_rules('password','Password','required');

            if($this->form_validation->run() ){
              
              $email=$this->input->post('email');
             

              $password= sha1($this->input->post('password'));
              
              $userexists = $this->Auth_model->userExists($email,$password);
                   /* echo "<pre>";
                     print_r($userexists);
                     echo "</pre>";
                     die();*/
                    if($userexists){
                      
                      $sessionData = [
                        'name'=>$userexists->name,
                         'username'=>$userexists->username,
                         'user_id'=>$userexists->user_id,
                         'email'=>$userexists->email,
                         'level'=>$userexists->level
                      ];
                      $this->session->set_userdata($sessionData);
                      $level = $this->session->userdata('level');
                          if($level == 1){
                              redirect('Admin');
                          }else{
                               
                            redirect('News');
                          }
                    }else{
                      $this->session->set_flashdata('message','User not Found,check your details');
                      return redirect('Auth');
                    }

            }else{
              $this->index();
            }

    }


    public function logout(){
      $this->session->unset_userdata('user_id');
      $this->session->set_flashdata('message','See you soon bye');
        return redirect('Auth');
      
    }
    
   
}
   