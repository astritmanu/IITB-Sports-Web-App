<?php $sport="Basketball";
      $sport2="basketball";
?>

<aside class="col-md-2 sidebar sidebar-left">       
   <div class="panel-group" id="accordion">
       <div class="panel panel-default">
           <div class="panel-heading">
               <h4 class="panel-title">
                   <a href="index.php?r=<?php echo "$sport2" ?>">
                   Home</a>
               </h4>
           </div>
       </div>
       <div class="panel panel-default">
           <div class="panel-heading">
               <h4 class="panel-title">
                   <a href="index.php?r=<?php echo "$sport2" ?>/page&view=events">
                   Events</a>
               </h4>
           </div>
       </div>
       <div class="panel panel-default">
           <div class="panel-heading">
               <h4 class="panel-title">
                   <a href="index.php?r=<?php echo "$sport2" ?>/page&view=facilities">
                   Facilities</a>
               </h4>
           </div>
       </div>
       <div class="panel panel-default">
           <div class="panel-heading">
               <h4 class="panel-title">
                   <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                   People</a>
               </h4>
           </div>
           <div id="collapseFour" class="panel-collapse collapse">
               <div class="panel-body">
                   <table class="table">
                       <tr>
                           <td>
                               <a href="index.php?r=<?php echo "$sport" ?>/contact">Contact</a>
                           </td>
                       </tr>
                       <tr>
                           <td>
                               <a href="index.php?r=<?php echo "$sport" ?>/team&sport=<?php echo "$sport2" ?>">Team</a>
                           </td>
                       </tr>
                       <tr>
                           <td>
                               <a href="index.php?r=<?php echo "$sport" ?>/halloffame">Hall of Fame</a>
                           </td>
                       </tr>
                   </table>
               </div>
           </div>
       </div>
        <div class="panel panel-default">
           <div class="panel-heading">
               <h4 class="panel-title">
                   <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                   Gallery</a>
               </h4>
           </div>
           <div id="collapseOne" class="panel-collapse collapse">
               <div class="panel-body">
                   <table class="table">
                       <tr>
                           <td>
                               <a href="index.php?r=<?php echo "$sport" ?>/gallery">Photos</a>
                           </td>
                       </tr>
                       <tr>
                           <td>
                               <a href="index.php?r=<?php echo "$sport" ?>/video">Videos</a>
                           </td>
                       </tr>
                   </table>
               </div>
           </div>
       </div>
   </div>           
</aside>      <!-- /Sidebar -->