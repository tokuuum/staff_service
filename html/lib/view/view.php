<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>スタッフ参照</title>
</head>
<body>
<h1>スタッフ参照</h1>
<p><a href="./">トップページへ戻る</a>
<table border="1">
//listでまわす
	<tr>
		<th>氏名</th>
		<td><?php echo $name ?></td>
	</tr>
	<tr>
		<th>生年月日</th>
		<td><?php echo date('Y/m/d',strtotime($birthday)) ?></td>
	</tr>
	<tr>
		<th>性別</th>
		<td><?php echo $sex ?></td>
	</tr>
	<tr>
		<th>郵便番号</th>
		<td><?php echo $postcode ?></td>
	</tr>
	<tr>
		<th>住所</th>
		<td><?php echo $address ?></td>
	</tr>
	<tr>
		<th>備考</th>
		<td><?php echo nl2br($body) ?></td>
	</tr>
</table>
</body>
</html>