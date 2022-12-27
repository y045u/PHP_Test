<?php
//パスワードを記録したファイルの場所
echo __FILE__;

echo '<br>';
//パスワード（暗号化）
echo(password_hash('password123', PASSWORD_BCRYPT));

echo '<br>';

$contactFile = '.contact.dat';

/*

//ファイルを丸ごと読み込む方法
$fileContacts = file_get_contents($contactFile);

echo $fileContacts;
echo '<br>';

//ファイルに書き込み(上書き)
//file_put_contents($contactFile, 'aiueo');

echo $fileContacts;

//ファイルに書き込み(追記)
$addText = 'aiueo'."\n";
file_put_contents($contactFile, $addText, FILE_APPEND);
*/

//配列 file,区切る explode, foreach
$allData = file($contactFile);

foreach($allData as $lineData){
    $lines = explode(',', $lineData);
    echo $lines[0].'<br>';
    echo $lines[1].'<br>';
    echo $lines[2].'<br>';
}

?>