<?php
include('header.php');

// GET으로 전달받은 회원 정보
$m_name = $_GET['m_name'] ?? '';
$m_phone = $_GET['m_phone'] ?? '';
$m_email = $_GET['m_email'] ?? '';

?>

<main>
  <link rel="stylesheet" href="./css/login_confirm.css" type="text/css">
  <form name="회원가입">
    <div class="form_head">
      <h2>가입완료</h2>
      <p>참좋은 멤버스 가입을 축하드립니다.</p>
      <p>우리 고객님을 위해<br>다양한 여행 상품과 친절한 서비스로 언제나 즐거움을 드리는 참 좋은 여행이 되겠습니다.</p>
    </div>

    <div class="form">
      <table>
        <tr>
          <th><label for="m_name">이름</label></th>
          <td><?= htmlspecialchars($m_name) ?></td>
        </tr>
        <tr>
          <th><label for="m_pnum">휴대폰번호</label></th>
          <td><?= htmlspecialchars($m_phone) ?></td>
        </tr>
        <tr>
          <th><label for="m_email">이메일</label></th>
          <td><?= htmlspecialchars($m_email) ?></td>
        </tr>
      </table>

      <button type="button" class="btn_submit" onclick="location.href='index.php';">
        메인화면으로
      </button>
    </div>
  </form>
</main>

<?php include('footer.php'); ?>
