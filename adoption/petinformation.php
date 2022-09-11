<?php 
include('config.php');
include('adoptionheader.php');
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


    <section>
        <div class="container py-4">
            <div class="row">
                <div class="col-lg-7 mx-auto d-flex justify-content-center flex-column">
                    <h3 class="text-center">Want To Adopt <?php if($gender=="Female") echo "Her"; else echo "Him"; ?></h3>
                    <form role="form" id="contact-form" method="post" autocomplete="off">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group input-group-dynamic mb-4">
                                        <label class="form-label">First Name</label>
                                        <input class="form-control" aria-label="First Name..." type="text">
                                    </div>
                                </div>
                                <div class="col-md-6 ps-2">
                                    <div class="input-group input-group-dynamic">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" class="form-control" placeholder=""
                                            aria-label="Last Name...">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="input-group input-group-dynamic">
                                    <label class="form-label">Email Address</label>
                                    <input type="email" class="form-control">
                                </div>
                            </div>
                            <div class="input-group mb-4 input-group-static">
                                <label>
                                    Tell Us About Your Home 
                                </label>
                                <textarea name="message" class="form-control" id="message" rows="4"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn bg-gradient-secondary w-100">Apply For Assesment</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- footer section -->
<?php include "adoptionfooter.php"; ?>