<!DOCTYPE html> 
<html lang = "en"> 
<base href="<?php echo base_url();?>" />
<link rel="stylesheet" href="assets/test.css" />

   <head> 
      <meta charset = "utf-8"> 
      <title>CodeIgniter View Example</title> 
   </head>
	
   <body> 
      
     <?php echo form_open('test/after_form'); ?>

     <?php echo form_input('username', 'johndoe'); ?>

      <?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
      <?php echo form_close(); ?>

      </body>
	
</html>