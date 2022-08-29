<?php 
$sport="Table Tennis";
$sport2="tt";
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


				<p>IIT-B boasts of world-class table tennis facilities and has 2 TT halls :</p>
				<ol>
					<li><b>Old Sac Hall:</b> This TT room is located at the SAC, right behind the OAT. </li>
					<li><b>New Hall:</b> It is located in the new sports complex opposite H11</li>
				</ol>
				<p>IIT-B also boasts of fully air-conditioned TT Halls .The addition of table tennis robot 
				machine to the infrastructure,for the first-time across all IITs, has vastly improved the 
				general level of play at IIT-B.</p>

				<p>Apart from this, you can also issue racquets and balls against your I-cards from the SAC 
				office.</p>
				<p><b>Timings:</b> 4pm - 12 am</p>

	</article>
	<!-- /Article -->
		
		</div>
	</div>	<!-- /container -->