<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>スタッフ追加</title>
</head>
<body>
<h1>スタッフ追加</h1>
<form method="post" action="add.php">
	<input type="hidden" name="mode" value="add">
	<table border="1">
		<tr>
			<th>氏名</th>
			<td>
				<p style="color:red"><?php echo @$error['name'] ?></p>
				<input type="text" name="name" value="<?php echo $name ?>" size="50">
			</td>
		</tr>
		<tr>
			<th>生年月日</th>
			<td>
				<p style="color:red"><?php echo @$error['birthday'] ?></p>
				<select name="year">
					<option value=""></option>
                    <option value="2000">2000</option>
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>
                </select>
                <select name="month">
					<option value=""></option>
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                </select>
                <select name="day">
					<option value=""></option>
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                </select>
			</td>
		</tr>
		<tr>
			<th>性別</th>
			<td>
			<p style="color:red"><?php echo @$error['sex'] ?></p>
				<input type="radio" name="sex" value="1"><label>男</label>
				<input type="radio" name="sex" value="2"><label>女</label>
			</td>
		</tr>
		<tr>
			<th>郵便番号</th>
			<td>
				<p style="color:red"><?php echo @$error['postcode'] ?></p>
				<input type="text" name="postcode1" value="<?php echo $postcode1 ?>" size="10">-
				<input type="text" name="postcode2" value="<?php echo $postcode2 ?>" size="20">
			</td>
		</tr>
		<tr>
			<th>住所</th>
			<td>
				<p style="color:red"><?php echo @$error['address'] ?></p>
				<input type="text" name="address" value="<?php echo $address ?>" size="50">
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
	<input type="submit" value="追加">
</form>
</body>
</html>