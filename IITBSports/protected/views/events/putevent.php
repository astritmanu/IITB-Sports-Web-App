<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle='Enter Event - '. Yii::app()->name;
?>

<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
      		<li class="active">Events</li>
      		<li><a href="index.php?r=events/calendar">Calendar</a></li>
      		<li class="active">Enter Event</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Enter News</h1>
				</header>

			<?php if(Yii::app()->user->post!='user') {
			?>
			<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							
							<form method="post" action="index.php?r=events/submit" enctype="multipart/form-data">
								<div class="top-margin">
									<label>Date <span class="text-danger">*</span></label>
									<input type="date" name="date" class="form-control">
								</div>
								<div class="top-margin">
									<label>Event Name <span class="text-danger">*</span></label>
									<input type="text" name="title" class="form-control">
								</div>
								<div class="top-margin">
									<label>Time</label>
									<input type="time" name="time" class="form-control">
								</div>
								<div class="top-margin">
									<label>Venue</label>
									<input type="text" name="venue" class="form-control">
								</div>
								<div class="top-margin">
									<label>Miscellaneous Info (Please keep this very short, not more than 2 lines) </label>
									<input type="text" name="descr" class="form-control">
								</div>

								<hr>

								<div class="row">
									
									<div class="col-lg-12 text-right">
										<button class="btn btn-action" type="submit">Submit</button>
									</div>
								</div>
							</form>
						</div>
					</div>

				</div>
				<?php }  else echo "<p>Not Authorised</p>";
				?>
			</article>
		</div>
	</div>

