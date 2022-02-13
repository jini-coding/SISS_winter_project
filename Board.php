<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <style>
    li{
      text-align: left;
      padding: 10px;
      color :black;
      font-size: 20px;
      font-family : sans-serif;
    }
    h2{
      text-align: center;
      padding: 35px;
      color :#A50000;
      font-size: 5em;
      font-family : sans-serif;
    }
    body{
      background-color:#FFD8D8;
      height : 4000px;
    }
  </style>
  <title>board</title>
</head>
<body>
<h2> BOARD </h2>
    <?php
      $conn=mysqli_connect("localhost", "root", "비밀번호", "contents_review");
      $sql2=" SELECT * FROM contentsreview";
      $result=mysqli_query($conn, $sql2);
      $list=' ';
      while($row=mysqli_fetch_array($result)){
        if($row['ott']=='netflix'){
          $row['ott']='NETFLIX';
        }
        if($row['ott']=='tving'){
          $row['ott']='TVING';
        }
        if($row['ott']=='watcha'){
          $row['ott']='WATCHA';
        }
        if($row['ott']=='disney+'){
          $row['ott']='DISNEY+';
        }
        $list = $list."<li>{$row['ott']} - {$row['title']}(별점 : {$row['score']}) : {$row['comments']}";
      }
      echo $list;
      mysqli_close($conn);
    ?>


</body>
</html>
