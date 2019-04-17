<?php
/*
 * スタッフ追加
 */
include("./lib/common.php");

$mode = get_mode();

//追加ボタン押下時
if ($mode == "add") {
    $name = isset($_POST['name']) ? $_POST['name'] : "";
    $year = isset($_POST['year']) ? $_POST['year'] : "";
    $month = isset($_POST['month']) ? $_POST['month'] : "";
    $day = isset($_POST['day']) ? $_POST['day'] : "";
    $birthday = "";
    $sex = isset($_POST['sex']) ? $_POST['sex'] : "";
    $postcode1 = isset($_POST['postcode1']) ? $_POST['postcode1'] : "";
    $postcode2 = isset($_POST['postcode2']) ? $_POST['postcode2'] : "";
    $postcode = $postcode1.$postcode2;
    $address = isset($_POST['address']) ? $_POST['address'] : "";
    $other = isset($_POST['other']) ? $_POST['other'] : "";

    //入力チェック
    $error = array();
    if(!$name){
        $error["name"] = "名前は必須です";
    }

    if (!$year || !$month || !$day) {
        $error["birthday"] = "生年月日は必須です";
    }else{
        $birthday = $year.$month.$day;
    }

    if($error){
        echo "エラーあるよ";
        //エラーがある場合
        //入力画面に戻ってエラーメッセージを表示
        include("./lib/view/add.php");
    }else{
        echo "エラーなし";
        //エラーが無い場合
        //DB登録して一覧へ遷移する
        $pdo = get_conn();
        $stmt = $pdo->prepare("insert into member(name, birthday, sex, postcode, address, other)
                values(:name, :birthday, :sex, :postcode, :address, :other)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':birthday', $birthday);
        $stmt->bindParam(':sex', $sex);
        $stmt->bindParam(':postcode', $postcode);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':other', $other);
        $stmt->execute();

        redirect("./");
    }
}
else
{
    //初期表示時
$name = "";
$address = "";
$postcode1 = "";
$postcode2 = "";
$other = "";
include("./lib/view/add.php");
}
?>