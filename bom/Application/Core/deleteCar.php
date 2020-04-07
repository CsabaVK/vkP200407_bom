<?php 
require_once APP.'database.php';

$deleteCar = $pdo->prepare('DELETE FROM cars WHERE id="' . $_GET['id'] . '"');
$deleteCar->execute();



?>