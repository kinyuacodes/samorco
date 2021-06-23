<?php

class TV extends CI_Controller{

    public function index()
    {
           $data['title']="Tv";
    
            $this->load->view('tv/index',$data);
    }








}