<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link 
      rel="stylesheet" 
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
      crossorigin="anonymous"/>
   <link rel="stylesheet" href="style.css">
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
   <script src="puzzle.js"></script>
   
   <title>Document</title>
</head>
<body>
   <!-- make header 
   Make skeleton div DONE
      add 3 info divs with H2 tags and dummy text DONE
         Make dummy text wrap Done
         incorporate CSS Done
   JS puzzle Done
   Respnsiveness for mobile.-- Not much to change. looks and preforms well across phones, tablets, and desktops.  -->
   <!-- header -->
   <header class="header"><img class="logo" src="../img/mwi-logo-horizontal.png" alt="logo" /></header>
   <div class="container">
      <h1 class="mainH1">Heading One</h1>
   <div class="row">
      <div class="col-12 col-md-6 col-lg-4">
         <div class="imgBox">this is a dummy box where i would put an img as a banner that matches the type of content for this info table </div>
         <h2>Heading 2</h2>
         <p>This is a paragraph text that is meant to flex and wrap to a new line based on the number of characters in this container. Please make sure this is looking pretty based on the amount of characters this is taking up.</p>
         <button class="button">Read More</button>
      </div>
      <div class="col-12 col-md-6 col-lg-4">
         <div class="imgBox">this is a dummy box where i would put an img as a banner that matches the type of content for this info table </div>
         <h2>Heading 2</h2>
         <p>This is a paragraph text that is meant to flex and wrap to a new line based on the number of characters in this container. Please make sure this is looking pretty based on the amount of characters this is taking up.</p>
         <button class="button">Read More</button>
      </div>
      <div class="col-12 col-md-6 col-lg-4">
         <div class="imgBox">this is a dummy box where i would put an img as a banner that matches the type of content for this info table </div>
         <h2>Heading 2</h2>
         <p>This is a paragraph text that is meant to flex and wrap to a new line based on the number of characters in this container. Please make sure this is looking pretty based on the amount of characters this is taking up.</p>
         <button class="button">Read More</button>
      </div>
   </div>
   </div>
<div class="contactInfo">
   <!-- CONTACT FORM -->
   <main>
   <p>Contact</p>
   <form class="contactForm" action="contactform.php" method="post">
      <p class="contactTitles">Email</p>
      <input class="inputField" type="text" name="email" placeholder="Your Email" required>
      <p class="contactTitles">Subject</p>
      <input class="inputField" type="text" name="subject" placeholder="Subject" required>
      <p class="contactTitles">Message</p>
      <textarea class="inputField" name="message" placeholder="Type message here" required></textarea>
      <button type="submit" name="submit">Submit</button>
   </form>
   </main>
</div>
<!-- Javascript Puzzle -->
<div class="container javaScriptPuzzle">
   <div class="row">
      <div class="col-12">
         <h1>Heading One</h1>
   <p>Remove the duplicates of 2 Javascript objects and output the list of distinct names in and unordered list when <a id="myLink" href="">this link is pressed</a>, if the operation has been completed already notify the user that this has already been done.</p>
   <ul>Returned Results</ul>
   <ul id="list" class="list">   
   </ul>
      </div>
   </div>
</div>
</body>
</html>