<?php
try{
    $conn = new PDO("mysql:host=172.17.0.3;port=3306;dbname=UniMedDB", "root", "?SENHA?");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    echo 'Connection error: ' . $e->getMessage();
}
?>