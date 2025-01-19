<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // kadai_sort
        // ソート対象の配列$numを宣言
    $nums = [15, 4, 18, 23, 10];
        //関数sort_2wayに引数1$array(配列)と引数2$order(方向)を渡す
    function sort_2way($array, $order) {
        
        // 引数$ordergaがTRUEならばメッセージ表示 
        //引数$arrayを昇順にソート（PHP標準関数sort使用）
        if($order) {
        echo "昇順にソートします。<br>";
        sort($array);
        // ソートした配列のデータを1行づつ表示
        foreach ($array as $num) {
            echo $num . "<br>";
        }
        //引数$orderのTRUEが成り立たない(FALSE)の場合メッセージ表示
        echo "降順にソートします。<br>";    
        //引数$arrayを降順にソート（PHP標準関数rsort使用）
        rsort($array);

        // ソートした配列のデータを1行づつ表示
        foreach ($array as $num) {
        echo $num . "<br>";
       } 
    } 
}
    // 昇順でソート
    sort_2way($nums,TRUE);
    // 降順でソート
    sort_2way($nums,FALSE);
?>
    </p>
</body>

</html>