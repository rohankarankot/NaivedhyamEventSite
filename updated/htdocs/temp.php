<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Home </title>
  <!-- MDB icon -->
 <?php include 'includes/links.php';?>
</head>
<body>

  <!-- Start your project here-->  
 <?php include 'includes/navbar.php'; ?>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#frameModalWarning">Launch
   modal
</button>

 <!-- frame Modal Medium Warning -->
 <div class="modal fade" id="frameModalWarning" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
   aria-hidden="true">
   <div class="modal-dialog modal-notify modal-warning" role="document">
     <!--Content-->
     <div class="modal-content">
       <!--Header-->
       <div class="modal-header">
         <p class="heading lead">Modal Warning</p>

         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true" class="white-text">&times;</span>
         </button>
       </div>

       <!--Body-->
       <div class="modal-body">
         <div class="text-center">
           <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit iusto nulla aperiam blanditiis
             ad consequatur in dolores culpa, dignissimos, eius non possimus fugiat. Esse ratione fuga, enim,
             ab officiis totam.</p>
         </div>
       </div>

       <!--Footer-->
       <div class="modal-footer justify-content-center">
         <a type="button" class="btn btn-warning">Get it now <i class="far fa-gem ml-1 text-white"></i></a>
         <a type="button" class="btn btn-outline-warning waves-effect" data-dismiss="modal">No, thanks</a>
       </div>
     </div>
     <!--/.Content-->
   </div>
 </div>
 <!-- Central Modal Medium Warning-->
  <!-- End your project here-->

  <!-- jQuery -->
<?php include 'includes/footer.php'; ?>  
<?php include 'includes/jslinks.php'; ?>

</body>
</html>
