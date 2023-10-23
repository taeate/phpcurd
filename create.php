<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h3>글 작성 공간입니다.</h3>


  <form action="request.php" method="post">
          이름 : <input type="text" name="name"><br>
          이메일 : <input type="text" name="email"><br>
          <input type="submit">
  </form>
  <br>

  <a href="/crud/db-connect.php">DB 연결 테스트</a>
  <a href="/crud/list.php">리스트</a>

</body>
</html>