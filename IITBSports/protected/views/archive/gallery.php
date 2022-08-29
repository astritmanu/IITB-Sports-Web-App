<?php 
$this->pageTitle="Gallery - ". Yii::app()->name;
?>

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/lightbox2.css"/>

<header id="head" class="secondary"></header>
<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">Archive</li>
			<li class="active">Gallery</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="maincontent">
				<header class="page-header">
					<h1 class="page-title">Gallery</h1>
				</header>

        <div class="stackeffect">
            <b>Sports Carnival</b>
            <a href="images/gallery/Carnival/1.jpeg" data-lightbox="carnival"><img src="images/gallery/Carnival/1.jpeg"></a>
        </div>
        <div class="stackeffect">
            <b>Photo Booth</b>
            <a href="images/gallery/Photo Booth/1.jpeg" data-lightbox="photobooth"><img src="images/gallery/Photo Booth/1.jpeg"></a>
        </div>
        <div class="stackeffect">
            <b>BMC</b>
            <a href="images/gallery/bmc/4.JPG" data-lightbox="bmc"><img src="images/gallery/bmc/4.JPG"></a>
        </div>
    	<div class="stackeffect">
    		<b>Boxing Workshop</b>
    		<a href="images/gallery/boxing/2.JPG" data-lightbox="boxing"><img src="images/gallery/boxing/2.JPG"></a>
    	</div>
    	<div class="stackeffect">
    		<b>Spardha IIT BHU</b>
    		<a href="images/gallery/spardha/24.JPG" data-lightbox="spardha"><img src="images/gallery/spardha/24.JPG"></a>
    	</div>
    	<div class="stackeffect">
    		<b>Lohgad Trek</b>
    		<a href="images/gallery/lohgad/6.jpg" data-lightbox="lohgad"><img src="images/gallery/lohgad/6.jpg"></a>
    	</div>


    <div class="hide">
    	
    	<?php $x=2;
    	while($x<=86)
    	{ ?>
    		<a href="images/gallery/Carnival/<?php echo $x; ?>.jpeg" data-lightbox="carnival"></a>
    	<?php $x++; } ?>

    	<?php $x=2;
    	while($x<=111)
    	{ ?>
    		<a href="images/gallery/Photo Booth/<?php echo $x; ?>.jpeg" data-lightbox="photobooth"></a>
    	<?php $x++; } ?>

    	<a href="images/gallery/boxing/1.JPG" data-lightbox="boxing"></a>
        <a href="images/gallery/boxing/3.JPG" data-lightbox="boxing"></a>
        <a href="images/gallery/boxing/4.JPG" data-lightbox="boxing"></a>
        <a href="images/gallery/boxing/5.JPG" data-lightbox="boxing"></a>
        <a href="images/gallery/boxing/6.JPG" data-lightbox="boxing"></a>
        <a href="images/gallery/boxing/7.JPG" data-lightbox="boxing"></a>
        <a href="images/gallery/boxing/8.JPG" data-lightbox="boxing"></a>
        <a href="images/gallery/boxing/9.JPG" data-lightbox="boxing"></a>
        <a href="images/gallery/boxing/10.JPG" data-lightbox="boxing"></a>

    	
        <a href="images/gallery/bmc/2.JPG" data-lightbox="bmc"></a>
    	<a href="images/gallery/bmc/3.JPG" data-lightbox="bmc"></a>
    	<a href="images/gallery/bmc/1.JPG" data-lightbox="bmc"></a>
    	<a href="images/gallery/bmc/5.JPG" data-lightbox="bmc"></a>
    	<a href="images/gallery/bmc/6.JPG" data-lightbox="bmc"></a>
        <a href="images/gallery/bmc/7.JPG" data-lightbox="bmc"></a>
        <a href="images/gallery/bmc/8.JPG" data-lightbox="bmc"></a>
        <a href="images/gallery/bmc/9.JPG" data-lightbox="bmc"></a>
        <a href="images/gallery/bmc/10.JPG" data-lightbox="bmc"></a>
        <a href="images/gallery/bmc/11.JPG" data-lightbox="bmc"></a>
        <a href="images/gallery/bmc/12.JPG" data-lightbox="bmc"></a>
        <a href="images/gallery/bmc/13.JPG" data-lightbox="bmc"></a>
        <a href="images/gallery/bmc/14.JPG" data-lightbox="bmc"></a>
        <a href="images/gallery/bmc/15.JPG" data-lightbox="bmc"></a>
        <a href="images/gallery/bmc/16.JPG" data-lightbox="bmc"></a>
        <a href="images/gallery/bmc/17.JPG" data-lightbox="bmc"></a>
        <a href="images/gallery/bmc/18.JPG" data-lightbox="bmc"></a>
        <a href="images/gallery/bmc/19.JPG" data-lightbox="bmc"></a>
        <a href="images/gallery/bmc/20.JPG" data-lightbox="bmc"></a>
        <a href="images/gallery/bmc/21.JPG" data-lightbox="bmc"></a>


        <a href="images/gallery/spardha/1.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/2.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/3.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/4.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/5.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/6.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/7.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/8.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/9.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/10.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/11.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/12.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/13.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/14.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/15.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/16.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/17.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/18.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/19.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/20.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/21.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/22.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/23.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/25.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/26.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/27.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/28.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/29.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/30.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/31.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/32.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/33.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/34.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/35.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/36.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/37.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/38.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/39.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/40.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/41.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/42.JPG" data-lightbox="spardha"></a>
        <a href="images/gallery/spardha/43.JPG" data-lightbox="spardha"></a>


        <a href="images/gallery/lohgad/1.jpg" data-lightbox="lohgad"></a>
        <a href="images/gallery/lohgad/2.jpg" data-lightbox="lohgad"></a>
        <a href="images/gallery/lohgad/3.jpg" data-lightbox="lohgad"></a>
        <a href="images/gallery/lohgad/4.jpg" data-lightbox="lohgad"></a>
        <a href="images/gallery/lohgad/5.jpg" data-lightbox="lohgad"></a>
    </div>

    </article>
</div> 
</div>




<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.11.0.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/lightbox.min.js"></script>