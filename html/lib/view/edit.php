<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>修正画面</title>
</head>
<body>
	<h1>修正画面</h1>
	<p>
		<a href="view.php?id=<?php echo $id ?>">戻る</a>
	</p>
	<form method="post" action="edit.php">
		<input type="hidden" name="mode" value="edit"> <input type="hidden"
			name="id" value="<?php echo $id ?>">
		<table border="1">
			<tr>
				<th>名前</th>
				<td>
					<p style="color: red"><?php echo @$error['name'] ?></p> <input
					type="text" name="name" value="<?php echo $name ?>" size="30">
				</td>
			</tr>
			<tr>
				<th>誕生日</th>
				<td>
					<p style="color: red"><?php echo @$error['birthday'] ?></p> <input
					type="text" name="birthday"
					value="<?php echo mb_substr($birthday, 0,4).'/'.mb_substr($birthday, 4,2).'/'.mb_substr($birthday, 6,2) ?>"
					size="30">
				</td>
			</tr>
			<tr>
				<th>性別</th>
				<td>
					<p style="color: red"><?php echo @$error['sex'] ?></p> <input
					type="radio" name="sex" value="1"
					<?php

    if ($sex == 1) {
        echo 'checked';
    }
    ?>>男 <input type="radio" name="sex" value="2"
					<?php
    if ($sex == 2) {
        echo 'checked';
    }
    ?>>女
				</td>
			</tr>
			<tr>
				<th>郵便番号</th>
				<td>
					<p style="color: red"><?php echo @$error['postcode'] ?></p>
					<input type="text" name="postcode" value="<?php if ($postcode != "0") {
					    echo mb_substr($postcode, 0,3).'-'.mb_substr($postcode, 3,4);
					} ?>"
					size="30">
				</td>
			</tr>
			<tr>
				<th>住所</th>
				<td>
					<p style="color: red"><?php echo @$error['address'] ?></p> <input
					type="text" name="address" value="<?php echo $address ?>"
					size="30">
				</td>
			</tr>
			<tr>
				<th>本文</th>
				<td>
					<p style="color: red"><?php echo @$error['other'] ?></p>
					<textarea name="other" cols="50" rows="10"><?php echo $other ?></textarea>
				</td>
			</tr>
		</table>
		<input type="submit" value="修正">
	</form>
</body>
</html>