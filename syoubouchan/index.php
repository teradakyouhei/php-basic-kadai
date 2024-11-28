<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>消防ちゃん（仮）＿物件一覧</title>
    <link rel="stylesheet" href="syoubouchan.css">
</head>
<body>

<div class="header">
    <h2>消防ちゃん（仮）</h2>
    <!-- 新規受注登録ページへのボタン -->
    <a href="new_order.html" class="button">新規受注作成</a>
</div>

<!-- 物件一覧テーブル -->
<h3>物件一覧</h3>
<table id="propertyTable">
    <thead>
        <tr>
            <th>コード№</th>
            <th>物件名</th>
            <th>得意先名</th>
            <th>担当営業</th>
            <th>住所</th>
            <th>点検表提出済</th>
        </tr>
    </thead>
    <tbody>
        <!-- PHPで登録済みデータを表示 -->
        <?php
        // MySQLデータベース接続
        $conn = new mysqli("localhost", "root", "", "syoubouchan_db");

        // 接続エラー確認
        if ($conn->connect_error) {
            die("接続失敗: " . $conn->connect_error);
        }

        // データを取得
        $sql = "SELECT code, name, company, sales_person, address, check_status FROM properties";
        $result = $conn->query($sql);

        // データがある場合に行を出力
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['code']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['company']}</td>
                        <td>{$row['sales_person']}</td>
                        <td>{$row['address']}</td>
                        <td>{$row['check_status']}</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='6'>登録されたデータはありません。</td></tr>";
        }

        // データベース接続を閉じる
        $conn->close();

        ?>

        
    </tbody>
</table>

</body>
</html>
