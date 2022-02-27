<?php
$conn = mysqli_connect("127.0.0.1", "root", "yunjin424", "contents_review");


function mq($sql)
{
  global $conn;
  return $conn->query($sql);
}

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <style>
      a {
        text-decoration:none;
        color:black;
      }
      #main{
        font-size:40px;
        text-align: center;
        padding: 30px;
        color :#A50000;
        border-bottom:1px solid black;
      }
      body{
        background-color:#FFD8D8;
      }
      #home{
        border:1px solid black;
        border-radius : 5px;
        padding:3px;
      }
      #home a{
        text-decoration:none;
        color:black;
      }
      nav{
        width:200px;
        border-right:1px solid black;
        position:fixed;
      }
      .title_menu{
        font-size:18px;
        padding:5px;
      }
      .menu {
        list-style:none;
        padding-left:0px;
      }
      .menu li a {
        line-height:30px;
        display:block;
        padding:0 20px;
        font-size:15px;
        color:#555555;
        border-bottom:1px solid black;
        text-decoration:none;
      }
      .menu li a:hover {
        background-color:grey; color:white;
      }
      #board{
        padding-left:260px;
        padding-top:15px;
      }
      .list-table {
      	margin-top: 40px;
      }
      .list-table thead th{
	      height:40px;
	      border-top:2px solid black;
	      border-bottom:1px solid black;
	      font-weight: bold;
	      font-size: 17px;
      }
      .list-table tbody td{
	      text-align:center;
	      padding:10px 0;
	      border-bottom:1px solid black; height:20px;
	      font-size: 14px
      }
    </style>
    <title>NETFLIX</title>
  </head>
  <body>
    <span id="home"><a href="index.php">메인으로</a></span>
    <h1 id="main">BOARD</h1>
    <nav>
    <h1 class="title_menu"> 전체 리뷰 보기 </h1>
    <ul class="menu">
        <li><a href="review_page.php">- 리뷰 모아보기</a></li>
    </ul>
    <h1 class="title_menu">Netflix</h1>
    <ul class="menu">
        <li><a href="review_page_netflix.php">- 리뷰 모아보기</a></li>
    </ul>
    <h1 class="title_menu">Watcha</h1>
    <ul class="menu">
        <li><a href="review_page_watcha.php">- 리뷰 모아보기</a></li>
    </ul>
    <h1 class="title_menu">Tving</h1>
    <ul class="menu">
        <li><a href="review_page_tving.php">- 리뷰 모아보기</a></li>
    </ul>
    <h1 class="title_menu">Disney+</h1>
    <ul class="menu">
        <li><a href="review_page_disney+.php">- 리뷰 모아보기</a></li>
    </ul>
    </nav>
    <div id="board"><h3>Netflix 리뷰 모아보기</h3>
      <table class="list-table" style="padding-right:40px">
      <thead>
          <tr>
              <th width="70">번호</th>
                <th width="100">OTT</th>
                <th width="300">제목</th>
                <th width="80">별점</th>
                <th width="1000">후기</th>
                <th width="100">작성일</th>
            </tr>
        </thead>
        <?php

          $sql = mq("select * from review_list where ott='netflix' order by id desc limit 0,5");
            while($board = $sql->fetch_array())
            {

              $title=$board["title"];
              if(strlen($title)>30)
              {

                $title=str_replace($board["title"],mb_substr($board["title"],0,30,"utf-8")."...",$board["title"]);
              }
        ?>
      <tbody>
        <tr>
          <td width="70"><?php echo $board['id']; ?></td>
          <td width="100"><?php echo $board['ott']; ?></td>
          <td width="300"><?php echo $title;?></a></td>
          <td width="80"><?php echo $board['score']?></td>
          <td width="1000"><a href="read_process.php?id=<?php echo $board["id"];?>"><?php echo $board['comments']?></td>
          <td width="100"><?php echo $board['created']; ?></td>
        </tr>
      </tbody>
      <?php } ?>
      </table>

  </body>
</html>
