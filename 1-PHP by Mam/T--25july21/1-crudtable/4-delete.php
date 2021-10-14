<?php


include  '1-conn.php';


$id = $_GET['id'];

$sql=" DELETE FROM `crud` WHERE id = $id";


mysqli_query($conn,$sql);


header('location:3-display.php');
?>