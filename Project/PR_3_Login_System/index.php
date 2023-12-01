<?php
    require 'connect.php';
    session_start();
    if((!isset($_SESSION['loggedin'])) || (isset($_SESSION['loggedin']) != true)){
        header("location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apni Notes || Welcome - <?php echo $_SESSION['username'] ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/cdn.datatables.net_1.13.6_css_jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php require 'components/_nav.php' ?>

    <main class="px-md-5 px-1">
        <section class="px-md-5 px-1">
            <div class="container-fluid  pt-5">
                <div class="row justify-content-between">
                    <div class="d-flex aling-items-center justify-content-between">
                        <h4 class="alert-heading text-center">Welcome <?php echo $_SESSION['username'] ?></h4>
                        <a href="addnote.php" class="btn btn-dark"><i class="bi bi-plus-lg"></i> Add Note</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-5 px-md-5 px-1 py-5">
            <div class="container-fluid">
                <div class="row">
                    <table class="table" id="myTable">
                      <thead>
                        <tr class='text-center'>
                          <th scope="col">Sno</th>
                          <th scope="col">Title</th>
                          <th scope="col">Des</th>
                          <th scope="col">Updated Date</th>
                          <th scope="col" class="text-end">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                            
                            $usernote = $_SESSION['username'];
                            $sql = "SELECT * FROM `notes` WHERE `username` = '$usernote'";
                            $res = mysqli_query($conn , $sql);
                            $num = mysqli_num_rows($res);

                              
                              for ($i=1; $i <= $num; $i++) { 
                                 $row = mysqli_fetch_assoc($res); 
                                  echo "
                                  <tr >
                                  <th scope='row '>$i</th>
                                      <td> ". $row['title'] ."</td>
                                      <td>". $row['description'] ."</td>
                                      <td><pre>". $row['updateDate'] ."</pre></td>
                                      <td class='text-end'>
                                      
                                      <a href='edit.php?id=" . $row["sno"] . "' class='btn btn-primary button'>Edit</a> 
                                      <a href='delete.php?id=" . $row["sno"] . "' class='btn btn-primary button'>Delete</a>
                                      
                                      </td>
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
    <script src="js/code.jquery.com_jquery-3.7.1.min.js"></script>
    <script src="js/cdn.datatables.net_1.13.6_js_jquery.dataTables.min.js"></script>
    <script>
    let table = new DataTable('#myTable');
    </script>

</body>

</html>