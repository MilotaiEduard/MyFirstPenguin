<?php
require("config.php");
$name = "";
if(isset($_SESSION['name'])) {
    $name = $_SESSION['name'];
}
else {
    $name = "User";
}
?>


<!DOCTYPE html>

<html>

<head>
    <title>P2 Let's meet Bipo</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="page2.css">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Oleo+Script:wght@700&family=Press+Start+2P&display=swap" rel="stylesheet">
</head>

<body>
    <h1 id="titlumeet">"Hello <?= $name ?>! My name is Bipo! Nice to meet you!"</h1>
    <img id="logo" src="/images/logopenguin.png">

    <h2>I am an Emperor Baby Penguin and I will talk about my species. Enjoy! First of all, penguins are a group of aquatic flightless birds. They live almost exclusively in the Southern Hemisphere: only one species, the Galápagos penguin, is found north of the Equator. Highly adapted for life in the water, penguins have countershaded dark and white plumage and flippers for swimming.</h2>
    <h2> Most penguins feed on krill, fish, squid and other forms of sea life which they catch with their bills and swallow it whole while swimming. A penguin has a spiny tongue and powerful jaws to grip slippery prey. Generally speaking, baby penguins are referred to as chicks. They can also be called nestlings as with any other bird species at this stage of their life. There isn’t a specific name for baby penguins.</h2>
    <h2>Most baby penguins are born with either a covering of grey, brown or white down feathers. The color, as well as the size, varies on the species of penguin. Not all baby penguins are born with feathers, as both the king and emperor penguins are born almost naked. For most penguins, it takes one year to reach their full adult plumage.</h2>

    <br>

    <audio controls autoplay muted loop>
        <source src="/songs/Nine Lives.mp3">
        <source src="/songs/Nine Lives.wav">
        This browser does not support HTML5 audio
    </audio>

    <br>
    <center>
    <a href="https://en.wikipedia.org/wiki/Penguin" target=_blank> 
    <img id="poza1" src="/images/babypenguin1.jpg" alt="Bipo" title="The Bipo Penguin">
    <img id="poza1" src="/images/babypenguin2.jpg" alt="Bipo" title="The Bipo Penguin">
    <img id="poza1" src="/images/babypenguin3.jpg" alt="Bipo" title="The Bipo Penguin">
    <img id="poza1" src="/images/babypenguin4.jpg" alt="Bipo" title="The Bipo Penguin">
    <img id="poza1" src="/images/babypenguin5.jpg" alt="Bipo" title="The Bipo Penguin">
    </a>
    </center>

    <h2 id="abc">The chicks of emperor penguins hatch almost naked and take a couple of weeks to develop their first down coat, which is grey. The head has a black helmet on top, which goes all the way down to the chin and side of the neck. Both the throat and face are white. The second down is relatively similar but is slightly darker, thicker and longer overall. The abdomen and chest also have a brownish wash. Juvenile emperor penguins have less black on the head, and they have a diffused grey color around the eye. They also lack the yellow tinge under the neck, and the throat is whitish-grey.</h2>
    
    <br>

    <h2 id="abc"> These are two documentary about how baby penguin tries to make friends and a funny scene when penguins chicks are rescued by "hero". It is so adorable. The baby penguin step by step is more confident and have courage to make friends and to save they when an enemy appear. ( and for the question "What penguins eat?", we eat krill (a shrimp-like crustacean in the family Euphausiidae), squids and fishes) </h2>

    <center>
    <video controls muted loop width="1100"> 
        <source src="/videoclipuri/Video1 Baby Penguin Tries To Make Friends _ BBC Earth.mp4">
        <source src="/videoclipuri/Video1 Baby Penguin Tries To Make Friends _ BBC Earth.mp4">
        <source src="/videoclipuri/Video1 Baby Penguin Tries To Make Friends _ BBC Earth.mp4">
        This browser does not support HTML5 audio
    </video>

    <video controls muted loop width="1100"> 
        <source src="/videoclipuri/Video2 Penguin chicks rescued by unlikely hero _ BBC Earth.mp4">
        <source src="/videoclipuri/Video2 Penguin chicks rescued by unlikely hero _ BBC Earth.mp4">
        <source src="/videoclipuri/Video2 Penguin chicks rescued by unlikely hero _ BBC Earth.mp4">
        This browser does not support HTML5 audio
    </video>

</center>
    <h2>In this way I want to greet my old friends from the BBC. Me and my friends laughed a lot when We saw this article on Google. :) </h2>
    <center>
    <img src="/images/bbccamera.png" alt="Bipo" title="The Bipo Penguin" height="800">
</center>
    <br>
    <br>
    <br>
    <br>
  
</body>

</html>