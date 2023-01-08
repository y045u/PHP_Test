<?php

require 'db_connection.php';

// ユーザー入力なし query
$sql = 'select * from contacts where id = 1';
$stmt = $pdo->query($sql);

$result = $stmt->fetchall();

echo '<pre>';
var_dump($result);
echo '</pre>';

// ユーザー入力あり prepare, bind, execute
$sql = 'select * from contacts where id = :id'; //名前付きプレースホルダ
$stmt = $pdo->prepare($sql); //プリペアードステートメント
$stmt->bindValue('id', 2, PDO::PARAM_INT); //紐づけ
$stmt->execute(); //実行

$result = $stmt->fetchall();

echo '<pre>';
var_dump($result);
echo '</pre>';

//トランザクション biginTransaction, commit, rollback

$pdo->beginTransaction();

Try{
    // sql処理
    $pdo->commit();

}catch(PDOException $e){

    $pdo->rollback(); //更新のキャンセル
}
