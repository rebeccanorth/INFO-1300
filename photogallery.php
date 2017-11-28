<!DOCTYPE html> <!--rn256, erd44, jnp49-->
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all"/>
  <script type="text/javascript" src="scripts/jquery-3.2.1.js"></script>
  <script type="text/javascript" src="scripts/site.js"></script>
  <title>OffTheChain - photos</title>

</head>
<body>
  <header>
    <?php $page = 'gallery'; include("includes/navigation.php");?>
    <div class = "header-container">
      <p class="otc"> Photo Gallery </p>
      <p class="subtext" id="gal_sub"> See the necklaces in action </p>
    </div>
  </header>
  <!--Image Grid Development inspired by https://www.w3schools.com/howto/howto_css_image_grid_responsive.asp-->

  <div class="row">
    <div class="column">
      <img class="grid_pic" src="images/bas.JPG" alt = "bas">
      <img class="grid_pic" src="images/circle.JPG" alt = "circle">
      <img class="grid_pic" src="images/dg.JPG" alt = "dg">
      <img class="grid_pic" src="images/emily.JPG" alt = "em">
    </div>
    <div class="column">
      <img class="grid_pic" src="images/jw.JPG" alt = "jw">
      <img class="grid_pic" src="images/kelsey.JPG" alt = "kel">
      <img class="grid_pic" src="images/kkg.JPG" alt = "kkg">
      <img class="grid_pic" src="images/love.JPG" alt = "love">
    </div>
    <div class="column">
      <img class="grid_pic" src="images/love2.JPG" alt = "l2">
      <img class="grid_pic" src="images/lovejimmy.JPG" alt = "jim">
      <img class="grid_pic" src="images/3neck.JPG" alt = "3n">
      <img class="grid_pic" src="images/dope.JPG" alt = "dp">
    </div>
    <div class="column">
      <img class="grid_pic" src="images/jamie.JPG" alt = "jamie">
      <img class="grid_pic" src="images/jheart.JPG" alt = "jh">
      <img class="grid_pic" src="images/sarah.JPG" alt = "sarah">
      <img class="grid_pic" src="images/stars.JPG" alt = "stars">
    </div>
  </div>


  <!-- Load slideshow script-->
  <!-- <script src="scripts/Java_slideshow.js" type="text/javascript"></script> -->
  <div class="slideshow-container">
    Picture 1
    <div class="mySlides fade">
      <img class="slidepic" src="images/bas.JPG" alt = "bas">
    </div>
    <!-- Picture 2 -->
    <div class="mySlides fade" >
      <img class="slidepic" src="images/circle.JPG" alt = "circle">
    </div>
    <!-- Picture 3 -->
    <div class="mySlides fade" >
      <img class="slidepic" src="images/dg.JPG" alt = "dg">
    </div>
    <!-- Picture 4 -->
    <div class="mySlides fade" >
      <img class="slidepic" src="images/emily.JPG" alt = "em">
    </div>
    <!-- Picture 5 -->
    <div class="mySlides fade" >
      <img class="slidepic" src="images/jw.JPG" alt = "jw">
    </div>
    <!-- Picture 6 -->
    <div class="mySlides fade" >
      <img class="slidepic" src="images/kelsey.JPG" alt = "kel">
    </div>
    <!-- Picture 7 -->
    <div class="mySlides fade" >
      <img class="slidepic" src="images/kkg.JPG" alt = "kkg">
    </div>
    <!-- Picture 8 -->
    <div class="mySlides fade" >
      <img class="slidepic" src="images/love.JPG" alt = "love">
    </div>
    <!-- Picture 9 -->
    <div class="mySlides fade" >
      <img class="slidepic" src="images/love2.JPG" alt = "l2">
    </div>
    <!-- Picture 10 -->
    <div class="mySlides fade" >
      <img class="slidepic" src="images/lovejimmy.JPG" alt = "jim">
    </div>
    <!-- Buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
</div>
      <?php include("includes/footer.php");?>

</body>

</html>
