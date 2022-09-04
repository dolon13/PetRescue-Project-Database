<?php 
include('config.php');
$id = $_GET['id'];
    $sql = "SELECT * FROM pet_info WHERE id = '$id'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $id = $row['id'];
    $name = $row['pet_name'];
    $age = $row['pet_age'];
    $gender = $row['pet_gender'];
    $owner = $row['pet_owner'];
    $type = $row['pet_type'];
    $adoption_status = $row['adoption_status'];
    $decription = $row['medical_condition'];
?>


<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/logos/gray-logos/Creative-Tail-Animal-dog.svg.png">
    <link rel="icon" type="image/png" href="./assets/img/logos/gray-logos/Creative-Tail-Animal-dog.svg.png">

    <title>pets</title>

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="./assets/css/material-kit.css?v=3.0.4" rel="stylesheet" />

</head>

<body class="index-page bg-gray-200">
    <!-- -------- START HEADER 1 w/ text and image on right ------- -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark navbar-absolute bg-transparent shadow-none">
            <div class="container">
                <a href="index.php" class="navbar-brand" style="font-size: 24px;"><span
                        style="color: red;">P</span>etS</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-header-2"
                    aria-controls="navbar-header-2" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar-header-2">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="javascript:;">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="javascript:;">
                                About Us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="javascript:;">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="page-header min-vh-50" style="background-image: url(&#39;./assets/img/examples/pets.jpg&#39;);"
            loading="lazy">
            <span class="mask bg-gradient-dark opacity-8"></span>
        </div>
    </header>
    <!-- -------- END HEADER 1 w/ text and image on right ------- -->

    <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6 mb-4">

        <section class="py-sm-7 py-5 position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-12 mx-auto">
                        <div class="mt-n8 mt-md-n9 text-center">
                            <?php if($type == "Dog"){
                                echo '<img class="avatar avatar-xxl shadow-xl position-relative z-index-2" src="./assets/img/dog.jpg" alt="bruce" loading="lazy">';
                            }else{
                                echo '<img class="avatar avatar-xxl shadow-xl position-relative z-index-2" src="./assets/img/cat.png" alt="novelty" loading="lazy">';
                            } ?>
                        </div>
                        <div class="row py-5">
                            <div class="col-lg-7 col-md-7 z-index-2 position-relative px-md-2 px-sm-5 mx-auto">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <h3 class="mb-0"><?php echo $name; ?></h3>
                                    <div class="d-block">
                                    <?php if($adoption_status == "unadopted"){
                                        echo "<span class='badge bg-danger text-white'>Unadopted</span>";
                                    } else {
                                        echo "<span class='badge bg-success text-white'>Adopted</span>";
                                    }?>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-auto">
                                        <span class="h6">Age</span>
                                        <span><?php echo $age; ?></span>
                                    </div>
                                    <div class="col-auto">
                                        <span class="h6">Gender</span>
                                        <span> <?php echo $gender; ?></span>

                                    </div>
                                    <div class="col-auto">
                                        <span class="h6">Owner</span>
                                        <span><?php echo $owner; ?></span>
                                    </div>
                                </div>
                                <p class="text-lg mb-0">
                                    <?php echo $decription; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- footer section -->
    <?php include "adoptionfooter.php"; ?>