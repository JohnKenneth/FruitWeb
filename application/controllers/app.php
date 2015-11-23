<?php

class app extends CI_Controller{
 
   /*public function index(){
       $this->homeView();
   }*/
   
    public function Home(){
       $this->load->view('HeaderView');
       $this->load->view('HomeView');
       $this->load->view('FooterView');
   }
}
?>

