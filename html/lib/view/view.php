<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>スタッフ参照</title>
</head>
<body>
	<h1>スタッフ参照</h1>
	<p>
		<a href="./">トップページへ戻る</a>


	<table border="1">
		<tr>
			<th>氏名</th>
			<td><?php echo $userdata[0]['name'] ?></td>
		</tr>
		<tr>
			<th>生年月日</th>
			<td><?php echo date('Y/m/d',strtotime($userdata[0]['birthday'])) ?></td>
		</tr>
		<tr>
			<th>性別</th>
			<td><?php

if ($userdata[0]['sex'] == 1) {
    echo '男';
} else if ($userdata[0]['sex'] == 2) {
    echo '女';
} else {
    echo '不明';
}
?></td>
		</tr>
		<tr>
			<th>郵便番号</th>
			<td><?php
if ($userdata[0]['postcode'] != "0") {
    echo mb_substr($userdata[0]['postcode'], 0, 3) . '-' . mb_substr($userdata[0]['postcode'], 3, 4);
    ;
}
?></td>
		</tr>
		<tr>
			<th>住所</th>
			<td><?php echo $userdata[0]['address'] ?></td>
		</tr>
		<tr>
			<th>備考</th>
			<td><?php echo nl2br($userdata[0]['other']) ?></td>
		</tr>
	</table>

	<p>
		<a href="edit.php?id=<?php echo $_GET['id'] ?>">修正</a>
	</p>
</body>
</html>