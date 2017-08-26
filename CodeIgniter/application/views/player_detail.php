
<!DOCTYPE html>
<html lang="en">
  <base href="<?php echo base_url();?>" />
<!-- Mirrored from kodeforest.net/html/gameplay/player-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Jul 2017 13:44:41 GMT -->

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
 
  </head>

  <body>
  <?php
  $player_photo = $mer2->FILENAME;
  $runs=0;
$fours=0;
$sixes=0;
$match=0;
$ballfac=0;
$brun=NULL;
$brun_ball=NULL;
$fifty=0;
$thirty=0;
$wicket=0;
$runsrec=0;
$ovrball=0;
$ovr=0;
$sr=0;
$dot=0;
$duck=0;
$hat=0;
$bestbowl=array(0,1,2);
$bestbowl[0]=0;
$bestbowl[1]=0;
$bestbowl[2]=0;


foreach ($rows as $r)
{ 
    $match++; 
    if($brun<$r->runs){
        $brun=$r->runs;
        $brun_ball=$r->balls_faced;
    }
    if($r->runs>=50){
        $fifty++;
    }
    if($r->runs ==0){
        $duck++;
    }
    if($r->wickets >=3){    
        $hat++;
    }
    if($r->runs<50&&$r->runs>=30){  
        $thirty++;
    }
    if($r->runs != NULL){$runs+=$r->runs; }
    if($r->fours != NULL){$fours+=$r->fours; }
    if($r->sixes != NULL){$sixes+=$r->sixes; }
    if($r->balls_faced > 0){ $ballfac+=$r->balls_faced; }
    if($r->wickets != NULL){ $wicket+=$r->wickets; }
    if($r->runs_received != NULL){$runsrec+=$r->runs_received; }
    if($r->balls > 0){ $ovrball+=$r->balls; }
    if($r->dot_balls != NULL){ $dot=$r->dot_balls; }
    if($r->wickets>$bestbowl[0]){
        $bestbowl[0]=$r->wickets;
        $bestbowl[1]=$r->runs_received;
        $bestbowl[2]=floor($r->balls/6)+(($r->balls%6)*0.1);
    }

}

#$ovr=round($ovrball/6)+($ovrball%6)/10;
$ovr=floor($ovrball/6)+(($ovrball%6)*0.1);


 

if($ballfac!=0)
{
$sr=round($runs/$ballfac,2);
}
?>

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
            <h3>player detail</h3>
            
        </div>
    </div>
    <!--Inner Banner End-->
    <div class="kode_content_wrap">
        <section class="blog_detail_wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                       
                            <!--Featured 2 Slider Start-->
                            
                                    <div class="text_wrper">
                                        <!--thumb Footer Start-->
                                      
                                        <!--thumb Footer End-->
                                        <div class="text_2">
                                            <span class="label2">EPL 2017</span>
                                            <h6><img src="<?php echo base_url('assets/extra-images/jersi.jpg')?>" width=20>
                                            <?php echo $mer2->JERSEY;?> &nbsp; &nbsp;
                                            <?php echo $mer2->NAME;?> </h6>
                                            <em class="kf_date"></em>
                                            <p>
                                            </p>     
                                            <!--Game Highlights thumb Start-->
                                            <div class="kf_highlight">
                                               
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div class="thumb">
                                                           <img src="<?php echo base_url($player_photo);?>" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7">
                                                        <div class="text">
                                                            
                                                            <ul class="list_meta">
                                                                <li><em><strong><?php echo $mer2->NAME;?></strong></em></li>
                                                                <li><em><strong><?php echo $mer2->BRANCH;echo " department"?></strong></em></li>
                                                                <li><em><strong>TEAM : <?php echo $mer2->TEAM;?></strong></em></li>
                                                                <li><em><strong>TRANSFER FEE : <?php echo $mer2->PRICE;?></strong></em></li>
                                                                <li><em><strong><?php echo $mer2->PLAYING_STYLE;?></strong></em></li>
                                                                <li><em><strong><?php echo $mer2->BATTING_STYLE;?></strong></em></li>
                                                                <li><em><strong><?php echo $mer2->BOWLING_STYLE;?></strong></em></li>
                                                     
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>    
                                            <!--Game Highlights thumb End-->
                                            <!--Blockquote Start-->
                                            
                                            <!--Blockquote End--> 
                                         //<div class="kf_plyer_rating2">
                                                <div class="kf_plyer_rating">
                                                    <span>
                                                        <strong>matches</strong>
                                                         <b><?php echo $match;?></b>
                                                    </span>
                                                    <span>
                                                        <strong>runs</strong>
                                                        <b><?php echo $runs;?></b>
                                                    </span>
                                                    <span>
                                                        <strong>wickets</strong>
                                                        <b><?php echo $wicket;?></b>
                                                    </span>
                                                </div>

                                                <ul class="kf_table2 kf_tableaside">
                                               
                                                    <li>
                                                        <div>
                                                            <span>
                                                               <strong>6s</strong>
                                                               <em><?php echo $sixes; ?></em>
                                                            </span>
                                                        </div>
                                                        <div>
                                                           <span>
                                                               <strong>4s</strong>
                                                               <em><?php echo $fours; ?></em>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span>
                                                               <strong>s.r</strong>
                                                               <em><?php echo $sr; ?></em>
                                                            </span>
                                                        </div>
                                                        <div>
                                                           <span>
                                                               <strong>ballsfaced</strong>
                                                               <em><?php echo $ballfac ;?></em>
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div>
                                                            <span>
                                                               
                                                                <strong>30s</strong>
                                                               <em><?php echo $thirty;?></em>
                                                            </span>
                                                        </div>
                                                        <div>
                                                           <span>
                                                               <strong>50s</strong>
                                                               <em><?php echo $fifty;?></em>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span>
                                                               <strong>duck</strong>
                                                               <em><?php echo $duck;?></em>
                                                            </span>
                                                        </div>
                                                        <div>
                                                           
                                                        </div>
                                                        
                                                    </li>
                                                    <li>
                                                        <div>
                                                            <span>
                                                               
                                                               <strong>dotballs</strong>
                                                               <em><?php echo $dot;?></em>
                                                            </span>
                                                        </div>
                                                        <div>
                                                           <span>
                                                               <strong>runs</strong>
                                                               <em><?php echo $runsrec;?></em>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span>
                                                               <strong>economy</strong>
                                                               <?php if($ovr!=0)
                                                               {?>
                                                               <em><?php echo round($runsrec/$ovr,2);?></em>
                                                             <?php  }?>
                                                            </span>
                                                        </div>
                                                        <div>
                                                           <span>
                                                               <strong>overs</strong>
                                                               <em><?php echo $ovr;?></em>
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div>
                                                            <span>
                                                               <strong>best</strong>
                                                               <em>batting</em>
                                                            </span>
                                                        </div>
                                                        <div>
                                                           <span>

                                                               <strong><?php echo $brun;?></strong>
                                                               <?php if($brun_ball!=0)
                                                               {?>
                                                               <em><?php echo "(".$brun_ball.")";?></em>
                                                               <?php } ?>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span>
                                                               <strong>best</strong>
                                                               <em>bowling</em>
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span>
                                                               <?php if($bestbowl[2]!=0)
                                                               {?>
                                                               <strong><?php echo $bestbowl[0]."-".$bestbowl[1]."-".$bestbowl[2];?></strong>
                                                               <em></em>
                                                               <?php } ?>
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                                
                                            </div>
                                        </div> 
                                        <!--Tags Start--> 
                                        
                                        <!--Tags End--> 
                                    </div>
                            
                            
                            <!--Featured 2 Slider End-->
                         
                            <!--Comment Wrap Start-->
                           
                            <!--Comment Wrap End-->
                            <!--Comment Input Form Wrap Start-->
                           
                            <!--Comment Input Form Wrap End-->
                        
                    </div>
                    <aside class="col-md-4">
                        <!--Widget Slider Start-->
                       
                        <!--Widget Slider End-->
                        <!--Widget Ranking Start-->
                        
                        <!--Widget Next Match Start-->
                        <div class="widget widget_nextmatch">
                            <!--Heading 1 Start-->
                            <h6 class="kf_hd1">
                                <span>Next Match</span>
                            </h6>
                            <!--Heading 1 END-->
                                     <div class="kf_border">
                                <!--Widget Next Match Dec Start-->
                                <div class="nextmatch_dec">
                                    <h6><?php echo $next_match['round'] ?></h6>
                                    <span><?php echo date("d F, Y", strtotime($next_match['date'])) ?></span>
                                    <div class="match_teams">
                                        <div class="pull-left">
                                            <a href="<?php foreach ($team_details as $team) 
                                                 {if($next_match['play_team_1'] == $team->NAME) 
                                                 { echo site_url('main/team_details/').$team->TEAM_ID;  }} ?>">
                                            <img src="<?php foreach ($team_details as $team) 
                                                 {if($next_match['play_team_1'] == $team->NAME) { echo $team->FILENAME;  }} ?>"
                                            height=100 width=100 alt=""></a>
                                        </div>
                                        <span>vs</span>
                                        <div class="pull-right">
                                            <a href="<?php foreach ($team_details as $team) 
                                                 {if($next_match['play_team_2'] == $team->NAME)
                                                 { echo site_url('main/team_details/').$team->TEAM_ID;  }} ?>">
                                                 <img src="<?php foreach ($team_details as $team) 
                                                 {if($next_match['play_team_2'] == $team->NAME) { echo $team->FILENAME;  }} ?>"
                                            height=100 width=100 alt=""></a>
                                        </div>
                                    </div>
                                    <h5>Starting in</h5>
                                    <!--Widget COUNT Down Start-->
                                      <p id="demo" style="font-size: 25px;color:balck;font-weight: 900;"></p>
                                    <!--Widget COUNT Down End-->
                                </div>
                                <!--Widget Next Match Dec End-->
                            </div>                        </div>
                        <!--Widget Next Match End-->
                        <!--Widget NewsLatter Start-->
                     
                        <!--Widget NewsLatter End-->
                        <!--Widget poll Start-->
               
                        <!--Widget poll End-->
                        
                        <!--Widget Add 2 Strat-->
                        
                        <!--Widget Add 2 End-->
                    </aside>
                </div>
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
    <!-- <script src="assets/js/downCount.js"></script> -->
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

  <script>
        // Set the date we're counting down to
        // USE this to change ETA
        var countDownDate = new Date("July 29, 2017 20:25:15").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

        // Get todays date and time
        var now = new Date().getTime();

        // Find the distance between now an the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("demo").innerHTML = days + "d " + hours + "h "
        + minutes + "m " + seconds + "s ";

        // If the count down is over, write some text 
        if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "GAME STARTED";
        }
        }, 1000);
</script>


<!-- Mirrored from kodeforest.net/html/gameplay/player-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Jul 2017 13:44:41 GMT -->
</html>
