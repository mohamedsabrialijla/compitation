<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include("MyModel.php");
class P_Download_M extends MyModel {
	function __construct(){
		parent ::__construct();
		$this->tableName = "productdownload";
	    }
		
		public function isExist($name){
			$this->db->where("name",$name);
			$rr = $this->db->from($this->tableName);
			return $this->db->count_all_results();
			}
		
	}
	
?>	   