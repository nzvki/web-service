<?php
 function get_price($find){
  
 $phones=array(
  "note10"=>80000,
  "iphone11"=>100000,
  "oneplus7"=>50000,
  "p30"=>75000,
  "infinix"=>15000,
  "s10"=>90000,
   );
  
  foreach($phones as $phone=>$price){
   
   if($phone==$find)
   {
    return $price
     break;
   }
   
  }
  
 }

?>
