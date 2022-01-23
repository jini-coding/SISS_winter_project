<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <style>
      h1{
        text-align: center;
        padding: 35px;
        color :#A50000;
        border-bottom:1px solid black;
      }
      body{
        background-color:#FFD8D8;
      }
      #home{
        background-color:white;
        border-radius : 5px;
        padding:3px;
      }
      #home a{
        text-decoration:none;
      }
    </style>
    <title>TVING</title>
  </head>
  <body>
    <span id="home"><a href="index.php">메인으로</a></span>
    <h1>TVING</h1>
    <h3>리뷰 작성</h3>
    <form action="php파일" method="POST">
      <p>제목 : <select name="title" required>
           <option value="none" selected disabled>==선택==</option>
           <option value="1">제목1</option>
           <option value="2">제목2</option>
           <option value="3">제목3</option>
         </select></p>
      <p>내용 : <textarea name="review" rows="10" cols="50" placeholder="내용을 입력해주세요"></textarea></p>
      <p><input type="submit" value="작성"></p>
  </body>
</html>
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
    <title>TVING</title>
  </head>
  <body>
    <span id="home"><a href="index.php">메인으로</a></span>
    <h1 id="main">TVING</h1>

    <nav>
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

    <div id="board"><h3>리뷰 작성</h3>
    <form action="php파일" method="POST">
      <p>제목 : <select name="title" required>
           <option value="none" selected disabled>==선택==</option>
           <option value="1">제목1</option>
           <option value="2">제목2</option>
           <option value="3">제목3</option>
         </select></p>
      <p>별점 :  (구현예정)</p>
      <p>내용 : <textarea name="review" rows="10" cols="50" placeholder="내용을 입력해주세요"></textarea></p>
      <p style="padding-left:440px;"><input type="submit" value="작성" style=""></p></div>
  </body>
</html>
