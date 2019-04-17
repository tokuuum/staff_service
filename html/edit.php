<?php
/*
 * 管理画面・お知らせ記事編集
 */
include ("lib/common.php");
$pdo = get_conn();

$mode = get_mode();

// 更新ボタン押下時
if ($mode == "edit") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $birthday = str_replace('/', '', $_POST['birthday']);
    $sex = $_POST['sex'];
    $postcode = str_replace('-', '', $_POST['postcode']);
    $address = $_POST['address'];
    $other = $_POST['other'];

    // 入力チェック
    $error = array();
    if (! $name) {
        $error["name"] = "名前を入力してください";
    }
    if (! $birthday) {
        $error["birthday"] = "日付を入力してください";
    } else if (! preg_match("/^\d{4}\d{2}\d{2}$/", $birthday)) {
        $error["birthday"] = "日付はyyyy/mm/dd形式で入力してください";
    }
    if (! $sex) {
        $error["sex"] = "性別を選択してください";
    }

    if ($error) {
        // エラーがある場合
        // 入力画面に戻ってエラーメッセージを表示
        include ("./lib/view/admin/delete.php");
    } else {
        // エラーが無い場合
        // DB登録して一覧へ遷移する
        $stmt = $pdo->prepare("update member set name = :name, birthday = :birthday, sex = :sex, postcode = :postcode, address = :address, other = :other where id = :id");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':birthday', $birthday);
        $stmt->bindParam(':sex', $sex);
        $stmt->bindParam(':postcode', $postcode);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':other', $other);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        redirect("./");
    }

    // 初期表示時
} else {
    $id = $_GET['id'];
    $name = "";
    $birthday = "";
    $sex = "";
    $postcode = "";
    $address = "";
    $other = "";

    $stmt = $pdo->prepare("select id, name, birthday, sex, postcode, address, other from member where id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    if ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $name = $result['name'];
        $birthday = $result['birthday'];
        $sex = $result['sex'];
        $postcode = $result['postcode'];
        $address = $result['address'];
        $other = $result['other'];
    }

    include ("lib/view/edit.php");
}

?>
