<?php include "adoptionheader.php";
      include "config.php";
      if (isset($_POST['submit'])){
        $type = $_POST['type'];
        $type = strtolower($type);
        $type = ucfirst($type);
        $sql = "SELECT * FROM pet_info WHERE (pet_type like '%".$type."%') or (address like '%".$type."%')";
        $result = mysqli_query($conn,$sql);
      } else
      {
        $sql = "SELECT * FROM pet_info";
        $result = mysqli_query($conn,$sql);
      }

?>


        <div class="page-header min-vh-100" style="background-image: url(&#39;./assets/img/examples/pets.jpg&#39;);"
            loading="lazy">
            <span class="mask bg-gradient-dark opacity-9"></span>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7 d-flex justify-content-center flex-column">
                        <h1 class="text-white mb-4"><span style="color: red;">P</span>etS</h1>
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-8">

                                    <div class="input-group input-group-outline">
                                        <label class="form-label">Location/Animal Type</label>
                                        <input type="text" name='type' class="form-control mb-sm-0 text-primary">
                                    </div>
                                    <!-- <br> -->
                                    <!-- <div class="input-group input-group-outline">
                                        <label class="form-label">Location...</label>
                                        <input type="text" class="form-control mb-sm-1">
                                    </div> -->
                                </div>
                                <div class="col-4 ps-0">
                                    <input type="submit"
                                        class="btn bg-gradient-info mb-0 h-100 position-relative z-index-2" name="submit" value="Submit">
                                </div>

                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- -------- END HEADER 1 w/ text and image on right ------- -->

<div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
    <!-- Section with four info areas left & one card right with image and waves -->
    <section class="py-7">
        <div class="container">
            <div class="row align-items-center">
                <?php 
            

            while($row = mysqli_fetch_assoc($result)) {
                ?>
                <br>
                <div class="col-lg-4 p-4">
                    <div class="card">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <a class="d-block blur-shadow-image">
                                <?php if ($row['pet_type']=='Dog'){
                                   echo '<img src="./assets/img/dog.jpg" alt="img-colored-shadow" class="img-fluid border-radius-lg">';
                                   } else {
                                    echo '<img src="./assets/img/cat.png" alt="img-colored-shadow" class="img-fluid border-radius-lg">';
                                }?>
                            </a>
                        </div>
                        <div class="card-body text-right">
                            <h5 class="font-weight-normal">
                                <a href="javascript:;"><span style="color: red;">Nickname:</span>
                                    <?php echo $row['pet_name']; ?></a>
                            </h5>
                            <h6 class="font-weight-normal">
                                <a href="javascript:;"><span style="color: red;">Age:</span>
                                    <?php echo $row['pet_age']; ?> </a>
                            </h6>
                            <p class="mb-0">
                                <?php echo $row['pet_owner']; ?><br>
                                <?php echo $row['contact_no']; ?> <br>
                                <?php echo $row['address']; ?> <br>
                                <?php echo $row['medical_condition']; ?>
                            </p>
                            <a type="button" href="petinformation.php?id=<?php echo $row['id']; ?>"
                                class="btn bg-gradient-info btn-sm mb-0 mt-3">Find out more</a>
                        </div>
                    </div>
                </div>
                <br>
                <?php } ?>


            </div>
        </div>
    </section>
    <!-- END Section with four info areas left & one card right with image and waves -->
</div>
<!-- footer section -->
<?php include "adoptionfooter.php"; ?>