<?php
  include('../../php/dbconn.php');

  if(isset($_SESSION['m_id']) & $_SESSION['m_id']=='admin'){
    $userid = $_SESSION['m_id'];
    $username = $_SESSION['m_name'];
  } else {
    echo '<script>alert("잘못된 접근입니다.");</script>';
    echo '<script>location.replace("../../index.php");</script>';
  }

  $s_code = $_GET['s_code'];

  $sql = "DELETE FROM project_schedule WHERE s_code = '$s_code'";
  $result = mysqli_query($conn, $sql);

  if($result){
    echo '<script>alert("삭제되었습니다.");</script>';
    echo '<script>history.back();</script>';
  }
?>