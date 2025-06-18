<?php
  include('header2.php');
?>
<main>
  <div class="container-fluid">
    <h2 style="text-align:center;">아래의 여행 상품을 삭제하시겠습니까??</h2>
    <?php
      $p_code = $_GET['p_code'];
      $sql = "SELECT * FROM project_product WHERE p_code = '$p_code'";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
    ?>
    <div class="row justify-content-center">
      <div class="col-4 mt-5 mb-5">
        <table class="table">
          <tbody>
            <tr>
              <th>상품코드</th>
              <td><?=$p_code?></td>
            </tr>
            <tr>
              <th>상품제목</th>
              <td><?=$row['p_title']?></td>
            </tr>
            <tr>
              <th>여행기간</th>
              <td><?=$row['p_stay'].'박 '.$row['p_term'].'일'?></td>
            </tr>
            <tr>
              <th>출발지</th>
              <td><?=$row['p_dep']?></td>
            </tr>
            <tr>
              <th>여행지</th>
              <td><?=$row['p_des']?></td>
            </tr>
          </tbody>
        </table>
        <div class="text-center">
          <a href="./php/product_delete_admin.php?p_code=<?=$p_code?>" title="삭제" class="btn btn-danger px-4 mx-2" style="color:#fff !important;">삭제</a>
          <a href="javascript:history.back();" title="취소" class="btn btn-secondary px-4 mx-2" style="color:#fff !important;">취소</a>
        </div>
      </div>
    </div>
  </div>
</main>
<?php
  include('footer2.php');
?>