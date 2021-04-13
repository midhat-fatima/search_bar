<?php echo "FORM SUBMITTED" . "<br>"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    table,tr,th,td {
      border: 1px solid grey;
    }
  </style>
</head>
<body>

<h2>Customers List</h2>

<form method="POST">
  <input type="text" name="search" placeholder="Search for names...">
  <input type="submit" name="submit" value="search">
</form> <?php

if(isset($_POST['search'])) {
    $searching = $_POST['search'];
    $query = "SELECT * FROM `searching` WHERE CONCAT(ID,user_name,age,country) LIKE '%".$searching."%'";
    $search_result = filterTable($query); 
}
else {
    $query = "SELECT * FROM `searching`";
    $search_result = filterTable($query);
}
function filterTable($query) {
    $conn = mysqli_connect("localhost", "root", "", "users");
    $filter_Result = mysqli_query($conn, $query);
    return $filter_Result;
} ?>
<table>
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Age</th>
    <th>Country</th>
  </tr> <?php 
while($row = mysqli_fetch_array($search_result)) {?>
  <tr>
    <td><?php echo $row['ID'];?></td>
    <td><?php echo $row['user_name'];?></td>
    <td><?php echo $row['age'];?></td>
    <td><?php echo $row['country'];?></td>
  </tr> <?php
} ?>
</table>
</body>
</html>