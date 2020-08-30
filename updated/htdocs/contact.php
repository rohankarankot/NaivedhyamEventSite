<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Contact</title>
  <!-- MDB icon -->
 <?php include 'includes/links.php';
  $page = 'contact';?>
</head>
<body >

  <!-- Start your project here-->  
 <?php include 'includes/navbar.php'; ?><br>
 <nav class=" col-7 m-auto">
  <h2 align="center" class="text-white">Contact<hr></h2>
</nav><br>
 <div class="container row m-auto text-center">

   <div class="col-md-6 col-sm-6 ">
     <h3 class="text-white">By Call</h3><a  data-toggle="modal" data-target="#modelcall">
     <img src="img/call.png" id="callimg"><br>
     Click here to contact...</a><hr>
   </div>
   <div class="col-md-6 col-sm-6 "  >
    <h3 class="text-white">By Whatsapp</h3><a  data-toggle="modal" data-target="#modelwhatsapp">
     <img src="img/whatsapp.png" id="callimg"><br>
     Click here to contact...</a><hr>
   </div>
 </div><br>
  <!-- End your project here-->

  <!-- jQuery --><br><br><br>
<?php include 'includes/footer.php'; ?>  
<?php include 'includes/jslinks.php'; ?>
<!-- Modal -->
<div class="modal fade" id="modelcall" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">By Call</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p style="color: black;text-align: center;">click to continue</p>
        <div class="container row  text-center">

          <div class="col-md-6">
            <a href="tel:7558310113" style="color: black;">
            <h4 ><i class="fas fa-phone-alt"></i> Shubham </h4>
            </a>
          </div>
        
      <div class="col-md-6">
        <a href="tel:8657514830" style="color: black;">
        <h4 ><i class="fas fa-phone-alt"></i> Durgaprasad </h4>
        </a>
      </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="modelwhatsapp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">By Whatsapp</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p style="color: black;text-align: center;">click to continue</p>
        <div class="container row  text-center">

          <div class="col-md-6">
            <a href="//api.whatsapp.com/send?phone=917558310113&text=Hey Shubham... regarding an Event..." style="color: black;">
            <h4 ><i class="fab fa-whatsapp"></i> Shubham </h4>
            </a>
          </div>
        
      <div class="col-md-6">
        <a href="//api.whatsapp.com/send?phone=8657514830&text=Hey Durgaprasad... regarding an Event..." style="color: black;">
        <h4 ><i class="fab fa-whatsapp"></i> Durgaprasad </h4>
        </a>
      </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
</div>
</body>
</html>
