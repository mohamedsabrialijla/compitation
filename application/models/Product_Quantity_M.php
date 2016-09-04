<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include("MyModel.php");
class Product_Quantity_M extends MyModel {
	function __construct(){
		parent ::__construct();
		$this->tableName = "productquantity";
	    }
		
		public function isExist($name){
			$this->db->where("name",$name);
			$rr = $this->db->from($this->tableName);
			return $this->db->count_all_results();
			}
		 public function getpaging($star,$rowsperpage){
		 $r=$this->db->query("select * from productquantity order by id desc limit $star , $rowsperpage");
		 return $r->result(); 
		 
		 }
	 public function Getcount(){
		$r= $this->db->query("select count(*)as count from productquantity where id > 0 "); 
		 $r2=$r->result();
		 return $r2[0]->count;
		 }	
	 
	}
	
?>	   