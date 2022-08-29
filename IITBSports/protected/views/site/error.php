<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ' - Error';
$this->breadcrumbs=array(
	'Error',
);
?>


<header id="head" class="secondary"></header>

<article class="maincontent">
<header class="page-header">
<h1 class="page-title">Error <?php echo $code; ?></h1>
</header>

<div class="error">
<p><?php echo CHtml::encode($message); ?></p>
</div>
</article>