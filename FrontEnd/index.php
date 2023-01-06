<?php
require("config.php");
?>

<!DOCTYPE html>

<html>

<head>
    <title>P1 My first penguin</title>
    <meta name="virwport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="refresh" content="30">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Oleo+Script:wght@700&family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="page1.css">
</head>

<body> 
    <script src="page1.js"></script>
  
   <h2> Welcome to Penguin Center! </h2>


   <img src="/images/logopenguin.png">

   <br>
   <br>
   
   <center>

   <?php
   if (!isset($_SESSION["name"])) {
       echo
           "<a href='page4.php' target=_self title='Hello! Create an account!'>
    <button><text>Create an account</text></button>
   </a>";
   }
   
        if(!isset($_SESSION["name"])){
            echo 
            "<a href='page3.php' target=_self title='More penguins.'>
        <button><text>Sign in</text></button>
    </a>";
        }
   
 
        if(isset($_SESSION["name"])){
            echo 
    "<a href='myaccount.php' target=_self title='Here you can see your account.'>
        <button><text>My account</text></button>
    </a>";
        }
    ?>

   <a href="page2.php" target=_self title="Let's meet Bipo" style="color:rgb(2, 4, 63)">
    <button><text>Click here to meet Bipo<text></button>
   </a>


   <a href="page5.html" target=_self title="Guess the number">
    <button><text>Number Guessing Game</text></button>
   </a>

   <a href="page6.html" target=_self title="Math">
    <button><text>Math for penguins</text></button>
   </a>
    

   <a href="page7.html" target=_self title="Temperature Conversion">
    <button><text>Temperature Conversion</text></button>
   </a>

   <a href="page8.html" target=_self title="Javascript instructions">
    <button><text>Counting</text></button>
   </a>


   <?php
   if (isset($_SESSION["name"])) {
       echo
           "<a href='logout.php' target=_self title='Log out'>
    <button><text>Log out</text></button>
   </a>";
   }
   ?>
   <br>

   <label id="ceas"></label>

</center>

    

   <br>

   <h3>Schedule "My first penguin"</h3>

   <table>
    <tr>
        <th>Monday</th>
        <th>Tuesday</th>
        <th>Wednesday</th>
        <th>Thursday</th>
        <th>Friday</th>
        <th>Saturday</th>
        <th>Sunday</th>
    </tr>

    <tr align="center">
        <td>9:00-15:00</td>
        <td>9:00-15:00</td>
        <td>9:00-15:00</td>
        <td>9:00-15:00</td>
        <td>9:00-15:00</td>
        <td>Closed</td>
        <td>Closed</td>
    </tr>
    
   </table>

   <br>


   <h3>Something about us</h3>

   <p>Hello everybody! We created the "My first penguin" website. This is our first website and we chose this topic because we liked so much the game "Club Penguin" when we were a child.
    We created this website because we are grateful for those memories and now we want to give you a penguin-friend! The first penguin you will encounter is Bipo. He is a penguin cub who will tell you a few things about him and his family. We wish you a pleasant reading and welcome to our family!</p>
   
    <br>
   
    <script src="page1.js"></script>
</body>

</html>
