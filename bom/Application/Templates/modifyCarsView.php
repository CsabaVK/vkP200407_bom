<?php
$query = 'SELECT * FROM `cars` WHERE id="' . $_GET['id'] . '"';
require_once APP.'Core/cars.php';

echo '<h2>Autok</h2>';
echo '<table style="width:100%">';
foreach($result as $car) {
  echo '
  <form method="POST" action="' . ROOT . '?modifyCar&id=' . $_GET['id'] . '">
  <tr>
    <th><input type="text" name="producer" value="' . $car['producer'] . '"></th>
    <th><input type="text" name="type" value="' . $car['type'] . '"></th>
    <th><input type="text" name="vintage" value="' . $car['vintage'] . '"></th>
    <th><input type="text" name="fuel" value="' . $car['fuel'] . '"></th>
    <th><button type="submit">Change</button></th>
  </tr>
  </form>';
}
echo '</table>';

?>