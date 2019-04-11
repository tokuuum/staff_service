<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $title ?>｜お知らせ記事詳細</title>
</head>
<body>
<h1><?php echo $title ?>｜お知らせ記事詳細</h1>
<p><a href="./">トップページへ戻る</a>
<table border="1">
	<tr>
		<th>日付</th>
		<td><?php echo date('Y/m/d',strtotime($view_date)) ?></td>
	</tr>
	<tr>
		<th>タイトル</th>
		<td><?php echo $title ?></td>
	</tr>
	<tr>
		<th>本文</th>
		<td><?php echo nl2br($body) ?></td>
	</tr>
</table>
</body>
</html>