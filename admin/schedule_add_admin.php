<?php
  include('../php/dbconn.php');
?>

<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>참좋은여행 관리자 - 여행일정등록</title>
    <!-- 파비콘, 기본서식 파일 -->
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/common.css" type="text/css">
    <link rel="stylesheet" href="./css/reset.css" type="text/css">
    <link rel="stylesheet" href="./css/schedule_admin.css" type="text/css">
  </head>
<?php include('header2.php')?>
<body>

  <main>
    <form name="schedule_add" method="post" action="./php/schedule_insert_admin.php" onsubmit="return form_check()">
      <div class="contant_box">
        <legend>여행일정등록</legend>
        <table class="table">
          <tr>
            <th class="code">
              <label for="p_code">상품코드</label>
            </th>
            <td>
                <input type="hidden" id="p_code" name="p_code" value="<?=$_GET['p_code']?>">
                <input type="text" id="p_code" value="<?=$_GET['p_code']?>" disabled>
            </td>
          </tr>
          <tr>
            <th>
              <label for="s_airline">항공사</label>
            </th>
            <td>
              <select name="s_airline" id="s_airline" class="form-select">
                <option value="">항공사 선택</option>
                <option value="아시아나">아시아나항공</option>
                <option value="대한항공">대한항공</option>
                <option value="제주항공">제주항공</option>
                <option value="델타">델타항공</option>
                <option value="티웨이항공">티웨이항공</option>
              </select>
            </td>
          </tr>
          <tr>
            <th rowspan="2"><label for="s_dep_time1">출발항공정보</label></th>
            <td>
              <input type="text" id="s_dep_time1" name="s_dep_time1" placeholder="출발날짜">
              <input type="text" name="s_dep_time1_h" id="s_dep_time1_h"><span>&nbsp;시</span>
              <input type="text" name="s_dep_time1_m" id="s_dep_time1_m"><span>&nbsp;분 출발</span>
            </td>
          </tr>
          <tr>
            <td>
              <input type="text" id="s_dep_time2" name="s_dep_time2" placeholder="도착날짜">
              <input type="text" name="s_dep_time2_h"   id="s_dep_time2_h"><span>&nbsp;시</span>
              <input type="text" name="s_dep_time2_m" id="s_dep_time2_m"><span>&nbsp;분 도착</span>
              <input type="text" name="s_dep_code" id="s_dep_code" class="airport" style="width: 100px;"><span>&nbsp;편</span>
            </td>
          </tr>
          <tr>
            <th rowspan="2"><label for="s_des_time1">복귀항공정보</label></th>
            <td>
              <input type="text" id="s_des_time1" name="s_des_time1" placeholder="복귀출발날짜">
              <input type="text" name="s_des_time1_h" id="s_des_time1_h"><span>&nbsp;시</span>
              <input type="text" name="s_des_time1_m" id="s_des_time1_m"><span>&nbsp;분 출발</span>
            </td>
          </tr>
          <tr>
            <td>
              <input type="text" id="s_des_time2" name="s_des_time2" placeholder="복귀도착날짜">
              <input type="text" name="s_des_time2_h" id="s_des_time2_h"><span>&nbsp;시</span>
              <input type="text" name="s_des_time2_m" id="s_des_time2_m"><span>&nbsp;분 도착</span>
              <input type="text" name="s_des_code" id="s_des_code" class="airport" style="width: 100px;"><span>&nbsp;편</span>
            </td>
          </tr>
          <tr>
            <th><label for="s_meeting">미팅장소</label></th>
            <td><input type="text" name="s_meeting" id="s_meeting" placeholder="출발시 모일 장소를 입력하세요."></td>
          </tr>
          <tr>
            <th>금액</th>
            <td>
              <label for="s_price_adult">성인&nbsp;</label>
              <input type="text" placeholder="금액을 입력하세요." id="s_price_adult" name="s_price_adult">
              <span>&nbsp;원</span><br>
              <label for="s_price_child">아동&nbsp;</label>
              <input type="text" placeholder="금액을 입력하세요." id="s_price_child" name="s_price_child">
              <span>&nbsp;원</span><br>
              <label for="s_price_baby">유아&nbsp;</label>
              <input type="text" placeholder="금액을 입력하세요." id="s_price_baby" name="s_price_baby">
              <span>&nbsp;원</span>
            </td>
          </tr>
        </table>
        <div class="submit">
          <input type="submit" value="상품 등록하기" class="btn btn-primary">
          <a href="schedule_detail_admin.php?p_code=<?=$p_code?>" class="btn btn-danger" style="color:#fff !important;">취소</a>
        </div>
      </div>
    </form>
  </main>

    <?php include('footer2.php')?>

    <script>
      // 년월일 숫자만 입력하게 하는 코드
      const s_dep1_input = document.getElementById('s_dep_time1');
      const s_dep2_input = document.getElementById('s_dep_time2');
      const s_des1_input = document.getElementById('s_des_time1');
      const s_des2_input = document.getElementById('s_des_time2');

      s_dep1_input.addEventListener('input',(e)=>date_check(e));
      s_dep2_input.addEventListener('input',(e)=>date_check(e));
      s_des1_input.addEventListener('input',(e)=>date_check(e));
      s_des2_input.addEventListener('input',(e)=>date_check(e));

      function date_check(e) {
        // 입력값에서 숫자만 추출
        let value = e.target.value.replace(/\D/g, '');

        // 8자리까지만 입력되도록 제한
        if (value.length > 8) {
          value = value.slice(0, 8);
        }

        // 년, 월, 일 사이에 '-'를 추가
        if (value.length >= 6) {
          value = value.replace(/^(\d{4})(\d{2})$/, '$1-$2');
        }
        if (value.length >= 8) {
          value = value.replace(/^(\d{4})(\d{2})(\d{2})$/, '$1-$2-$3');
        } 

        // 입력값을 다시 input 필드에 설정
        e.target.value = value;
      }

      function form_check() {
          if(document.getElementById('s_airline').value === '') {
              alert('항공사를 선택하세요.');
              document.getElementById('s_airline').focus();
              return false;
          }

          if(!document.getElementById('s_meeting').value) {
              alert('모집장소를 입력하세요.');
              document.getElementById('s_meeting').focus();
              return false;
          }

          if(!document.getElementById('s_price_adult').value) {
              alert('상품의 성인 가격을 입력하세요.');
              document.getElementById('s_price_adult').focus();
              return false;
          }

          if(!document.getElementById('s_price_child').value) {
              alert('상품의 아동 가격을 입력하세요.');
              document.getElementById('s_price_child').focus();
              return false;
          }

          if(!document.getElementById('s_price_baby').value) {
              alert('상품의 유아 가격을 입력하세요');
              document.getElementById('s_price_baby').focus();
              return false;
          }
      }

      $(document).ready(function () {
        $('#code_check_btn').click(function(){
          let inputCode = $('#p_code').val().trim();

          if(inputCode == ""){
              $('#code_check').text('코드를 입력해주세요.').css('color', 'red');
              return;
          }

          $.ajax({
              url: './php/code_check.php',
              type: 'POST',
              data: {p_code: inputCode},
              success: function(response){
              response = response.trim();
              if(response == 'ok'){
                  $('#code_check').text('등록되지 않은 상품 코드입니다.').css('color', 'var(--m_color)');
              } else {
                  $('#code_check').text('등록된 상품 코드입니다.').css('color', 'red');
              }
              },
              error:function(){
                  alert('서버요청 실패, 다시 시도하세요.');
              }
          });
        });
      })
    </script>
</body>
</html>