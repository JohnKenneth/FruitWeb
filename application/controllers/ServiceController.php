<?php

class ServiceController extends CI_Controller{
 
   public function index(){
       $this->homeView();
   }
   
    public function homeView(){
       $data = array('loc'=>'Service');
       $this->load->view('HeaderView',$data);
       $this->load->view('ServiceView');
       $this->load->view('FooterView');
   }
}
?>