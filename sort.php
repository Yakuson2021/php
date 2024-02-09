<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>PHP基礎編</title>

    </head>
    <body>
<?php
// 昇順・降順を選択して配列をソートする関数
function sort_2way($array, $order) {
// TRUEなら昇順、TRUEでなければ降順にソート
    if($order) {
        echo '昇順にソートします<br>';
        sort($array);
    } else {
        echo '降順にソートします<br>';
        rsort($array);
    }
    
    foreach($array as $key){
        echo $key .'<br>';
    }
}

$nums = [15, 4, 18, 23, 10 ];
// sort_2way関数を呼び出し、引数として「配列の中身である$nums」と「論理型」を渡す
// 「昇順ソート」
sort_2way($nums, TRUE);
// 「降順ソート」
sort_2way($nums, FALSE);
?>
    </body>
</html>