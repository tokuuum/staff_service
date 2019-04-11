<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>管理画面・お知らせ記事修正</title>
</head>
<body>
<h1>管理画面・お知らせ記事修正</h1>
<form method="post" action="edit.php">
	<input type="hidden" name="mode" value="edit">
	<input type="hidden" name="id" value="<?php echo $id ?>">
	<table border="1">
		<tr>
			<th>日付</th>
			<td>
				<p style="color:red"><?php echo @$error['view_date'] ?></p>
				<input type="text" name="view_date" value="<?php echo $view_date ?>" size="10">
			</td>
		</tr>
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
	<input type="submit" value="修正">
</form>
</body>
</html>