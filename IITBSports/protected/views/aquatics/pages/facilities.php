<?php 
$sport="Aquatics";
$sport2="aquatics";
$this->pageTitle="Facilities - Aquatics - ". Yii::app()->name;

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


				<h4>Swimming Pool:</h4><p> Our club has a 50mX25m swimming pool with all the modern facilities. Various 
				equipment for swimming like kickboards, flippers, pull buoys, pedals are also available for the 
				members. The Swimming pool has a fully functional Ozone treatment plant for treatment of water.</p>
				
				<br><h4>Baby pool:</h4><p>We also have a baby pool for the members who come to the swimming pool for leisure 
				activities.</p>
				
				<br><h4>Water Polo:</h4> <p>We also have all the necessary equipment for water polo training of students.</p>

	</article>
	<!-- /Article -->
		
		</div>
	</div>	<!-- /container -->