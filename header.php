<?php
  include('./php/dbconn.php');

  if(isset($_SESSION['m_id'])){
    $userid = $_SESSION['m_id'];
    $username = $_SESSION['m_name'];
  } else {
    $userid = '';
    $username = '';
  }
?>

<body>
  <header>
    <!-- 헤더 윗부분 -->
    <div class="header-top">
      <div class="ht_logo">
        <h1>
          <a href="index.php"><img src="./images/logo.png" alt="메인로고"></a>
        </h1>
      </div>
      <form name="search" action="searchlist.php" method="get">
        <div class="ht_search">
          <label for="keyword" class="hide">검색</label>
          <input type="text" name="keyword" id="keyword"  placeholder="어디로 떠나고 싶으세요?"><button type="submit"><img src="./images/search.png" alt="검색"></button>
        </div>
      </form>
      <div class="ht_banner">
        <a href="#" title="상단 이벤트 배너"><img src="./images/main_event.jpg" alt=""></a>
      </div>
      <div class="ht_menu">
        <a href="login.php" class="m_login"><i class="fa fa-user"></i></a>
        <ul>
          <?php if($userid!=''){ ?>
          <li><a href="./php/logout.php" class="login" title="로그아웃">로그아웃</a></li>
          <?php } else { ?>
          <li><a href="login.php" class="login" title="로그인">로그인</a></li>
          <?php } ?>
          <li><a href="#" class="review" title="여행후기">여행후기</a></li>
          <li><a href="qna.html" class="cs" title="고객센터">고객센터</a></li>
        </ul>
      </div>
    </div>
    <div class="header-bottom">
      <div class="menu_box">
        <a href="javascript:void(0)">전체메뉴</a>
        <ul class="mnu">
          <li>
            <a href="#" title="해외여행">해외여행</a>
            <div class="sub_mnu">
              <ul>
                <li><a href="" title="유럽">유럽</a></li>
                <li><a href="" title="동남아">동남아</a></li>
                <li><a href="" title="일본">일본</a></li>
                <li><a href="" title="대만&middot;홍콩&middot;마카오">대만&middot;홍콩&middot;마카오</a></li>
                <li><a href="" title="중국&middot;몽골&middot;중앙아시아">중국&middot;몽골&middot;중앙아시아</a></li>
                <li><a href="" title="괌&middot;사이판&middot;호주&middot;뉴질랜드">괌&middot;사이판&middot;호주&middot;뉴질랜드</a></li>
                <li><a href="" title="미국&middot;캐나다&middot;하와이&middot;중남미">미국&middot;캐나다&middot;하와이&middot;중남미</a></li>
                <li><a href="" title="중동&middot;아프리카&middot;인도">중동&middot;아프리카&middot;인도</a></li>
              </ul>
            </div>
          </li>
          <li>
            <a href="#" title="국내·제주">국내&middot;제주</a>
            <div class="sub_mnu">
              <ul>
                <li><a href="#" title="제주">제주</a></li>
                <li><a href="#" title="내륙">내륙</a></li>
                <li><a href="#" title="울릉도&middot;홍도&middot;백령도">울릉도&middot;홍도&middot;백령도</a></li>
              </ul>
            </div>
          </li>
          <li>
            <a href="#" title="프리미엄">프리미엄</a>
            <div class="sub_mnu">
              <ul>
                <li><a href="" title="유럽">유럽</a></li>
                <li><a href="" title="동남아">동남아</a></li>
                <li><a href="" title="일본">일본</a></li>
                <li><a href="" title="대만&middot;홍콩&middot;마카오">대만&middot;홍콩&middot;마카오</a></li>
                <li><a href="" title="중국&middot;몽골">중국&middot;몽골</a></li>
                <li><a href="" title="호주&middot;뉴질랜드">호주&middot;뉴질랜드</a></li>
                <li><a href="" title="미국&middot;캐나다&middot;중남미">미국&middot;캐나다&middot;중남미</a></li>
                <li><a href="" title="중동&middot;아프리카">중동&middot;아프리카</a></li>
              </ul>
            </div>
          </li>
          <li>
            <a href="#" title="지방출발">지방출발</a>
            <div class="sub_mnu">
              <ul>
                <li><a href="#" title="부산출발">부산출발</a></li>
                <li><a href="#" title="대구출발">대구출발</a></li>
                <li><a href="#" title="청주출발">청주출발</a></li>
              </ul>
            </div>
          </li>
          <li>
            <a href="#" title="항공·호텔">항공&middot;호텔</a>
          </li>
          <li>
            <a href="#" title="라르고">라르고</a>
            <div class="sub_mnu">
              <ul>
                  <li><a href="" title="유럽">유럽</a></li>
                  <li><a href="" title="호주&middot;뉴질랜드">호주&middot;뉴질랜드</a></li>
                  <li><a href="" title="미국&middot;캐나다&middot;중남미">미국&middot;캐나다&middot;중남미</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <script>
      $(function(){
        // 메뉴 선택 스크립트
        let c_num = 0;

        $('.sub_mnu').hide();
        $('.mnu > li:first-of-type').children('.sub_mnu').show();
        $('.mnu > li:first-of-type').children('li > a').addClass('mnu_active');

        $('.mnu > li').hover(function(){
          if($(this).index() != c_num){
            $(this).children('.sub_mnu').stop().slideDown(0);
          }
          $(this).children('.sub_mnu').addClass('mnu_index');
        },
        function(){
          if($(this).index() != c_num){
            $(this).children('.sub_mnu').stop().slideUp(0);
          }
          $(this).children('.sub_mnu').removeClass('mnu_index');
        });

        $('.mnu > li').click(function(){
          $('.sub_mnu').hide();
          $('.mnu > li > a').removeClass('mnu_active');
          if($(this).index() != 4){
            c_num = $(this).index();
            $(this).children('.sub_mnu').show();
            $(this).children('li > a').addClass('mnu_active');
          }
        });
      });

      // const t_btn = document.querySelector('.toggle');
      //const c_btn = document.querySelector('.fa-times');
      const navi = document.querySelector('.gnb');


      // t_btn.addEventListener('click', function() {
      //     //window.alert('open');
      //     navi.style.left='0px';
      // })

      //c_btn.addEventListener('click', function() {
      //    //window.alert('close');
      //    navi.style.left='-100%';
      //})

      $(document).ready(function () {

        $('.fa-solid fa-bars').click(function () {
          $('.gnb').css('left','0px');
        });
      })
    </script>
  </header>
