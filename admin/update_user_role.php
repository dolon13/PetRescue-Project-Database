<?php 
include "../adoption/config.php";

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $role = $_POST['role'];
    $sql = "UPDATE users SET role='$role' WHERE id='$id' ";
    
    $result = mysqli_query($conn,$sql);
    if($result==1){
        header("location: index.php");
    }else{
        header("location: user_update.php?id=".$id);
    }
}