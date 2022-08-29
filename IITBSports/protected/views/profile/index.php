<?php
/* @var $this ProfileController */

$this->pageTitle="Profile - ". Yii::app()->name;
$letter=$_GET["letter"];
?>

<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/pagination.css">

<header id="head" class="secondary"></header>

 <!-- container -->
  <div class="container">

    <ol class="breadcrumb">
      <li><a href="index.php">Home</a></li>
      <li class="active">Profiles</li>
    </ol>

    <div class="row">
      
      <!-- Article main content -->
      <article class="maincontent">
        <header class="page-header">
          <h1 class="page-title">Profiles</h1>
        </header>
        <?php if(!Yii::app()->user->isGuest) { ?>
              <h3 style="text-align:right"><a href="index.php?r=profile/putinfo">My Profile</a></h3>
        <?php } ?>

        <div class="pagination">
                <ul>
                  <?php if($letter=="A") { ?> <li class="active"> <?php } else { ?><li> <?php } ?> <a href="index.php?r=profile&letter=A">A</a></li>
                  <?php if($letter=="B") { ?> <li class="active"> <?php } else { ?><li> <?php } ?> <a href="index.php?r=profile&letter=B">B</a></li>
                  <?php if($letter=="C") { ?> <li class="active"> <?php } else { ?><li> <?php } ?> <a href="index.php?r=profile&letter=C">C</a></li>
                  <?php if($letter=="D") { ?> <li class="active"> <?php } else { ?><li> <?php } ?> <a href="index.php?r=profile&letter=D">D</a></li>
                  <?php if($letter=="E") { ?> <li class="active"> <?php } else { ?><li> <?php } ?> <a href="index.php?r=profile&letter=E">E</a></li>
                  <?php if($letter=="F") { ?> <li class="active"> <?php } else { ?><li> <?php } ?> <a href="index.php?r=profile&letter=F">F</a></li>
                  <?php if($letter=="G") { ?> <li class="active"> <?php } else { ?><li> <?php } ?> <a href="index.php?r=profile&letter=G">G</a></li>
                  <?php if($letter=="H") { ?> <li class="active"> <?php } else { ?><li> <?php } ?> <a href="index.php?r=profile&letter=H">H</a></li>
                  <?php if($letter=="I") { ?> <li class="active"> <?php } else { ?><li> <?php } ?> <a href="index.php?r=profile&letter=I">I</a></li>
                  <?php if($letter=="J") { ?> <li class="active"> <?php } else { ?><li> <?php } ?> <a href="index.php?r=profile&letter=J">J</a></li>
                  <?php if($letter=="K") { ?> <li class="active"> <?php } else { ?><li> <?php } ?> <a href="index.php?r=profile&letter=K">K</a></li>
                  <?php if($letter=="L") { ?> <li class="active"> <?php } else { ?><li> <?php } ?> <a href="index.php?r=profile&letter=L">L</a></li>
                  <?php if($letter=="M") { ?> <li class="active"> <?php } else { ?><li> <?php } ?> <a href="index.php?r=profile&letter=M">M</a></li>
                  <?php if($letter=="N") { ?> <li class="active"> <?php } else { ?><li> <?php } ?> <a href="index.php?r=profile&letter=N">N</a></li>
                  <?php if($letter=="O") { ?> <li class="active"> <?php } else { ?><li> <?php } ?> <a href="index.php?r=profile&letter=O">O</a></li>
                  <?php if($letter=="P") { ?> <li class="active"> <?php } else { ?><li> <?php } ?> <a href="index.php?r=profile&letter=P">P</a></li>
                  <?php if($letter=="Q") { ?> <li class="active"> <?php } else { ?><li> <?php } ?> <a href="index.php?r=profile&letter=Q">Q</a></li>
                  <?php if($letter=="R") { ?> <li class="active"> <?php } else { ?><li> <?php } ?> <a href="index.php?r=profile&letter=R">R</a></li>
                  <?php if($letter=="S") { ?> <li class="active"> <?php } else { ?><li> <?php } ?> <a href="index.php?r=profile&letter=S">S</a></li>
                  <?php if($letter=="T") { ?> <li class="active"> <?php } else { ?><li> <?php } ?> <a href="index.php?r=profile&letter=T">T</a></li>
                  <?php if($letter=="U") { ?> <li class="active"> <?php } else { ?><li> <?php } ?> <a href="index.php?r=profile&letter=U">U</a></li>
                  <?php if($letter=="V") { ?> <li class="active"> <?php } else { ?><li> <?php } ?> <a href="index.php?r=profile&letter=V">V</a></li>
                  <?php if($letter=="W") { ?> <li class="active"> <?php } else { ?><li> <?php } ?> <a href="index.php?r=profile&letter=W">W</a></li>
                  <?php if($letter=="X") { ?> <li class="active"> <?php } else { ?><li> <?php } ?> <a href="index.php?r=profile&letter=X">X</a></li>
                  <?php if($letter=="Y") { ?> <li class="active"> <?php } else { ?><li> <?php } ?> <a href="index.php?r=profile&letter=Y">Y</a></li>
                  <?php if($letter=="Z") { ?> <li class="active"> <?php } else { ?><li> <?php } ?> <a href="index.php?r=profile&letter=Z">Z</a></li>
                 <!-- <li><a href="#">«</a></li>  -->
                 <!-- <li><a href="#">»</a></li>  -->
                </ul>
        </div>



        <?php foreach ($people as $person) { 
            if($person['Name'][0]==$letter|$person['Name'][0]==lcfirst($letter)) { ?>
            <h4><a href="index.php?r=profile/display&rollno=<?php echo $person['RollNumber']; ?>"><?php echo $person['Name']; ?></a></h4>
        <?php } }?>

      </article>
    </div>
  </div>
