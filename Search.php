
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>search</title>
  <style>
    #home{
      border:1px solid black;
      border-radius : 5px;
      padding:3px;
    }
    #home a{
      text-decoration:none;
    }
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
</head>
<body>
  <span id="home"><a href="index.php">메인으로</a></span>
  <h2> SEARCH </h2>
  <div id="search_box" style="text-align : center; padding-top : 50px;">
    <form action="Search.php" method="GET">
      <select name="categ">
        <option value="title">제목</option>
        <option value="ott">OTT</option>
        <option value="category">카테고리</option>
      </select>
      <input type="text" name="search" size="40" required="required">
          <button class="btn btn-primary">검색</button>
    </form>
  </div>
  <?php
    ini_set('display_errors', '0');
  ?>
  <?php
    $catg=$_GET['categ'];
    $search=$_GET['search'];
  ?>
  <p><br><br><br>
  <?php
    $conn=mysqli_connect("localhost", "root", "비밀번호", "contents_review");
    $sql2=" SELECT * FROM contentsreview";
    $result=mysqli_query($conn, $sql2);
    ?>
    <table>
      <tr><th>OTT</th> <th>제목</th> <th>별점</th> <th>후기</th></tr>
    <?php
      while($row=mysqli_fetch_array($result)){
        if($row['title']==$search or $row['ott']==$search or $row['category']==$search){
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
      }

      ?>
    </table>
    <?php
      echo "</table>";
      mysqli_close($conn);
    ?>

</body>
</html>
