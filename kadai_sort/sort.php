<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        function sort_2way(array $array, bool $order): void {
            // ソート方向に応じて処理
            if ($order) {
                sort($array); // 昇順
                echo "昇順にソートします<br>";
            } else {
                rsort($array); // 降順
                echo "降順にソートします<br>";
            }
            
            // 各要素を縦に表示
            foreach ($array as $number) {
                echo $number . "<br>";
            }
            echo "<br>"; // 改行を追加
        }

        // 配列の定義
        $num = [15, 4, 18, 23, 10];

        // 昇順ソートを実行
        sort_2way($num, true);

        // 降順ソートを実行
        sort_2way($num, false);
        ?>
    </p>
</body>

</html>
