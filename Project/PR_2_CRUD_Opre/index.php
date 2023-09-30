<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "MyNotes";

$conn = mysqli_connect($servername , $username , $password ,$database);


?>

<?php
// Create Note

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $tit = $_POST['title'];
  $descr = $_POST['description'];

for ($i=0; $i < 500000; $i++) { 
  # code...
  $sql1 = "INSERT INTO `notes` (`title` , `description`, `updateDate`) VALUES ('$tit','$descr', current_timestamp())";
  $res1 = mysqli_query($conn , $sql1);
}

  ref();

}
?>


  



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Notes || CRUD Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="cdn.datatables.net_1.13.6_css_jquery.dataTables.min.css">
</head>
<body >
    <header>
        <nav class="navbar  navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
            <a class="navbar-brand" href="./index.php">My Notes</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
              </ul>
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </nav>
    </header>

    <main>
        <section>
            <div class="container">
                <div class="row ">
                    <form action="index.php" method="post">

                                <label for="title" class="form-label mt-5">Title</label>
                                <input type="text" class="form-control mb-3" id="title" name="title">

                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control mb-3" id="description" rows="3" name="description"></textarea>
                                <button type="submit" class="btn btn-primary">Add Note</button>
                    </form>
                </div>
            </div>
        </section>
        <section class="mt-5">
            <div class="container">
                <div class="row">
                    <table class="table" id="myTable">
                      <thead>
                        <tr class='text-center'>
                          <th scope="col">S No.</th>
                          <th scope="col">Title</th>
                          <th scope="col">Description</th>
                          <th scope="col">Last Updated Date</th>
                          <th scope="col" class="text-end">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                            // $sql = "CREATE DATABASE MyNotes";
                            // $sql = "CREATE TABLE `notes` (`sno` INT(11) NOT NULL AUTO_INCREMENT, `title` VARCHAR(30) NOT NULL , `description` VARCHAR(100) NOT NULL, `updateDate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY (`sno`))";

                            
                            $sql = "SELECT * FROM `notes`";
                            $res = mysqli_query($conn , $sql);
                            $num = mysqli_num_rows($res);

                              
                              for ($i=1; $i <= $num; $i++) { 
                                 $row = mysqli_fetch_assoc($res); 
                                  echo "
                                  <tr >
                                  <th scope='row '>$i</th>
                                      <td class='col-3'> ". $row['title'] ."</td>
                                      <td class='col-4'>". $row['description'] ."</td>
                                      <td class='col-2'><pre>". $row['updateDate'] ."</pre></td>
                                      <td class='col-2 text-end'>
                                      
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="code.jquery.com_jquery-3.7.1.min.js"></script>
    <script src="cdn.datatables.net_1.13.6_js_jquery.dataTables.min.js"></script>
    <script>
        let table = new DataTable('#myTable');
    </script>
    <?php
    function ref(){

      header("Location: index.php");
      exit();
    }
    ?>
</body>
</html>