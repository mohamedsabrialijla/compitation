<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include("MyModel.php");

class ‏‏ChopingCart_M extends MyModel {
	function __construct(){
		parent ::__construct();
		$this->tableName = "‏‏productdownload";
		$this->tableName = "‏‏productquantity";
		
	    }
		
		 public function get($id){
		 $this->db->where('id',$id);
		$r = $this->db->get('productdownload')->row();
		$r = $this->db->get('productquantity')->row();
		return $r->result();
		}
	
	
}
	
	   