<?php
  include('../../php/dbconn.php');

  if(isset($_SESSION['m_id']) & $_SESSION['m_id']=='admin'){
    $userid = $_SESSION['m_id'];
    $username = $_SESSION['m_name'];
  } else {
    echo '<script>alert("잘못된 접근입니다.");</script>';
    echo '<script>location.replace("../../index.php");</script>';
  }

  $p_code = $_GET['p_code'];

  $sql = "SELECT s_code FROM project_schedule INNER JOIN project_product WHERE project_schedule.p_code = '$p_code'";
  $result = mysqli_query($conn, $sql);

  if(mysqli_num_rows($result) == 0) {
    $sql = "SELECT * FROM project_product WHERE p_code = '$p_code'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $upload_folder = '../../images/products/';
    unlink($upload_folder.$row['p_slide1']);
    unlink($upload_folder.$row['p_slide2']);
    unlink($upload_folder.$row['p_slide3']);
    unlink($upload_folder.$row['p_image']);

    $sql = "DELETE FROM project_product WHERE p_code = '$p_code'";
    $result = mysqli_query($conn, $sql);

    if($result){
      echo '<script>alert("삭제되었습니다.");</script>';
      echo '<script>location.replace("../product_list_admin.php");</script>';
    }
  } else {
    echo '<script>alert("여행일정이 남아 있습니다.");</script>';
    echo '<script>location.replace("../product_list_admin.php");</script>';
  }
?>