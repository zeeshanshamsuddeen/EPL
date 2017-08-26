<!DOCTYPE html> 
<html lang = "en"> 
<base href="<?php echo base_url();?>" />
   <head> 
      <meta charset = "utf-8"> 
      <title>CodeIgniter View Example</title> 
   </head>
	
   <body> 
      CodeIgniter View Example 
      <?php
      	$id=24;
       ?>

       <!-- id variable is passed like this-->
    <a href="<?php echo site_url('test/linker/'.$id); ?>">this will link to your users controller and index() method</a>

    
   </body>
	
</html>