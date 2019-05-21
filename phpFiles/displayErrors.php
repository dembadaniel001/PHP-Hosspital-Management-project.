<?php
     if(count($errors) > 0): ?>
			<?php foreach($errors as $error):?>
			 <div class="alert alert-warning">
             <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Error!!!!!</strong> <?php echo $error;?>
          </div>
		  <?php endforeach ?>
			 <?php
		 
	 endif;
	 
?>