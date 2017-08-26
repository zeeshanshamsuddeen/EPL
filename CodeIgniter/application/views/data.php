<!DOCTYPE html> 
<html lang = "en"> 
<base href="<?php echo base_url();?>" />

   <head> 
      <meta charset = "utf-8"> 
      <title>CodeIgniter View Example</title> 
   </head>
	
   <body> 
			    

			
			<?php 
			foreach ($result as $x) {
			    echo $x->temp;
			}
			?>
			    

      </body>
	
</html>

