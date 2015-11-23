<?php

class AboutController extends CI_Controller{
 
   public function index(){
       $this->homeView();
   }
   
    public function homeView(){
       $data = array('loc'=>'About');
       $this->load->view('HeaderView',$data);
       $this->load->view('AboutView', $data);
       $this->load->view('FooterView');
   }
}
?>