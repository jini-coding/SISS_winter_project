
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>search</title>
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
</head>
<body>
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
    $catg=$_GET['categ'];
    $search=$_GET['search'];
  ?>
  <p><br><br><br>
  <?php
    $conn=mysqli_connect("localhost", "root", "비밀번호", "contents_review");
    $sql2=" SELECT * FROM contentsreview";
    $result=mysqli_query($conn, $sql2);
    $list=' ';

      while($row=mysqli_fetch_array($result)){
        if($row['title']==$search){
          $list = $list."<li>{$row['ott']} - {$row['title']}(별점 : {$row['score']}) : {$row['comments']}";
          echo $list;
        }
        if($row['ott']==$search){
          $list = $list."<li>{$row['ott']} - {$row['title']}(별점 : {$row['score']}) : {$row['comments']}";
          echo $list;
        }
        if($row['category']==$search){
          $list = $list."<li>{$row['ott']} - {$row['title']}(별점 : {$row['score']}) : {$row['comments']}";
          echo $list;
        }
      }

    mysqli_close($conn);
  ?>

</body>
</html>
