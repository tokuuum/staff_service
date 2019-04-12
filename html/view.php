<?php
/*
 * スタッフ参照
 */
include('./lib/common.php');
$pdo = get_conn();

$id = $_GET['id'];
$stmt = $pdo->query('select name, birthday, sex, postcode, address, other from member where id='.$id);
$list = array();
while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
   $list[] = $result;
}
include('./lib/view/view.php');
?>