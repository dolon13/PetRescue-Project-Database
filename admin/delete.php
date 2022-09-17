<?php 
include "../adoption/config.php";
$id = $_GET['id'];
$sql = 'DELETE FROM pet_info WHERE id="'.$id.'"';
$res = mysqli_query($conn,$sql);
header("Location: pets.php");