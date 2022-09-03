<!-- <?php 
    // if(isset($_POST['signup']))
    // {
    //     echo $_POST['name'] . "<br>";
    //     if(isset($_POST['cat']))
    //     {
    //         echo "cat _ " . $_POST['cat'];
    //     }
    //     else
    //         echo "undefined cat";
    //     // echo $_POST['dog'];
    // }
?> -->
<?php 
    include"includes/header.php"; 
    function getBtnName()
    {
        return 'Login';   
    }
    function getBtnPath()
    {
        return 'login.php';
    }
?>
<!-- registration section starts -->
<div class="container">
    <div class="row mt-5">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card">
                <h5 class="card-header">Registration</h5>
                <div class="card-body">
                  <form action="#" method="post">
                    <div class="form-group">
                        <label for="#name">Full Name:</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="#mail">Email:</label>
                        <input type="email" class="form-control" name="email" id="mail" required>
                    </div>
                    <div class="form-group">
                        <label for="#addr">Address:</label>
                        <input type="text" id="addr" class="form-control" name="addr"required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-6">
                            <label for="#phone">Phone No.</label>
                            <input type="number" id="phone" class="form-control" name="mobile" required>
                          </div>
                        <div class="form-group col-6">
                            <label>I have a pet:</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="cat" id="cat">
                                <label class="form-check-label" for="cat">
                                  Cat
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="dog" id="dog">
                                <label class="form-check-label" for="dog">
                                  Dog
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="other">
                                <label class="form-check-label" for="other">
                                  Others
                                </label>
                                <div class="form-row">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="#password">Enter a password:</label>
                        <input type="password" class="form-control" name="password" id="password" required>
                    </div>
                    <div class="form-group">
                        <label for="#cpassword">Confirm password:</label>
                        <input type="password" id="cpassword" class="form-control" name="cpassword" required>
                    </div>
                    <div class="form-row">
                        <button href="#" class="btn btn-primary" name="signup" type="submit">Sign up</button>
                        <p>Already a member?</p>
                        <a href="#" class="link" name="login" type="submit">Sign in</a>
                    </div>
                  </form>
                </div>
              </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
<!-- registration section ends -->

<?php include"includes/footer.php" ?>