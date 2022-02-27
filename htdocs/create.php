<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <style>
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
    </style>
    <title>NETFLIX</title>
  </head>
  <body>
    <span id="home"><a href="index.php">메인으로</a></span>
    <h1 id="main">Create</h1>
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
    <div id="board"><h3>리뷰 작성</h3>
    <form action="process_create.php" method="POST">
      <p>제목 : <textarea name="title" rows="1" cols="20" placeholder="제목을 입력해주세요"></textarea></p>
      <p>OTT : <select name="ott" required>
           <option value="none" selected disabled>==선택==</option>
           <option value="netflix">Netflix</option>
           <option value="watcha">Watcha</option>
           <option value="tving">Tving</option>
           <option value="disney+">Disney+</option>
         </select>
         &nbsp; &nbsp;
         카테고리 : <select name="category" required>
           <option value="none" selected disabled>==선택==</option>
           <option value="movie">영화</option>
           <option value="drama">드라마</option>
           <option value="entertain">예능</option>
         </select></p>
      <p>별점 :  <select name="score" required>
           <option value="none" selected disabled>==선택==</option>
           <option value="1">1</option>
           <option value="2">2</option>
           <option value="3">3</option>
           <option value="4">4</option>
           <option value="5">5</option>
         </select>
      <p>내용 : <textarea name="comments" rows="10" cols="50" placeholder="내용을 입력해주세요"></textarea></p>
      <p style="padding-left:440px;"><input type="submit" value="작성" style=""></p></div>
  </body>
</html>
