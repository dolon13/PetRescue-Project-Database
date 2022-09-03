<?php include "adoptionheader.php";
    include "config.php";
    function getBtnName()
    {
        return 'Registration';   
    }
    function getBtnPath()
    {
        return '../registration.php';
    }
    
?>

<div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
    <!-- Section with four info areas left & one card right with image and waves -->
    <section class="py-7">
      <div class="container">
        <div class="row align-items-center">
          <!-- <div class="col-lg-6">
            <div class="row justify-content-start">
              <div class="col-md-6"> -->
              <!-- ms-auto mt-lg-0 mt-4 -->
        <?php 
            $sql = "SELECT * FROM pet_info";
            $result = mysqli_query($conn,$sql);

            while($row = mysqli_fetch_assoc($result)) {
                ?>
                <br>
          <div class="col-lg-4 p-4">
            <div class="card">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <a class="d-block blur-shadow-image">
                  <img src="./assets/img/examples/dog.jpg" alt="img-colored-shadow" class="img-fluid border-radius-lg">
                </a>
              </div>
              <div class="card-body text-right">
                <h5 class="font-weight-normal">
                  <a href="javascript:;"><span  style="color: red;">Nickname:</span> <?php echo $row['pet_name']; ?></a>
                </h5>
                <h6 class="font-weight-normal">
                  <a href="javascript:;"><span  style="color: red;">Age:</span> <?php echo $row['pet_age']; ?> </a>
                </h6>
                <p class="mb-0">
                <?php echo $row['pet_owner']; ?><br>
                <?php echo $row['contact_no']; ?> <br>
                <?php echo $row['address']; ?> <br>
                <?php echo $row['medical_condition']; ?>
                </p>
                <a type="button" href="petinformation.php" class="btn bg-gradient-info btn-sm mb-0 mt-3">Find out more</a>
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