<?php 
    define('DB_HOST','employeeleavedb.covgxrjelvph.us-east-1.rds.amazonaws.com');
    define('DB_USER','admin');
    define('DB_PASS','babbynani');
    define('DB_NAME','employeeleavedb');
    
    try
    {
        $dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    }
        catch (PDOException $e)
    {
        echo "Looks like you don't have any database/connection for this project. Please check your Database Connection and Try Again! </br>";
        exit("Error: " . $e->getMessage());
    }
?>
