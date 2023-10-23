<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h3>질문 리스트 공간입니다.</h3>

<?php
// 데이터베이스 연결 설정
$servername = "localhost"; // 데이터베이스 서버 주소
$username = "root"; // MySQL 사용자 이름
$password = ""; // MySQL 비밀번호
$dbname = "article"; // 사용할 데이터베이스 이름

// MySQL에 연결
$conn = new mysqli($servername, $username, $password, $dbname);

// 연결 확인
if ($conn->connect_error) {
    die("연결 실패: " . $conn->connect_error);
}

// 데이터베이스에서 데이터 가져오기
$sql = "SELECT * FROM board";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // 결과 데이터 출력
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>" . $row["title"] . " - " . $row["content"] . "</li>";
    }
    echo "</ul>";
} else {
    echo "데이터가 없습니다.";
}

// MySQL 연결 닫기
$conn->close();

?>

<a href="/crud/create.php">글쓰기 </a>
<a href="/crud/db-connect.php">DB 연결 테스트</a>


</body>
</html>