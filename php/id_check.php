<?php
  include ('dbconn.php');

  //post 값이 있다면 (빈공간이 아니라면)
  $m_id = trim($_POST['id']);

  // 아이디 중복 확인 쿼리
  $sql = "SELECT * FROM project_member WHERE m_id = '$m_id'";
  $result = mysqli_query($conn, $sql);

  if(mysqli_num_rows($result) > 0){
    echo "<script>alert('".$result."');</script>";
    // echo "fail"; // 이미 존재
  } else {
    echo "ok"; // 사용 가능
  }

?>