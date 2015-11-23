<?php

class ProductsController extends CI_Controller{
 
   public function index(){
       $this->homeView();
   }
   
    public function homeView(){
       $data = array('loc'=>'Products');
       $this->load->view('HeaderView',$data);
       $this->load->view('ProductsView');
       $this->load->view('FooterView');
   }
}
?>