<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=bd;charset=utf8;', 'root', "", array(PDO::ATTR_PERSISTENT => true));
} catch (PDOException $e) {
    die($e->getMessage());
}

?>