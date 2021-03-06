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
        font-size: 4em;
        font-family : sans-serif;
      }
      img{
        box-shadow : 5px 5px 5px #BDBDBD;
        border-radius : 30px;
      }
      #main_screen{
        background-color:#FFD8D8;
        height : 2000px;
      }
      .bar{
        display : flex;
        justify-content: center;
      }
      .bar a{
        text-decoration: none;
        color : black;
        margin : 2em;
      }
      #underline{
        position : absolute;
        width:0;
        background-color: black;
        top:340px;
        left:0;
        height:4px;
        transition:0.5s;
      }
    </style>
    <title>Main</title>
  </head>
  <body id="main_screen">
    <h1>OTT별 콘텐츠 추천</h1>
    <nav class="bar">
      <div id="underline"></div>
      <a href="create.php">Create</a>
      <a href="review_page.php">Board</a>
      <a href="search.php">Search</a>
    </nav>
    <script>
      let under = document.getElementById("underline");
      let menu = document.querySelectorAll("nav a");
      menu.forEach((menu)=>
        menu.addEventListener("click",(e)=>indicator(e))
      );
      function indicator(e){
        under.style.left=e.currentTarget.offsetLeft+"px";
        under.style.width=e.currentTarget.offsetWidth+"px";
        under.style.top=
           e.currentTarget.offsetTop+e.currentTarget.offsetheight+"px";
      }
      menu.forEach((menu)=>
        menu.addEventListener("mouseover",(e) =>
          indicator(e.currentTarget)
        )
      );
    </script>
    <section class="bar">
      <a href="review_page_netflix.php"><img class="netflix_icon" src="netflix_img.PNG"></a>
      <a href="review_page_tving.php"><img class="tving_icon" src="tving_img.PNG"></a>
      <a href="review_page_watcha.php"><img class="watcha_icon" src="watcha_img.PNG"></a>
      <a href="review_page_disney+.php"><img class="disney_icon" src="disney+_img.PNG"></a>
  </section>
  </body>
</html>
