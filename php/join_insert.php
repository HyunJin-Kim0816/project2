<?php
  include('dbconn.php');

  $m_name = trim($_POST['m_name']);
  $m_birth = trim($_POST['m_birth']);
  $m_phone = trim($_POST['m_phone']);
  
  $m_id = trim($_POST['m_id']);
  $m_pwd = trim($_POST['m_pwd']);
  $m_email = trim($_POST['m_email']);
  $m_postnum = trim($_POST['m_postnum']);
  $m_gender = $_POST['m_gender'];
  $m_address1 = trim($_POST['m_address1']);
  $m_address2 = trim($_POST['m_address2']);

  date_default_timezone_set('Asia/Seoul');
  
  $m_pwd = password_hash($m_pwd, PASSWORD_DEFAULT);

  $sql = "INSERT INTO project_member(m_name, m_birth, m_phone, m_id, m_pwd, m_email, m_postnum, m_gender, m_address1, m_address2) VALUE('$m_name', '$m_birth', '$m_phone', '$m_id', '$m_pwd', '$m_email', '$m_postnum', '$m_gender', '$m_address1', '$m_address2')";

  $result = mysqli_query($conn, $sql);

  if($result){
    echo "<script> alert('회원 가입이 완료 되었습니다.'); </script>";
    echo "<script> location.replace('../login.php');</script>";
  }
  mysqli_close($conn);
?>