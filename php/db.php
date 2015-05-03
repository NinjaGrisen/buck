<?php
try {
    $dbh = new PDO('mysql:host=localhost;dbname=bucketlist', 'root', '');
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}