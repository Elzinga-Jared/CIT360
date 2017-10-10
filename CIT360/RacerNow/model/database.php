<?php
  $dsn = 'mysql:host=localhost;dbname=itsapond_rc';
    $username = 'itsapond_iCient';
    $password = 'jared123';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>