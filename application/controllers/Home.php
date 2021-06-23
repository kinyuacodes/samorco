<?php

class Home extends CI_Controller{

    public function view($page = 'home')
    {
            if ( ! file_exists(APPPATH.'views/home/'.$page.'.php'))
            {
                    // Whoops, we don't have a page for that!
                    show_404();
            }
    
            $data['title'] = ucfirst($page); // Capitalize the first letter
            $data['sideposts']  = $this ->News_model->getlimitedposts(); 
            $this->load->view('home/'.$page, $data);
    }
   
    public function bye(){
        $this->load->view('home/bye');

  }






}