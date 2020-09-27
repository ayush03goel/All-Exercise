<?php include("admin_header.php");?>



<?= br(2);?>
<div class="container">

<?php
if(isset($error_msg))
	echo $error_msg;
$attr = array("method"=>"post","class"=>"ayush", "id"=>"form");
 echo form_open_multipart('admin/store_article',$attr);?>
  <fieldset>
    <legend>Add Articles</legend>
	<div class="form-group">
      <label for="exampleInputFile">File input</label>
      <input type="file" class="form-control-file" name="image" id="exampleInputFile" aria-describedby="fileHelp">
    </div>
    <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">Title</label>
	</div>
	<div class="form-group">
	<?php 
	$atrrib = array("class"=>"form-control", "id"=>"exampleInputEmail1", "placeholder"=>"Enter Title","name"=>"title","value"=>set_value('title'));
		echo form_input($atrrib);
	?>
<?php echo form_error("title");?>
    </div>
    <div class="form-group">
      <label for="exampleTextarea">Description</label>
		<?php 
			$attr = array("name"=>"desc","rows"=>"3","value"=>set_value('desc'), "class"=>"form-control");
			echo form_textarea($attr);
			echo form_error("desc");
		?>
    </div>
    <div class="form-group">
      <label for="exampleSelect1">Created By</label>
		<?php

			$attr = array("1"=>"admin","2"=>"Sub-admin");
			$extra = array("class"=>"form-control","value"=>set_value('created_by'));
			echo form_dropdown('created_by', $attr, '2',$extra);

		?>
    </div>
	<?php 
		$attr = array("class"=>"btn btn-primary", "value"=>"Submit");
		echo form_submit($attr);
	?>
  </fieldset>
</form>


</div>

<?php include("admin_footer.php");?>
