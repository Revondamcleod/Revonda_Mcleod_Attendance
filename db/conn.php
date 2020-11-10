<?php 
    
    // $host='127.0.0.1';uu
    // $db='attendance_db';
    // $user='root';
    // $pass='';
    // $charset='utf8mb4';
   

    //Remote Database
    $host = 'remotemysql.com';
    $db = 's0BPB3xTNb';
    $user = 's0BPB3xTNb';
    $pass = 'lu20tqTOKH';
    $charset = 'utf8mb4';

    $dsn="mysql:host=$host;dbname=$db;charset=$charset";
    try {
        $pdo= new PDO ($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        //echo "welcome to database";
    } catch (PDOException $e) {
        throw new PDOException($e->getMessage());
        //echo "No database found";
        //throw $th;
    }

    require_once 'crud.php';
    $crud = new crud($pdo);

?>