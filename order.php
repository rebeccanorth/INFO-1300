<!DOCTYPE html> <!--rn256, erd44, jnp49-->
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all"/>
  <script type="text/javascript" src="scripts/jquery-3.2.1.js"></script>
  <script type="text/javascript" src="scripts/site.js"></script>
  <title>OffTheChain - order</title>

</head>
<body>
  <header>
    <?php $page = 'order'; include("includes/navigation.php");?>
  </header>
</body>
<div>
  <div id = "ordertxt"> Please fill out the following form so that we know what you are looking for!</div>
  <div id = "ordertxt2">The time needed to prepare a order for shipping varies depending on order.
  Once shipped the package should arrive within 3-5 days. </div>
</div>
<!--contact form development assisted/inspired by https://www.w3schools.com/html/html_forms.asp and
   https://developer.mozilla.org/en-US/docs/Learn/HTML/Forms/Your_first_HTML_form-->
   <!--form validation, php $_POST, php eecho learned in lab 11-->
   <form id="form" action="response.php" method="post" novalidate>
     <div class="field">
       <label>Name:</label>
       <input type="text" id ="userName" name="userName" placeholder="Your name" required>
       <p id="nameError"> Please input your name.</p>
     </div>

     <div class="field">
       <label>Email:</label>
       <input type="email" id = "userEmail" name="userEmail" placeholder="john@aol.com" required>
       <p id="emailMissing"> Please input your email.</p>
       <p id="emailError"> Please input a valid email.</p>
     </div>

     <div class="field">
       <label>Address:</label>
       <input type="textarea" id ="userAddress" name="userAddress" placeholder="234 Lindo Drive, New York, NY 12345" required>
       <p id="addressError"> Please input your address.</p>
     </div>

     <div class="field">
       <label>Type of Necklace:</label>
       <select id = "userCategory" name="userCategory" required>
         <option value="">Select...</option>
         <option value="smallletters">Personalized Name Necklace/Choker (Small Letters)</option>
         <option value="double">Double Chain Customized Name Necklace</option>
         <option value="gold">Personalized Gold Plated Name Necklace/Choker</option>
         <option value="lariat">Initial Lariat Necklace</option>
         <option value="largeletters">Personalized Name Necklace (Large Letters)</option>
         <option value="beaded">Personalized Beaded Chain Name Necklace/Choker</option>
         <option value="disc">Personalized Disc Choker Name Necklace </option>
       </select>
       <p id="typeError"> Please select a necklace type.</p>
     </div>


     <div class="field">
       <label>Color:</label>
       <select id = "userColor" name="userColor" required>
         <option value="">Select...</option>
         <option value="gold">Gold</option>
         <option value="silver">Silver</option>
       </select>
       <p id="colorError"> Please select a color.</p>
     </div>

     <div class="field">
       <label>Message on Necklace:</label>
       <input type="text" id ="userMessage" name="userMessage" placeholder="What do you want your necklace to say?" required>
       <p id="messageError"> Please input a message.</p>
     </div>

     <div class="button">
       <button id="submit" type="submit">Submit</button>
     </div>

     <div class="button">
       <button id="reset" type="reset">Reset</button>
     </div>
     
   </form>



</body>

</html>
