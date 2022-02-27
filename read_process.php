<?php
$conn = mysqli_connect("localhost", "root", "yunjin424", "contents_review");

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
      #home {
        border:1px solid black;
        border-radius : 5px;
        padding:3px;
        display:inline-block;
        width:58px;
      }

      span {
        border:1px solid black;
        border-radius : 5px;
        padding:3px;
        display:inline-block;
        width:27px;
      }
      span a{
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
      #board {
        width:900px;
	      position:absolute;
	      word-break:break-all;
      }

#read_content {
	margin-top:20px;
}
#option {
	font-size:14px;
	color:#333;
	position: absolute;
	right: 0;
}

    </style>
    <title>NETFLIX</title>
  </head>
  <body>
    <?php
     $num = $_GET['id'];
     $sql = mq("select * from review_list where id='".$num."'");
     $board = $sql->fetch_array();
    ?>

    <span id="home"><a href="index.php">메인으로</a></span>
    <h1 id="main">BOARD</h1>
    <nav>
    <h1 class="title_menu"> 전체 리뷰 보기 </h1>
    <ul class="menu">
        <li><a href="#html">- 리뷰 모아보기</a></li>
    </ul>
    <h1 class="title_menu">Netflix</h1>
    <ul class="menu">
        <li><a href="#html">- 리뷰 모아보기</a></li>
    </ul>
    <h1 class="title_menu">Watcha</h1>
    <ul class="menu">
        <li><a href="#html">- 리뷰 모아보기</a></li>
    </ul>
    <h1 class="title_menu">Tving</h1>
    <ul class="menu">
        <li><a href="#html">- 리뷰 모아보기</a></li>
    </ul>
    <h1 class="title_menu">Disney+</h1>
    <ul class="menu">
        <li><a href="#html">- 리뷰 모아보기</a></li>
    </ul>
    </nav>
    <div id="board"><h3>리뷰 모아보기</h3>
      <h2><?php echo $board['title']; ?></h2>
      <div id="user_info">
<?php echo $board['ott']; ?> 별점:<?php echo $board['score']; ?> <?php echo $board['created']; ?>

<div id="read_content">
<?php echo nl2br("$board[comments]"); ?>
</div>

<div id="option">
<button onclick="history.back();">목록</a></button>
<button><a href="modify_review.php?id=<?php echo $board['id']; ?>">수정</a></button>
<button><a href="delete_process.php?id=<?php echo $board['id']; ?>">삭제</a></button>
</div>
</div>
  </body>
</html>
