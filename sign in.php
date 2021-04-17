
<?php
include './config.php';

if (isset($_POST['send'])){
  $id = $_POST['id'];
$Email =  $_POST['Email'];
$password = $_POST['pass'];

$insert = "INSERT INTO `admin` VALUES (NULL ,$id , '$Email' , $pass)";
$i = mysqli_query($conn, $insert);

if ($i) 
echo "true";
else
  echo "false";
}
?>
<!--
 $_POST = array (
Email => "ahmed@yahoo.com"
password => "pass"
send =>  ""
  )
  -->
  <h1 class="text-center text-info display-2">SIGN IN </h1>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>
<body>
  <div>
    <div class="container col-6 mt-5">
        <form method="POST">
        <div class="form-group">
              <label for="exampleInputEmail1">ID </label>
              <input type="numder" name="id" class="form-control" id="exampleInputid1">
            </div>
            
            
            <div class="form-group">
              <label for="exampleInputEmail1">Email adress </label>
              <input type="text" name="Email" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" name = "send" class="btn btn-dark">Submit</button>
            
            <a class="sign in-item" href="./sign up.php">sign up</a>

            <a class="p-2 mb-2 bg-success text-dark" href="./table.php">show table </a>
            <td><a class="p-2 mb-2 bg-succes text-dark" href="./cart.php">my cart</a>
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16" >
  <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
</svg>
          </form>
          
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
  </label>
  </body>
</div>
</html>

