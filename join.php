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
  <link rel="stylesheet" href="./css/join.css" type="text/css">
  
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
  <form name="회원가입" action="./php/join_insert.php" method="post" onsubmit="return form_check();">
    <div class="form_head">
      <h2>회원가입</h2>
      <p>언제나 한결같은 마음으로 즐거움을 드리는 <b>참좋은여행</b>이 되겠습니다.</p>
    </div>
    <div class="form">
      <table>
        <tr>
          <th><span class="required">*</span><label for="m_name">이름</label></th>
          <td><input type="text" name="m_name" id="m_name" placeholder="이름을 입력하세요" required></td>
        </tr>
        <tr>
          <th><span class="required">*</span><label for="m_birth">생년월일</label></th>
          <td><input type="text" name="m_birth" id="m_birth" maxlength="10" placeholder="생년월일을 입력하세요" required></td>
        </tr>
        <tr>
          <th><span class="required">*</span><label for="m_phone">휴대폰 번호</label></th>
          <td><input type="text" name="m_phone" id="m_phone" maxlength="11" placeholder="휴대폰번호를 입력하세요" required></td>
        </tr>
      </table>
    </div>
    <div class="form">
      <table>
        <tr>
          <th><span class="required">*</span><label for="m_id">아이디</label></th>
          <td class="id_form"><input type="text" name="m_id" id="m_id" maxlength="16" placeholder="아이디를 입력하세요" required><span id="id_check_btn" data-check="0" class="btn_idcheck">중복확인</span><p id="id_check"></p></td>
        </tr>
        <tr>
          <th><span class="required">*</span><label for="m_pwd">비밀번호</label></th>
          <td><input type="password" name="m_pwd" id="m_pwd" maxlength="16" placeholder="비밀번호를 입력하세요" required></td>
        </tr>
        <tr>
          <th><span class="required">*</span><label for="m_pwd_c">비밀번호 확인</label></th>
          <td><input type="password" name="m_pwd_c" id="m_pwd_c" maxlength="16" placeholder="비밀번호를 확인하세요" required><p class="pw_check"></p></td>
        </tr>
        <tr>
          <th><span class="required">*</span><label for="m_email">이메일</label></th>
          <td><input type="email" name="m_email" id="m_email" placeholder="이메일을 입력하세요" required></td>
        </tr>
        <tr>
          <th><span>성별</span></th>
          <td>
            <input type="radio" name="m_gender" id="m_male" value="M"><label for="m_male">남자</label>
            <input type="radio" name="m_gender" id="m_female" value="F"><label for="m_female">여자</label>
          </td>
        </tr>
        <tr>
          <th><label for="m_postnum">주소</label></th>
          <td class="adress">
            <input type="text" name="m_postnum" id="m_postnum" placeholder="우편번호">
            <input type="text" name="m_address1" id="m_address1" placeholder="주소(시,도,구,읍)">
            <input type="text" name="m_address2" id="m_address2" placeholder="주소(면,동,리)">
          </td>
        </tr>
      </table>
    </div>
    <div class="agree">
      <dl>
        <dt><input type="checkbox" id="agree_all"><label for="agree_all">전체 동의하기</label></dt>
        <dt><input type="checkbox" id="agree01" class="term-checkbox term-checkbox_r"><label for="agree01">참좋은여행 이용약관 동의 <span class="c_required">(필수)</span></label></dt>
        <dd>제1조 (목적)
  본 약관은 참좋은여행(주) (이하 "회사")가 운영하는 참좋은여행 홈페이지에서 제공하는 인터넷관련 서비스(이하 "서비스")를 이용함에 있어 이용자의 권리, 의무, 책임사항을 규정하는 것을 목적으로 합니다.
  </dd>
        <dt><input type="checkbox" id="agree02" class="term-checkbox term-checkbox_r"><label for="agree02">참좋은멤버스 약관 동의 <span class="c_required">(필수)</span></label></dt>
        <dd>제1조 (목적)
        본 약관은 참좋은멤버스 회원이 참좋은여행(주) (이하 "회사")의 멤버십 서비스를 이용함에 있어 회원과 회사의 권리•의무 관련 절차 등을 규정하는 것을 목적으로 합니다.</dd>
        <dt><input type="checkbox" id="agree03" class="term-checkbox term-checkbox_r"><label for="agree03">개인정보 수집 및 이용 <span class="c_required">(필수)</span></label></dt>
        <dd>개인정보의 수집 및 이용목적
  회사는 수집한 개인정보를 다음의 목적을 위해 활용합니다.
  서비스 제공에 관한 계약 이행 및 서비스 제공에 따른 요금정산 : 여행서비스 예약대행, 콘텐츠 제공, 구매 및 요금 결제, 물품배송 또는 청구지 등 발송, 금융거래 본인 인증 및 금융 서비스
  회원 관리 : 회원제 서비스 이용에 따른 본인확인, 개인 식별, 불량회원의 부정 이용 방지와 비인가 사용 방지, 가입 의사 확인, 연령확인, 만14세 미만 아동 개인정보 수집 시 법정 대리인 동의여부 확인, 불만처리 등 민원처리, 고지사항 전달
  마케팅 및 광고에 활용 : 이벤트 등 광고성 정보 전달 , 인구통계학적 특성에 따른 서비스 제공 및 광고 게재 , 접속 빈도 파악 또는 회원의 서비스 이용에 대한 통계
  기타 : 여행자보험 가입</dd>
        <dt><input type="checkbox" id="agree04" class="term-checkbox term-checkbox_r"><label for="agree04">개인정보의 제3자 제공 동의 <span class="c_required">(필수)</span></label></dt>
        <dd>회사는 고객님의 동의가 있거나 법령의 규정에 의한 경우, 수사 목적으로 법령에 정해진 절차와 방법에 따라 수사기관의 요구가 있는 경우를 제외하고 어떠한 경우에도 '개인정보의 수집 및 이용목적' 에서 고지한 범위를 넘어 서비스와 무관한 타 기업/기관에 제공하거나 이용하지 않습니다. 단, 제휴사, 협력사등 회원님의 개인정보를 공유하는 경우 다음과 같습니다.</dd>
        <dt><input type="checkbox" id="agree05" class="term-checkbox term-checkbox_r"><label for="agree05">개인정보 위탁 동의 <span class="c_required">(필수)</span></label></dt>
        <dd>회사는 서비스 이행을 위해 아래와 같이 외부 전문업체에 위탁하여 운영하고 있습니다.</dd>
        <dt><input type="checkbox" id="agree06" class="term-checkbox"><label for="agree06">마케팅 수신 동의 <span class="c_select">(선택)</span></label></dt>
        <dd>참좋은여행 홈페이지 서비스 이용 고객님께 광고성 정보 전송 시 아래와 같은 기준으로 진행되오니, 아래의 내용을 참조해 주시고 수신동의를 선택해 주시기 바랍니다.</dd>
      </dl>
    </div>
    <div class="confirm_box">
      <input type="reset" value="취소" class="btn_cancel"><input type="submit" value="회원가입" class="btn_submit">
    </div>
  </form>
</main>
<script>
  let id_check = 0;
  let agree_check = 0;

  $(function(){
    $('#id_check_btn').click(function(){
      let userID = $('#m_id').val().trim();

      if(userID == ""){
        $('#id_check').text('아이디를 입력해주세요.').css('color', 'red');
        return;
      }

      if(!validateIdFormat(userID)){
        $('#id_check').text("아이디는 영문자 숫자 조합으로 4-16자 이내여야 합니다.").css('color', 'red');
      return;
      }

      $.ajax({
        url: './php/id_check.php',
        type: 'POST',
        data: {id: userID},
        success: function(response){
          response = response.trim();
          if(response == 'ok'){
            $('#id_check').text('사용 가능한 아이디입니다.').css('color', 'var(--m_color)');
            id_check = 1;
          } else {
            $('#id_check').text('이미 사용중인 아이디입니다.').css('color', 'red');
          }
        },
        error:function(){
          alert('서버요청 실패, 다시 시도하세요.');
        }
      })
    });
  });

  // 전체 동의 체크박스와 다른 체크박스를 참조
  const selectAllCheckbox = document.getElementById('agree_all');
  const termCheckboxes = document.querySelectorAll('.term-checkbox');
  const termCheckboxes_r = document.querySelectorAll('.term-checkbox_r');
  
  // 전체 동의 체크박스 클릭 시, 다른 체크박스들 체크/언체크
  selectAllCheckbox.addEventListener('change', function() {
    termCheckboxes.forEach(function(checkbox) {
      checkbox.checked = selectAllCheckbox.checked;
    });
  });

  // 개별 체크박스 클릭 시, 전체 동의 체크박스 상태 업데이트
  termCheckboxes.forEach(function(checkbox) {
    checkbox.addEventListener('change', function() {
      // 전체 동의 체크박스는 모든 체크박스가 체크된 상태일 때만 체크됨
      selectAllCheckbox.checked = Array.from(termCheckboxes).every(function(checkbox) {
        return checkbox.checked;
      });
    });
  });

  // 필수 체크박스 클릭 시 전체 동의 상태 업데이트
  termCheckboxes_r.forEach(function(checkbox) {
    checkbox.addEventListener('change', function() {
      const allCheckedStatus = Array.from(termCheckboxes_r).every(function(checkbox) {
        return checkbox.checked; // 체크되었으면 true, 아니면 false
      });

    // 모든 체크박스가 체크되면 allChecked를 1로 설정, 아니면 0으로 설정
      if (allCheckedStatus) {
        agree_check = 1;
      } else {
        agree_check = 0;
      }
    });
  });

  function form_check(){
    if(id_check === 0){
      document.getElementById('id_check').innerHTML="아이디 중복 확인은 필수입니다."
      return false;
    }
    if(!validateIdFormat(document.getElementById('m_id').value.trim())){
      document.getElementById('id_check').innerHTML="아이디는 영문자 숫자 조합으로 4-16자 이내여야 합니다.";
      return false;
    }
    // if(!validatePwFormat(document.getElementById('m_pwd').value.trim())){
    //   document.getElementById('pw_check').innerHTML="비밀번호는 영문 대소문자 숫자 특수문자 조합으로 8-16자 이내여야 합니다.";
    //   return false;
    // }
    if(document.getElementById('m_pwd').value!=document.getElementById('m_pwd_c').value){
      document.getElementById('pw_check').innerHTML="비밀번호가 일치하지 않습니다.";
      return false;
    }
    // if(!validatePhoneFormat(document.getElementById('m_phone').value.trim())){
    //   document.getElementById('phone_check').innerHTML="숫자만 입력해주세요.";
    //   return false;
    // }
    if(agree_check === 0) {
      alert("모든 필수 약관에 동의해야 합니다."); // 오류 메시지 출력
      return false;
    }
    return true;
  }
  function validateIdFormat(userID){
    let regex = /^[a-zA-Z0-9]{4,16}$/;
    return regex.test(userID);
  }
  // function validatePwFormat(userPW){
  //   let regex = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
  //   return regex.test(userPW);
  // }
  // function validatePhoneFormat(userPhone){
  //   let regex = /^(?=.*\d)[\d]{10,11}$/;
  //   return regex.test(userPhone);
  // }

  // 생년월일 숫자만 입력하게 하는 코드
  const b_input = document.getElementById('m_birth');

    b_input.addEventListener('input', function(e) {
      // 입력값에서 숫자만 추출
      let value = e.target.value.replace(/\D/g, '');

      // 8자리까지만 입력되도록 제한
      if (value.length > 8) {
        value = value.slice(0, 8);
      }

      // 년, 월, 일 사이에 '-'를 추가
      if (value.length >= 3) {
        value = value.replace(/^(\d{4})(\d{2})$/, '$1-$2');
      }
      if (value.length >= 5) {
        value = value.replace(/^(\d{4})(\d{2})(\d{2})$/, '$1-$2-$3');
      } 

      // 입력값을 다시 input 필드에 설정
      e.target.value = value;
    });

    // 전화번호 숫자만 입력하게 하는 코드
    const p_input = document.getElementById('m_phone');

    p_input.addEventListener('input', function(e) {
      // 입력값에서 숫자만 추출
      let value = e.target.value.replace(/\D/g, '');

      // 11자리까지만 입력되도록 제한
      if (value.length > 11) {
        value = value.slice(0, 11);
      }

      // 사이에 '-'를 추가
      if (value.length >= 4) {
        value = value.replace(/^(\d{3})(\d{4})$/, '$1-$2');
      }
      if (value.length >= 8) {
        value = value.replace(/^(\d{3})(\d{4})(\d{4})$/, '$1-$2-$3');
      } 

      // 입력값을 다시 input 필드에 설정
      e.target.value = value;
    });
</script>

<?php
  include('footer.php');
?>