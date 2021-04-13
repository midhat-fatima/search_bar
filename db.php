<?php

$conn = mysqli_connect('localhost', 'root', '', 'users');

if(!$conn) {
    var_dump("Error Code : " . mysqli_connect_errno() . "<br> Error : " . mysqli_connect_error());
}

$sql_insert = "INSERT INTO searching (user_name, age, country) VALUES (?,?,?)";

if($stmt_insert = mysqli_prepare($conn, $sql_insert)) {
    mysqli_stmt_bind_param($stmt_insert, 'sis', $name, $age, $country);
}
else {
    echo "ERROR FOUND IN INSERTING........ " . mysqli_error($conn);
}

$sql_select = "SELECT * FROM searching";
$query = mysqli_query($conn, $sql_select);

// $sql_search = "SELECT * FROM searching WHERE user_name = ?";
// $search_query = mysqli_query($conn, $sql_search);