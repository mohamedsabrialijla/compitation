<?php 

   include_once("Product.php");
  require_once("Product.php");

 class P_Download extends Product  {
	
	function __construct() {
       parent::__construct();
	  
	   $this->load->model("P_Download_M");

	 }
	 
	 public function index()
	{
		
		
		 $data["productdownload"]=$this->P_Download_M->get();
		 $data["content"]="Admin/P_Download/list";  
         $data["PageTitle"]="ControlPanel|Products"; 
		 $data["PageHeader"]="Manage Products";
		 
		 $this->parser->Parse("Admin/template/main",$data); 
		
	}
		 public $ValConfig = array(  // for constraint form-validation
		  array(
		  'field'=>'name',
		  'label'=>'name',
		  'rules' => 'required'
		  )
		 ,  array(
		  'field'=>'category',
		  'label'=>'category',
		  'rules' => 'required'
		  )
		  , array(
		  'field'=>'detal',
		  'label'=>'detal',
		  'rules' => 'required'
		  )
		  , array(
		  'field'=>'price',
		  'label'=>'price',
		  'rules' => 'required'
		  )
		 
		  );
	 public function Add(){
		 if($_POST){
		 
		    $this->form_validation->set_error_delimiters('<div class="alert alert-error">','</div>');
	        $this->form_validation->set_rules($this->ValConfig);
		    if($this->form_validation->run()== TRUE){
				$name=$this->input->post("name");
				
			if(!$this->P_Download_M->isExist($name)){
		        // here add data
		   $data["name"]=$name;
		   $data["detal"]=$this->input->post("detal"); 
		   $data["category"]=$this->input->post("category");
		   $data["price"]=$this->input->post("price");
		   $data["file"]=$this->input->post("file");
	        $this->P_Download_M->add($data);	
			$this->session->set_flashdata('msg', 'The Name is saved'); 
			redirect("Abstract/P_Download/add");
		   
		   }else{
				$data["message"]= "Error :The $name is already exist";
				}
			
		   }
			}
		   		  
		 $data["content"]="Admin/P_Download/add";  // pag add for Product_Quantity1 tabel 
         $data["PageTitle"]="ControlPanel|Products"; 
		 $data["PageHeader"]="Manage Products";
		 
		 $this->parser->Parse("Admin/template/main",$data); 
		 }


     public function edit(){
		 
		 // edit logic here
		 
		 }
      
	  
	 public function delete(){
		 
		 // delete logic here
		 
		 }  


}
	 
	