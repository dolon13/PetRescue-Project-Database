<?php 
    include("../adoption/config.php");
    session_start();
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $sql = "SELECT * FROM users where (email = '$email') and (password = '$pass') and (role != 'inactive')";
        $result = mysqli_query($conn,$sql);

        if (mysqli_num_rows($result)>0){
            echo "Login successfull Thank you";
            $row = mysqli_fetch_assoc($result);
            $_SESSION['name'] = $row['name'];
            $_SESSION['status'] = "logged";
            $_SESSION['role'] = $row['role'];
            header('location: ../admin/');
        }else{
        }
    }
    ?>