<?php include("admin_header.php");?>

<?= br(2);?>
<div class="container">

<!-- Editable table -->
<div class="card">
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Articles List</h3>
  <div class="card-body">

	<?php if($this->session->flashdata('feedback'))
			echo "<div class=\"text-success\">". $this->session->flashdata('feedback') ."</div>";
	?>
    <div id="table" class="table-editable">
      <span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success"><i
            class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>
      <table class="table table-bordered table-responsive-md table-striped text-center">
			<thead>
              <tr>
                <th class="text-center">Id</th>
                <th class="text-center">Name</th>
                <th class="text-center">Edit</th>
                <th class="text-center">Remove</th>
              </tr>
            </thead>
	        <tbody>
			<?php 
				if(count($articles)>0):
					foreach($articles as $art):?>
			          <tr>
    			        <td class="pt-3-half" contenteditable="true"><?php echo $art['id']; ?></td>
        	    		<td class="pt-3-half" contenteditable="true"><?php echo $art['title']; ?></td>
		            	<td class="pt-3-half">
	    		          <span class="table-remove"><a type="button" class="btn btn-danger btn-rounded btn-sm my-0" href="/admin/edit_article/<?php echo $art['id'];?>">Edit</a></span>
	            		</td>
						<td class="pt-3-half">
    			          <span class="table-remove"><a type="button" class="btn btn-danger btn-rounded btn-sm my-0" href="/admin/remove_article/<?php echo $art['id'];?>">Remove</a></span>
			            </td>
    			      </tr>
				<?php
          			endforeach;
				else: ?>
				<tr> 
					No record found
                </tr>
				<?php
				endif;
				?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- Editable table -->

</div>

<?php include("admin_footer.php");?>
