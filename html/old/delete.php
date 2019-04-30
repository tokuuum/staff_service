<?php
/*
 * メンバー削除
 */

include("./lib/common.php");
$pdo = get_conn();
$mode = get_mode();


if ($mode == "delete") {
    $id = $_POST['id'];
    $stmt = $pdo->prepare("delete from member where id = :id");
    $stmt->bindParam(':id',$id);
    $stmt->execute();

    redirect("./");
}else{
    $id = $_GET['id'];
    $name = "";
    $stmt = $pdo->prepare("select name from member where id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    if ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $name = $result['name'];
    }
    include ("./lib/view/delete.php");
}



?>
