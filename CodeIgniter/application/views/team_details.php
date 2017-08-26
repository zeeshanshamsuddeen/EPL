<!DOCTYPE html>
<html lang="en">
<base href="<?php echo base_url();?>" />


<!-- Mirrored from kodeforest.net/html/gameplay/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Jul 2017 13:39:07 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>EPL 2k17</title>
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

<!--kode Wrapper Start-->  
<div class="kode_wrapper"> 
    <!--Header 2 Wrap Start-->
    <header class="kode_header_2">
        <!--Header 2 Top Bar Start-->
        <div class="kf_top_bar">
            <div class="container">
               
                <div class="kf_right_dec">
                  
                    <ul class="kf_user">
                        <li><a href="<?php echo site_url('main/about_us') ?>">About Us</a></li>
                        <li><a href="<?php echo site_url('main/contact') ?>">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--Header 2 Top Bar End-->
        <div class="container">
            <!--Logo Bar Start-->
            <div class="kode_logo_bar">
                <!--Logo Start-->
                <div class="logo">
                    <a href="<?php echo site_url('main/index') ?>">
                        <img src="assets/images/logo.png" alt="">
                    </a>
                </div>
                <!--Logo Start-->
                <!--Navigation Wrap Start-->
                <div class="kode_navigation">
                    <!--Navigation Start-->
                    <ul class="nav">
                        <li><a href="<?php echo site_url('main/index') ?>">home</a></li>
                        <li><a href="<?php echo site_url('main/latest_result') ?>">results</a></li>
                        <li><a href="<?php echo site_url('main/fixtures') ?>">fixtures</a></li>
                        <li><a href="<?php echo site_url('main/auction') ?>">auction</a></li>
                        <li><a href="<?php echo site_url('main/gallery') ?>">gallery</a></li>

                        <li>
                            <a href="#" style=" pointer-events: none;cursor: default;">team</a>
                            <ul>
                                <li><a href="<?php echo site_url('main/team_details/1') ?>">KOMBAN CS</a></li>
                                <li><a href="<?php echo site_url('main/team_details/2') ?>">ITTI KANDAM BROTHERS</a></li>
                                <li><a href="<?php echo site_url('main/team_details/3') ?>">EC CHEKUTHANZ</a></li>
                                <li><a href="<?php echo site_url('main/team_details/4') ?>">MINNAL EEE</a></li>
                                <li><a href="<?php echo site_url('main/team_details/5') ?>">MECH HARAMI</a></li>
                                <li><a href="<?php echo site_url('main/team_details/6') ?>">CIVIL VAMBANS</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!--DL Menu Start-->
                    <div id="kode-responsive-navigation" class="dl-menuwrapper">
                        <button class="dl-trigger">Open Menu</button>
                        <ul class="dl-menu">
                            <li><a href="<?php echo site_url('main/index') ?>">home</a></li>
                            <li class="menu-item kode-parent-menu"><a href="<?php echo site_url('main/latest_result') ?>">results</a></li>
                            <li class="menu-item kode-parent-menu"><a href="<?php echo site_url('main/fixtures') ?>">fixtures</a></li>
                            <li class="menu-item kode-parent-menu"><a href="<?php echo site_url('main/auction') ?>">auction</a></li>
                            <li class="menu-item kode-parent-menu"><a href="<?php echo site_url('main/gallery') ?>">gallery</a></li>                            
                            <li class="menu-item kode-parent-menu"><a href="#">team</a>
                                <ul class="dl-submenu">
                                    <li><a href="<?php echo site_url('main/team_details/1') ?>">KOMBAN CS</a></li>
                                    <li><a href="<?php echo site_url('main/team_details/2') ?>">ITTI KANDAM BROTHERS</a></li>
                                    <li><a href="<?php echo site_url('main/team_details/3') ?>">EC CHEKUTHANZ</a></li>
                                    <li><a href="<?php echo site_url('main/team_details/4') ?>">MINNAL EEE</a></li>
                                    <li><a href="<?php echo site_url('main/team_details/5') ?>">MECH HARAMI</a></li>
                                    <li><a href="<?php echo site_url('main/team_details/6') ?>">CIVIL VAMBANS</a></li>
                                </ul>
                            </li>
                                              
                        </ul>
                    </div>
                    <!--DL Menu END-->


                    <!--Navigation End-->
                    <a href="<?php echo site_url('main/about_us') ?>" class="kf_cart">
                        <i class="fa fa-laptop"></i>
                        <div class="text">
                            <span>Designed By</span>
                            <em>CSE</em>
                        </div>
                    </a>
                </div>
                <!--Navigation Wrap End-->
            </div>
            <!--Logo Bar End-->
        </div>
    </header>
    <!--Header 2 Wrap End-->






    <!--Inner Banner Start-->
    <div class="innner_banner">
        <div class="container">
            <h3><?php echo $team_details_one_row['NAME'] ?></h3>
            <ul class="breadcrumb">
                <li><a href="<?php echo site_url('main/index') ?>">Home</a></li>
                <li><a href="#" style=" pointer-events: none;cursor: default;">teams</a></li>
                <li class="active"><span style="color:white !important;"><?php echo $team_details_one_row['NAME'] ?></span></li>
            </ul>
        </div>
    </div>
    <!--Inner Banner End-->
    <div class="kode_content_wrap">
        <section class="roster_page">
            <div class="container">
                <!--Roster Wrap Start-->
                <div class="kf_roster_wrap">
                    <div class="row">
                        <div class="roster">
                            <?php foreach($player_details as $player) { ?>
                            <div>
                                <!--Roster Dec Start-->
                                <div class="kf_roster_dec">
                                    <figure>
                                        <img src="<?php echo base_url($player->FILENAME) ?>" height=383 width=270 alt="">
                                    </figure>
                                    <div class="text">
                                           
                                        <div class="text_overflow">
                                            <h3><a href="<?php echo site_url('main/player_detail/').$player->ID ?>">
                                                <span><?php echo $player->NAME." (".$player->BRANCH.")"; ?></span>
                                            </a></h3>
                                            
                                        </div>
                                    </div>
                                </div>
                                <!--Roster Dec End-->
                            </div>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="roster_sidebar">
                                <!--Heading 1 Start-->
                                <h6 class="kf_hd1 margin_0">
                                    <span><?php echo $team_details_one_row['NAME'] ?></span>
                                </h6>
                                <!--Heading 1 End-->
                                <!--Roster Dec Start-->
                                <div class="kf_roster_dec">
                                        <img src="<?php echo base_url($team_details_one_row['FILENAME']) ?>" width=500 alt="">
                                    
                                </div>
                                <!--Roster Dec End-->
                                <div class="kf_plyer_rating">
                                    <span >
                                        <strong >WON</strong>
                                        <b style="color: #3167E6 !important;"><?php echo $team_details_one_row['WON'] ?></b>
                                    </span>
                                    <span>
                                        <strong>LOSS</strong>
                                        <b style="color: #3167E6 !important;"><?php echo $team_details_one_row['LOSS'] ?></b>
                                    </span>
                                    <span>
                                        <strong>POINTS</strong>
                                        <b style="color: #3167E6 !important;"><?php echo $team_details_one_row['POINTS'] ?></b>
                                    </span>
                                </div>
                            </div>
                        </div>





                        <div class="col-md-8">
                            <!--Overview Contant Start-->
                            <div class="kf_overview_contant">
                                <!--Heading 1 Start-->
                                <h6 class="kf_hd1 margin_0">
                                    <span>Team Details</span>
                                </h6>
                                <!--Heading 1 End-->
                                <!--Table 2 Start-->
                                <ul class="kf_table2">

                                <li class="table_head">
                                        <div class="tb2_name">
                                            <span style="font-weight: 300 !important;">Team ID</span>
                                        </div>
                                        <div class="tb2_position"><span ><?php echo $team_details_one_row['TEAM_ID'] ?></span></div>
                                        <div class="tb2_age"> </div>
                                        <div class="tb2_height "></div>
                                        <div class="tb2_weight"><span></span></div>
                                        <div class="tb2_collage"><span></span> </div>
                                </li>
                                <li class="table_head">
                                        <div class="tb2_name">
                                            <span style="font-weight: 300 !important;">franchise fee</span>
                                        </div>
                                        <div class="tb2_position"><span ><?php echo 12000 - $team_details_one_row['VALUE'] ?> points</span></div>
                                        <div class="tb2_age"> </div>
                                        <div class="tb2_height "></div>
                                        <div class="tb2_weight"><span></span></div>
                                        <div class="tb2_collage"><span></span> </div>
                                </li>
                                <li class="table_head">
                                        <div class="tb2_name">
                                            <span style="font-weight: 300 !important;">managers</span>
                                        </div>
                                        <div class="tb2_position"><span ><?php echo $team_details_one_row['MANAGERS'] ?></span></div>
                                        <div class="tb2_age"> </div>
                                        <div class="tb2_height "></div>
                                        <div class="tb2_weight"><span></span></div>
                                        <div class="tb2_collage"><span></span> </div>
                                </li>
                                <li class="table_head">
                                        <div class="tb2_name">
                                            <span style="font-weight: 300 !important;">total runs scored</span>
                                        </div>
                                        <div class="tb2_position"><span ><?php
                                                                            $runs=0;
                                                                                foreach ($games_players as $games) {
                                                                                    if($games->TEAM == $team_details_one_row['NAME']){
                                                                                        $runs = $runs + $games->runs;
                                                                                    }
                                                                                }
                                                                            foreach($matches as $match){
                                                                                if($match->play_team_1 == $team_details_one_row['NAME'] || $match->play_team_2 == $team_details_one_row['NAME']){
                                                                                    if($match->toss_win == $team_details_one_row['NAME']){
                                                                                        if($match->toss_choose == 'bat'){
                                                                                            $runs = $runs + $match->extras_first_bat;
                                                                                        }
                                                                                    }    
                                                                                    if($match->toss_win != $team_details_one_row['NAME']){
                                                                                        if($match->toss_choose == 'bowl'){
                                                                                            $runs = $runs + $match->extras_first_bat;
                                                                                        }
                                                                                    }  
                                                                                    if($match->toss_win == $team_details_one_row['NAME']){
                                                                                        if($match->toss_choose == 'bowl'){
                                                                                            $runs = $runs + $match->extras_second_bat;
                                                                                        }
                                                                                    }    
                                                                                    if($match->toss_win != $team_details_one_row['NAME']){
                                                                                        if($match->toss_choose == 'bat'){
                                                                                            $runs = $runs + $match->extras_second_bat;
                                                                                        }
                                                                                    }    
                                                                                      
                                                                                    
                                                                                    
                                                                                }
                                                                              
                                                                            }    
                                                                            echo $runs;     
                                                                         ?></span></div>
                                        <div class="tb2_age"> </div>
                                        <div class="tb2_height "></div>
                                        <div class="tb2_weight"><span></span></div>
                                        <div class="tb2_collage"><span></span> </div>
                                </li>
                                <li class="table_head">
                                        <div class="tb2_name">
                                            <span style="font-weight: 300 !important;">top scorer</span>
                                        </div>
                                        <div class="tb2_position"><span ><?php
                                                                            $top_runs=0;
                                                                            $top_name = "";
                                                                            foreach ($player_details as $player) {
                                                                                $runs=0;
                                                                                foreach ($games_players as $games) {
                                                                                    if($games->player_id == $player->ID){
                                                                                        $runs = $runs + $games->runs;
                                                                                }
                                                                                if($top_runs < $runs){
                                                                                    $top_runs = $runs;
                                                                                    $top_name = $player->NAME;
                                                                                }
                                                                            }
                                                                            
                                                                            }
                                                                            echo $top_name; 
                                                                            echo " (";
                                                                            echo $top_runs;
                                                                            echo ")";     
                                                                         ?></span></div>
                                        <div class="tb2_age"> </div>
                                        <div class="tb2_height "></div>
                                        <div class="tb2_weight"><span></span></div>
                                        <div class="tb2_collage"><span></span> </div>
                                </li>
                                <li class="table_head">
                                        <div class="tb2_name">
                                            <span style="font-weight: 300 !important;">total wickets taken</span>
                                        </div>
                                        <div class="tb2_position"><span ><?php
                                                                            $wickets=0;
                                                                                foreach ($games_players as $games) {
                                                                                    if($games->TEAM == $team_details_one_row['NAME']){
                                                                                        $wickets = $wickets + $games->wickets;
                                                                                    }
                                                                                }
                                                                            echo $wickets;     
                                                                         ?></span></div>
                                        <div class="tb2_age"> </div>
                                        <div class="tb2_height "></div>
                                        <div class="tb2_weight"><span></span></div>
                                        <div class="tb2_collage"><span></span> </div>
                                </li>
                                <li class="table_head">
                                        <div class="tb2_name">
                                            <span style="font-weight: 300 !important;">leading wicket taker</span>
                                        </div>
                                        <div class="tb2_position"><span ><?php
                                                                            $top_wickets=0;
                                                                            $top_name = "";
                                                                            foreach ($player_details as $player) {
                                                                                $wickets=0;
                                                                                foreach ($games_players as $games) {
                                                                                    if($games->player_id == $player->ID){
                                                                                        $wickets = $wickets + $games->wickets;
                                                                                }
                                                                                if($top_wickets < $wickets){
                                                                                    $top_wickets = $wickets;
                                                                                    $top_name = $player->NAME;
                                                                                }
                                                                            }
                                                                            
                                                                            }
                                                                            echo $top_name; 
                                                                            echo " (";
                                                                            echo $top_wickets;
                                                                            echo ")";     
                                                                         ?></span></div>
                                        <div class="tb2_age"> </div>
                                        <div class="tb2_height "></div>
                                        <div class="tb2_weight"><span></span></div>
                                        <div class="tb2_collage"><span></span> </div>
                                </li>
                                


                                </ul>
                                <!--Table 2 End-->
                            </div>
                            <!--Overview Contant End-->
                        </div>
                    </div> 
                </div>
                <!--Roster Wrap End-->
            </div>
        </section>
    </div>
    <!--Main Content Wrap End-->
   


   <!--ticker Wrap Start-->
    <div class="kf_ticker-wrap twitter_ticker">
        <div class="container">
            <div class="kf_ticker">
                <span><i class="fa fa-twitter"></i></span>
                <div class="kf_ticker_slider">
                    <ul class="ticker">
                        <li><p style="color:white !important;font-size: 17px !important;text-align: center !important;">
                            KEEP CALM AND PLAY CRICKET
                        </p></li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--ticker Wrap End-->
  
    <!--Copy Right Wrap Start-->
    <div class="copy_right3">
        <div class="container">
            <p>2017 @ College of Engineering, Designed by CSE</p>
            <ul class="kf_social3">
                <li><a href=https://www.facebook.com/EPL2k17/><i class="fa fa-facebook"></i></a></li>

            </ul>
        </div>
    </div>
    <!--Copy Right Wrap End-->
    <!--Register Pop Up Wrap Start-->
    <div class="modal fade" id="search" tabindex="-1" role="dialog" aria-labelledby="search">
        <div class="modal-dialog" role="document">
            <div class="input_dec">
                <input type="text" placeholder="search......">
                <button class="btn_icon"><i class="fa fa-search"></i></button>
            </div>
        </div>
    </div>        
    <!--Register Pop Up Wrap End-->
</div>
<!--kode Wrapper End-->


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

<!-- Mirrored from kodeforest.net/html/gameplay/team-roster.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Jul 2017 13:44:04 GMT -->
</html>
