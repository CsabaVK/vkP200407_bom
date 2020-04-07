<?php 
require_once APP.'database.php';

$allCar = $pdo->prepare($query);
$allCar->execute();
$result = $allCar->fetchAll();

?>