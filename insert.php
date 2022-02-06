<?php

$conn=mysqli_connect("localhost", "root", "비밀번호", "contents_review");
$sql="
  INSER INTO contents
    (title, ott, category, score, comments, created)
    Value(
      '나홀로집에',
      'disney+',
      '영화',
      '5',
      '크리스마스 최고의 영화',
      NOW()
      )";
    $result=mysqli_query($conn, $sql);
    if($result===false){
        echo mysqli_error($conn); //error 확인하기 위한 코드
    } 
?>
