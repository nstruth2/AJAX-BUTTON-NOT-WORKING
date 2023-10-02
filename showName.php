<?php
include 'database.php';
var_dump($_POST);
$idSelected = $_POST['identification'];
$query = $con->prepare("SELECT name FROM crud WHERE id=?"); // prepate a query
$query->bind_param('i', $idSelected); // binding parameters via a safer way than via direct insertion into the query. 'i' tells mysql that it should expect an integer.
$query->execute(); // actually perform the query
$result = $query->get_result(); // retrieve the result so it can be used inside PHP
$r = $result->fetch_array(MYSQLI_ASSOC); // bind the data from the first result row to $r
echo $r['name']; // will return the price
?>