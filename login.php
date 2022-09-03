<?php 
    include "includes/header.php"; 
    function getBtnName()
    {
        return 'Registration';   
    }
    function getBtnPath()
    {
        return 'registration.php';
    }
?>

<!-- login section starts-->

<div class="container">
    <div class="row m-5">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card">
                <h5 class="card-header">Sign in</h5>
                <div class="card-body">
                  <form action="#" method="post">
                    <div class="form-group">
                        <label for="#mail">Email:</label>
                        <input type="text" id="mail" class="form-control" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="#password">Your password:</label>
                        <input type="password" id="password" class="form-control" name="password" required>
                    </div>
                    <div class="form-row">
                        <button href="#" class="btn btn-primary" name="signup" type="submit">Sign in</button>
                    </div>
                  </form>
                </div>
              </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>

<!-- login section ends -->
<?php include "includes/footer.php"; ?>
