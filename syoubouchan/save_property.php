<?php
// データベース接続情報
$servername = "localhost";
$username = "root";
$password = ""; // デフォルトでは空
$dbname = "syoubouchan_db";

// データベース接続
$conn = new mysqli($servername, $username, $password, $dbname);

// 接続エラー確認
if ($conn->connect_error) {
    die("接続失敗: " . $conn->connect_error);
}

// フォームデータを取得
$code = $_POST['code'];
$name = $_POST['name'];
$company = $_POST['company'];
$sales_person = $_POST['sales_person'];
$address = $_POST['address'];
$check_status = $_POST['check_status'];

// データ挿入SQL
$sql = "INSERT INTO properties (code, name, company, sales_person, address, check_status) 
        VALUES ('$code', '$name', '$company', '$sales_person', '$address', '$check_status')";

if ($conn->query($sql) === TRUE) {
    echo "データが正常に登録されました！<br>";
    echo "<a href='index.html'>物件一覧に戻る</a>";
} else {
    echo "エラー: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
