<?php 
include "../adoption/config.php";

if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $type = $_POST['type'];
    $address = $_POST['address'];
    $medical = $_POST['medical'];
    $sql = "INSERT INTO pet_info (pet_name,pet_age,pet_owner,pet_gender,contact_no,pet_type,address,medical_condition) values('$name','$age','$owner','$gender','$contact','$type','$address','$medical')";
    
    $result = mysqli_query($conn,$sql);
    if($result==1){
        header("location: add_pets.php");
    }else{
        header("location: index.php.php");
    }
}
?>