<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MyModel extends CI_Model {
	function __construct(){
		parent ::__construct();
	    
	    }
		public $tableName="";
		public $orderby="id desc";
		public $selectColumns="";
		public $UserID=1;
		
	 function add($data){
		 $data["insertdate"]=date("y-m-d H:i:s");
		 $this->db->insert($this->tableName,$data);
		 }	
		 
	 function delete($id){
		$this->db->where("id",$id);
		$data["updatedate"]=date("y-m-d H:i:s");
		$this->db->update($this->tabelName,$data);
		
		}	 
		
	 function update($id,$data){
		$this->db->where("id",$id);
		$data["updatedate"]=date("y-m-d H:i:s");
		$this->db->update($this->tableName,$data);	
	 }

      function get($id=""){
		$this->db->order_by($this->orderby);
		if($id!=NULL){
		$this->db->where("id",$id);
		$r = $this->db->get($this->tableName);
		   return $r->result(); 
		}else{
		   if($this->selectColumns!="") 
		   $this->db->select($this->selectColumns); 
 	       $rs=$this->db->get($this->tableName);
	       return $rs->result();
	   
	   } 
		
	 
	 }
	}