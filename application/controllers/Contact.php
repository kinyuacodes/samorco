<?php

class Contact extends CI_Controller{

    public function contact_form()
    {
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('subject','Subject','required');
        $this->form_validation->set_rules('body','Body','required');

        if($this->form_validation->run()===FALSE){
            $data['title'] ="Contact";
            $this->load->view('home/Contact',$data);
       }else{
        $this->Home_model->create_contact();
        $this->session->set_flashdata('message','Thank you for contacting us ,your feedback will be given soon.');
        return redirect('Contact');
       }
    }








}