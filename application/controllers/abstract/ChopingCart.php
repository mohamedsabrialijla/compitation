<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ChopingCart extends CI_Controller {
    function __construct(){
		parent ::__construct();
		$this->load->model("ChopingCart_M");

	    }

   
   public function index()
	{   
       $product=$this->ChopingCart_M->get($id);
		
		$data= array(
		  'id' => $product->id,
		  'quantity' => 1,
		  'price' => $product->price,
		  'name' => $product->name
		);
		$this->cart->insert($data); 	
		$this->load->view('Admin/ChopingCart/cart');
	}
   public function delete($rowid){
	   $this->cart->update(array('rowid'=>$rowid,'quantity'=>0));
	   redirect('Admin/ChopingCart/cart');
	   }
}