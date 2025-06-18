<?php
  include('./php/dbconn.php');
  $s_code = $_GET['s_code'];
  $sql = "SELECT * FROM project_schedule WHERE s_code = '$s_code'";

  $result_s = mysqli_query($conn, $sql);
  $row_s = mysqli_fetch_assoc($result_s);
  if($row_s['s_code']==''){
    echo "<script>alert('없는 일정입니다.');</script>";
    echo "<script>history.back();</script>";
    exit;
  }
  $p_code = $row_s['p_code'];
  $sql = "SELECT * FROM project_product WHERE p_code = '$p_code'";
  $result_p = mysqli_query($conn, $sql);
  $row_p = mysqli_fetch_assoc($result_p);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$row_p['p_title']?></title>
  <!-- 메타데이터 -->
  <meta name="keywords" content="참좋은여행, 직판여행사, 여행정보, 해외여행정보, 패키지, 에어텔, 항공권, 허니문, 호텔, 골프여행 , 배낭여행, FIT여행, 자유여행, 골프여행, 고급여행상품, 테마여행, 크루즈, 국내여행, 제주여행">
  <meta name="description" content="고객의 만족을 최우선으로 생각하는 해외/국내여행 전문기업.">
  <meta property="og:type" content="website">
  <meta property="og:title" content="참좋은여행">
  <meta property="og:url" content="http://www.verygoodtour.com">
  <meta property="og:description" content="고객의 만족을 최우선으로 생각하는 해외/국내여행 전문기업.">
  <meta property="og:image" content="http://www.verygoodtour.com/images/mov2/logo_for_msg.jpg">

  <!-- 파비콘, 기본서식 파일 -->
  <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="./css/common.css" type="text/css">
  <link rel="stylesheet" href="./css/reset.css" type="text/css">
  <link rel="stylesheet" href="./css/detail.css" type="text/css">
  
  <!-- 플러그인 추가(jQuery, 폰트어썸) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!--swiper slide-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</head>
<?php
  include('header.php');
  include ('mobile_nav.php');
?>
<main>
  <section class="detail_slide">    
    <h2 style="display:none;">슬라이드 이미지</h2>
    <article>
      <h3 style="display:none;">슬라이드 이미지</h3>
      <div class="slide_wrapper">
        <ul>
          <li class="slide"><img src="./images/products/<?=$row_p['p_slide1']?>" alt="슬라이드1"></li>
          <li class="slide"><img src="./images/products/<?=$row_p['p_slide2']?>" alt="슬라이드2"></li>
          <li class="slide"><img src="./images/products/<?=$row_p['p_slide3']?>" alt="슬라이드3"></li>
        </ul>
      </div>
      <div class="btn_group">
        <button class="slide_prev" aria-label="이전"><i class="fa-solid fa-chevron-left"></i></button>
        <button class="slide_next" aria-label="다음"><i class="fa-solid fa-chevron-right"></i></button>
      </div>
    </article>
  </section>
  <section class="detail_info_code">
  <h2 style="display:none;">상품코드 영역</h2>
    <div class="product_code">
      <span>상품코드</span><span class="info_code"><?=$s_code?></span>
    </div>
  </section>
  <section class="detail_info">
    <div class="detail_info_table">
      <h2>상품정보</h2>
      <table class="info_table">
        <tr>
          <th>상품명</th>
          <td><?=$row_p['p_title']?></td>
        </tr>
        <tr>
          <th>여행기간</th>
          <td>
            <p><span class="info_term"><b><?=$row_p['p_stay']?>박 <?=$row_p['p_term']?>일</b></span> <span style="color:#ccc; margin: 0 10px;">&#124;</span> <span class="info_airline"><?=$row_s['s_airline']?></span></p>
            <div class="info_time_div">
              <div class="info_time">
                <div>한국출발</div>
                <p>
                  <span><?=date('Y.m.d H:i',strtotime($row_s['s_dep_time1']))?></span><br>
                  <?=$row_p['p_dep']?> 출발<br>
                  <span><?=date('Y.m.d H:i',strtotime($row_s['s_dep_time2']))?></span><br>
                  <?=$row_p['p_des']?> 도착
                </p>
              </div>
              <div class="info_time">
                <div>한국도착</div>
                <p>
                  <span><?=date('Y.m.d H:i',strtotime($row_s['s_des_time1']))?></span><br>
                  <?=$row_p['p_des']?> 출발<br>
                  <span><?=date('Y.m.d H:i',strtotime($row_s['s_des_time2']))?></span><br>
                  <?=$row_p['p_dep']?> 도착
                </p>
              </div>
            </div>
        </td>
        </tr>
        <tr>
          <th>상품가격</th>
          <td>
            <table class="d_table">
              <thead>
                <tr>
                  <th>성인(만12세 이상)</th>
                  <th>아동(만12세 미만)</th>
                  <th>유아(만2세 미만)</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?=number_format($row_s['s_price_adult'])?>원</td>
                  <td><?=number_format($row_s['s_price_child'])?>원</td>
                  <td><?=number_format($row_s['s_price_baby'])?>원</td>
                </tr>
              </tbody>
            </table>
            <br>
            <p>&middot; 유류할증료(2025년 04월 기준) 및 제세공과금은 발권일기준 유가와 환율에 따라 수시 요금 변동될 수 있습니다.
            </p>
          </td>
        </tr>
        <tr>
          <th>요약설명</th>
          <td><p><?=$row_p['p_subtitle']?></p></td>
        </tr>
        <tr>
          <th>여행여정</th>
          <td><p><?=$row_p['p_plan']?></p></td>
        </tr>
        <tr>
          <td colspan="2">
            <table class="d_table inout_table">
              <thead>
                <tr>
                  <th>포함사항</th>
                  <th>불포함사항</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?=$row_p['p_in']?></td>
                  <td><?=$row_p['p_notin']?></td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </table>
    </div>
    <div class="booking_area">
      <form name="예약하기" action="#" method="post">
      <ul>
        <li>
          <p><b>성인</b><br><?=number_format($row_s['s_price_adult'])?>원</p>
          <div>
            <label for="b_adult"><span style="position: absolute; text-indent: -9999px">성인요금</span></label>
            <select name="b_adult" id="b_adult" class="b_number" onchange="cal_total()">
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
          </div>
        </li>
        <li>
          <p><b>아동</b><br><?=number_format($row_s['s_price_child'])?>원</p>
          <div>
            <label for="b_child"><span style="position: absolute; text-indent: -9999px">어린이요금</span></label>
            <select name="b_child" id="b_child" class="b_number" onchange="cal_total()">
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
          </div>
        </li>
        <li>
          <p><b>유아</b><br><?=number_format($row_s['s_price_baby'])?>원</p>
          <div>
            <label for="b_baby"><span style="position: absolute; text-indent: -9999px">유아요금</span></label>
            <select name="b_baby" id="b_baby" class="b_number" onchange="cal_total()">
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select>
          </div>
        </li>
      </ul>
      <div class="total_price">
        <p class="total_text">총 금액</p>
        <p class="price_num"><span id="total_price">0</span>원</p>
      </div>
      <p>가이드 경비 : <span class="info_expense"><?=$row_p['p_expense']?></span></p>
      <hr>
      <input type="submit" value="예약하기" class="book_btn">
      <a href="javascript:history.back()" title="이전" class="back_btn">이전</a>
      <a href="javascript:void();" title="출발일 변경" class="dchg_btn">출발일 변경</a>
      </form>
        <div class="modal">
          <div class="modal-overlay">
              <h2 class="cal_title">출발일선택</h2>
              <i class="fa fa-xmark"></i>
              <p>2025.04</p>
              <table id="<?=$p_code?>_calendar" class="calendar">
                  <caption>2025년 4월</caption>
                  <thead>
                      <tr>
                          <th>일</th>
                          <th>월</th>
                          <th>화</th>
                          <th>수</th>
                          <th>목</th>
                          <th>금</th>
                          <th>토</th>
                      </tr>
                  </thead>
                  <tbody>
                  </tbody>
              </table>
          </div>
      </div>
      <script>
          $(function(){
              <?php
                      $sql_c = "SELECT s_code, CAST(RIGHT(s_code, 2) AS SIGNED) AS dep_day FROM project_schedule WHERE p_code = '".$p_code."' ORDER BY s_dep_time1 ASC";
                      $result_c = mysqli_query($conn,$sql_c);
                      echo 'let dep_day = [';
                      while($row_c = mysqli_fetch_assoc($result_c)){
                          echo '"'.$row_c['dep_day'].'", ';
                      }
                      echo '];';
                      $sql_c = "SELECT s_code, CAST(RIGHT(s_code, 2) AS SIGNED) AS dep_day FROM project_schedule WHERE p_code = '".$p_code."' ORDER BY s_dep_time1 ASC";
                      $result_c = mysqli_query($conn,$sql_c);
                      echo 'let dep_link = [';
                      while($row_c = mysqli_fetch_assoc($result_c)){
                          echo '"'.$row_c['s_code'].'", ';
                      }
                      echo '];';
                  ?>

              const year = 2025;
              const month = 3;
              const firstDay = new Date(year, month, 1).getDay();
              const lastDate = new Date(year, month + 1,0).getDate();
              const tbody = document.querySelector('#<?=$p_code?>_calendar > tbody');
              let row = document.createElement('tr');

              tbody.innerHTML = '';

              for (let i=0; i < firstDay; i++) {
                  const cell = document.createElement('td');
                  row.appendChild(cell);
              }

              for (let date = 1; date <= lastDate; date++) {

                  const cell = document.createElement('td');
                  let isDepDay = false;
                  let link = '';

                  for (let i = 0; i < dep_day.length; i++) {
                      if (parseInt(dep_day[i]) === date) {
                          isDepDay = true;
                          link = 'detail.php?s_code=' + dep_link[i];
                          break;
                      }
                  }

                  if (isDepDay) {
                      const linkElement = document.createElement('a');
                      linkElement.href = link;
                      linkElement.textContent = date;
                      linkElement.classList.add('dep_day');
                      cell.appendChild(linkElement);
                  } else {
                      cell.textContent = date;
                  }

                  row.appendChild(cell);

                  if ((firstDay + date) % 7 === 0) {
                  tbody.appendChild(row);
                  row = document.createElement('tr');
                  }
              }

              if (row.children.length > 0) {
                  while (row.children.length < 7) {
                      const cell = document.createElement('td');
                      row.appendChild(cell);
                  }
                  tbody.appendChild(row);
              }

              $('#<?=$p_code?>_calendar').on('click', 'td', function() {
                  const day = $(this).text().trim();

                  if(day !== '') {
                      $('#<?=$p_code?>_calendar td').removeClass('selected');
                  }
              });

              $('.dchg_btn').click(function (e) {
                  e.preventDefault();
                  e.stopPropagation();
                  $(this).parents('.booking_area').children('.modal').fadeIn();
              });

              $('.modal-overlay > i').click(function (){
              $('.modal').fadeOut();
              })

              $(document).click(function (e) {
              if($('.modal').is(':visible') && !$(e.target).closest('.modal-overlay').length) {
                  $('.modal').fadeOut();
              }
              });
          });
      </script>
    </div>
  </section>
  <section class="detail_img">
    <p>상품설명</p>
    <img src="./images/products/<?=$row_p['p_image']?>" alt="상품설명">
  </section>
</main>
<script>
  $(function(){

    // 상단 슬라이드
    const slide_wrapper = $('.slide_wrapper');
    const slide_prev = $('.slide_prev');
    const slide_next = $('.slide_next');

    $('.slide_wrapper > ul > li:last-child').insertBefore('.slide_wrapper > ul > li:first-child');
    slide_wrapper.css('margin-left','-100%');

    slide_prev.click(slide_left);
    slide_next.click(slide_right);

    let slide_Timer = setInterval(slide_right, 3000);
      $('.btn_group i').hover(function(){
        clearInterval(slide_Timer);
      },function(){
        slide_Timer = setInterval(slide_right, 3000);
      });

    function slide_left(){
      slide_wrapper.animate({'margin-left':'0%'}, 300, function(){
        $('.slide_wrapper > ul > li:last-child').insertBefore('.slide_wrapper > ul > li:first-child');
        slide_wrapper.css('margin-left','-100%');
      });
    }
    function slide_right(){
      slide_wrapper.animate({'margin-left':'-200%'}, 300, function(){
        $('.slide_wrapper > ul > li:first-child').insertAfter('.slide_wrapper > ul > li:last-child');
        slide_wrapper.css('margin-left','-100%');
      });
    }
  });
  // 총 금액 계산
  function cal_total(){
    $(function(){
      let n_total = 0;

      n_total = (<?=$row_s['s_price_adult']?> * $('#b_adult').val())+(<?=$row_s['s_price_child']?> * $('#b_child').val())+(<?=$row_s['s_price_baby']?> * $('#b_baby').val());

      f_total = new Intl.NumberFormat('ko-KR').format(n_total);

      $('#total_price').text(f_total);
    });
  }

</script>
<?php
  include('footer.php');
?>