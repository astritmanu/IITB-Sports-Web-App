<?php 
$sport="Hockey";
$sport2="hockey";
$this->pageTitle="Facilities - Hockey - ". Yii::app()->name;

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


				<p>We just want you to come and play.You can issue sticks, ball and shinpads from the S.A.C 
				store on your ID card.</p>

	</article>
	<!-- /Article -->
		
		</div>
	</div>	<!-- /container -->