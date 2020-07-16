<?php
include 'inc/database.php';
include 'inc/Items.php';
$item = new Items($conn);
$products=$item->getData();
//$query="SELECT * FROM PRODUCT";
//$result=mysqli_query($conn,$query);
///$products=mysqli_fetch_all($result,MYSQLI_ASSOC);
//var_dump($products);
//foreach($products as $product){
//  echo "this is the name of item ".$product['name'],"<br>";
//}

?>


<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- font awesome -->
    <script src="js/all.js"></script>
    <title>Vishnu delicacy</title>
    <style></style>
  </head>

  <body>
    <!-- header -->
    <header>
      <?php include("nav_bar.php");?>
      <!-- banner  -->
      <div class="container-fluid">
        <div class="row max-height justify-content-center align-items-center">
          <div class="col-10 mx-auto banner text-center">
            <h1 class="text-capitalize">
              welcome to <strong class="banner-title">Vishnu Delicacy</strong>
            </h1>
            <a href="#store" class="btn banner-link text-uppercase my-2"
              >Order now</a
            >
          </div>
      <!--  ?php include "cart_show.php"?end of  banner  -->
    </header>
    <!-- header -->
    <!-- about us -->
    <?php include("about.php")?>
    <!-- end of about us -->

    <!-- store -->
    <!--cart in nav bar-->
    <?php require_once("inc/cart_header.php");?> 

    <section id="store" class="store py-5">
      <div class="container">
        <!-- section title -->
        <?php include("menu.php")?>
      </div>
    </section>
    <!--end of store items -->

    <!-- jquery -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- script js -->
    
  </body>
</html>
