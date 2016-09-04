<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
abstract class Product extends CI_Controller {
	
	function __construct() {
       parent::__construct();
	  
	   
	 }  
	
	
    abstract public function index();
	abstract public function Add();
   // abstract public function edit(); 
   //abstract public function delete();
		

}
	
	