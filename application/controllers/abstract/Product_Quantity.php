<?php 

  include_once("Product.php");
  require_once("Product.php");

 class Product_Quantity extends Product {
	
	function __construct() {
       parent::__construct();
	  
	   $this->load->model("Product_Quantity_M");

	 }
	 
	 public function index()
	{
		
		
		 $data["productquantity"]=$this->Product_Quantity_M->get();
		 $data["content"]="Admin/Product_Quantity/list";  
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
		  'field'=>'image',
		  'label'=>'image',
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
				
			if(!$this->Product_Quantity_M->isExist($name)){
		        // here add data
		   $data["name"]=$name; 
		   $data["image"]=$this->input->post("image");
		   $data["detal"]=$this->input->post("detal");
		   $data["price"]=$this->input->post("price");
	        $this->Product_Quantity_M->add($data);	
			$this->session->set_flashdata('msg', 'The Name is saved'); 
			redirect("Abstract/Product_Quantity/add");
		   
		   }else{
				$data["message"]= "Error :The $name is already exist";
				}
			
		   }
			}
		   		  
		 $data["content"]="Admin/Product_Quantity/add";  // pag add for Product_Quantity1 tabel 
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
	 
	