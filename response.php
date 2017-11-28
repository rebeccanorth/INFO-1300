<!--form validation, php $_POST, php echo learned in lab 11-->
<?php
$userName = $_POST["userName"];
$userEmail = $_POST["userEmail"];
$userAddress = $_POST["userAddress"];
$userCategory = $_POST["userCategory"];
$userColor = $_POST["userColor"];
$userMessage = $_POST["userMessage"];
?>

<!DOCTYPE html>
 <html>
 <head>
   <meta charset="UTF-8">
   <link rel="stylesheet" type="text/css" href="styles/all.css" media="all"/>
   <script type="text/javascript" src="scripts/jquery-3.2.1.js"></script>
   <script type="text/javascript" src="scripts/site.js"></script>
   <title>Response</title>
 </head>
 <body>
   <?php include("includes/navigation.php"); ?>
   <h1 id ="sh">Your order form has been successfully submitted.</h1>
   <p><div>Thank you for your order <?php echo($userName); ?> </div>
     Please expect a response at <?php echo($userEmail); ?> soon. </p>
   <div>You have indicated the following</div>
    <div> Address: <?php echo($userAddress); ?> </div>
    <div> Category: <?php echo($userCategory); ?> </div>
    <div> Color: <?php echo($userColor); ?> </div>
    <div> Message: <?php echo($userMessage); ?> </div>
    <br>
    <!-- php characters -->
    <?php
      $numChar = strlen($userMessage);
    ?>

    <div class="bigger"> Your necklace will have <span class="num"> <?php echo($numChar); ?>  characters.</span></div>
    <br>
    <!-- PHP Final Price -->
    <?php
      $finalprice = 0;
      if ($numChar <= 6) {
        $finalprice = 35;
      } elseif($numChar <= 10) {
        $finalprice = 45;
      } elseif($numChar <= 18) {
        $finalprice = 50;
      } else {
        $finalprice = 60;
      }
    ?>
    <div class="bigger"> Your final price is approximately: <span class="num"> $<?php echo($finalprice); ?>.</span></div>
    <br>




</body>
</html>
