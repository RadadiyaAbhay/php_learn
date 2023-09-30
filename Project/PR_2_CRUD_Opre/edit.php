<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Notes || Update Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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

        <?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $database = "MyNotes";

          $conn = mysqli_connect($servername , $username , $password ,$database);

          // Edit Note
          if (isset($_GET['id'])) {
              $id = $_GET['id'];

              $sql = "SELECT * FROM `notes` WHERE `sno` = $id";
              $re = mysqli_query($conn , $sql);
          
              $row = mysqli_fetch_assoc($re); 
              // echo var_dump($row);
          
          
              echo "
                <section>
                <div class='container'>
                    <div class='row '>
                        <form action='edit.php' method='post'>
                        <input type='number' hidden class='form-control mb-3' id='sno' name='sno' value=" . $row['sno'] .">
                                    <label for='title' class='form-label mt-5'>Title</label>
                                    <input type='text' class='form-control mb-3' id='title'  value='".$row['title'] ."' name='title'/>
                                    <label for='description' class='form-label'>Description</label>
                                    <textarea class='form-control mb-3' id='description' rows='3' name='description' >" . $row['description'] ."</textarea>
                                    <button type='submit' class='btn btn-primary'>Update Note</button>
                                    <a class='btn btn-primary' href='index.php'>Exit</a>
                        </form>
                    </div>
                </div>
                </section>
                ";
          
          }

          if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $id = $_POST['sno'];
            $tit = $_POST['title'];
            $descr = $_POST['description'];
          
            // echo $id;
            $sql1 = "UPDATE `notes` SET `title` = '$tit', `description` = '$descr' , `updateDate` = current_timestamp() WHERE `sno` = $id";
            $res1 = mysqli_query($conn , $sql1);
          
            header("Location: index.php");
            exit();

          }
          ?>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>