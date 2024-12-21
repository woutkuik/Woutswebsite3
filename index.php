<!doctype html>
<index.html>
<HEAD>
<link rel="stylesheet" href="style.css" type="text/css"/>
<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="favicon/site.webmanifest">
    <TITLE>website 3</TITLE>
</HEAD>
    
<body>

<div id=”container”>

<header>
    
<IMG BORDER="0" SRC="afbeelding/headerachtergrond.jpg">
    
<nav>
<ul>
<li>
<a href="index.php?page=1">Home</a>
</li>
<li>
<a href="index.php?page=2">Over Mij</a>
</li>
<li>
<a href="index.php?page=3">Dagboek</a>
</li>
<li>
<a href="index.php?page=4">opdrachten</a>
</li>
<li>
<a href="index.php?page=5">Ontwerp proces</a>
</li>
</ul>
</nav>
    
</header>

<section>
    
<aside>
    <ul2>
<h3>Dit zijn mijn vorige websites.
Als je ze wilt zien dan moet je erop klicken.</h3>
    <br>
        <br>
<li2><A HREF="website 1/index.html">Website 1</A></li2>
<li2><A HREF="website 2/index.html">Website 2</A></li2>
<li2><A HREF="rekenmachine/index.html">rekenmachine</A></li2>
        </ul2>
</aside>
    
<article>

<?php
// als er een page in het webadres staat
if (isset( $_GET["page"]))
{
// leeg het paginanummer in
$nummer = $_GET["page"];
}
else
{
// als er geen paginanummer staat, nemen we 1
$nummer = 1;
}
// voer code uit afhankelijk van het nummer
switch ($nummer)
{

// de homepage
case 1:
 readfile("home.inc");
 break;
// over mij pagina
case 2:
 readfile("overmij.inc");
 break;
// deze code moet je nog aanvullen
case 3:
    readfile("dagboek.inc");
 break;
case 4:
 readfile("opdrachten.inc");
 break;
case 5:
 readfile("ontwerp.inc");
 break;
// als het nummer hierboven niet erbij staat, kiezen we 1
default:
 readfile("home.inc");
};
?>
</article>

</section>

<footer>
<div id=footer-links>
(c) Wout Kuik
</div>
<div id=footer-rechts>
<a href="mailto:wkuik@ogvo.nl">Contact</a>
</div>
</footer>
    
</Body>

</index.html>
