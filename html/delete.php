<?php
/*
 * メンバー削除
 */

include("./lib/common.php");
$pdo = get_conn();
$mode = get_mode();


echo "MODE：".$mode;


if ($mode == "delete") {
    $id = $_POST['id'];
    $stmt = $pdo->prepare("delete from member where id = :id");
    $stmt->bindParam(':id',$id);
    $stmt->execute();

    redirect("./");
}else{
    $id = $_GET['id'];
    $path = "./lib/view/admin/delete.php";
    include ($path);
}



?>
