<?php
/* @var $this ProfileController */

$this->pageTitle="Setup Profile - ". Yii::app()->name;
?>
<header id="head" class="secondary"></header>

 <!-- container -->
  <div class="container">

    <ol class="breadcrumb">
      <li><a href="index.php">Home</a></li>
      <li><a href="index.php?r=profile&letter=A">Profiles</a> </li>
      <li class="active">Set Up Profile</li>
    </ol>

    <div class="row">
      <!-- Article main content -->
      <article class="maincontent">
        <header class="page-header">
          <h1 class="page-title">Set Up Profile</h1>
        </header>

<p>Please create your profile with your personal details first. After creation, you can come back to upload 
your picture and update all other information.</p>

        <p><b>NOTE:</b> Please give FB, Google Plus, Twitter ID etc as <b>http://www.xyz.com/userid</b>. Else copy it from the URL of the respective pages</p>

<h3>Personal Details</h3>
<form method="post" action="index.php?r=profile/new">
<input name="image" type="hidden" id="image" value="images/profile.png">
<table width="100%" border="0" cellspacing="1" cellpadding="2">
<tr>
<td width="100">Name</td>
<td><input style="background-color:lightgrey;" name="name" type="text" id="name" value="<?php echo Yii::app()->user->id ?>" readonly></td>
</tr>
<tr>
<td width="100">Roll Number</td>
<td><input style="background-color:lightgrey;" name="roll" type="text" id="roll" value="<?php echo Yii::app()->user->rollno ?>" readonly></td>
</tr>
<tr>
<td width="100">Hostel</td>
<td><input name="Hostel" type="text" id="Hostel" ></td>
</tr>
<tr>
<td width="100">Room Number</td>
<td><input name="RoomNo" type="text" id="RoomNo" ></td>
</tr>
<tr>
<td width="100">Phone Number</td>
<td><input name="PhoneNumber" type="text" id="PhoneNumber" ></td>
</tr>
<tr>
<td width="100">Favourite Sports</td>
<td><input name="sports" type="text" id="sports"></td>
</tr>
<tr>
<td width="100">Email</td>
<td><input name="Email" type="email" id="Email" ></td>
</tr>
<td width="100">Facebook</td>
<td><input name="fb" type="text" id="fb" ></td>
</tr>
<tr>
<td width="100">Google Plus</td>
<td><input name="gmail" type="text" id="gmail"></td>
</tr>
<tr>
<td width="100">Twitter</td>
<td><input name="twitter" type="text" id="twitter"></td>
</tr>
<tr>
<td width="100">About Me</td>
<td><textarea style="width:200px;" rows="5" name="About"></textarea></td>
</tr>
<tr>
<td width="100"> </td>
<td>
<input name="updateBasicInfo" type="submit" id="updateBasicInfo" value="Create Profile">
</td>
</tr>
</table>
</form>

</article>
</div>
</div>
	
