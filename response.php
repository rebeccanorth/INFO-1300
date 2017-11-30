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
   <p><div>Thank you for your order, <?php echo($userName); ?> </div>
     Please expect a response at <?php echo($userEmail); ?> soon. </p>
   <div>You have indicated the following:</div>
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
      // Small
      $finalprice = 0;
      if ($userCategory == 'smallletters') {
        if ($numChar <= 6) {
          $finalprice = 30;
        } else if ($numChar <= 10) {
          $finalprice = 34;
        } else {
          $finalprice = 37;
        }
      }

      // double
      if ($userCategory == 'double') {
        if ($numChar <= 12) {
          $finalprice = 45;
        } else if ($numChar <= 18) {
          $finalprice = 50;
        } else {
          $finalprice = 60;
        }
      }

      // gold plated
      if ($userCategory == 'gold') {
        if ($numChar <= 6) {
          $finalprice = 40;
        } else if ($numChar <= 10) {
          $finalprice = 45;
        } else {
          $finalprice = 50;
        }
      }

      // lariat
      if ($userCategory == 'lariat') {
        $finalprice = 30;
      }

      // large letters
      if ($userCategory == 'largeletters') {
        if ($numChar <= 6) {
          $finalprice = 30;
        } else if ($numChar <= 10) {
          $finalprice = 34;
        } else {
          $finalprice = 37;
        }
      }

      // beaded chain
      if ($userCategory == 'beaded') {
        if ($numChar <= 6) {
          $finalprice = 50;
        } else if ($numChar <= 10) {
          $finalprice = 55;
        } else {
          $finalprice = 60;
        }
      }

      // disc choker
      if ($userCategory == 'disc') {
        $finalprice = 50;
      }

    ?>
    <div class="bigger"> Your final price is approximately: <span class="num"> $<?php echo($finalprice); ?></span> (+ shipping and handling).</div>
    <br>




</body>
</html>
