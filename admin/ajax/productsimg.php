<?php

include('../../config/connection.php');

$id =  $_GET['id'];


$query = "SELECT productimg FROM products WHERE id = $id";
$result = mysqli_query($dbc, $result);


$data - mysqli_fetch_assoc($result);

?>

<img src ="../uploads/<?php echo $data['productimg']; ?>">
