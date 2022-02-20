<?php
$conn = mysqli_connect("localhost", "root", "비밀번호", "contents_review");

$num = $_GET['id'];
$ott = $_POST['ott'];
$title = $_POST['title'];
$score = $_POST['score'];
$comment = $_POST['comments'];
$date = $_POST['created'];


$sql = "
  UPDATE review_list set
     ott='".$ott."',
     title='".$title."',
     score='".$score."',
     comments='".$comment."'
     WHERE id='".$num."'
     ";

$result = mysqli_query($conn, $sql);

?>

<script type="text/javascript">alert("수정되었습니다."); </script>
<meta http-equiv="refresh" content="0 url=review_page.php?id=<?php echo $num; ?>">
