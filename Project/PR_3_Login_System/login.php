<?php
        $succ = false;
        $err = false;
    
        require 'connect.php';
        if($_SERVER['REQUEST_METHOD'] == "POST"){    
            $username = $_POST['username'];    
            $password = $_POST['password'];    
            $sql = "SELECT * FROM `usersdetaild` WHERE username='$username'";

            $res = mysqli_query($conn , $sql);
            $num = mysqli_num_rows($res);
            

            if($num == 1){
                $row = mysqli_fetch_assoc($res);
                if(password_verify($password , $row['password'])){

                    $succ = true;
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['username'] = $username;
                    header("location: index.php");
                }else{
                    $err = true;
                }

            }else{
                $err = true;
            }

        
    
        }
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
                            You Are Login Successfully.
                        </div>
                    ';
                    }
                    if($err){
                        echo '
                            <div class="alert alert-danger mt-2 mb-0" role="alert">
                                Your Account Not Found , Please Check Your username and password.
                            </div>
                        ';
                        }
                ?>
                    <h1 class="py-3 text-center">
                        LOGIN
                    </h1>

                    <form class="col-6" action="login.php" method="post">
                        <div class="mb-3">
                          <label for="username" class="form-label">Username</label>
                          <input type="text" class="form-control" name="username" id="username">
                        </div>
                        <div class="mb-3 ">
                          <label for="password" class="form-label">Password</label>
                          <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </section>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>