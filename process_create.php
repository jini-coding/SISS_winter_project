<?php
$conn=mysqli_connect("localhost", "root", "password", "contents_review");
var_dump($_POST);
$sql="
  INSERT INTO contents
    (title, ott, category)
    Value(
      '{$_POST['title']}',
      '{$_POST['ott']}',
      '{$_POST['category']}'
      )";
$result=mysqli_query($conn, $sql);
if($result===false){
  echo '저장하는 과정에서 문제가 발생하였습니다.';
  error_log(mysqli_effor($conn));
}
else{
  echo '저장에 성공했습니다. <a href="index.php">돌아가기</a>';
}


$sql2="
  INSERT INTO review
    (id, score, comments, created)
    Value(
      '{$_POST['id']}',
      '{$_POST['score']}',
      '{$_POST['comments']}',
      NOW()
      )";
$result=mysqli_query($conn, $sql2);
if($result===false){
  echo '저장하는 과정에서 문제가 발생하였습니다.';
  error_log(mysqli_effor($conn));
}
else{
  echo '저장에 성공했습니다. <a href="index.php">돌아가기</a>';
}

?>
