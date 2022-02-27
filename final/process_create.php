<?php
$conn = mysqli_connect("127.0.0.1", "root", "yunjin424", "contents_review");

$sql = "
  INSERT INTO review_list
    (title, ott, category, score, comments, created)
    Value(
      '{$_POST['title']}',
      '{$_POST['ott']}',
      '{$_POST['category']}',
      '{$_POST['score']}',
      '{$_POST['comments']}',
      NOW()
      )";
$result = mysqli_query($conn, $sql);

?>

<script type="text/javascript">alert("작성되었습니다."); location.href='review_page.php';</script>
