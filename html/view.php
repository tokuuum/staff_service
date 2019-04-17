<?php
/*
 * スタッフ参照
 */
include('./lib/common.php');
$pdo = get_conn();

$id = $_GET['id'];
$stmt = $pdo->prepare('select name, birthday, sex, postcode, address, other from member where id= :id');
$stmt-> bindParam(':id', $id);
$stmt->execute();
$userdata = $stmt->fetchAll(PDO::FETCH_ASSOC);

include('./lib/view/view.php');
?>