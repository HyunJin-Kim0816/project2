<?php
    include('../php/dbconn.php');
?>
<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>참좋은여행 관리자 - 여행상품상세</title>
    <link rel="stylesheet" href="./css/detail_admin.css" type="text/css">
  <?php include('./header2.php'); ?>

  <body>
  <?php
      $p_code = $_GET['p_code'];
      $sql = "SELECT * FROM project_product WHERE p_code = '$p_code'";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
  ?>

  <main>
    <div class="content_box">
      <h2>여행상품상세</h2>
      <div class="btn_panel">
        <ul>
          <li><a href="product_edit_admin.php?p_code=<?= $p_code ?>">수정</a></li>
          <li><a href="product_list_admin.php">목록</a></li>
          <li><a href="product_delete_admin.php?p_code=<?= $p_code ?>">삭제</a></li>
        </ul>
      </div>

      <table class="table content_table">
        <caption style="display:none;">여행상품상세</caption>
        <tr>
          <th>상품코드</th>
          <td style="color: var(--m_color2); font-weight: bold;"><?= $row['p_code']; ?></td>
        </tr>
        <tr>
          <th>상품제목</th>
          <td><?= $row['p_title']; ?></td>
        </tr>
        <tr>
          <th>여행기간</th>
          <td><?= $row['p_stay'].'박 '.$row['p_term'].'일' ?></td>
        </tr>
        <tr>
          <th>최소인원</th>
          <td><?= $row['p_minnum'] ?>명</td>
        </tr>
        <tr>
          <th>요약설명</th>
          <td style="line-height: 40px;"><?= $row['p_subtitle'] ?></td>
        </tr>
        <tr>
          <th>여행여정</th>
          <td><?= $row['p_plan'] ?></td>
        </tr>
        <tr>
          <th>포함사항</th>
          <td style="line-height: 40px;"><?= $row['p_in'] ?></td>
        </tr>
        <tr>
          <th>불포함사항</th>
          <td style="line-height: 40px;"><?= $row['p_notin'] ?></td>
        </tr>
        <tr>
          <th>가이드경비</th>
          <td><?= $row['p_expense'] ?></td>
        </tr>
        <tr>
          <th>슬라이드 이미지</th>
          <td class="s_img">
            <img src="../images/products/<?= $row['p_slide1'] ?>" alt="슬라이드1" class="table_simg">
            <img src="../images/products/<?= $row['p_slide2'] ?>" alt="슬라이드2" class="table_simg">
            <img src="../images/products/<?= $row['p_slide3'] ?>" alt="슬라이드3" class="table_simg">
          </td>
        </tr>
        <tr>
          <th>상품 상세 이미지</th>
          <td>
            <img src="../images/products/<?= $row['p_image'] ?>" alt="상품상세" class="table_dimg">
          </td>
        </tr>
      </table>
      <hr>
      <div class="schedule_list">
        <table class="table">
          <caption class="caption-top">해당 상품 등록 일정 목록<a href="schedule_add_admin.php?p_code=<?=$p_code?>" class="btn btn-primary">일정등록</a></caption>
          <thead>
            <tr>
              <th>일정코드</th>
              <th>항공사</th>
              <th>출발일자</th>
              <th>금액(성인)</th>
              <th>&nbsp;</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $sql = "SELECT * FROM project_schedule WHERE p_code = '$p_code'";
              $result = mysqli_query($conn, $sql);
              while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
              <td><?= $row['s_code'] ?></td>
              <td><?= $row['s_airline'] ?></td>
              <td><?= date('Y-m-d',strtotime($row['s_dep_time1'])); ?></td>
              <td><?= number_format($row['s_price_adult']) ?>원</td>
              <td>
                <a href="schedule_edit_admin.php?s_code=<?=$row['s_code']?>">수정</a>
                <a href="schedule_delete_admin.php?s_code=<?=$row['s_code']?>">삭제</a>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </main>
</body>

  <?php include('./footer2.php')?>

