<?php
echo 'Welcome multi dimensional Array';
echo '<br/>';

$multidim = array(
    array( 
        array(1,2),
        array(3,4)
    ),array( 
        array(5,6),
        array(7,8)
    ),array( 
        array(9,10),
        array(11,12)
    )
);

for ($i=0; $i < count($multidim) ; $i++) { 
    for ($j=0; $j < count($multidim[$i]); $j++) { 
        for ($k=0; $k < count($multidim[$j]); $k++) { 
        echo $multidim[$i][$j][$k];
        echo ' ';
    }
    echo '<br/>';

}

};


?>