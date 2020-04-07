<title>Autók</title>
<?php 
$query = "SELECT * FROM `cars`";
require_once APP.'Core/cars.php';

echo '<h2>Autok</h2>';
echo '<table style="width:100%">';
echo '
  <tr>
    <th> Márka </th>
    <th> Modell </th>
    <th> Évjárat </th>
    <th> Üzemanyag </th>
    <th> Módosítás </th>
    <th> Törlés </th>
  </tr>';
foreach($result as $car) {
  echo '
  <tr>
    <th>' . $car['producer'] . '</th>
    <th>' . $car['type'] . '</th>
    <th>' . $car['vintage'] . '</th>
    <th>' . $car['fuel'] . '</th>
    <th><a href="' . ROOT.'?cars&id=' . $car['id'] . '"><button>Modify</button></a></th>
    <th><a href="' . ROOT.'?deleteCar&id=' . $car['id'] . '"><button>Delete</button></a></th>
  </tr>';
}
echo '</table>';

?>