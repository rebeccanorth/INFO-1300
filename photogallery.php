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
  </header>
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

      <div id="slide">

        <h1>Photo Gallery</h1>
        <div id="image_container">
          <!-- images from https://www.etsy.com/shop/OffTheChainByJesse-->
          <img id="current_img" src="images/bas.JPG" alt = "bas">
        </div> <!-- end of image_container div -->

        <div id="button_container">
          <button class="slide_button" id="left" >Previous</button>
          <button class="slide_button" id="right" >Next</button>
        </div> <!-- end of button_container div -->
<!--(end)slideshow development inspired by lab09, slideshow.js from lab09-->

      </div>

</body>

</html>
