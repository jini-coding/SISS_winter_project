<?php
$conn = mysqli_connect("127.0.0.1", "root", "yunjin424", "contents_review");

$num = $_GET['id'];
$sql = "
  DELETE FROM review_list where id='$num'";

$result=mysqli_query($conn, $sql);

?>

<script type="text/javascript">
       alert("삭제되었습니다.");
</script>
<meta http-equiv="refresh" content="0 url=review_page.php">
