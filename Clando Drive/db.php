<?php
try {
    $conn = new PDO ("mysql: host=localhost; dbname=clando drive;", "root","");

} catch (Exception  $e) {
    die ("Error:" .$e->getMessage());
}
?>