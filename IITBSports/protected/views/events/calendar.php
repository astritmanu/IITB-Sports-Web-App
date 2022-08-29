<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Calendar';
$this->breadcrumbs=array(
	'Calendar',
);
?>
<header id="head" class="secondary"></header>

	<!-- container -->

	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">Events</li>
			<li class="active">Calendar</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="maincontent">
				<header class="page-header">
					<h1 class="page-title">Calendar</h1>
				</header>

				<?php if(!Yii::app()->user->isGuest) 
				{
				  if(Yii::app()->user->post!='user')
				  { ?>
				
				    <h3 style="text-align:right"><a href="index.php?r=events/putevent"> Add Event? </a></h3>
				  
				<?php }
				} ?>
				<p>Please select the calendar you would like to view from the arrow on the top right</p>
				<p>Do add your favourite events to your own calendar to receive notifications about them</p>
				<div class="responsive-iframe-container">
					<iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;height=550&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=vcqlacs6l2o2uhgems2b0emjio%40group.calendar.google.com&amp;color=%235F6B02&amp;src=jtrv2l1ecv9mn7jvasep02d83o%40group.calendar.google.com&amp;color=%236B3304&amp;ctz=Asia%2FCalcutta" style=" border-width:0 " width="800" height="550" frameborder="0" scrolling="no"></iframe>				
				</div>
			</article>
		</div>
</div>
