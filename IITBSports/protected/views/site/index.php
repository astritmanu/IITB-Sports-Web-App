<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
date_default_timezone_set("America/New_York");
$date=date('M',2);
?>

<!-- FB plugin --> 
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jssor.fullwidth.js"></script>

<header id="head" class="secondary"></header>

<!-- Header -->
    <!-- Jssor Slider Begin -->
    <!-- To move inline styles to css file/block, please specify a class name for each element. --> 
    <div id="slider1_container" style="position: relative; margin: 0 auto;
        top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
                top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
            <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
        </div>
        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1300px;
            height: 500px; overflow: hidden;">

            <!-- Try to make this work, to remove repeated code

            <div> 

             <?php //for ($x = 0; $x < 12; $x++) { ?>
                <img u="image" src="images/coverpics/<?php// echo $sport[$x] ?>.jpg" />
                <div style="position: absolute; width: 480px; height: 120px; top: 30px; left: 30px; padding: 5px;
                    text-align: left; line-height: 60px; text-transform: uppercase; font-size: 50px;
                        color: #FFFFFF;">IIT Bombay Sports
                </div>
                <div style="position: absolute; width: 480px; height: 120px; top: 300px; left: 30px; padding: 5px;
                    text-align: left; line-height: 36px; font-size: 30px;
                        color: #FFFFFF;">
					<!- Text Here if required ->
                </div>
                <?php //} ?>
            </div>         -->
            <div>
                <img u="image" src="images/coverpics/Athletics.jpg" />
                <div style="position: absolute; width: 480px; height: 120px; top: 30px; left: 30px; padding: 5px;
                    text-align: left; line-height: 60px; text-transform: uppercase; font-size: 50px;
                        color: #FFFFFF;">IIT Bombay Sports
                </div>
                <div style="position: absolute; width: 480px; height: 120px; top: 300px; left: 30px; padding: 5px;
                    text-align: left; line-height: 36px; font-size: 30px;
                        color: #FFFFFF;">
					<!-- Text Here if required-->
                </div>
            </div>
            <div>
                <img u="image" src="images/coverpics/Badminton.jpg" />
                <div style="position: absolute; width: 480px; height: 120px; top: 30px; left: 30px; padding: 5px;
                    text-align: left; line-height: 60px; text-transform: uppercase; font-size: 50px;
                        color: #FFFFFF;">IIT Bombay Sports
                </div>
                <div style="position: absolute; width: 480px; height: 120px; top: 300px; left: 30px; padding: 5px;
                    text-align: left; line-height: 36px; font-size: 30px;
                        color: #FFFFFF;">
					<!-- Text Here if required-->
                </div>
            </div>
            
            <div>
                <img u="image" src="images/coverpics/Basketball.jpg" />
                <div style="position: absolute; width: 480px; height: 120px; top: 30px; left: 30px; padding: 5px;
                    text-align: left; line-height: 60px; text-transform: uppercase; font-size: 50px;
                        color: #FFFFFF;">IIT Bombay Sports
                </div>
                <div style="position: absolute; width: 480px; height: 120px; top: 300px; left: 30px; padding: 5px;
                    text-align: left; line-height: 36px; font-size: 30px;
                        color: #FFFFFF;">
					<!-- Text Here if required-->
                </div>
            </div>
             <div>
                <img u="image" src="images/coverpics/Cricket.jpg" />
                <div style="position: absolute; width: 480px; height: 120px; top: 30px; left: 30px; padding: 5px;
                    text-align: left; line-height: 60px; text-transform: uppercase; font-size: 50px;
                        color: #FFFFFF;">IIT Bombay Sports
                </div>
                <div style="position: absolute; width: 480px; height: 120px; top: 300px; left: 30px; padding: 5px;
                    text-align: left; line-height: 36px; font-size: 30px;
                        color: #FFFFFF;">
					<!-- Text Here if required-->
                </div>
            </div>
             <div>
                <img u="image" src="images/coverpics/Weightlifting.jpg" />
                <div style="position: absolute; width: 480px; height: 120px; top: 30px; left: 30px; padding: 5px;
                    text-align: left; line-height: 60px; text-transform: uppercase; font-size: 50px;
                        color: #FFFFFF;">IIT Bombay Sports
                </div>
                <div style="position: absolute; width: 480px; height: 120px; top: 300px; left: 30px; padding: 5px;
                    text-align: left; line-height: 36px; font-size: 30px;
                        color: #FFFFFF;">
					<!-- Text Here if required-->
                </div>
            </div>
             <div>
                <img u="image" src="images/coverpics/Football.jpg" />
                <div style="position: absolute; width: 480px; height: 120px; top: 30px; left: 30px; padding: 5px;
                    text-align: left; line-height: 60px; text-transform: uppercase; font-size: 50px;
                        color: #FFFFFF;">IIT Bombay Sports
                </div>
                <div style="position: absolute; width: 480px; height: 120px; top: 300px; left: 30px; padding: 5px;
                    text-align: left; line-height: 36px; font-size: 30px;
                        color: #FFFFFF;">
					<!-- Text Here if required-->
                </div>
            </div>
             <div>
                <img u="image" src="images/coverpics/Hockey.jpg" />
                <div style="position: absolute; width: 480px; height: 120px; top: 30px; left: 30px; padding: 5px;
                    text-align: left; line-height: 60px; text-transform: uppercase; font-size: 50px;
                        color: #FFFFFF;">IIT Bombay Sports
                </div>
                <div style="position: absolute; width: 480px; height: 120px; top: 300px; left: 30px; padding: 5px;
                    text-align: left; line-height: 36px; font-size: 30px;
                        color: #FFFFFF;">
					<!-- Text Here if required-->
                </div>
            </div>
             <div>
                <img u="image" src="images/coverpics/Squash.jpg" />
                <div style="position: absolute; width: 480px; height: 120px; top: 30px; left: 30px; padding: 5px;
                    text-align: left; line-height: 60px; text-transform: uppercase; font-size: 50px;
                        color: #FFFFFF;">IIT Bombay Sports
                </div>
                <div style="position: absolute; width: 480px; height: 120px; top: 300px; left: 30px; padding: 5px;
                    text-align: left; line-height: 36px; font-size: 30px;
                        color: #FFFFFF;">
					<!-- Text Here if required-->
                </div>
            </div>
             <div>
                <img u="image" src="images/coverpics/Aquatics.jpg" />
                <div style="position: absolute; width: 480px; height: 120px; top: 30px; left: 30px; padding: 5px;
                    text-align: left; line-height: 60px; text-transform: uppercase; font-size: 50px;
                        color: #FFFFFF;">IIT Bombay Sports
                </div>
                <div style="position: absolute; width: 480px; height: 120px; top: 300px; left: 30px; padding: 5px;
                    text-align: left; line-height: 36px; font-size: 30px;
                        color: #FFFFFF;">
					<!-- Text Here if required-->
                </div>
            </div>
             <div>
                <img u="image" src="images/coverpics/Lawn Tennis.jpg" />
                <div style="position: absolute; width: 480px; height: 120px; top: 30px; left: 30px; padding: 5px;
                    text-align: left; line-height: 60px; text-transform: uppercase; font-size: 50px;
                        color: #FFFFFF;">IIT Bombay Sports
                </div>
                <div style="position: absolute; width: 480px; height: 120px; top: 300px; left: 30px; padding: 5px;
                    text-align: left; line-height: 36px; font-size: 30px;
                        color: #FFFFFF;">
					<!-- Text Here if required-->
                </div>
            </div>
             <div>
                <img u="image" src="images/coverpics/Table Tennis.jpg" />
                <div style="position: absolute; width: 480px; height: 120px; top: 30px; left: 30px; padding: 5px;
                    text-align: left; line-height: 60px; text-transform: uppercase; font-size: 50px;
                        color: #FFFFFF;">IIT Bombay Sports
                </div>
                <div style="position: absolute; width: 480px; height: 120px; top: 300px; left: 30px; padding: 5px;
                    text-align: left; line-height: 36px; font-size: 30px;
                        color: #FFFFFF;">
					<!-- Text Here if required-->
                </div>
            </div>
             <div>
                <img u="image" src="images/coverpics/Volleyball.jpg" />
                <div style="position: absolute; width: 480px; height: 120px; top: 30px; left: 30px; padding: 5px;
                    text-align: left; line-height: 60px; text-transform: uppercase; font-size: 50px;
                        color: #FFFFFF;">IIT Bombay Sports
                </div>
                <div style="position: absolute; width: 480px; height: 120px; top: 300px; left: 30px; padding: 5px;
                    text-align: left; line-height: 36px; font-size: 30px;
                        color: #FFFFFF;">
					<!-- Text Here if required-->
                </div>
            </div>
        </div>
                

        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb21" style="bottom: 26px; right: 6px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype"></div>
        </div>
      
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora21l" style="top: 123px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora21r" style="top: 123px; right: 8px;">
        </span>
        <!--#endregion Arrow Navigator Skin End -->
        <a style="display: none" href="https://www.jssor.com">Image Slider</a>
    </div>
	<!-- /Header -->


<div class="container">
<div class="row">

<!-- Intro -->
<article class="col-md-8 maincontent" style="overflow:hidden">
        
    <!-- Highlights - jumbotron -->

            
            <h2 class="text-center top-space"><a href="index.php?r=events/calendar" 
            style="color:inherit">Upcoming Events </a>&nbsp&nbsp<a href="https://feeds.feedburner.com/IITBSportsUpcomingEvents" target="_blank" style="color:inherit"><i class="fa fa-rss"></i></a></h2> 
            <div class="row">
            <?php foreach($event as $item) {  $dateOnly = date("d", strtotime($item['date']));?>
                <div class="col-md-3 col-sm-6 highlight">
                    <div class="h-caption"><span class="fa-stack fa-3x"><i class="fa fa-calendar-o fa-stack-2x"></i>
                    <strong class="fa-stack-1x calendar-text"><?php echo $dateOnly; ?></strong></span><h4><?php echo $item['title']; ?></h4></div>
                        <p><center><?php echo "Time: ". $item['time']; ?><br>
                            <?php echo "Venue: ". $item['venue']; ?></center>
                            <?php echo $item['descr']; ?></p>
                </div>
            <?php  } ?>

               <!-- <div class="col-md-3 col-sm-6 highlight">
                    <div class="h-caption"><span class="fa-stack fa-3x"><i class="fa fa-calendar-o fa-stack-2x"></i>
                    <strong class="fa-stack-1x calendar-text">18</strong></span><h4>Swimming GC (Girls)</h4></div>
                    <div class="h-body text-center">
                        <p></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 highlight">
                    <div class="h-caption"><span class="fa-stack fa-3x"><i class="fa fa-calendar-o fa-stack-2x"></i>
                    <strong class="fa-stack-1x calendar-text">19</strong></span><h4>Swimming GC (Boys)</h4></div>
                    <div class="h-body text-center">
                        <p></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 highlight">
                    <div class="h-caption"><span class="fa-stack fa-3x"><i class="fa fa-calendar-o fa-stack-2x"></i>
                    <strong class="fa-stack-1x calendar-text">24</strong></span><h4>PG Crossy GC</h4></div>
                    <div class="h-body text-center">
                        <p></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 highlight">
                    <div class="h-caption"><span class="fa-stack fa-3x"><i class="fa fa-calendar-o fa-stack-2x"></i>
                    <strong class="fa-stack-1x calendar-text">26</strong></span><h4>Freshie Crossy</h4></div>
                    <div class="h-body text-center">
                        <p></p>
                    </div>
                </div>-->
                 <!-- /row  -->
        
        </div>


		<h2 class="text-center top-space"><a href="index.php?r=about/news" style="color:inherit">Latest News</a> &nbsp&nbsp<a href="https://feeds.feedburner.com/IITBSportsLatestNews" target="_blank" style="color:inherit"><i class="fa fa-rss"></i></a></h2>
		<br>
        <div class="row" >
            <?php $count=0; foreach($news as $item) { $count++; if($count%2!=0){?> </div> <div class="row" > <?php } ?> 
            <div class="col-sm-6" style="height:150px; overflow:hidden">
                  <a href="index.php?r=about/shownews&id=<?php echo $item['id']; ?>" style="color:inherit"><?php echo "<h3>".$item['title']."</h3>"; ?> </a>
                  <?php echo "<p>".$item['msg'].'</p>'; ?>
            </div>
            <?php } ?>
		</div> <!-- /row -->
	<!-- /Intro-->

	<!-- /Highlights -->

	<!-- container -->

			<div class="row top-space">
					<div class="col-sm-4 highlight">
						<div class="h-caption">
						<a href="index.php?r=archive/gallery" style="color:inherit">	<img src="images/gallery.png" style="width:45%">
						<p style="font-size:20px; ">Gallery</p></a>
						</div>
					</div>
					<div class="col-sm-4 highlight">
						<div class="h-caption">
						<a href="index.php?r=archive/halloffame" style="color:inherit"> <img src="images/trophy.jpg" style="width:40%">
						<p style="font-size:20px;">Hall of Fame</p></a>
						</div>
					</div>	
					<div class="col-sm-4 highlight">
						<div class="h-caption">
						<a href="index.php?r=profile&letter=A" style="color:inherit"><img src="images/profile.png" style="width:45%">
						<p style="font-size:20px;">Player Profiles</p></a>
						</div>
					</div>
				</div>
	<!-- /container -->
</article>

<!-- Sidebar -->
            <aside class="col-md-4 sidebar sidebar-right">
                <div class="row widget">
                    <div class="col-xs-12">
                        <h2 class="text-center top-space">Facebook</h2>
                            <div class="fb-page" data-width="80%" data-height="400" data-href="https://www.facebook.com/iitbsports?fref=ts"
                                data-hide-cover="true" data-show-facepile="false" data-show-posts="true" >
                            </div>                    
                    </div>
                </div>         
            </aside>
            <!-- /Sidebar -->
</div>
</div>
    <!-- Trigger -->
    <script>
        jssor_slider1_starter('slider1_container');
    </script>
    <!-- Jssor Slider End -->
