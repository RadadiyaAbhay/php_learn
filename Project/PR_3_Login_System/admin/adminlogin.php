<?php
        $succ = false;
        $err = false;
    
        require '../connect.php';
        if($_SERVER['REQUEST_METHOD'] == "POST"){    
            $admin_username = $_POST['admin_username'];    
            $password = $_POST['password'];    
            $security_answer = $_POST['security_answer'];    

            $sql = "SELECT * FROM `admin7855` WHERE admin_username = '$admin_username'";

            $res = mysqli_query($conn , $sql);
            $num = mysqli_num_rows($res);
            

            if($num == 1){
                $row = mysqli_fetch_assoc($res);
                if((password_verify($password , $row['password'])) && (password_verify($security_answer , $row['security_answer']))){

                    $succ = true;
                    session_start();
                    $_SESSION['loggedinadmin'] = true;
                    $_SESSION['username'] = $admin_username;
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary px-md-5 px-1">
        <div class="container-fluid">
            <a class="navbar-brand fw-bolder" href="index.php">Apni Notes</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="adminlogin.php">Login</a>
                    </li>





                </ul>

            </div>
        </div>
    </nav>

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
                        ADMIN LOGIN
                    </h1>

                    <form class="col-6" action="adminlogin.php" method="post">
                        <div class="mb-3">
                            <label for="admin_username" class="form-label">Username</label>
                            <input type="text" class="form-control" name="admin_username" id="admin_username">
                        </div>
                        <div class="mb-3 ">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="mb-3 ">
                            <label for="security_answer" class="form-label">Security Answer</label>
                            <input type="password" class="form-control" id="security_answer" name="security_answer">
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </section>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>