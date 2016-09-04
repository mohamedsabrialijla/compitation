
   <?php echo form_open("Abstract/Product_Quantity/add",array("class"=>"form-signin")); ?>
  
 
  <input  type="text" name="name" value="<?php echo set_value("name"); ?>" class="input_block_level" placeholder="Add Name" />
            <?php echo form_error('name'); ?></br>
       <div class="form-group">
    <label class="control-label bold">file</label>
    <div class="fileinput fileinput-new" data-provides="fileinput">
    
    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
    <div>
     <span class="btn default btn-file">
      <span class="fileinput-new"> Select File </span>
       <span class="fileinput-exists"> Change </span>
       <input type="file" name="..."> </span>
       <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
      </div>
       </div>
       <div class="clearfix margin-top-10">
        </div>                                  
        </div>                                           
          <?php echo form_error('file'); ?></br>
 
              
            
<textarea type="text" name="detal" value="<?php echo set_value("detal"); ?>"  class="input_block_level"       placeholder="Deatils"></textarea>           
            <?php echo form_error('detal'); ?></br>
            
     
       
  <input  type="text" name="price" value="<?php echo set_value("price"); ?>" class="input_block_level" placeholder="price" />
            <?php echo form_error('price'); ?></br>
            
 
          
   
		  <input type="submit" class="btn btn-primary" value="Add"/>
          <a href="" class="btn ">Cancel</a>         
		
            </form>
            