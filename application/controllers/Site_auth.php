<?php
class Site_auth extends CI_Controller {

    public function logout(){
        $this->session->unset_userdata('user_id');
        $this->session->set_flashdata('message','See you soon bye');
          return redirect('Home/bye');
        
      }
    }