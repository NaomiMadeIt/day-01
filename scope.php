<?php
$number = 7;
function addTen($num) {
  /*
  //first version of function addTen()
  global $number; //makes it go outside of the function to find this variable
  $number += 10;
  */
  return $num += 10;
}
// addTen(); //goes to the first version of function addTen()
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Scope Demo</title>
  </head>
  <body>
    <?php echo addTen($number); ?>
  </body>
</html>
