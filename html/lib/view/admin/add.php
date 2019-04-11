<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>管理画面・お知らせ記事追加</title>
</head>
<body>
<h1>管理画面・お知らせ記事追加</h1>
<form method="post" action="add.php">
	<input type="hidden" name="mode" value="add">
	<table border="1">
		<tr>
			<th>タイトル</th>
			<td>
				<p style="color:red"><?php echo @$error['title'] ?></p>
				<input type="text" name="title" value="<?php echo $title ?>" size="50">
			</td>
		</tr>
		<tr>
			<th>本文</th>
			<td>
				<p style="color:red"><?php echo @$error['body'] ?></p>
				<textarea name="body" cols="50" rows="10"><?php echo $body ?></textarea>
			</td>
		</tr>
	</table>
	<input type="submit" value="追加">
</form>
</body>
</html>