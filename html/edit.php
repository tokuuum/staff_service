<?php
/*
 * 管理画面・お知らせ記事編集
 */
include("lib/common.php");
$pdo = get_conn();

$mode = get_mode();

//更新ボタン押下時
if($mode == "edit"){
    $id = $_POST['id'];
    $view_date = $_POST['view_date'];
    $title = $_POST['title'];
    $body = $_POST['body'];

    //入力チェック
    $error = array();
    if(!$view_date){
        $error["view_date"] = "日付を入力してください";
    }else if(!preg_match("/^\d{4}\/\d{2}\/\d{2}$/",$view_date)){
        $error["view_date"] = "日付はyyyy/mm/dd形式で入力してください";
    }
    if(!$title){
        $error["title"] = "タイトルを入力してください";
    }

    if($error){
        //エラーがある場合
        //入力画面に戻ってエラーメッセージを表示
        include("../lib/view/admin/edit.php");
    }else{
        //エラーが無い場合
        //DB登録して一覧へ遷移する
        $stmt = $pdo->prepare("update news set view_date = :view_date, title = :title, body = :body where id = :id");
        $stmt->bindParam(':view_date',$view_date);
        $stmt->bindParam(':title',$title);
        $stmt->bindParam(':body',$body);
        $stmt->bindParam(':id',$id);
        $stmt->execute();

        redirect("./");
    }

    //初期表示時
}else{
    $id = $_GET['id'];
    $name = "";
    $birthday = "";
    $sex = "";
    $postcode = "";
    $address = "";
    $other = "";

    $stmt = $pdo->prepare("select id, name, birthday, sex, postcode, address, other from member where id = :id");
    $stmt->bindParam(':id',$id);
    $stmt->execute();
    if($result = $stmt->fetch(PDO::FETCH_ASSOC)){
        $name = $result['name'];
        $birthday = $result['birthday'];
        $sex = $result['sex'];
        $postcode = $result['postcode'];
        $address = $result['address'];
        $other = $result['other'];
    }

    include("lib/view/admin/edit.php");
}

?>
