<?php 

require 'vendor/autoload.php';
use Medoo\Medoo;
 
// Initialize
$database = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'ajaysquare',
    'server' => 'localhost',
    'username' => 'root',
    'password' => ''
]);

?>