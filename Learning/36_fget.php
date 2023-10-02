<?php
   
   $file = fopen("file.txt" , "r");

//    echo fgets($file);
//    echo fgets($file);
//    echo fgets($file);
//    echo fgets($file);
//    echo var_dump(fgets($file));

   echo fgetc($file);

    while ($a = fgetc($file)) {
        # code...
        echo $a ;

        if($a == '.'){

            break;
        }
    }



   fclose($file);

?>