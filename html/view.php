<?php
/*
 * スタッフ参照
 */
include('./lib/common.php');
$pdo = get_conn();

$stmt = $pdo->query('select name, birthday, sex, postcode, address, other from member');
$list = array();
while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
   // ここから ;
}

?>