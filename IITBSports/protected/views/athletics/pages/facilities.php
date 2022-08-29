<?php 
$sport="Athletics";
$sport2="athletics";
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
					<h1 class="page-title">Facilities	</h1>
				</header>


				<p>Our club has an outdoor track in the shape of a stadium 400 metres in length, and has eight lanes 1.22 m in width. The institute provides you with all the necessary equipments for field events, like shot put, discus, hammer, javelin. Running spikes for different track events have been introduced this year to facilitate athletes during various level camps and Inter Hostel GCs. </p>
				<p>This equipment is available to every student on campus, that can be issued against a valid IIT Bombay ID card. Along with the outdoor facilities, the club will soon introduce indoor facilities for certain events.</p>
				<p>Facilities for jumps including long jump, high jump and pole vault pit can be used with the permission of the Institute Athletics Secretary only for workout purpose. No other usage will be entertained.</p>

	</article>
	<!-- /Article -->
		
		</div>
	</div>	<!-- /container -->