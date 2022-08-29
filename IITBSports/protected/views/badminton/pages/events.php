<?php 
$sport="Badminton";
$sport2="badminton";
$this->pageTitle="Events - Badminton - ". Yii::app()->name;

?>
<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
			<li class="active">Events</li>
		</ol>

<div class="row">

    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>
    <!-- /Sidebar -->

			
			<!-- Article main content -->
			<article class="col-md-10 maincontent">
				<header class="page-header">
					<h1 class="page-title">Events	</h1>
				</header>

				<ol>
					<li>Beginners and Intermediate camps throughout semester</li>
					<li>Badminton General Championship</li>
					<li>Institute Badminton League</li>
					<li>Institute Double's Open</li>
					<li>Freshie Open</li>
					<li>Other fun filled events</li>
				</ol>

	</article>
	<!-- /Article -->
		
		</div>
	</div>	<!-- /container -->