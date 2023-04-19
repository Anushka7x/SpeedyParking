
<!DOCTYPE html>
<html lang="en">
    <?php
        include 'action.php';
        include 'auth.php';
    ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Registration</title>

    <!-- Bootstrap -->

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="./Style.css">
</head>

<body class="loginbody">
    <div class="logo-container">
        <img class="logo-img" src="speedy-parking-low-resolution-logo-color-on-transparent-background.png" alt="Logo">
    </div>
    <div class="container Amain">
        <div class="row">
            <div class="SignUp">
                <div class="container">

                    <div class="panel-body sign">
                        <h2 class="panel-title" style="font-size:25px; font-weight:bold;text-align:center;">
                            Registration</h2>
                        <form method="post" action="action.php" enctype="multipart/form-data">
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="username">Username:</label>
                                    <input type="text" class="form-control" id="username" name="username" required>
                                </div>
                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone:</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" required>
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="address">Address:</label>
                                    <input type="text" class="form-control" id="address" name="address" required>
                                </div>
                               
                                <div class="form-group">
                               <label for="profiletype">Role:</label>
                                  <div class="form-group">
                                    <label><input type="radio" name="profile_type" value="Admin">Admin</label>
                                     <label><input type="radio" name="profile_type" value="Staff">Staff</label>
                                </div>
                              </div>                    
                                <div class="form-group">
                                    <label for="verification_type">Verification Type:</label>
                                    <select class="form-group" name="verification_type" id="verification_type">
                                        <option value="">Select Verification Type</option>
                                        <option value="passport">Passport</option>
                                        <option value="national_id">National ID</option>
                                        <option value="driver_license">Driver's License</option>
                                    </select>

                                    <div class="form-group" id="proof" style="display: none;">
                                        <label for="proof">Upload Verification Proof:</label>
                                        <input type="file" name="verification_proof" id="verification_proof">
                                    </div>
                                    <script>
                                        const verificationType = document.getElementById('verification_type');
                                        const Proof = document.getElementById('proof');

                                        verificationType.addEventListener('change', () => {
                                            if (verificationType.value === 'passport' || verificationType.value === 'national_id') {
                                                Proof.style.display = 'block';
                                            } else {
                                                Proof.style.display = 'none';
                                            }
                                        });
                                    </script>

                                </div>
                                <div class="form-group">
                                    <label for="password">Password:</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                                <button type="submit" class="btn btn-primary" name="register">Submit</button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>

</html>