<?php $sport="Lawn Tennis";
      $sport2="tennis";
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
                   <a href="index.php?r=<?php echo "$sport2" ?>/page&view=interiit">
                   Inter IIT</a>
               </h4>
           </div>
       </div>
              <div class="panel panel-default">
           <div class="panel-heading">
               <h4 class="panel-title">
                   <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">                  
                   Events</a>
               </h4>
           </div>
           <div id="collapseTwo" class="panel-collapse collapse">
               <div class="panel-body">
                   <table class="table">
                       <tr>
                           <td>
                               <a href="index.php?r=<?php echo "$sport2" ?>/page&view=gc">Inter Hostel Tennis GC</a>
                           </td>
                       </tr>
                       <tr>
                           <td>
                               <a href="index.php?r=<?php echo "$sport2" ?>/page&view=open">Institute Tennis Open</a>
                           </td>
                       </tr>
                       <tr>
                           <td>
                               <a href="index.php?r=<?php echo "$sport2" ?>/page&view=championships">Institute Tennis Championships</a>
                           </td>
                       </tr>
                       <tr>
                           <td>
                               <a href="index.php?r=<?php echo "$sport2" ?>/page&view=camps">Workshops and Camps</a>
                           </td>
                       </tr>
                   </table>
               </div>
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
                               <a href="index.php?r=<?php echo "$sport2" ?>/contact">Contact</a>
                           </td>
                       </tr>
                       <tr>
                           <td>
                               <a href="index.php?r=<?php echo "$sport2" ?>/team&sport=<?php echo "$sport2" ?>">Team</a>
                           </td>
                       </tr>
                       <tr>
                           <td>
                               <a href="index.php?r=<?php echo "$sport2" ?>/halloffame">Hall of Fame</a>
                           </td>
                       </tr>
                   </table>
               </div>
           </div>
       </div>
       <div class="panel panel-default">
           <div class="panel-heading">
               <h4 class="panel-title">
                   <a href="index.php?r=<?php echo "$sport2" ?>/gallery">
                   Gallery</a>
               </h4>
           </div>
       </div>
   </div>           
</aside>      <!-- /Sidebar -->