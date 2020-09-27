<?php include("header.php");?>

<?= br(2);?>
<div class="container">
<?=(isset($error))?$error:''?>
<?php
	$attri = array("class"=>"ayush ayush1 ayush2", "id"=>"ayush");
 echo form_open('login/admin_login',$attri); ?>
  <fieldset>
    <legend>User Login</legend>
    <div class="form-group">
      <label for="exampleInputEmail1">User Name</label>
		<?php 
			$data = array("name"=>"username","class"=>"form-control","placeholder"=>"Enter Username","type"=>"text","value"=>set_value('username'));
			echo form_input($data);
		?>
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		<?php echo form_error("username");?>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
		<?php
            $data = array("name"=>"password","class"=>"form-control","placeholder"=>"Enter Password");
            echo form_password($data);
        ?>
			<?php echo form_error("password");?>
    </div>
	<?php
		$data = array("class"=>"btn btn-primary","value"=>"Submit");
		echo form_submit($data);
	?>
  </fieldset>
</form>
</div>

<?php include("footer.php");?>

