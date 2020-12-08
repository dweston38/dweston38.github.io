<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Register Page</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-6 col-md-auto">
                <div class="panel panel-primary">
                    <div class="alert alert-info text-center">
                        <h2>Registration Page</h2>
                    </div>
                    <div class="panel-body">
                        <form action="registrationdata.php" method="POST">

                            <div class="form-group">
                                <label for="firstname">First Name</label>
                                <input type="text" class="form-control" name="firstname" required>
                            </div>

                            <div class="form-group">
                                <label for="lastname">Last Name</label>
                                <input type="text" class="form-control" name="lastname" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>

                            <div class="form-group">
                                <label for="phonenumber">Phone Number</label>
                                <input type="text" class="form-control" name="phonenumber" required>
                            </div>

                            <div class="form-group">
                                <label for="streetaddress">Street Address</label>
                                <input type="text" class="form-control" name="streetaddress" required>
                            </div>

                            <div class="form-group">
                                <label for="streetaddress2">Street Address2</label>
                                <input type="text" class="form-control" name="streetaddress2" required>
                            </div>

                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" class="form-control" name="city" required>
                            </div>

                            <div class="form-group">
                                <label for="state">State</label>
                                <select name="formState" class="form-control" required>
                                    <option value="">Select...</option>
                                    <option value="M">Florida</option>
                                    <option value="F">Georgia</option>
                                </select>
                            </div>
                    </div>

                    <div class="form-group">
                        <label for="postal">Postal</label>
                        <input type="text" class="form-control" name="postal" required>
                    </div>

                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <div>
                            <label for="male" class="radio-inline"><input type="radio" name="gender" id="male"> Male</label>
                            <label for="female" class="radio-inline"><input type="radio" name="gender" id="female"> Female</label>
                            <label for="other" class="radio-inline"><input type="radio" name="gender" id="other"> Other</label>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="notes">Notes and special needs</label>
                        <div>
                            <textarea name="comment" rows="4" cols="40" class="form-control"><?php echo $comment; ?></textarea>
                        </div>
                        <br>
                        <br>

                        <div class="form-group">
                            <label for="notes">I agree to all registration terms</label>
                            <div>
                                <input type="radio" name="agree" class="radio-inline" <?php if (isset($agree) && $agree == "agree") echo "checked"; ?> value="agree"> Agree
                                <br>
                                <br>
                                <input type="radio" name="Disagree" class="radio-inline" <?php if (isset($Disagree) && $agree == "Disagree") echo "checked"; ?> value="Disagree"> Disagree
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary"> Submit </button>
                        <br>
                        <br>

                        <p>Already a user? <a href="login.php"><b>Log In</b></a></p>

                        </form>

                    </div>
                    <div class="panel-footer text-right">
                        <small>&copy; DWeston</small>
                    </div>
                </div>
            </div>
        </div>
    </div>



    </div>

</body>

</html>