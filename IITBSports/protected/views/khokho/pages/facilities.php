<?php 
$sport="Kho Kho";
$sport2="khokho";
$this->pageTitle="Facilities - ". $sport ." - ". Yii::app()->name;

?>
<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Events</li>
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

				<ul>
					<li>Well maintained Indoor kho kho court</li>
					<li>Knee Caps</li>
					<li>Anklets</li>
					<li>Elbow Guard</li>
					<li>Gum Sole Shoes</li>
				</ul>

	</article>
	<!-- /Article -->
		
		</div>
	</div>	<!-- /container -->