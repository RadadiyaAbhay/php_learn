<?php
    $succ = false;
    $err = false;

    require 'connect.php';
    if($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_POST['name'];    
    $email = $_POST['email'];    
    $username = $_POST['username'];    
    $password = $_POST['password'];    
    $cpassword = $_POST['cpassword'];

    
    $existsql = "SELECT * FROM `usersdetaild` WHERE  username='$username'";
    $res1 = mysqli_query($conn , $existsql);
    $num1 = mysqli_num_rows($res1);
        if($num1 > 0){
            $err = 'Username Already Exists.';
        }else{
            
            if($password == $cpassword){
                $hash = password_hash($password , PASSWORD_DEFAULT);
                $sql = "INSERT INTO `usersdetaild` (`name`, `email`, `username`, `password`, `currentdate`) VALUES ('$name', '$email', '$username', '$hash', current_timestamp())";
                $res = mysqli_query($conn , $sql);
                
                $succ = true;

                header("location: login.php");
                exit;
            }else{
                $err = 'Your Password and Confirm Password not Match.';
            }
        }



    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require 'components/_nav.php' ?>    

    <main>
        <section>
            <div class="container">
                <div class="row justify-content-center">
                <?php
                    if($succ){
                    echo '
                        <div class="alert alert-success mt-2 mb-0" role="alert">
                            Your Account Created Succesfully.
                        </div>
                    ';
                    }
                    if($err){
                        echo "
                            <div class='alert alert-danger mt-2 mb-0' role='alert'>
                                $err
                            </div>
                        ";
                    }

                ?>
                    <h1 class="py-3 text-center">
                        SIGN UP
                    </h1>

                    <form class="col-6" action="signup.php" method="post">
                        <div class="mb-3">
                          <label for="name" class="form-label">Name</label>
                          <input type="text" maxlength="100" class="form-control" name="name" id="name">
                        </div>
                        <div class="mb-3 ">
                          <label for="email" class="form-label">Email</label>
                          <input type="email" maxlength="100" class="form-control" id="email" name="email">
                        </div>
                        <div class="mb-3">
                          <label for="username" class="form-label">Username</label>
                          <input type="text" maxlength="100" class="form-control" name="username" id="username">
                        </div>
                        <div class="mb-3 ">
                          <label for="password" class="form-label">Password</label>
                          <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="mb-3 ">
                          <label for="cpassword" class="form-label">Confirm Password</label>
                          <input type="password" class="form-control" id="cpassword" name="cpassword">
                          <div id="emailHelp" class="form-text">Please Enter Password and Confirm Password same as.</div>
                        </div>
                        <button type="submit" class="btn btn-primary">Sign Up</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>