<?php
    include('../php/dbconn.php');

    if(isset($_SESSION['m_id']) & $_SESSION['m_id']=='admin'){
        $userid = $_SESSION['m_id'];
        $username = $_SESSION['m_name'];
    } else {
        echo '<script>alert("잘못된 접근입니다.");</script>';
        echo '<script>location.replace("../index.php");</script>';
    }
?>

<!DOCTYPE HTML>
<html lang="ko">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- 메타데이터 -->
        <meta name="keywords" content="참좋은여행, 직판여행사, 여행정보, 해외여행정보, 패키지, 에어텔, 항공권, 허니문, 호텔, 골프여행 , 배낭여행, FIT여행, 자유여행, 골프여행, 고급여행상품, 테마여행, 크루즈, 국내여행, 제주여행" />
        <meta name="description" content="고객의 만족을 최우선으로 생각하는 해외/국내여행 전문기업." />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="참좋은여행" />
        <meta property="og:url" content="http://www.verygoodtour.com" />
        <meta property="og:description" content="고객의 만족을 최우선으로 생각하는 해외/국내여행 전문기업." />
        <meta property="og:image" content="http://www.verygoodtour.com/images/mov2/logo_for_msg.jpg" />
        
        <title>참좋은여행</title>  

        <!-- 파비콘, 기본서식 파일 -->
        <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="./css/common.css" type="text/css">
        <link rel="stylesheet" href="./css/reset.css" type="text/css">
        <link rel="stylesheet" href="./css/main_admin.css" type="text/css">
        
        <!-- 플러그인 추가(jQuery, 폰트어썸) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <?php include('header2.php')?>

        <main>
            <section class="banner">
                <article>
                    <h2>관리자모드에 오신걸 환영합니다.</h2>
                    <p>회원/여행지/여행일정 및 자주 묻는 질분들을 수정/추가/삭제 할 수 있습니다.</p>
                </article>
            </section>
            <h3>관리자모드에 오신걸 환영합니다.</h3>

            <div class="manage_table">
                <h4>회원관리</h4>
                <div><a href="user_list_admin.php" title="회원목록으로 바로가기">수정/삭제</a></div>
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>회원 아이디</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $sql = "SELECT * FROM project_member";
                            $result = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_assoc($result)){
                                echo '<tr>';
                                echo '<td>' . $row['m_no'] . '</td>';
                                echo '<td>' . $row['m_id'] . '</td>';
                                echo '</tr>';
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="manage_table">
                <h4>여행지관리</h4>
                <div><a href="product_list_admin.php" title="여행지관리 목록 바로가기">관리/등록</a></div>
                <table>
                    <thead>
                        <tr>
                            <th>나라/지역</th>
                            <th>여행제목</th>
                            <th>여행기간</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM project_product";
                            $result = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_assoc($result)){
                                echo '<tr>';
                                echo '<td>' . $row['p_des'] . '</td>';
                                echo '<td>' . $row['p_title'] . '</td>';
                                echo '<td>' . $row['p_stay'] . '박 ' . $row['p_term'] . '일</td>';
                                echo '</tr>';
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="manage_table">
                <h4>여행일정관리</h4>
                <div><a href="schedule_list_admin.php" title="여행일정관리 목록 바로가기">&#x2B;더보기</a></div>
                <table>
                    <thead>
                        <tr>
                            <th>여행코드</th>
                            <th>항공사</th>
                            <th>금액(성인)</th>
                            <th>여행기간</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM project_schedule";
                            $result = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_assoc($result)){
                                echo '<tr>';
                                echo '<td>' . $row['p_code'] . '</td>';
                                echo '<td>' . $row['s_airline'] . '</td>';
                                echo '<td>' . number_format($row['s_price_adult']) . '</td>';
                                echo '<td>' . date('Y-m-d', strtotime($row['s_dep_time1'])) . '~' . date('Y-m-d', strtotime($row['s_des_time2'])) . '</td>';
                                echo '</tr>';
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="manage_table qna">
                <h4>고객센터</h4>
                <div><a href="qna_admin.php" title="자주 묻는 질문 목록 바로가기">&#x2B;더보기</a></div>
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>질문내용</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Q1</td>
                            <td>예약 후 언제까지 결제를 해야 하나요?</td>
                        </tr>
                        <tr>
                            <td>Q2</td>
                            <td>호텔 투숙일 이후 취소나 변경 규정은 어떻게 되나요?</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>

    </body>
</html>