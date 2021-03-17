<?php

 $arr = [1,2,3,4,5,6];
 foreach($arr as $x)
//  echo "$x"; 
//  echo "<br>";
 $index = 2;
 $changedValue = 9;

 for($i=0;$i<count($arr);$i++){
     if($i==$index){
         $arr[$i] = $changedValue;

     }

 } foreach($arr as $y)
 echo "$y";





?> 