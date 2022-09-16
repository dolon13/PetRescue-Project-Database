<?php 
include "../adoption/config.php";

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $owner = $_POST['owner'];
    $contact = $_POST['owner_no'];
    $address = $_POST['address'];
    $medical = $_POST['medical'];
    $sql = "UPDATE pet_info SET pet_name='$name',pet_age='$age',pet_owner='$owner',contact_no='$contact',address='$address',medical_condition='$medical' WHERE id='$id' ";
    
    $result = mysqli_query($conn,$sql);
    if($result==1){
        header("location: index.php");
    }else{
        header("location: update_pets.php?id=".$id);
    }
}