<?php
$a=array(8,2,3,6,7,9,1,5,4);
usort($a,'func');
var_dump($a);
foreach($a as $v){
    echo $v;
}
function func($x,$y){
   
    if($x==5){
        return -1;
    }else if($y==5){
        return 1;
    }else{
        return $x-$y;
    }
}

?>