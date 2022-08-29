<?php 
$sport="Table Tennis";
$sport2="tt";
$this->pageTitle="Rules - Table Tennis - ". Yii::app()->name;

?>

<header id="head" class="secondary"></header>

<div class="container">
	<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li>Sports</li>
			<li><a href="index.php?r=<?php echo $sport2; ?>"><?php echo $sport; ?></a></li>
			<li class="active">Rules</li>
		</ol>

<div class="row">
			
			<!-- Sidebar -->
			<?php include 'sidebar.php'; ?>
			<!-- /Sidebar -->

		<article class="col-md-10 maincontent">
			<header class="page-header">
				<h1 class="page-title">Rules</h1>
			</header>

			<ol>
				<li>1. T-Shirt and shorts or track-pants are to be worn. Jeans are not allowed.</li>
				<li>Gum-soled shoes are not compulsory but playing in slippers, flotters or dirty shoes is 
				not allowed.</li>
				<li>Ensure that you put the table covers back on the table after you finish playing.</li>
			</ol>

</article>
</div> 
</div>