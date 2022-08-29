<?php 
$sport="Basketball";
$sport2="basketball";
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


				<p> IIT Bombay has recently completed construction of 2 state-of the-art
				indoor basketball courts. The courts have
				thin coated teraflex surfaces, which is a first in the
				country.</p>
				<p>Additionally, 2 outdoor courts are also available to play in.</p>

	</article>
	<!-- /Article -->
		
		</div>
	</div>	<!-- /container -->