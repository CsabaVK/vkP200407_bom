<?php 
require_once APP.'database.php';

$newCar = $pdo->prepare('INSERT INTO cars (producer, type, vintage, fuel) VALUES 
("' . $_POST['producer'] . '",
"' . $_POST['type'] . '",
"' . $_POST['vintage'] . '",
"' . $_POST['fuel'] . '")');


$newCar->execute();
?>