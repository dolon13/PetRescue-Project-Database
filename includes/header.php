<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pets</title>
    <link rel="shortcut icon" href="images/icons/Creative-Tail-Animal-dog.svg.png" type="image/x-icon">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/fonts/fontawesome.min.css">
</head>

<body>
    <!-- navigation bar starts -->
    <header>
        <nav class="main-nav container-fluid bg-dark">
            <div class="container">
                <div class="navbar navbar-expand-md navbar-dark">
                    <!-- logo  -->
                    <a href="index.php" class="navbar-brand" style="font-size: 24px;"><span style="color: red;">P</span>etS</a>

                    <!-- responsive toggle icon -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapse1" aria-controls="collapse1" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- nav items -->
                    <div class="collapse navbar-collapse" id="collapse1">
                        <ul class="navbar-nav mr-auto text-uppercase font-weight-light">

                            <!-- <li class="nav-item dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                                <a class="nav-link text-white dropdown-toggle" href="#">Adopt a pet</a>
                            </li> -->
                            <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" style="font-size: smaller;" href="">Adopt a cat</a>
                                <a class="dropdown-item" style="font-size: smaller;" href="">Adopt a dog</a>
                                <a class="dropdown-item" style="font-size: smaller;" href="">Others</a>
                            </div> -->
                            <li class="nav-item"><a class="nav-link text-white" href="adoption/adoptionhome.php">Adoption</a></li>
                            <li class="nav-item"><a class="nav-link text-white" href="#">Rescue/Shelter</a></li>
                            <li class="nav-item"><a class="nav-link text-white" href="shop/shop.html">Shop</a></li>
                        </ul>
                        <li class="nav-item ml-md-auto">
                            <a href= "<?php echo getBtnPath(); ?>" type="button" class="btn btn-secondary p-2" style="font-size: smaller;"><?php echo getBtnName(); ?></a>
                        </li>
                    </div>
                </div>
            </div>
        </nav>
    </header>