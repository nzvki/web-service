<?php
//process client request using URL

header ("content-Type:application/xml");
include("function.php");

if (!empty($GET['name'])){
//
  $name=$_GET['name'];
  $price=get_price($name);
  
  if(empty($price)){
    //phone not found
    deliver_response(200,"phone not found",NULL);
      
    else
      //phone price
      deliver_response(200,"phone found, $price);
      }

else {
//throw error(INVALID REQUEST)
 deliver_response(400,"INVALID REQUEST",NULL)
}

function deliver_response($status,$status_message,$data){
 header("HTTP/1.1 $status $status_message");
  
  $response['status']=$status;
  $rsponse['status_message']=$status_message;
  $response['data']=$data
    
  $xml_response=xml_encode ($response);
  echo xml_response;
  
}
?>
