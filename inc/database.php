<?php

//start session
session_start();

$conn=mysqli_connect('localhost','root','','sweets');
if(mysqli_connect_errno()){
  echo "something went wrong ".mysqli_connect_error();
}
//if add to cart button is pressed
if(isset($_POST['add'])){
   // print_r($_POST['product_id']); 
   if(isset($_SESSION['cart'])){
        $item_array_id=array_column($_SESSION['cart'],"product_id");
        //print_r($item_array_id);
        if(in_array($_POST['product_id'],$item_array_id)){
             // echo "product already in cart"; 
        }
        else{
           $count= count($_SESSION['cart']);
           $item_array=array(
           'product_id'=>$_POST['product_id']
       );
       $_SESSION['cart'][$count]=$item_array;
      // print_r($_SESSION['cart']);
        }
       
   }else{
       $item_array=array(
           'product_id'=>$_POST['product_id']
       );
       //creating new session variable
       $_SESSION['cart'][0]=$item_array;
       //print_r($_SESSION['cart']);
   }
}
?>