<?php

class HomeController extends CI_Controller{
 
   public function index(){
       $this->homeView();
   }
   
    public function homeView(){
       $data = array('loc'=>'Home');
       $this->load->view('HeaderView',$data);
       $this->load->view('HomeView');
       $this->load->view('FooterView');
   }
}
?>

