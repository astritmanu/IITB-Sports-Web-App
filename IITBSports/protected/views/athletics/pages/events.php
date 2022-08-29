<?php 
$sport="Athletics";
$sport2="athletics";
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

				<p>We conduct workshops on a regular basis in gymming and long distance running at beginner and 
				intermediate level.</p>
				<p>Summer camps are held for the students, where they are put through daily 
				exercises to ensure their general physical and mental fitness.</p>
				<p>We provide students with the opportunity to showcase their talents in inter-college and 
				intra-college competitions as well as marathons.</p>

	</article>
	<!-- /Article -->
		
		</div>
	</div>	<!-- /container -->