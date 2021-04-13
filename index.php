<?php include('db.php'); ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<?php 

if (isset($_POST['submit'])) {

  if(empty($_POST['name'])) {
      echo " * Name Field Required" . "<br>";
  }
  if(empty($_POST['age'])) {
      echo " * Age Field Required" . "<br>";
  }
  if(empty($_POST['country'])) {
    echo " * Country Field Required" . "<br>";
  }
  else {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $country = $_POST['country'];
    mysqli_stmt_execute($stmt_insert);
    header("Location: submit.php");    
  }  
} ?>

<form method="POST">
  <input type="text" name="name" placeholder="Your Name">
  <input type="number" name="age" placeholder="Your Age">
  <input type="text" name="country" placeholder="Your Country">
  <input type="submit" name="submit">
</form>

</body>
</html>
