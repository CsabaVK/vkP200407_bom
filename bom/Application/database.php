<?php

$config = json_decode(file_get_contents('config.json'), true);
// print_r($config);

try {    
    $pdo = new PDO(
        $config['url'],
        $config['userName'],
        $config['password']
    );
    return $pdo;
}
catch ( PDOException $e) {
    var_dump($e->getMessage());
    die;
}


?>