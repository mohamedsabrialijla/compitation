   <?php $this->load->view('Admin/template/header'); ?>
  <?php $active="home" ?>
  
    <script>	
	var baseUrl='<?php echo base_url();?>';
	 
	
 </script>
  <link href="<?php echo site_url(); ?>/bootstrap/css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/bootstrap/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/bootstrap/css/bootstrap-responsive.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/bootstrap/css/bootstrap-responsive.min.css"/>
<style>
.page-content-wrapper {
    width: 82% !important;
}
.page-content {
    direction: ltr;
    float: left;
    margin-left: 100px;
    min-height: 600px;
    width: 100%;
   
}
i{
	float:left;}
.page-sidebar-menu{
	float:left;}	
.page-sidebar-closed .page-sidebar, .page-sidebar-closed .page-sidebar .page-sidebar-menu.page-sidebar-menu-closed {
    float: left;
    margin-left: -3px;
    width: 54px !important;
}
.page-sidebar-menu > li > a {
    color: #678098;
    float: left;
}
.title{
	margin-left:10px;}

.link {
	color: #337ab7 !important;
	background-color:#eef2f2;}
	 .alert{
	   cursor:pointer;
	   margin-bottom:auto;
	   }  	
</style>

     <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
           

            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEAD-->
                    <!-- <div class="page-head"> -->
                        <!-- BEGIN PAGE TITLE -->
                        <!-- <div class="page-title"> -->
                            <!-- <h1>Dashboard -->
                                <!-- <small>dashboard & statistics</small> -->
                            <!-- </h1> -->
                        <!-- </div> -->
                        <!-- END PAGE TITLE -->
 
      				<!-- </div> -->

                    <!-- END PAGE BASE CONTENT -->
          <?php           
		   if($this->session->flashdata('msg') !=NULL){ // this is flashdata when the $variable exist in DB
		     if(strstr($this->session->flashdata('msg'),"Error"))
		       echo  "<div class='alert alert-error'>" .$this->session->flashdata('msg')."</div>";
		            else 
		       echo  "<div class='alert alert-success'>" .$this->session->flashdata('msg')."</div>";
		
		      }
	           	if(isset($message)){
		          if(strstr($message,"Error"))
		    echo  "<div class='alert alert-error'>" .$message."</div>";
		       else 
		    echo  "<div class='alert alert-success'>" .$message."</div>";
		
		}
		
		
		  ?>
                    <?php $this->load->view($content); ?>
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
           
            
                

	

        </div>
        <!-- END CONTAINER -->



<?php $this->load->view('Admin/template/footer'); ?>
<script src="<?php echo site_url(); ?>/bootstrap/js/jquery-1.10.2.min.js"></script>
<script src="<?php echo site_url(); ?>/bootstrap/js/bootstrap.min.js"></script>
     <script>
  // logic slidup message flashdata
    $(function(){
		$(".alert").click(function(e){
			$(this).slideUp();
		});
		
	});	
	</script>