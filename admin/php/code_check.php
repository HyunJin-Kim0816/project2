<?php
  include ('../../php/dbconn.php');

  //post 값이 있다면 (빈공간이 아니라면)
  $p_code = trim($_POST['p_code']);

  // 아이디 중복 확인 쿼리
  $sql = "SELECT * FROM project_product WHERE p_code = '$p_code'";
  $result = mysqli_query($conn, $sql);

  if(mysqli_num_rows($result) > 0){
    echo "fail"; // 이미 존재
  } else {
    echo "ok"; // 사용 가능
  }

?>