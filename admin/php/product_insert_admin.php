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
  $p_title = $_POST['p_title'];
  $p_stay = $_POST['p_stay'];
  $p_term = $_POST['p_term'];
  $p_minnum = $_POST['p_minnum'];
  $p_subtitle = nl2br($_POST['p_subtitle']);
  $p_plan = nl2br($_POST['p_plan']);
  $p_in = nl2br($_POST['p_in']);
  $p_notin = nl2br($_POST['p_notin']);
  $p_expense = $_POST['p_expense'];
  $p_dep = $_POST['p_dep'];
  $p_des = $_POST['p_des'];

  $p_title = mysqli_real_escape_string($conn, $p_title);
  $p_subtitle = mysqli_real_escape_string($conn, $p_subtitle);
  $p_plan = mysqli_real_escape_string($conn, $p_plan);
  $p_in = mysqli_real_escape_string($conn, $p_in);
  $p_notin = mysqli_real_escape_string($conn, $p_notin);
  $p_expense = mysqli_real_escape_string($conn, $p_expense);

  $upload_folder = '../../images/products/';
  $p_slide1_file_name_tmp = $_FILES['p_slide1']['tmp_name'];
  $p_slide1_file_name = $p_code.'_slide1.'.pathinfo($_FILES['p_slide1']['name'], PATHINFO_EXTENSION);
  $p_slide2_file_name_tmp = $_FILES['p_slide2']['tmp_name'];
  $p_slide2_file_name = $p_code.'_slide2.'.pathinfo($_FILES['p_slide2']['name'], PATHINFO_EXTENSION);
  $p_slide3_file_name_tmp = $_FILES['p_slide3']['tmp_name'];
  $p_slide3_file_name = $p_code.'_slide3.'.pathinfo($_FILES['p_slide3']['name'], PATHINFO_EXTENSION);
  $p_image_file_name_tmp = $_FILES['p_image']['tmp_name'];
  $p_image_file_name = $p_code.'_image.'.pathinfo($_FILES['p_image']['name'], PATHINFO_EXTENSION);

  $sql = "INSERT INTO project_product SET
    p_code = '$p_code',
    p_title = '$p_title',
    p_stay = '$p_stay',
    p_term = '$p_term',
    p_minnum = '$p_minnum',
    p_subtitle = '$p_subtitle',
    p_plan = '$p_plan',
    p_in = '$p_in',
    p_notin = '$p_notin',
    p_expense = '$p_expense',
    p_slide1 = '$p_slide1_file_name',
    p_slide2 = '$p_slide2_file_name',
    p_slide3 = '$p_slide3_file_name',
    p_image = '$p_image_file_name',
    p_dep = '$p_dep',
    p_des = '$p_des'    
  ";
  
  $result = mysqli_query($conn, $sql);
  move_uploaded_file($p_slide1_file_name_tmp, $upload_folder.$p_slide1_file_name);
  move_uploaded_file($p_slide2_file_name_tmp, $upload_folder.$p_slide2_file_name);
  move_uploaded_file($p_slide3_file_name_tmp, $upload_folder.$p_slide3_file_name);
  move_uploaded_file($p_image_file_name_tmp, $upload_folder.$p_image_file_name);

  if($result){
    echo '<script>alert("등록되었습니다.");</script>';
    echo '<script>location.replace("../product_list_admin.php");</script>';
  }

?>