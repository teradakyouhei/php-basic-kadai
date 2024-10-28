<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
            function sort_2way(array $array, bool $order): array {
                // ソート方向に応じて処理
                if ($order) {
                    sort($array); // 昇順
                } else {
                    rsort($array); // 降順
                }
                return $array;
            }
            
            // 配列の定義
            $num = [15, 4, 18, 23, 10];
            
            // 昇順ソート
            $sorted_asc = sort_2way($num, true);
            echo "昇順にソートします。<br>";
            foreach ($sorted_asc as $number) {
                echo $number . "<br>";
            }
            
            // 降順ソート
            $sorted_desc = sort_2way($num, false);
            echo "降順にソートします。<br>";
            foreach ($sorted_desc as $number) {
                echo $number . "<br>";
            }
        ?>
    </p>
</body>

</html>