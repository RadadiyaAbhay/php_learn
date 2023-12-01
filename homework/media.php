<?php
    echo 'done';

    $mediaLoop="
    max 575 = 100%
    min 576 = 540
    min 768 = 720
    min 968 = 960
    min 1200 = 1140
    min 1400 = 1320

    min 1401 =1320
    max 1400 = 1140
    max 1200 = 960
    max 968 = 720
    max 768 = 540
    max 576 = 100%
                    
    ";
    for ($i=1; $i <= 200; $i++) { 
        # code...
        $file = fopen("loop.txt","a");
        fwrite($file , "$i. Media Query");
        fwrite($file , $mediaLoop);
    }
?>