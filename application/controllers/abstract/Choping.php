<?php 

   // 
   require_once("Product_Quantity.php");
   require_once("P_Download.php");


class Choping   {
	
	function __construct() {
       parent::__construct( 'P_Download','Product_Quantity');
	  
	   $this->load->model("Product_Quantity_M");
       $this->load->model("P_Download_M");
	 }
	 
	 public function index(){
		 
		 $this->load->view("Admin/Choping/list");
		 }
}
