<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>OTT 콘텐츠 추천</h1>
    <ol>
      <li><a href="index.php?id=NETFLIX">NETFLIX</a></li>
      <li><a href="index.php?id=TVING">TVING</a></li>
      <li><a href="index.php?id=WATCHA">WATCHA</a></li>
      <li><a href="index.php?id=Disney+">Disney+</a></li>
    </ol>
    <h2>
      <?php
        echo $_GET['id'];
      ?>
    </h2>
    <?php
    echo file_get_contents("data/".$_GET['id']);
     ?>
  </body>
</html>
