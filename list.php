<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "article";

// 데이터베이스 연결 생성
$connect = new mysqli($servername, $username, $password, $database);

// 연결 확인
if ($connect->connect_error) {
    die("데이터베이스 연결 실패: " . $connect->connect_error);
}

// 이후에는 쿼리를 실행할 수 있음
$query = "SELECT * FROM board";
$result = $connect->query($query);

// 결과 처리 및 연결 닫기
if ($result) {
    while ($row = $result->fetch_assoc()) {
        // 결과 처리 로직
    }
    $result->close();
} else {
    echo "쿼리 실행 오류: " . $connect->error;
}

// 이제 다시 $connect 변수를 사용하여 다른 쿼리를 실행할 수 있음
foreach ($connect->query("SHOW TABLES") as $database_row) {
    echo "<h2>" . $database_row['Tables_in_article'] . "</h2>";
    echo "<br>";
}



// 연결 닫기
$connect->close();

?>


</body>
</html>