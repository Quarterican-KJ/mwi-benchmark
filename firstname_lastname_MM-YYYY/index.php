<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="style.css">
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
   <header class="header"><img class="logo" src="/mwi-benchmark\img\mwi-logo-horizontal.png" alt="logo" /></header>
   <h1>Heading One</h1>
   <div class="infoDiv">
   <div class="columns">
      <div class="imgBox">this is a dummy box where i would put an img as a banner that matches the type of content for this info table </div>
      <h2>Heading 2</h2>
      <p>This is a paragraph text that is meant to flex and wrap to a new line based on the number of characters in this container. Please make sure this is looking pretty based on the amount of characters this is taking up.</p>
      <button>Read More</button>
   </div>
   <div class="columns">
      <div class="imgBox">this is a dummy box where i would put an img as a banner that matches the type of content for this info table </div>
      <h2>Heading 2</h2>
      <p>This is a paragraph text that is meant to flex and wrap to a new line based on the number of characters in this container. Please make sure this is looking pretty based on the amount of characters this is taking up.</p>
      <button>Read More</button>
   </div>
   <div class="columns">
      <div class="imgBox">this is a dummy box where i would put an img as a banner that matches the type of content for this info table </div>
      <h2>Heading 2</h2>
      <p>This is a paragraph text that is meant to flex and wrap to a new line based on the number of characters in this container. Please make sure this is looking pretty based on the amount of characters this is taking up.</p>
      <button>Read More</button>
   </div>
</div>
<div class="contactInfo">
   <!-- CONTACT FORM -->
   <main>
   <p>Contact</p>
   <form class="contact-form" action="contactform.php" method="post">
      <p class="contactTitles">Email</p>
      <input type="text" name="Email" placeholder="Your Email">
      <p class="contactTitles">Subject</p>
      <input type="text" name="Subject" placeholder="Subject">
      <p class="contactTitles">Message</p>
      <textarea name="Message" placeholder="Type message here"></textarea>
      <button type="submit" name="submit">Submit</button>
   </form>
   </main>
</div>
<!-- Javascript Puzzle -->
<div class="javaScriptPuzzle">
   <h1>Heading One</h1>
   <p>Remove the duplicates of 2 Javascript objects and output the list of distinct names in and unordered list when <a id="myLink" href="">this link is pressed</a>, if the operation has been completed already notify the user that this has already been done.</p>
   <ul>Returned Results</ul>
   <ul id="list" class="list">
   </ul>

</div>
</body>
</html>