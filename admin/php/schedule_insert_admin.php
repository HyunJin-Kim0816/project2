<?php
  include('../../php/dbconn.php');

  if(isset($_SESSION['m_id']) & $_SESSION['m_id']=='admin'){
    $userid = $_SESSION['m_id'];
    $username = $_SESSION['m_name'];
  } else {
    echo '<script>alert("잘못된 접근입니다.");</script>';
    echo '<script>location.replace("../../index.php");</script>';
  }
  
  $p_code = $_POST['p_code'];
  $s_airline = $_POST['s_airline'];
  $s_dep_time1 = date('Y-m-d H:i',strtotime($_POST['s_dep_time1'].' '.$_POST['s_dep_time1_h'].':'.$_POST['s_dep_time1_m']));
  $s_dep_time2 = date('Y-m-d H:i',strtotime($_POST['s_dep_time2'].' '.$_POST['s_dep_time2_h'].':'.$_POST['s_dep_time2_m']));
  $s_dep_code = $_POST['s_dep_code'];
  $s_des_time1 = date('Y-m-d H:i',strtotime($_POST['s_des_time1'].' '.$_POST['s_des_time1_h'].':'.$_POST['s_des_time1_m']));
  $s_des_time2 = date('Y-m-d H:i',strtotime($_POST['s_des_time2'].' '.$_POST['s_des_time2_h'].':'.$_POST['s_des_time2_m']));
  $s_des_code = $_POST['s_des_code'];
  $s_meeting = $_POST['s_meeting'];
  $s_price_adult = $_POST['s_price_adult'];
  $s_price_child = $_POST['s_price_child'];
  $s_price_baby = $_POST['s_price_baby'];
  $s_code = $p_code.'-'.date('ymd',strtotime($_POST['s_dep_time1']));

  $sql = "INSERT INTO project_schedule SET
    s_code = '$s_code',
    p_code = '$p_code',
    s_airline = '$s_airline',
    s_dep_time1 = '$s_dep_time1',
    s_dep_time2 = '$s_dep_time2',
    s_dep_code = '$s_dep_code',
    s_des_time1 = '$s_des_time1',
    s_des_time2 = '$s_des_time2',
    s_des_code = '$s_des_code',
    s_meeting = '$s_meeting',
    s_price_adult = '$s_price_adult',
    s_price_child = '$s_price_child',
    s_price_baby = '$s_price_baby'
  ";

  $result = mysqli_query($conn, $sql);
  if($result){
    echo '<script>alert("등록되었습니다.");</script>';
    echo '<script>location.replace("../product_detail_admin.php?p_code='.$p_code.'");</script>';
  }
?>