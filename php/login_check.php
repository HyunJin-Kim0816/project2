<?php
  include('dbconn.php');

  $m_id = trim($_POST['id']);
  $m_password = trim($_POST['pw']);

  // $sql = "SELECT * FROM shop_member WHERE mb_id = '$mb_id'";

  // $result = mysqli_query($conn, $sql);
  // $row = mysqli_fetch_assoc($result);

  // SQL 쿼리 준비 (SQL Injection 방지)
  $sql = "SELECT * FROM project_member WHERE m_id = ?";
  $stmt = mysqli_prepare($conn, $sql);
  mysqli_stmt_bind_param($stmt, 's', $m_id); // 's'는 m_id가 문자열임을 나타냄
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
  $row = mysqli_fetch_assoc($result);

  if(!isset($row['m_id'])){
    echo "<script>alert('아이디와 비밀번호가 일치하지 않습니다.');</script>";
    echo "<script>history.back();</script>";
    exit;
  }

  if(password_verify($m_password,$row['m_pwd'])){
    // session_start();
    session_regenerate_id(true); // 세션 ID 재생성(하이재킹 방지)

    $_SESSION['m_id'] = $m_id;
    $_SESSION['m_name'] = $row['m_name'];

    if($m_id == 'admin'){
      echo "<script> location.replace('../admin/index_admin.php');</script>";
    } else {
      echo "<script> location.replace('../index.php');</script>";
    }
  } else {
    echo "<script>alert('아이디와 비밀번호가 일치하지 않습니다.');</script>";
    echo "<script>history.back();</script>";
    exit;
  }

  mysqli_close($conn);
?>