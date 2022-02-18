<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <style>
    table{
      text-align: center;
      padding: 50px;
      color :black;
      font-size: 20px;
      font-family : sans-serif;
      border-collapse: collapse;
      margin:auto;
    }
    tr{
      border-top :1px solid black;
      border-bottom: 1px solid black;
    }
    th, td {
       padding: 15px;
    }
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
    ?>
    <table>
      <tr><th>OTT</th> <th>제목</th> <th>별점</th> <th>후기</th></tr>
    <?php
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
      ?>
        <tr>
          <td><?php echo $row['ott']?></td>
          <td><?php echo $row['title']?></td>
          <td><?php echo $row['score']?></td>
          <td><?php echo $row['comments']?></td>
        </tr>
      <?php
      }
      ?>
      <?php
      echo "</table>";
      mysqli_close($conn);
    ?>


</body>
</html>
