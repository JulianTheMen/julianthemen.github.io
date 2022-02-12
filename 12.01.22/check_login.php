<!DOCTYPE html>
<html>
<head>
  <title>Admin | LLV</title>
  <link href="main.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
  <link rel="icon" href="">
</head>

<!-- navigator -->
<?php include('includes/nav.php'); ?>

<!-- page -->
<div class="page">
<?php      
  include('db_connection.php');  
  $username = $_POST['email'];  
  $password = $_POST['password'];  
     
      #prevent from mysqli injection  
      $username = stripcslashes($username);  
      $password = stripcslashes($password);  
      $username = mysqli_real_escape_string($connection, $username);  
      $password = mysqli_real_escape_string($connection, $password);  
     
      $sql = "select *from admin where email = '$username' and password = '$password'";  
      $result = mysqli_query($connection, $sql);  
      $row    = mysqli_fetch_array($result, MYSQLI_ASSOC);  
      $count  = mysqli_num_rows($result);  
         
      if($count == 1){  
          #If Successfully login (Get Session)
          $_SESSION['username'] = $username;
          echo 'Welcome: ' . $_SESSION['username'] . '!';
          echo '<br><br>
          Cameras, intercom enz.
          <br>
          <a href="agendainput.php">Change agenda</a>';
          #admin panel
      }  
      else{  
          #If entered Wrong Credentials
          echo '<h1>Wrong password</h1>
          <br><a class="return" href= "admin.php">Return to sign in?</a>';  

      }     
?> 
</div> 
<?php include 'includes/pageEnd.php';?>
