<?php

class ContactController extends CI_Controller{
 
   public function index(){
       $this->homeView();
   }
   
    public function homeView(){
       $data = array('loc'=>'Contact');
       $this->load->view('HeaderView',$data);
       $this->load->view('ContactView');
       $this->load->view('FooterView');
   }
}
?>