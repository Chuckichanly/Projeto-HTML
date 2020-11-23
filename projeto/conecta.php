<?php
$pdo = new PDO('mysql:host=localhost:3306;dbname=projeto', 'root', 
Null);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>