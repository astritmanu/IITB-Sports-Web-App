<?php 
$sport="Board Games";
$sport2="boardgames";
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


				<p>There are two Board Game rooms available in the New Gymkhana building.</p>
				<p>One room has a Snooker Table & a Pool Table and the other room is devoted to Chess, Carrom 
				and Foosball.</p>

	</article>
	<!-- /Article -->
		
		</div>
	</div>	<!-- /container -->