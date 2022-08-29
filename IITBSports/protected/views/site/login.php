<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle='Sign In - '. Yii::app()->name ;
$this->breadcrumbs=array(
	'Sign In',
);
?>

<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">Sign In</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Sign in</h1>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center" style="color:black;">Sign In with Your LDAP ID and Password</h3>
							<hr>
	<div class="form">
	<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username', array ('class' => 'form-control')); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password', array ('class' => 'form-control')); ?>
		<?php echo $form->error($model,'password'); ?>
	</div><hr>
	<div class="row">
		<div class="col-lg-8">
		
		</div>
		
		<div class="col-lg-4 text-right">
		<div class="row buttons">
			<?php echo CHtml::submitButton('Sign In', array('class' => 'btn btn-action')); ?>
		</div>
		</div>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->

</div>
</div></div></article></div></div>
