<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p class="text-red-500 mt-10 text-sm"><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>