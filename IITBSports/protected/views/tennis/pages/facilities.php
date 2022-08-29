<?php 
$sport="Lawn Tennis";
$sport2="tennis";
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

				<p>IIT-B currently has 6 well maintained lawn tennis courts located between just in front of the 
				staff hostel, adjacent to the Convocation Hall, opposite to NCC Grounds. </p>
				
				<p>The court timings are: <b>6:30am-9:00am in the mornings</b> and from 
				<b>4:00pm-10:00pm in the evenings</b></p>
				
				<p>The following facilities are also provided at the courts and can be issued on the Student’s 
				ID-Card of IIT-B:</p>
				<ul>
					<li>Tennis Balls</li>
					<li>Tennis Racquets</li>
					<li>Gum-Soled Shoes</li>
				</ul>
				
				<p>In addition to the following facilities there is also a register provided at the courts in 
				which a student can place an order for any piece of equipment such as balls, grips, 
				shock-absorbers, gutting, shoes(brand name to specified), racquets(brand name to specified) and 
				pay the required amount and his order will come in by the weekend.</p>


	</article>
	<!-- /Article -->
		
		</div>
	</div>	<!-- /container -->