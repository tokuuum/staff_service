<?php
/*
 * トップページ・お知らせ記事一覧
 */
ini_set('display_errors', 'On');
include("./lib/common.php");
$pdo = get_conn();
$stmt = $pdo->query("select id, name, birthday from member");
$list = array();
while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
	$list[] = $result;
}
include("./lib/view/index.php");
?>
