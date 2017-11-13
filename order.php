<!DOCTYPE html> <!--rn256, erd44, jnp49-->
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="Styles/all.css" media="all"/>
  <title>OffTheChain - order</title>

</head>
<body>
  <header>
    <?php $page = 'order'; include("includes/navigation.php");?>
  </header>
</body>
<!--contact form development assisted/inspired by https://www.w3schools.com/html/html_forms.asp and
   https://developer.mozilla.org/en-US/docs/Learn/HTML/Forms/Your_first_HTML_form-->
   <!--form validation, php $_POST, php eecho learned in lab 11-->
   <form action="/response.php" method="post">
     <div>
       <label>Name:</label>
       <input type="text" id ="userName" name="userName" required>
     </div>

     <div>
       <label>Email:</label>
       <input type="email" id = "userEmail" name="userEmail" required>
     </div>

     <div>
       <label>Address:</label>
       <input type="textarea" id ="userAddress" name="userAddress" required>
     </div>

     <div>
       <label>Type of Necklace:</label>
       <select id = "userCatagory" name="userCategory" required>
         <option value="">&nbsp;</option>
         <option value="smallletters">Personalized Name Necklace/Choker (Small Letters)</option>
         <option value="double">Double Chain Customized Name Necklace</option>
         <option value="gold">Personalized Gold Plated Name Necklace/Choker</option>
         <option value="lariat">Initial Lariat Necklace</option>
         <option value="largeletters">Personalized Name Necklace (Large Letters)</option>
         <option value="beaded">Personalized Beaded Chain Name Necklace/Choker</option>
         <option value="disc">Personalized Disc Choker Name Necklace

</option>

       </select>
     </div>





</html>
