 <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.php">MWBIZ</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>



    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-12">
       <div class="dropdown">
         <img src="image/admin.png"  class="rounded-circle dropdown-toggle" width="40" height="40" data-toggle="dropdown">
    <div class="dropdown-menu dropdown-menu-right" style="width:300px;">
       <span class="dropdown-header text-center"><img src="image/admin.png"  class="rounded-circle " width="100" height="100"><br>

        <strong><?php  if (isset($_SESSION['admin_email'])) : ?>
                   <?php echo $_SESSION['admin_email']; ?>
                   <?php endif ?>
              </strong>
       </span><br>

         <div class="float-left" style="padding-left:10px;">
          <a href="#"   class="btn btn-outline-primary">Profile</a>
          </div>

           <div class="float-right" style="padding-right:10px;">
            
           <a  href="logout.php" class="btn btn-outline-primary">Sign out</a>
          
           </div>

    </div>
  </div>
      
    </ul>



  </nav>