<?php
/* @var $this SiteController */
$sport="Adventure";
$sport2="adv";
$this->pageTitle="Adventure Club - ". Yii::app()->name;
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

<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jssor.simplefade.js"></script>


	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">Clubs</li>
			<li class="active"><?php echo $sport; ?> Club	</li>
		</ol>

		<div class="row">

			<!-- Sidebar -->
<?php include 'sidebar.php'; ?>
            <!-- Sidebar -->

			
			<!-- Article main content -->
			<article class="col-md-7 maincontent">
				<header class="page-header">
					<h1 class="page-title"><?php echo $sport; ?> Club	</h1>
				</header>


		   <!-- Jssor Slider Begin -->
    <!-- To move inline styles to css file/block, please specify a class name for each element. --> 
    <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 600px; height: 300px; overflow: hidden; ">

        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>

        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 300px; overflow: hidden;">
            <div>
                <img u="image" src="images/gallery/adv/1.jpg" />
            </div>
            <div>
                <img u="image" src="images/gallery/adv/2.jpg" />
            </div>
            <div>
                <img u="image" src="images/gallery/adv/3.jpg" />
            </div>
            <div>
                <img u="image" src="images/gallery/adv/4.jpg" />
            </div>
            <div>
                <img u="image" src="images/gallery/adv/5.jpg" />
            </div>
        </div>
        

		 <!-- bullet navigator container -->
        <div u="navigator" class="jssorb05" style="bottom: 16px; right: 6px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype"></div>
        </div>
        <!--#endregion Bullet Navigator Skin End -->
        
    <!-- Arrow Left -->
        <span u="arrowleft" class="jssora12l" style="top: 123px; left: 0px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora12r" style="top: 123px; right: 0px;">
        </span>
        <!--#endregion Arrow Navigator Skin End -->
        <a style="display: none" href="http://www.jssor.com">Image Slider</a>

    </div>
    <!-- Jssor Slider End -->

				<h3>Adventure Sports in Sahyadri Ranges</h3>
                <p>There is enormous amount of potential for adventure sports in Sahyadri ranges, situated just an hour away from Mumbai. Since the inception of the club, several activities or workshops are conducted each month namely treks, rock climbing, water sports,rappeling etc. with easy and difficult ratings. </p>
                <p>Club encourages students to take adventure as a team sport and also gives them the opportunity to experience the thrill and excitement involved, go out in nature and enjoy its beauty and serenity with a thought to keep it preserved it for the generations to come.   </p>
                
                
                <h3>Mountaineering, Adventure, Paragliding and Skiing Courses</h3>
                <p>Adventure sports were first introduced as Basic Mountaineering Course(BMC). It is very popular among the adventure loving students.</p>
                <p>One of the four institutes affiliated to Indian Mountaineering Foundation(IMF), Atal Bihari Vajpayee Institute of Mountaineering and Allied Sports (ABVIMAS) in conducts various certified courses such as Basic(26 days)&Advanced(28 days) Mountaineering Course, Adventure Camp(10 days) & Adventure Course(14 days), Water Sports, Skiing etc.</p> 
                <p>Several certified organizations in Pune conduct paragliding courses (3 to 4 days) certified by Association of Paragliding Pilots and Instructors (APPI) from October to May.</p>
                <p>These courses especially Mountaineering are physically demanding, but they teach you many things which make you a better person overall and give you lifetime experience. </p>
	</article>
	<!-- /Article -->


			
			<!-- Sidebar -->
			<aside class="col-md-3 sidebar sidebar-right">

				<div class="row widget">
					<div class="col-xs-12">
						<h4>Facebook Page</h4>
						<div class="fb-page" data-width="280px" data-height="400px" 
                        data-href="https://www.facebook.com/adviitb"data-hide-cover="true" 
                        data-show-facepile="false" data-show-posts="true" > </div>  			
					</div>
				</div>
				
			</aside>
			<!-- /Sidebar -->

		</div>
	</div>	<!-- /container -->


   <!-- Trigger -->
    <script>
        jssor_slider1_starter('slider1_container');
    </script>
    <!-- Jssor Slider End -->