<?php 
include "../adoption/config.php";

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $pet_id = $_POST['pet_id'];
    $status = $_POST['status'];
    
    if($status == "Qualified"){
        $sql = "UPDATE pet_info SET adoption_status='adopted' WHERE id='".$pet_id."'";
        $res = mysqli_query($conn,$sql);
        
    }
    if($status == "Banned"){
        $sql = "UPDATE pet_info SET adoption_status='unadopted' WHERE id='".$pet_id."'";
        $res = mysqli_query($conn,$sql);
        
    }
    $sql = "UPDATE for_review SET status='$status' WHERE id='$id' ";
    
    $result = mysqli_query($conn,$sql);
    if($result==1){
        header("location: index.php");
    }else{
        header("location: review.php");
    }

}