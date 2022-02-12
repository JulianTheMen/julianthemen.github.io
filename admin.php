<!-- page start -->
<?php
   session_start();
   $_SESSION['pageName'] = "Admin";
   include 'includes/pageStart.php';

   //scripts
   echo '<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>';

   // nav
   include 'includes/nav.php' 
?>

   	<div class="page">
      <div class="container">
         <div class="row content">
            <div class="col-md-6">
               <h3 class="signin-text mb-3">Sign In | LLV</h3>
               <br>
               <form action="check_login.php" method="post" autocomplete="off">
                  <div class="form-group">
                     <label for="email"><div class="logintext">Email</div></label>
                     <input type="email" name="email" class="form-control" required>
                  </div>
                  <div class="form-group">
                     <label for="password"><div class="logintext">Password</div></label>
                     <input type="password" name="password" class="form-control" required>
                  </div>
                   <input type="submit" name="login" class="btn-class" value="Login">
               </form>
            </div>
         </div>
      </div>
     </div>

<?php include 'includes/pageEnd.php';?>







      