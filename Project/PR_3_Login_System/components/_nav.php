<?php 
    echo '
    <nav class="navbar navbar-expand-lg bg-body-tertiary px-5">
  <div class="container-fluid">
    <a class="navbar-brand fw-bolder" href="index.php">Apni Notes</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>';

        if((!isset($_SESSION['loggedin'])) || (isset($_SESSION['loggedin']) != true)){  
          echo '
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="signup.php">Sign Up</a>
              </li>
            ';
        }else{

          echo '
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Log Out</a>
              </li>';
        }


    echo'

    </ul>
    </div>
    </div>
    </nav>
    ';
?>