<?php
session_start();
include "includes/header.php";
if($_SESSION['status']!='logged'){
    header('location: ../index.php');
}
include "../adoption/config.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = 'SELECT * FROM pet_info WHERE id = '.$id;
    $result = mysqli_query($conn,$sql);
    $pet = mysqli_fetch_assoc($result);
}
?>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="white" data-active-color="danger">
            <div class="logo">
                <a href="https://www.creative-tim.com" class="simple-text logo-mini">
                </a>
                <a class="navbar-brand" href="../index.php" rel="tooltip" title="Rescue and Rehabitation"
                    data-placement="bottom" target="_blank">
                    <span class="pt-3 mt-n5" style="color: red;">P</span>etS
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="index.php">
                        <i class="nc-icon nc-paper"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li >
                        <a href="javascript:;">
                            <i class="nc-icon nc-single-02"></i>
                            <p>Profile</p>
                        </a>
                    </li>
                    <li class="active ">
                        <a href="javascript:;">
                            <i class="nc-icon nc-pin-3"></i>
                            <p>Update Pets</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="javascript:;">Pets:Rescue and Rehabitation</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <form>
                            <div class="input-group no-border">
                                <input type="text" value="" class="form-control" placeholder="Search...">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <i class="nc-icon nc-zoom-split"></i>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <ul class="navbar-nav">
                            <li class="nav-item btn-rotate dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <i class="nc-icon nc-single-02"></i>
                                    <?php echo $_SESSION['name']; ?>
                                    <p>
                                        <span class="d-lg-none d-md-block">Some Actions</span>
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="profile.php">Profile</a>
                                    <a class="dropdown-item" href="logout.php">Log Out</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card card-user">
                            <div class="card-header">
                                <h5 class="card-title">Edit Profile</h5>
                            </div>
                            <div class="card-body">
                                <form action='update_pet_info.php' method='POST'>
                                    <div class="row">
                                        <div class="col-md-5 pr-1">
                                            <div class="form-group">
                                                <label>Company (disabled)</label>
                                                <input type="text" class="form-control" disabled=""
                                                    placeholder="Company" value="Pets">
                                            </div>
                                        </div>
                                        <div class="col-md-3 px-1">
                                            <div class="form-group">
                                                <label>Pet Name</label>
                                                <input type="text" name='name' class="form-control" placeholder="Username"
                                                    value="<?php echo $pet['pet_name']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4 pl-1">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Age</label>
                                                <input type="text" name='age' class="form-control" placeholder="<?php echo $pet['pet_age']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                                <label>Owner Name</label>
                                                <input type="text" name='owner' class="form-control" placeholder="Company"
                                                    value="<?php echo $pet['pet_owner']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6 pl-1">
                                            <div class="form-group">
                                                <label>Owner Contact No.</label>
                                                <input type="text" name='owner_no' class="form-control" placeholder="Last Name"
                                                    value="<?php echo $pet['contact_no']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <textarea name='address'
                                                    class="form-control textarea"> <?php echo $pet['address']; ?> </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Medical Condition</label>
                                                <textarea name='medical'
                                                    class="form-control textarea"><?php echo $pet['medical_condition']; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="update ml-auto mr-auto">
                                            <button type="submit" name='submit' class="btn btn-primary btn-round">Update
                                                Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include "includes/footer.php"; ?>