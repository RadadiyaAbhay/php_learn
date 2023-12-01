<?php

class sub{
    
    public $s;
    public $sn;
    function marks( $sn, int $s){
        $this ->sn = $sn;
        $this ->s = $s;
    }
    function output() {
        return $this ->sn;
        
    }
} 

$math = new sub();
$eng = new sub();
$math -> marks('math' ,60);
$eng -> marks('eng',40);
echo $math -> output()."<br/>";
echo $eng -> output()."<br/>";
?>