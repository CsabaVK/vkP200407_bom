<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo APP.'Style/style.css' ?>">
</head>
<body>

<?php require_once APP . 'Templates/headerView.php'; ?>

<div style="padding-left:16px">
  <br>
  <?php 
    // eldonti hogy melyik oldalt kell behozni
    // POST requests
    if (isset($_GET['modifyCar'])) {
      if (isset($_POST['producer']) && isset($_POST['type'])  && isset($_POST['vintage'])  && isset($_POST['fuel'])) {
        require_once APP.'Core/modifyCar.php';
        header("Location: " . ROOT);
      } else {
        echo 'You can not leave empty anything';
      }
    }

    if (isset($_GET['newCar'])) {
      if (isset($_POST['producer']) && isset($_POST['type'])  && isset($_POST['vintage'])  && isset($_POST['fuel'])) {
        require_once APP.'Core/newCar.php';
        echo 'Sikeresen hozzáadtak az autót :)<br>';
        echo 'Hamarosan átirányítunk!';
        header("refresh:3;url=". ROOT);
      } else {
        require_once APP.'Templates/newCarView.php';
      }
    }

    else if(isset($_GET['deleteCar']) && isset($_GET['id'])) {
      require_once APP.'Core/deleteCar.php';
      header("Location: " . ROOT);
    } 

    // views
    else if(isset($_GET['cars'])) {
      if (isset($_GET['id'])) {
        require_once APP.'Templates/modifyCarsView.php';
      } else {
        require_once APP.'Templates/carsView.php';
      }
    }

    else if(isset($_GET['newCar'])) {
      require_once APP.'Templates/newCarView.php';
    } 

    else {
      require_once APP.'Templates/carsView.php';
    }
    


  ?>
</div>

</body>
</html>
