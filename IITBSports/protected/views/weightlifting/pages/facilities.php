<?php 
$sport="Weightlifting";
$sport2="weightlifting";
$this->pageTitle="Facilities - ". $sport ." - ". Yii::app()->name;

?>
<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
			<li class="active">Facilities</li>
		</ol>

<div class="row">

    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>
    <!-- /Sidebar -->

			
			<!-- Article main content -->
			<article class="col-md-10 maincontent">
				<header class="page-header">
					<h1 class="page-title">Facilities</h1>
				</header>

				<ol>
					<li>
						<p><b>Weightlifting room:</b> 4 wooden platforms, 3 squatting racks and 8 barbell sets, worth for use in weightlifting, deadlift and squat training.</p>
						<p>Timing: 05:30 pm to 09:30 pm. On Sunday and on national holidays weightlifting room 	remains closed. </p>
						<p>Coach availability: 5:30 pm to 08:30 pm except Thursday.</p>
						<p>Weightlifting shoes: On first come first serve basis.</p>
					</li>
					
					<li>
						<p><b>SAC gym room: </b></p>
						<p>Timing: 06:00 am to 09:30 am and 04:00 pm to 09:30 pm everyday. Gym room remains closed 	on national holidays.</p>
						<p>Soon to be shifted in new gymkhana building with world class facility.</p>
					</li>
				</ol>		

	</article>
	<!-- /Article -->
		
		</div>
	</div>	<!-- /container -->