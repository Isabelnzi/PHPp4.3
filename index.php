<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>P4ex3</title>
  </head>
  <body>
    <?php
    $lastname = 'Nzingani';
    $firstname = 'Isabel';
    function text($lastname,$firstname){
    $sentence = $lastname.' '. $firstname;
    return $sentence;
    }
     echo text($lastname,$firstname);
     ?>
  </body>
</html>
