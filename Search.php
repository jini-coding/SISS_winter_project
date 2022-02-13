<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>search</title>
</head>
<body>

  <form action="Search.php" method="POST">
    <p>제목 : <textarea name="na" rows="1" cols="20" placeholder="제목을 입력해주세요"></textarea></p>
    <p style="padding-left:440px;"><input type="submit" value="작성" style=""></p>
    <?php
      $conn=mysqli_connect("localhost", "root", "비밀번호", "contents_review");

      $titlekey=$_POST['title'];

      $sql2=" SELECT * FROM contentsreview WHERE title LIKE '%$titlekey%'";
      $result=mysqli_query($conn, $sql2);
      $list=' ';
      while($row=mysqli_fetch_array($result)){
        $list = $list."<li>{$row['title']} : {$row['comments']}";
      }
      echo $list;
      mysqli_close($conn);
    ?>


</body>
</html>
