<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <style>
      h1{
        text-align: center;
        padding: 35px;
        color :#A50000;
        font-size: 5em;
        font-family : sans-serif;
      }
      img{
        box-shadow : 5px 5px 5px #BDBDBD;
        border-radius : 30px;
      }
      body{
        background-color:#FFD8D8;
        height : 2000px;
      }
      nav, section{
        display : flex;
        justify-content: center;
      }
      nav a{
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
    <title></title>
  </head>
  <body>
    <h1>OTT별 콘텐츠 추천</h1>
    <nav>
      <div id="underline"></div>
      <a href="About.php">About</a>
      <a href="#">Board</a>
      <a href="Search.php">Search</a>
    </nav>
    <script>
      let under = document.getElementById("underline");
      let menu = document.querySelectorAll("nav a");
      menu.forEach((menu)=>
        menu.addEventListener("mouseover",(e)=>indicator(e))
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
    <section>
      <a href="netflix.php"><img class="netflix_icon" src="netflix_img.PNG"></a>
      <a href="tving.php"><img class="tving_icon" src="tving_img.PNG"></a>
      <a href="watcha.php"><img class="watcha_icon" src="watcha_img.PNG"></a>
      <a href="disney.php"><img class="disney_icon" src="disney+_img.PNG"></a>
  </section>
  </body>
</html>
