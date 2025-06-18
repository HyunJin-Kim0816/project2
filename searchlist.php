<?php
    include('./php/dbconn.php');

    if(isset($_GET['keyword']) & $_GET['keyword']!='') $keyword = $_GET['keyword'];
    else $keyword = '전체';
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>참좋은여행</title>
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
  <link rel="stylesheet" href="./css/searchlist.css" type="text/css">
  
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
    include ('header.php');
    include ('mobile_nav.php');
    ?>
    <main>
        <h2>"<?=$keyword?>"의 결과 입니다.</h2>
        <section class="row col-xl">
            <h3 style="display:none">검색결과 창</h3>
            <article class="filter col-sm-3">
                <div class="head">
                    <h3>필터</h3>
                    <button type="button">초기화</button>
                </div>
                <dl class="search search1">
                    <dt>여행 시작일 <i class="fa fa-plus"></i></dt>
                    <dd>
                        <button type="button">출발일을 선택해주세요<i class="fa-solid fa-calendar-days"></i></button>
                    </dd>
                </dl>
                <dl class="search search2">
                    <dt>출발요일 <i class="fa fa-plus"></i></dt>
                    <dd>
                        <input type="button" value="전체" class="selected">
                        <input type="button" value="월요일">
                        <input type="button" value="화요일">
                        <input type="button" value="수요일">
                        <input type="button" value="목요일">
                        <input type="button" value="금요일">
                        <input type="button" value="토요일">
                        <input type="button" value="일요일">
                    </dd>
                </dl>
                <dl class="search search3">
                    <dt>출발지역 <i class="fa fa-plus"></i></dt>
                    <dd>
                        <input type="button" value="전체" class="selected">
                        <input type="button" value="서울/인천">
                        <input type="button" value="부산">
                        <input type="button" value="대구">
                        <input type="button" value="대전/청주">
                        <input type="button" value="광주/무안">
                    </dd>
                </dl>
                <dl class="search search4">
                    <dt>상품속성 <i class="fa fa-plus"></i></dt>
                    <dd>
                        <input type="button" value="전체" class="selected">
                        <input type="button" value="패키지">
                        <input type="button" value="자유여행">
                        <input type="button" value="라르고">
                        <input type="button" value="프리미엄">
                        <input type="button" value="연계">
                        <input type="button" value="노팁/노옵션">
                        <input type="button" value="패키지 속 자유">
                        <input type="button" value="한나라 일주">
                        <input type="button" value="노쇼핑">
                </dl>
                <dl class="search search5">
                    <dt>여행기간 <i class="fa fa-plus"></i></dt>
                    <dd>
                        <input type="button" value="전체" class="selected">
                        <input type="button" value="2일 이하">
                        <input type="button" value="3일">
                        <input type="button" value="4일">
                        <input type="button" value="5일">
                        <input type="button" value="6일">
                        <input type="button" value="7일">
                        <input type="button" value="8일">
                        <input type="button" value="9일">
                        <input type="button" value="10일">
                    </dd>
                </dl>
                <dl class="search search6">
                    <dt>상품가격 <i class="fa fa-plus"></i></dt>
                    <dd>
                        <input type="button" value="전체" class="selected">
                        <input type="button" value="30만원 이하">
                        <input type="button" value="30~80만원">
                        <input type="button" value="80~130만원">
                        <input type="button" value="130~200만원">
                        <input type="button" value="200~300만원">
                        <input type="button" value="300만원 이상">
                    </dd>
                </dl>
                <dl class="search search3">
                    <dt>선호항공 <i class="fa fa-plus"></i></dt>
                    <dd>
                        <input type="button" value="전체" class="selected">
                        <input type="button" value="국적항공">
                        <input type="button" value="실속항공">
                        <input type="button" value="외국항공">
                        <input type="button" value="기타">
                    </dd>
                </dl>
            </article>

            <article class="result col">
                <h3>검색결과</h3>
                <?php
                    $sql = "SELECT * FROM project_product";
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($result)){
                        $sql_m = "SELECT MIN(s_price_adult) FROM project_schedule WHERE p_code='".$row['p_code']."';";
                        $result_m = mysqli_query($conn,$sql_m);
                        $row_m = mysqli_fetch_row($result_m);
                        $min_price = number_format($row_m[0]);
                        $sql_m = "SELECT s_code FROM project_schedule WHERE p_code='".$row['p_code']."' ORDER BY s_dep_time1 ASC LIMIT 1;";
                        $result_m = mysqli_query($conn,$sql_m);
                        $row_m = mysqli_fetch_row($result_m);
                        $detail = $row_m[0];
                ?>
                <div class="list">
                    <img src="./images/products/<?=$row['p_slide1']?>" alt="">
                    <div class="middle_info">
                        <a href="detail.php?s_code=<?=$detail?>">
                        <div class="product_explain">
                            <p class="p_route"><?=$row['p_code']?> &#124; <?=$row['p_dep']?> &#62; <?=$row['p_des']?></p>
                            <p class="p_name"><?=$row['p_title']?></p>
                            <p class="p_short_e"><?=$row['p_subtitle']?></p>
                        </div>
                        
                        <div class="travel_type">
                            <p><b>여행기간 &#124; <?=$row['p_stay']?>박 <?=$row['p_term']?>일</b></p>
                        </div>
                    </a>
                    </div>
                    <div class="product_list">
                        <p>상품최소가격 <?=$min_price?> 원~</p>
                        <a href="detail.php?s_code=<?=$detail?>" class="detail">상품상세보기</a>
                        <script></script>
                        <button type="button" class="dep_date">출발일 선택</button>
                    </div>
                    <div class="modal">
                        <div class="modal-overlay">
                            <h2 class="cal_title">출발일선택</h2>
                            <i class="fa fa-xmark"></i>
                            <p>2025.04</p>
                            <table id="<?=$row['p_code']?>_calendar" class="calendar">
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
                                $sql_c = "SELECT s_code, CAST(RIGHT(s_code, 2) AS SIGNED) AS dep_day FROM project_schedule WHERE p_code = '".$row['p_code']."' ORDER BY s_dep_time1 ASC";
                                $result_c = mysqli_query($conn,$sql_c);
                                echo 'let dep_day = [';
                                while($row_c = mysqli_fetch_assoc($result_c)){
                                    echo '"'.$row_c['dep_day'].'", ';
                                }
                                echo '];';
                                $sql_c = "SELECT s_code, CAST(RIGHT(s_code, 2) AS SIGNED) AS dep_day FROM project_schedule WHERE p_code = '".$row['p_code']."' ORDER BY s_dep_time1 ASC";
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
                        const tbody = document.querySelector('#<?=$row['p_code']?>_calendar > tbody');
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

                        $('#<?=$row['p_code']?>_calendar').on('click', 'td', function() {
                            const day = $(this).text().trim();

                            if(day !== '') {
                                $('#<?=$row['p_code']?>_calendar td').removeClass('selected');
                            }
                        });

                        $('.result .list .product_list .dep_date').click(function (e) {
                            e.stopPropagation();
                            $(this).parents('.list').children('.modal').fadeIn();
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
                <?php } ?>
            </article>
        </section>
        
    </main>

    <script>
        $(document).ready(function (){
            $('.filter dl dt').click(function () {
                $(this).next('dd').slideToggle();

                const icon = $(this).find('i');
                icon.toggleClass('fa-plus fa-minus');
            });

            $('.filter dl dd input[type="button"]').click(function () {
                // 같은 dd 내 다른 버튼에서 selected 제거
                $(this).siblings('input[type="button"]').removeClass('selected');

                // 클릭한 버튼에 selected 추가
                $(this).addClass('selected');
            });
        });

    </script>

    <?php include ('footer.php')?>
