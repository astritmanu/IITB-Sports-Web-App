<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle='Trip of the Month - '. Yii::app()->name;
?>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/lightbox2.css"/>

<style> .trip p{font-size: 18px;}  .trip li {font-size: 16px;}</style>
<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
      		<li class="active">Events</li>
      		<li class="active">Trip of the Month</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="maincontent">
				<header class="page-header">
					<h1 class="page-title">Trip of the Month</h1>
				</header>
				<div class="content trip clearfix">
    	<div class="row-fluid">
            <div class="col-xs-3">
                <h3>Next Trip</h3>
            </div>
            <div class="col-xs-6">
                <center><h3>Tikona Fort</h3></center>
            </div>
            <div class="col-xs-3">
                <h3 style="text-align:right">1 May</h3>
            </div>
        </div>
<div>
    <div style="text-align:center"><img src="images/trip/tikona.jpg" ></div>
    <h3 style="text-align:right "><a href="index.php?r=registrations/tikona">Register now</a></h3>
    <br><br>
    <p class="trip">Tikona (Marathi: तिकोना) also known as Vitandgad) is the dominant hill fort in Maval in western India. It is 
    located near Kamshet around 60 km from Pune. The village nearest to the fort is called Tikona-Peth. The 3500 ft high 
    hill is pyramidal in shape and the name Tikona means "triangle".</p>

    <p class="trip">The fort is a trekking destination noted for the large doors, the temple of 'Trimbakeshwar Mahadev', a water tanks 
    (seven water tanks) and some Satvahan caves. There is Pawana lake at the summit.</p>

<h3>Itinerary:</h3>
<ul>
<li class="trip">Leave the institute by bus at 03:30 am</li>
<li class="trip">Reach Tikona Peth village at 07:30 am</li>
<li class="trip">Breakfast and start trek at 08:00 am</li>
<li class="trip">On top at 09:00 am</li>
<li class="trip">Explore the area and start the way down by 11:00 am</li>
<li class="trip">Reach down and head towards resort for lunch at 12:00</li>
<li class="trip">Finish Lunch and start return journey at 03:00 pm</li>
<li class="trip">Reach the institute by 07:00 pm</li>
</ul>

<p class="trip">Fees: ₹550</p>

<h3>Payment to:</h3>
<ul>
<li class="trip">Jayant Wakode: 9665646186</li>
<li class="trip">Harsh Yadav: 7506112004</li>
<li class="trip">Jignyasha Rathod: 9757429036</li>
</ul>
</div>

    
<!-- ****************-Past Trips*********************  -->
        <hr>
    	<h2>Past Trips</h2>
        <div class="stackeffect">
            <b>Kolad</b>
            <a href="images/trip/trip.jpg" data-lightbox="kolad"><img src="images/trip/trip.jpg"></a>
        </div>
    	<div class="stackeffect">
    		<b>Waterfall Rappelling</b>
    		<a href="images/trip/rappelling/1.jpg" data-lightbox="rappelling"><img src="images/trip/rappelling/1.jpg"></a>
    	</div>
    	<div class="stackeffect">
    		<b>Kolad Trip</b>
    		<a href="images/trip/kolad/2.jpg" data-lightbox="kolad"><img src="images/trip/kolad/2.jpg"></a>
    	</div>
    	<div class="stackeffect">
    		<b>Kulang Trek</b>
    		<a href="images/trip/kulang/1.jpg" data-lightbox="kulang"><img src="images/trip/kulang/1.jpg"></a>
    	</div>
    </div>
    <div class="hide">
    	<a href="images/trip/rappelling/2.jpg" data-lightbox="rappelling"></a>
    	<a href="images/trip/rappelling/3.jpg" data-lightbox="rappelling"></a>
    	<a href="images/trip/rappelling/4.jpg" data-lightbox="rappelling"></a>
    	<a href="images/trip/rappelling/5.jpg" data-lightbox="rappelling"></a>
    	<a href="images/trip/rappelling/6.jpg" data-lightbox="rappelling"></a>

    	<a href="images/trip/kolad/2.jpg" data-lightbox="kolad"></a>
    	<a href="images/trip/kolad/3.jpg" data-lightbox="kolad"></a>
    	<a href="images/trip/kolad/4.jpg" data-lightbox="kolad"></a>
    	<a href="images/trip/kolad/5.jpg" data-lightbox="kolad"></a>
    	<a href="images/trip/kolad/6.jpg" data-lightbox="kolad"></a>

    	<a href="images/trip/kulang/2.jpg" data-lightbox="kulang"></a>
    	<a href="images/trip/kulang/3.jpg" data-lightbox="kulang"></a>
    	<a href="images/trip/kulang/4.jpg" data-lightbox="kulang"></a>
    	<a href="images/trip/kulang/5.jpg" data-lightbox="kulang"></a>
    	<a href="images/trip/kulang/6.jpg" data-lightbox="kulang"></a>
    </div>
</article></div></div>

<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.11.0.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/lightbox.min.js"></script>