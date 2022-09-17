<?php
session_start();
include "includes/header.php";
if($_SESSION['status']!='logged'){
    header('location: ../index.php');
}
include "../adoption/config.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $pet_id = $_GET['pet_id'];
    $sql = 'SELECT * FROM for_review WHERE id = '.$id;
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
                    <li>
                        <a href="javascript:;">
                            <i class="nc-icon nc-single-02"></i>
                            <p>Profile</p>
                        </a>
                    </li>
                    <li class="active ">
                        <a href="javascript:;">
                            <i class="nc-icon nc-pin-3"></i>
                            <p>Verify Adoption</p>
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
                                <h5 class="card-title">Change Satus</h5>
                            </div>
                            <div class="card-body">
                                <form action='update_status.php' method='POST'>
                                    <input type='hidden' name='id' value="<?php echo $pet['id']; ?>">
                                    <input type='hidden' name='pet_id' value="<?php echo $pet_id; ?>">
                                    <div class="row">
                                        <div class="col-md-3 px-1">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" name='name' disabled="" class="form-control"
                                                    placeholder="Name" value="<?php echo $pet['fname']." ".$pet['lname']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 pr-1">
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="text" disabled="" class="form-control" value="<?php echo $pet['phone']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Status</label>
                                                <select name="status" id="role" class="form-control">
                                                    <option value="">Select</option>
                                                    <option value="Qualified">Qualified</option>
                                                    <option value="Under Considaration">Under Considaration</option>
                                                    <option value="Banned">Banned</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="update ml-auto mr-auto">
                                            <button type="submit" name='submit' class="btn btn-primary btn-round">Update
                                                Status</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include "includes/footer.php"; ?>