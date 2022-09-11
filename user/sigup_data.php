<?php 
    include("../adoption/config.php");

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $sql = "INSERT INTO users (name, email, password) 
        VALUES('$name', '$email', '$pass')";

        $result = mysqli_query($conn,$sql);
        if ($result == 1){
            echo "inserted successfully please go back to login";
            header("location: index.php");
        }else{
            header("location: signup.php");
        }
    }
    ?>