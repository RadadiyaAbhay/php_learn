<?php
    require '../connect.php';
    session_start();
    if((!isset($_SESSION['loggedinadmin'])) || (isset($_SESSION['loggedinadmin']) != true)){
        header("location: adminlogin.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apni Notes || Welcome - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/cdn.datatables.net_1.13.6_css_jquery.dataTables.min.css">
    <link rel="stylesheet" href="../css/style.css">
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
                        <a class="nav-link" href="adminlogout.php">Log Out</a>
                    </li>




                </ul>

            </div>
        </div>
    </nav>

    <main class="px-md-5 px-1">

    <section>
                <div class="container-fluid">
                    <div class="row">
                        <h1 class="text-center pt-5">
                            Admin Panel
                        </h1>
                    </div>
                </div>
            </section>
        <section class="px-md-5 px-1 py-5">
            <div class="container-fluid">
                <div class="row">
                    <table class="table" id="myTable1">
                        <thead>
                            <tr class='text-center'>
                                <th scope="col">Sno</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Username</th>
                                <th scope="col" class="d-none d-md-block">Opening Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM `usersdetaild`";
                            $res = mysqli_query($conn , $sql);
                        
                            $num = mysqli_num_rows($res);
                        
                            
                            for ($i=1; $i <= $num; $i++) {
                                $row = mysqli_fetch_assoc($res); 
                                  echo "
                                  <tr >
                                    <th scope='row'>$i</th>
                                      <td> ". $row['name'] ."</td>
                                      <td>". $row['email'] ."</td>
                                      <td>". $row['username'] ."</td>
                                      <td class='d-none d-md-block'><pre>". $row['currentdate'] ."</pre></td>
                                  </tr>
                                  ";                               
                              }
                        
                        ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="../js/code.jquery.com_jquery-3.7.1.min.js"></script>
    <script src="../js/cdn.datatables.net_1.13.6_js_jquery.dataTables.min.js"></script>
    <script>
    let table = new DataTable('#myTable1');
    </script>

</body>

</html>