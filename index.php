<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Badwords</title>
  </head>
  <body>

    <?php


    $text = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";


    $text = str_replace('incididunt', '***', $text);
    $text = str_replace('ipsum', '***', $text);

    echo $text;

    ?>

    <br>
    <br>

    <?php
    $text2 = "La lunghezza del testo é: ";
    echo $text2;
    echo strlen($text);

    ?>

  </body>
</html>
