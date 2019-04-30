<?php
function get_conn(){
    try{
        $pdo = new PDO("mysql:host=localhost;dbname=u101;port=3306;charset=utf8;","u101","u10a9bd");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        return $pdo;
    }catch(PDOException $e){
        echo $e->getMessage();
        exit;
    }
}

function get_mode(){
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        return isset($_GET['mode']) ? $_GET['mode'] : "";
    }else if($_SERVER["REQUEST_METHOD"] == "POST"){
        return isset($_POST['mode']) ? $_POST['mode'] : "";
    }else{
        return null;
    }
}

function redirect($path){
    header("Location: " . $path);
}
?>