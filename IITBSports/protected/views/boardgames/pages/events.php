<?php 
$sport="Board Games";
$sport2="boardgames";
$this->pageTitle="Events - ". $sport ." - ". Yii::app()->name;

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
					<li>29 July -Freshman Orientation</li>
					<li>17 Augest - PG Volley</li>
					<li>27 September - Boys Volleyball Inter IIT Selection Phase One</li>
					<li>28 September - Girls Volleyball Inter IIT Selection Phase One</li>
					<li>20 September - Girls Camp and GC </li>
					<li>2 October - Freshmen Tournament</li>
					<li>29 October - Boys Volleyball Inter IIT Final Selection</li>
					<li>23 November - Inter IIT Camp</li>
					<li>10 January - Mix Volleyball</li>
					<li>6 Feb - IVL</li>
					<li>14 Feb - Volleyball Girls GC</li>
					<li>1 March - Volleyball Boys GC</li>
				</ol>

	</article>
	<!-- /Article -->
		
		</div>
	</div>	<!-- /container -->