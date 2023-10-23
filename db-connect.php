<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>DB 연결 테스트 공간입니다.</h3>

<br>

<!-- <?php
  echo "Maria DB 연결 테스트<br>";
  $db = mysqli_connect("localhost","root","","article"); #mysqli_connect('ip', 'user', 'password', 'database')로 데이터베이스와 php가 연결된다.
  if($db){
  echo "connect: success<br>";
  }else{
  echo "connect: failure<br>";
  }
  $result = mysqli_query($db,'SELECT VERSION() as VERSION');
  $data = mysqli_fetch_assoc($result);
  echo $data['VERSION'];
  ?> -->


<a href="/crud/create.php">글쓰기</a>
<a href="/crud/list.php">리스트</a>

</body>
</html>