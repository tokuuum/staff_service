<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>削除画面</title>
</head>
<body>
	<h1>削除画面</h1>
	<p>ID：<?php echo $id?>を削除しますか？</p>
	<form method="post" action="delete.php">
		<input type="hidden" name="mode" value="delete">
		<input type="hidden" name="id" value="<?php echo $id ?>">
		<input type="submit" value="はい">
		<input type="button" onclick="location.href='./'" value="いいえ">
	</form>
</body>
</html>