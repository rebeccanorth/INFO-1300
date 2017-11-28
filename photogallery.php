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
  <!--slideshow development inspired by https://www.w3schools.com/w3css/w3css_slideshow.asp-->
  <!-- Load slideshow script-->
  <script src="scripts/Java_slideshow.js" type="text/javascript"></script>

  <div class="slideshow-container">
    <!-- Picture 1 -->
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









  <!-- Pictues in the slideshow -->
  <!-- <img class="mySlides" src="images/bas.JPG" alt = "bas">
  <img class="mySlides" src="images/circle.JPG" alt = "circle">
  <img class="mySlides" src="images/dg.JPG" alt = "dg">
  <img class="mySlides" src="images/emily.JPG" alt = "em">
  <img class="mySlides" src="images/jw.JPG" alt = "jw">
  <img class="mySlides" src="images/kelsey.JPG" alt = "kel">
  <img class="mySlides" src="images/kkg.JPG" alt = "kkg">
  <img class="mySlides" src="images/love.JPG" alt = "love">
  <img class="mySlides" src="images/love2.JPG" alt = "l2">
  <img class="mySlides" src="images/lovejimmy.JPG" alt = "jim">

  <button class="w3-button w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-display-right" onclick="plusDivs(+1)">&#10095;</button>
 -->












<!--
    <img class="pix" src="images/bas.JPG" alt="bas">
    <img class="pix" src="images/bodychain.JPG" alt="bodychain">
    <img class="pix" src="images/cam.JPG" alt="cam">
    <img class="pix" src="images/circle.JPG" alt="circle">
    <img class="pix" src="images/dg.JPG" alt="dg">
    <img class="pix" src="images/dope.JPG" alt="dope">
    <img class="pix" src="images/emily.JPG" alt="emily">
    <img class="pix" src="images/goblue.JPG" alt="goblue">
    <img class="pix" src="images/hookem.JPG" alt="hookem">
    <img class="pix" src="images/jamie.JPG" alt="jamie">
    <img class="pix" src="images/jenna.JPG" alt="jenna">
    <img class="pix" src="images/jessee.JPG" alt="jessee">
    <img class="pix" src="images/jw.JPG" alt="jw">
    <img class="pix" src="images/kelsey.JPG" alt="kelsey">
    <img class="pix" src="images/kkg.JPG" alt="love.jg">
    <img class="pix" src="images/love.JPG" alt="love">
    <img class="pix" src="images/love2.JPG" alt="love2">
    <img class="pix" src="images/lovejimmy.JPG" alt="lovejimmy">
    <img class="pix" src="images/pearlbodychain.JPG" alt="pearlbodychain">
    <img class="pix" src="images/sarah.JPG" alt="sarah">
    <img class="pix" src="images/star.JPG" alt="star">
    <img class="pix" src="images/stone.JPG" alt="stone">
    <img class="pix" src="images/szpck.JPG" alt="szpck">
    <img class="pix" src="images/valerie.JPG" alt="valerie">
-->
<!--slideshow development inspired by lab09-->
      <!-- Load slideshow script-->
      <script src="scripts/slideshow.js" type="text/javascript"></script>













      <?php include("includes/footer.php");?>

</body>

</html>
