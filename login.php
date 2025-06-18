<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>참좋은여행</title>

  <!-- 메타데이터 -->
  <meta name="keywords" content="참좋은여행, 직판여행사, 여행정보, 해외여행정보, 패키지, 에어텔, 항공권, 허니문, 호텔, 골프여행, 배낭여행, FIT여행, 자유여행, 고급여행상품, 테마여행, 크루즈, 국내여행, 제주여행" />
  <meta name="description" content="고객의 만족을 최우선으로 생각하는 해외/국내여행 전문기업." />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="참좋은여행" />
  <meta property="og:url" content="http://www.verygoodtour.com" />
  <meta property="og:description" content="고객의 만족을 최우선으로 생각하는 해외/국내여행 전문기업." />
  <meta property="og:image" content="http://www.verygoodtour.com/images/mov2/logo_for_msg.jpg" />

  <!-- 파비콘, 기본서식 파일 -->
  <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/common.css">
  <link rel="stylesheet" href="./css/login.css">

  <!-- 플러그인 추가 -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<?php
  include('./header.php');
  include ('mobile_nav.php');
?>
  <div class="login_wrap">
    <form name="loginform" action="./php/login_check.php" method="post" onsubmit="return form_check()">
      <div class="login_head">
        <h2>로그인</h2>
        <p>로그인 후 더 다양한 상품들을 둘러보고 즐기세요</p>
      </div>
      <p class="login_title">
        <span>일반로그인</span>
      </p>

      <div class="input_box">
        <p>
          <label for="id"></label>
          <i class="fa-solid fa-circle-user"></i>
          <input type="text" name="id" id="id" placeholder="아이디를 입력해주세요">
        </p>
        <p>
          <label for="password"></label>
          <i class="fa-solid fa-lock"></i>
          <input type="password" name="pw" id="password" placeholder="비밀번호를 입력해주세요">
          <i class="fa-solid fa-eye-slash"></i>
        </p>
      </div>

      <div class="idpw">
        <a href="#" class="findid">아이디 찾기</a>
        <a href="#" class="findpw">비밀번호 찾기</a>
      </div>

      <div>
        <input type="submit"  class="login_btn" value="로그인">
      </div>

      <div>
        <a href="join.php" class="join_btn">회원가입</a>
      </div>

      <div class="service">
        <p>로그인/회원가입 후 다양한 혜택과 서비스를 받아보세요.&nbsp;<u>혜택안내</u></p>
      </div>

      <div class="simple_login_section" style="margin-top: 40px;">
        <p class="login_title">
          <span>간편로그인</span>
        </p>
        <div class="e_login">
          <p><a href="#"><img src="./images/kakao.png" alt="카카오로고"></a></p>
          <p><a href="#"><img src="./images/naver.png" alt="네이버로고"></a></p>
          <p><a href="#"><img src="./images/google.jpg" alt="구글로고"></a></p>
          <p><a href="#"><img src="./images/apple.jpg" alt="애플로고"></a></p>
        </div>
      </div>

      <div>
        <label for="submit_btn"></label>
          <input type="button" id="submit_btn" class="submit_btn" value="비회원예약하기">
      </div>
    </form>
  </div>

<script>
  function form_check(){
      if(document.getElementById('id').value==''){
        alert('아이디를 입력하세요.');
        return false;
      }
      if(document.getElementById('password').value==''){
        alert('비밀번호를 입력하세요.');
        return false;
      }
      return true;
    }
</script>

<?php
  include('./footer.php');
?>
