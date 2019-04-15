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
			<th>名前</th>
			<td>
				<p style="color:red"><?php echo @$error['name'] ?></p>
				<input type="text" name="name" value="<?php echo $name ?>" size="30">
			</td>
		</tr>
		<tr>
			<th>誕生日</th>
			<td>
				<p style="color:red"><?php echo @$error['birthday'] ?></p>
				<input type="text" name="birthday" value="<?php echo mb_substr($birthday, 0,4).'/'.mb_substr($birthday, 4,2).'/'.mb_substr($birthday, 6,2) ?>" size="30">
			</td>
		</tr>
		<tr>
			<th>性別</th>
			<td>
				<p style="color:red"><?php echo @$error['sex'] ?></p>
				<input type="text" name="sex" value="<?php
				if ($sex == 1) {
				    echo '男';
				}else if ($sex == 2) {
				    echo '女';
				}else{
				    echo '';
				} ?>" size="50">
			</td>
		</tr>
		<tr>
			<th>郵便番号</th>
			<td>
				<p style="color:red"><?php echo @$error['postcode'] ?></p>
				<input type="text" name="postcode" value="<?php echo mb_substr($postcode, 0,3).'-'.mb_substr($postcode, 3) ?>" size="30">
			</td>
		</tr>
		<tr>
			<th>住所</th>
			<td>
				<p style="color:red"><?php echo @$error['address'] ?></p>
				<input type="text" name="address" value="<?php echo $address ?>" size="30">
			</td>
		</tr>
		<tr>
			<th>本文</th>
			<td>
				<p style="color:red"><?php echo @$error['other'] ?></p>
				<textarea name="other" cols="50" rows="10"><?php echo $other ?></textarea>
			</td>
		</tr>
	</table>
	<input type="submit" value="修正">
</form>
</body>
</html>