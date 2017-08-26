<!DOCTYPE html>
<html lang="en">
<base href="<?php echo base_url();?>" />


<!-- Mirrored from kodeforest.net/html/gameplay/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Jul 2017 13:39:07 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home - GamePlay Sports HTML Theme</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- DL Menu CSS -->
    <link href="assets/js/dl-menu/component.css" rel="stylesheet">
    <!-- Slick Slider CSS -->
    <link href="assets/css/slick.css" rel="stylesheet"/>
    <link href="assets/css/slick-theme.css" rel="stylesheet"/>
    <!-- ICONS CSS -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <link href="assets/css/svg-icons.css" rel="stylesheet">
    <!-- Pretty Photo CSS -->
    <link href="assets/css/prettyPhoto.css" rel="stylesheet">
    <!-- Typography CSS -->
    <link href="assets/css/typography.css" rel="stylesheet">
    <!-- Widget CSS -->
    <link href="assets/css/widget.css" rel="stylesheet">
    <!-- Shortcodes CSS -->
    <link href="assets/css/shortcodes.css" rel="stylesheet">
    <!-- Custom Main StyleSheet CSS -->
    <link href="assets/style.css" rel="stylesheet">
    <!-- Color CSS -->
    <link href="assets/css/color.css" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="assets/css/responsive.css" rel="stylesheet">
 
 <style type="text/css">
     
 </style>
  </head>

  <body>

  PLAYER FORM FOR EACH GAME

    <?php echo form_open('main/player_form_123558484'); ?>

    game_id : <?php echo form_input('game_id'); ?><br>
    player_id : <?php echo form_input('player_id'); ?><br>
    innings (1 if the players team batted first and 2 if the players team batted second) : <?php 
           $options = array(
                    '1'         => '1',
                    '2'           => '2'
            );
            echo form_dropdown('innings', $options, '1');
    ?><br>
    runs : <?php echo form_input('runs'); ?><br>
    balls_faced (ENTER -1 IF NOT BAT ) : <?php echo form_input('balls_faced'); ?><br>
    fours : <?php echo form_input('fours'); ?><br>
    sixes : <?php echo form_input('sixes'); ?><br>
    bowler : <?php echo form_input('bowler'); ?><br>
    fielder : <?php echo form_input('fielder'); ?><br>
    balls (ENTER -1 IF NOT BOWLED ): <?php echo form_input('balls'); ?><br>
    maiden : <?php echo form_input('maiden'); ?><br>
    wickets : <?php echo form_input('wickets'); ?><br>
    dot_balls : <?php echo form_input('dot_balls'); ?><br>
    runs_received : <?php echo form_input('runs_received'); ?><br>



    <?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
    <?php echo form_close(); ?>


    <a href='<?php echo site_url('main/admin') ?>'>admin</a><br>
    <a href='<?php echo site_url('main/match_form_123558484') ?>'>match form</a><br>

    <a href='<?php echo site_url('main/log_out') ?>'>Log Out</a>





      <!--Jquery Library-->
    <script src="assets/js/jquery.js"></script>
    <!--Bootstrap core JavaScript-->
    <script src="assets/js/bootstrap.js"></script>
    <!--Slick Slider JavaScript-->
    <script src="assets/js/slick.min.js"></script>
    <!--Number Count (Waypoints) JavaScript-->
    <script src="assets/js/downCount.js"></script>
    <script src="assets/js/waypoints-min.js"></script>
    <!--Dl Menu Script-->
    <script src="assets/js/dl-menu/modernizr.custom.js"></script>
    <script src="assets/js/dl-menu/jquery.dlmenu.js"></script>
    <!--Progress bar JavaScript-->
    <script src="assets/js/jprogress.js" type="text/javascript"></script>
    <!--Pretty Photo JavaScript-->
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <!--Custom JavaScript-->
    <script src="assets/js/custom.js"></script>

  </body>

<!-- Mirrored from kodeforest.net/html/gameplay/latest-result.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Jul 2017 13:43:21 GMT -->
</html>
