<!DOCTYPE html> <!--rn256, erd44, jnp49-->
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all"/>
  <script type="text/javascript" src="scripts/jquery-3.2.1.js"></script>
  <script type="text/javascript" src="scripts/site.js"></script>
  <title>OffTheChain - home</title>

</head>
<body id="homePage">
  <header>
    <?php $page = 'home'; include("includes/navigation.php");?>
    <div class = "header-container">
      <p class="otc"> Off the Chain by Jesse </p>
      <p class="subtext"> Custom necklaces handmade by me especially for you! </p>
    </div>
  </header>

  <!-- Image Header -->
  <div class= "wide">
    <img class="chainPic" src="images/blue-otc.jpg" alt="off the chain">
    <div class="buttons">
      <a class="bu" id="bu_neck" href="necklaces.php">Check Out Our Types of Necklaces</a> <br/>
      <a class="bu" id="bu_photo" href="photogallery.php">See Photos</a> <br/>
      <a class="bu" id="bu_order" href="order.php">Order Yours Here!</a>
    </div>
  </div>

  <?php include("includes/footer.php");?>








</body>

</html>
