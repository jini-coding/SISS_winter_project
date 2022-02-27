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
      #home {
        border:1px solid black;
        border-radius : 5px;
        padding:3px;
        display:inline-block;
        width:58px;
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
        background-color:grey;
        color:white;
      }
      #board{
        padding-left:260px;
        padding-top:15px;
        width:900px;
	      position:absolute;
	      word-break:break-all;
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

      #read_content {
	      margin-top:20px;

      }
      #option {
	      font-size:14px;
       	color:#333;
       	position: absolute;
	      right: 0;
      }
      .inner-star::before{
        color: #FF9600;
      }
      .outer-star {
        position: relative;
        display: inline-block;
        color: #CCCCCC;
      }
      .inner-star {
        position: absolute;
        left: 0;
        top: 0;
        width: 0%;
        overflow: hidden;
        white-space: nowrap;
      }
      .outer-star::before, .inner-star::before {
        content: '\f005 \f005 \f005 \f005 \f005';font-family: 'Font Awesome 5 free';
        font-weight: 900;
      }

    </style>
    <title>BOARD</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css'/>
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
    <div id="board">
      <h3><?php echo $board['title']; ?></h3>
      <div style="border-bottom:1px solid black; padding-bottom:10px;">
      <?php echo $board['ott']; ?> &nbsp;&nbsp;
      별점 : <span class='RatingStar'>
            <span class='RatingScore'>
             <span class='outer-star'><span class='inner-star'></span></span>
         </span>
       </span>
      <script>
      ratings = {RatingScore: <?php echo $board['score'];?>}
      totalRating = 5;
      table = document.querySelector('.RatingStar');
      function rateIt() {
        for (rating in ratings) {
          ratingPercentage = ratings[rating] / totalRating * 100;
          ratingRounded = ratingPercentage + '%';
          star = table.querySelector(`.${rating} .inner-star`);
          numberRating = table.querySelector(`.${rating} .numberRating`);
          star.style.width = ratingRounded;
          numberRating.innerText = ratings[rating];
        }
      }
      rateIt()
    </script>
    &nbsp;&nbsp;&nbsp;
    <?php echo $board['created']; ?> </div>
    <div id="read_content">
    <p style="line-height:30px"><?php echo nl2br("$board[comments]"); ?></p>
    </div>

<div id="option">
<button onclick="history.back();">목록</a></button>
<button><a href="modify_review.php?id=<?php echo $board['id']; ?>">수정</a></button>
<button><a href="delete_process.php?id=<?php echo $board['id']; ?>">삭제</a></button>
</div>
</div>

  </body>
</html>
