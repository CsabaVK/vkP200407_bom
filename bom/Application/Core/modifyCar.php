<?php 
require_once APP.'database.php';

$modifyCar = $pdo->prepare('UPDATE cars SET producer="' . $_POST['producer'] . '", type="' . $_POST['type'] . '", vintage="' . $_POST['vintage'] . '", fuel="' . $_POST['fuel'] . '" WHERE id="' . $_GET['id'] . '"');
$modifyCar->execute();

?>