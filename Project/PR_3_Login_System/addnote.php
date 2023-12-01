<?php
    require 'connect.php';
    session_start();
    if((!isset($_SESSION['loggedin'])) || (isset($_SESSION['loggedin']) != true)){
        header("location: login.php");
        exit;
    }
?>
<?php
// Create Note

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $tit = $_POST['title'];
    $descr = $_POST['description'];
    
    $tabuser = $_SESSION['username'];
    $sql1 = "INSERT INTO `notes` (`username` ,`title` , `description`, `updateDate`) VALUES ( '$tabuser','$tit','$descr', current_timestamp())";
    $res1 = mysqli_query($conn , $sql1);

    ref();
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
        <section class="px-md-5 px-1 py-5">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-11">
                        <form action="addnote.php" method="post">

                            <label for="title" class="form-label ">Title</label>
                            <input type="text" class="form-control mb-3" id="title" name="title">

                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control mb-3" id="description" rows="3" name="description"></textarea>
                            <button type="submit" class="btn btn-dark">Save</button>
                        </form>
                    </div>
                    
                </div>
            </div>
        </section>
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