<?php
require_once '../vendor/autoload.php';

echo "Hello World!";


//$array = [1, "apple", 2, "foo", "bar", "Azeez", "Adebayo" ] ;
//var_dump($array);
//dump($array);


$database = new medoo(
    [
    'database_type' => 'sqlite',
    'database_file' => '../storage/database.db'
    ]
);

dump($database) ;
?>