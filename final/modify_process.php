<?php
$conn = mysqli_connect("127.0.0.1", "root", "yunjin424", "contents_review");

function mq($sql)
{
  global $conn;
  return $conn->query($sql);
}

  $num = $_GET['id'];
  $title = $_POST['title'];
  $ott = $_POST['ott'];
  $category = $_POST['category'];
  $score = $_POST['score'];
  $comments = $_POST['comments'];
  $created = $_POST['created'];

$sql = mq("UPDATE review_list set score='".$score."', comments='".$comments."' where id='".$num."'");

?>

<script type="text/javascript">alert("수정되었습니다."); </script>
<meta http-equiv="refresh" content="0 url=review_page.php?id=<?php echo $num; ?>">
