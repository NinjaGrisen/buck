<?php
try {
    $dbh = new PDO('mysql:host=mysql08.citynetwork.se;dbname=119897-bucketlist', '119897-ky15282', 'Ajabaja123');
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}