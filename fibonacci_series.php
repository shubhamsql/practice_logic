<?PHP 

   $first = 0;
   $second = 1;
   echo $first.'&nbsp;,';
   echo $second.'&nbsp;,';
  

  for($limit=0;$limit<10;$limit++)
   {
     $third = $first+$second;
     echo $third.'&nbsp;,';;
     $first = $second;
     $second = $third;
   
   }

?>