<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>管理画面・お知らせ記事一覧</title>
</head>
<body>
<h1>管理画面・お知らせ記事一覧</h1>
<div><a href="add.php">記事追加</a></div>
<table border="1">
	<tr>
		<th>ID</th>
		<th>日付</th>
		<th>タイトル</th>
		<th>修正</th>
		<th>削除</th>
	</tr>
<?php foreach($list as $row){ ?>
	<tr>
		<td><?php echo $row['id'] ?></td>
		<td><?php echo date('Y/m/d',strtotime($row['view_date'])) ?></td>
		<td><?php echo $row['title'] ?></td>
		<td><a href="edit.php?id=<?php echo $row['id'] ?>">修正</a></td>
		<td><a href="delete.php?id=<?php echo $row['id'] ?>">削除</a></td>
	</tr>
<?php } ?>
</table>
</body>
</html>