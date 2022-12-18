<?php

function validation($request){ //$_POSTの連想配列

    $errors = [];

    if(empty($request['your_name']) || 20 < mb_strlen($request['your_name'])){
        $errors[] = '「氏名」は必須です。20文字以内で入力してください。';
    }

    if(empty($request['contact']) || 200 < mb_strlen($request['contact'])){
        $errors[] = '「お問い合わせ内容」は必須です。200文字以内で入力してください。';
    }

    return $errors;
}


?>