<?php
  //define your variables at the top, but don't echo anything before the doctype
  $username = 'SpicyBitch92';
  $favoriteNumber = 13;
  $favoriteNumber ++;
  $favoriteNumber += 17;
  $favoriteNumber = $favoriteNumber + 1;

  //define a really simple function
  function todaysDate(){
    echo '<br />';
    echo date('l, F j, Y' );
    echo ' at ';
    echo date('h:i');
    echo '!';
  }
  //a function to convert ugly timestamps to human friendly dates
  function convertTimestamp($mushroomstamp){
    $date = new DateTime($mushroomstamp);
    return $date->format('l, F j, Y');
  }

  function addTen( $number ){
    return $number += 10;
  }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Example Page</title>
    <style type="text/css">
      body {
        color: burlywood;
      }
      h2 {
        color: indigo;
      }
      .topnav {
        background-color: beige;
      }
      .topnav ul {
        padding: 20px;
        list-style-type: none;
      }
      .topnav li {
        float: left;
        margin-right: 20px;
      }
      .topnav a {
        display: block;
        color: green;
        text-decoration: none;
      }
    </style>
  </head>
  <body>
    <?php include('nav.php') ?>
    <h1>This is some normal HTML, right here</h1>
      <?php
        //We have escaped into PHP mode
        echo "<h2>Hello, $username.</h2>"; //this is parsed text because of the " " instead of ' '
        echo 'How are things going, '.$username.'?';
        echo '<br  />Your favorite number is now '.$favoriteNumber.'!';
      ?>

      <?php echo addTen( 26 ); ?>

      <?php echo convertTimestamp('2017-02-03') ?>
    <p>What it DEW?!</p>
    <?php
      // a single-line comment
      # This is also a comment
      /*
        A whole block of comments
      */
      // Nobody will see any of these comments but ourselves! :D
      Echo 'I\'m full of secrets! WOW!<br />';
      Print ('THIS IS PRINT YO. Apparently this is a function');
    ?>
  </body>
</html>
