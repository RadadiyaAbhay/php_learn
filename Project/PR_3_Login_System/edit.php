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
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php require 'components/_nav.php' ?>

    <main>
        <?php
          // Edit Note

          if (isset($_GET['id'])) {
              $id = $_GET['id'];
              
              
              $sql5 = "SELECT * FROM `notes` WHERE `sno` = $id";
              $re = mysqli_query($conn , $sql5);
          
              $row = mysqli_fetch_assoc($re); 
              // echo var_dump($row);
          
          
              echo "
              <section class='px-md-5 px-1 py-5'>
              <div class='container-fluid'>
                  <div class='row justify-content-center'>
                      <div class='col-11'>
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <?php
    function ref(){

      header("Location: index.php");
      exit();
    }
    ?>

</body>

</html>