  <header>
    <!-- 헤더 윗부분 -->
    <div class="header-top">
      <div class="ht_logo">
        <h1>
          <a href="index_admin.php"><img src="../images/logo.png" alt="메인로고"></a>
        </h1>
      </div>
      <div class="ht_user">
          <p><i class="fa fa-user"></i><b>관리자</b>님 환영합니다. <a href="./php/logout.php">로그아웃</a></p>
      </div>
    </div>
    <div class="header-bottom">
      <div class="menu_box">
        <ul class="mnu">
          <li>
            <a href="index_admin.php" title="관리자 메인화면">홈화면</a>
          </li>
          <li>
            <a href="user_list_admin.php" title="회원관리">회원관리</a>
          </li>
          <li>
            <a href="product_list_admin.php" title="여행지관리">여행지관리</a>
          </li>
          <li>
            <a href="schedule_list_admin.php" title="여행일정관리">여행일정관리</a>
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
    </script>
  </header>
