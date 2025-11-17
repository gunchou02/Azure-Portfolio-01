<?php

header('Content-Type: text/html; charset=UTF-8');



$host = getenv('DB_HOST');

$username = getenv('DB_USERNAME');

$password = getenv('DB_PASSWORD');

$db_name = "sys"; // デフォルトのシステムDB(sys)でテスト



// MySQL 初期化

$conn = mysqli_init();



// Azure SSL 接続設定 (必須)

mysqli_ssl_set($conn, NULL, NULL, NULL, NULL, NULL); 



// 接続試行

// 注意: 3306ポートとMYSQLI_CLIENT_SSLオプションを使用

if (!mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306, NULL, MYSQLI_CLIENT_SSL)) {

    die('DB接続失敗 (Error): ' . mysqli_connect_error());

}



echo '<h1>成功！Azure MySQLデータベースに接続されました！</h1>';

echo '<p>接続ホスト: ' . htmlspecialchars($host) . '</p>';

echo '<p>ステータス: 正常 (Connected)</p>';



// 接続終了

mysqli_close($conn);

?>
