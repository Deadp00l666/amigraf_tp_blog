<?php
try {

  $database = new PDO('mysql:host=localhost;dbname=coursphp;charset=utf8', 'root', '');


} catch (Exception $exception) {
    var_dump($exception);
    exit;
}

return $database;
 ?>
