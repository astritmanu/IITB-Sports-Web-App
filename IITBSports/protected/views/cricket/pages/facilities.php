<?php 
$sport="Cricket";
$sport2="cricket";
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


				<p>One cricket ground</p>
				<p>Bat and ball available on issue from SAC</p>

	</article>
	<!-- /Article -->
		
		</div>
	</div>	<!-- /container -->