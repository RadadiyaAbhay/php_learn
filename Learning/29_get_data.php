<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'login';

$conn = mysqli_connect($servername , $username , $password , $database);
if($conn){
    echo "done";
}

$sql = "SELECT * FROM `logindetails`";
$res = mysqli_query($conn , $sql);

$num = mysqli_num_rows($res);
echo $num;

if($num >0){

    for ($i=0; $i < $num; $i++) { 
        # code...
        echo '<br/>';
        $row = mysqli_fetch_assoc($res);
        echo  "sro =". $row['sro'] . "<br>Email =". $row['email'] . "<br>Pass =" .  $row['password'] . "<br>CurrentTime =" . $row['CurrentTime'];
        echo '<br/>';

    }

}
?>