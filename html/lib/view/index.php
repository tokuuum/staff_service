<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>トップページ</title>
</head>
<body>
<h1>トップページ</h1>
<p>お知らせ</p>
<table border="1">
	<tr>
		<th>ID</th>
		<th>名前</th>
		<th>生年月日</th>
		<th>参照</th>
		<th>削除</th>
	</tr>
<?php foreach($list as $row){ ?>
	<tr>
		<td><?php echo $row['id']?></td>
		<td><?php echo $row['name']?></td>
		<td><?php echo date('Y/m/d',strtotime($row['birthday'])) ?></td>
		<td><a href="view.php">参照</a></td>
		<td><a href="delete.php">削除</a></td>
	</tr>
<?php } ?>
</table>
</body>
</html>