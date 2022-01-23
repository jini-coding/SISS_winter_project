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
    <title>WATCHA</title>
  </head>
  <body>
    <span id="home"><a href="index.php">메인으로</a></span>
    <h1>WATCHA</h1>
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
