<?php
    $a =15;
    echo "hello World $a<br/>";

    define("welcome" , "Hello Everyone<br/>" );
    echo welcome;

    $b =30;

    function km(){
        
        $GLOBALS['d'] = 40;
        $s = 32;
    }
    km();
    echo $d."<br/>";
    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";
    echo $_SERVER['HTTP_REFERER'];
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];
    echo "<br>";
    echo "<br>";

    $str = "kmk";
    $pat = "/kmk/i";
    echo preg_match($pat , $str);

    echo "<br>";
    $str = "kmk njksdf kmk";
    $pat = "/kmk/i";
    echo preg_match_all($pat , $str);

    echo "<br>";
    $str = "kmk njksdf kmk";
    $pat = "/kmk/i";
    echo preg_replace($pat , "cmd", $str);

    echo "<br>";
    $str = "[abc][0-9]";
    $pat = "/kmk/i";
    echo preg_match($pat , $str);
?>