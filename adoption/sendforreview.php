<?php
    include('config.php');
    if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $details = $_POST['details'];
        $id = $_POST['id'];

        $sql = "INSERT INTO for_review (fname,lname, email, phone, details, pet_id) 
        VALUES('$fname', '$lname', '$email', '$phone', '$details','$id')";
        $result = mysqli_query($conn,$sql);

        if ($result == 1){
            echo "Info submitted";
            header("location: petinformation.php?id=".$id);
        }else{
            echo "Something is wrong !!!!!!!!";
            header("location: adoptionhome.php");
        }

    }