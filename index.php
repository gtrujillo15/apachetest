<?php
session_start();
require_once("connect.php");
require_once("functions-new.php");
$loggedIn = $_SESSION['loggedin'];
//this pulls the text from after the first / in the url and sets it to an array
$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH));

//this pulls the last item out of the url array and sets $thisPagename variable to that item
$thisPagename = array_pop($uriSegments);
//this sts the pagename if non is provided in the url
if ($thisPagename == ""){
  $thisPagename = "index";
}

//$thisPagename = $_GET["page"] ?? "Home";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>
    <?php 
    //makeTitle($conn, $thisPagename); 
    ?>
    </title>
</head>
<body>
<!-- Header and Nav -->
<header>
  <a href="http://192.168.33.10/index.php?page=Home"><img src="websitelogo.png" alt="Picture of Logo" class="logo"></a>
  <nav>
    <?php
    makeNav($conn, $loggedIn);
    echo "<p>" . $loggedIn . "</p>";
    ?>
  </nav>
  </header>
  <!-- Content -->
  <section>
  <div>
  <?php
  makeContent($conn, $thisPagename);
  //echo $thisPagename;
  ?>
  <img class="image" src="http://lorempixel.com/400/200/" alt="Random Piture">
  </div>
  </section>
  <!-- Footer -->
  <footer></footer>
</body>
</html>