<?php
/* @var $this ProfileController */

$this->pageTitle="View Profile - ". Yii::app()->name;
?>

<link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- CUSTOM STYLE CSS -->
    <style type="text/css">
               .btn-social {
            color: white;
            opacity: 0.8;
        }

            .btn-social:hover {
                color: white;
                opacity: 1;
                text-decoration: none;
            }

        .btn-facebook {
            background-color: #3b5998;
        }

        .btn-twitter {
            background-color: #00aced;
        }

        .btn-linkedin {
            background-color: #0e76a8;
        }

        .btn-google {
            background-color: #c32f10;
        }
    </style>

<header id="head" class="secondary"></header>

 <!-- container -->
  <div class="container">

    <ol class="breadcrumb">
      <li><a href="index.php">Home</a></li>
      <li><a href="index.php?r=profile&letter=A">Profiles</a> </li>
      <li class="active">View Profile</li>
    </ol>

    <div class="row">
      
      <!-- Article main content -->
      <article class="maincontent">
        <header class="page-header">
          <h1 class="page-title"><?php echo $name; ?></h1>
        </header>

        <div class="container">
        <section style="padding-bottom: 50px; padding-top: 50px;">
            <div class="row">
                <div class="col-md-4">
                    <img src="<?php echo $image;?>" class="img-rounded img-responsive" />
                </div>
                <div class="col-md-8">
                    <div class="alert alert-info">
                        <h2>Personal Information: </h2>
                        <?php if($team!=NULL) { ?>
                        <h4 style="color:red">Member of Institute <?php echo "$team"; ?> Team</h4>
                        <?php } ?>
                        <div class="row">
                        <div class="col-md-4">
                          <p><b>Roll No: </b> <?php echo $rollno; ?> </p>
                        </div>
                        <div class="col-md-4">
                          <p><b>Hostel No: </b><?php echo $hostel; ?> </p> 
                        </div> 
                        <div class="col-md-4">                      
                          <p><b>Room No: </b><?php echo $roomno; ?> </p>
                        </div>
                        <div class="col-md-8">
                          <p><b>About: </b><?php echo $about; ?> </p>
                        </div>
                        <div class="col-md-4">
                          <p><b>Phone Number: </b><?php echo $PhoneNumber; ?> </p>
                          <p><b>Email ID: </b><?php echo $Email; ?> </p>
                        </div>
                        </div>
                        <div class="row">
                        <br>
                        <div class="col-md-4">
                          <h4><b>Favourite Sports: </b></h4><p><?php echo $sports; ?> </p >
                        </div>
                        </div>
                    </div>
                    <div >
                        <?php if($fb!=NULL) { ?>
                        <a href="<?php echo $fb; ?>" target="_blank" class="btn btn-social btn-facebook">
                            <i class="fa fa-facebook"></i>&nbsp; Facebook</a>
                        <?php }
                        if($gmail!=NULL) { ?>
                        <a href="<?php echo $gmail; ?>" target="_blank" class="btn btn-social btn-google">
                            <i class="fa fa-google-plus"></i>&nbsp; Google Plus</a>
                        <?php }
                        if($twitter!=NULL) { ?>
                        <a href="<?php echo $twitter; ?>" target="_blank" class="btn btn-social btn-twitter">
                            <i class="fa fa-twitter"></i>&nbsp; Twitter </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h3>InterIIT Achievements</h3>
                    <ol>
                      <?php $InterIITList=explode("~",$InterIITAch); 
                            if($InterIITList[0]==NULL) { echo "None"; } else {?>
                      <?php foreach ($InterIITList as $InterIITItem) { if($InterIITItem!=NULL) {?>
                      <p><li><?php echo $InterIITItem; ?></li></p>
                      <?php } } }?>
                    </ol>
                    <br />
                </div>
                    <div class="form-group col-md-4">
                    <h3>GC Achievements</h3>
                        <ol>
                          <?php $GCList=explode("~",$GCAch); 
                                if($GCList[0]==NULL) { echo "None"; } else {?>
                          <?php foreach ($GCList as $GCItem) { if($GCItem!=NULL) {?>
                          <p><li><?php echo $GCItem; ?></li></p>
                          <?php } } }?>
                        </ol>
                        <br/>
                    </div>
                    <div class="form-group col-md-4">
                    <h3>Other Achievements</h3>
                        <ol>
                          <?php $OthersList=explode("~",$OthersAch); 
                                if($OthersList[0]==NULL) { echo "None"; } else { ?>
                          <?php foreach ($OthersList as $OthersItem) { if($OthersItem!=NULL) {?>
                          <p><li><?php echo $OthersItem; ?></li></p>
                          <?php } } }?>
                        </ol>
                    </div>
                </div>
            <!-- ROW END -->

        </section>
        <!-- SECTION END -->
    </div>
    <!-- CONATINER END -->

</article>
</div>
</div>

