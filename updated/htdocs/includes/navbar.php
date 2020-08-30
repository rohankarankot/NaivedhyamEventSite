
<nav class="navbar navbar-expand-lg navbar-dark indigo z-depth-2" id="top">
<nav class=" container ">

  <!-- Navbar brand -->
  <a class="navbar-brand" href="index.php">
  <!-- Naivedhyam Events -->
  <img src="img/logo1.png" width="80px" class="rounded">
</a>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

    <!-- Links -->
    <ul class="navbar-nav ml-auto">

      <li class="nav-item  <?php if($page =='index'){echo'active';}?>" id="hidehome">
        <a class="nav-link" href="index.php"><i class="fas fa-home"></i>&nbsp;Home
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link waves-effect waves-light" href="//api.whatsapp.com/send?phone=917558310113&text=Hey... regarding an Event...">
          &nbsp;<i class="fab fa-whatsapp" ></i>Whatsapp&nbsp;
        </a>
      </li>
       <li class="nav-item">
        <a class="nav-link waves-effect waves-light" href="https://www.facebook.com/Naivedyam-Events-115383266857252/">
          <i class="fab fa-facebook-square"></i>Facebook&nbsp;
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link waves-effect waves-light" href="https://www.instagram.com/naivedyam_events/">
          <i class="fab fa-instagram"></i>Instagram&nbsp;
        </a>
      </li>
      
      
      <li class="nav-item  <?php if($page =='team'){echo'active';}?>">
        <a class="nav-link" href="team.php"><i class="fas fa-users"></i>&nbsp;Our Team</a>
      </li>
      <li class="nav-item <?php if($page =='contact'){echo'active';}?>">
        <a class="nav-link" href="contact.php"><i class="fas fa-phone-alt"></i>&nbsp;Contact</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#centralModalSm"><i class="fas fa-user-tie"></i>&nbsp;Dev</a>
      </li>
      <!-- Dropdown -->
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->

    </ul>
    <!-- Links -->

   
  </div>
  <!-- Collapsible content -->

</nav>
</nav>
