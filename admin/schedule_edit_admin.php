<?php
    include('../php/dbconn.php');

    $s_code = $_GET['s_code'];

    $sql = "SELECT * FROM project_schedule WHERE s_code = '$s_code'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>참좋은여행 관리자 - 여행일정수정</title>
    <!-- 파비콘, 기본서식 파일 -->
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/common.css" type="text/css">
    <link rel="stylesheet" href="./css/reset.css" type="text/css">
    <link rel="stylesheet" href="./css/schedule_admin.css" type="text/css">
</head>
<body>
    <?php include('header2.php')?>

    <main>
        <form name="product_update" method="post" action="./php/schedule_update_admin.php" onsubmit="return form_check()">
            <div class="contant_box">
                <legend>여행일정수정</legend>
                <table class="table">
                    <tr>
                        <th class="code">
                        <label for="p_code">상품코드</label>
                        </th>
                        <td>
                            <input type="hidden" id="p_code" name="p_code" value="<?=$row['p_code']?>">
                            <input type="hidden" id="s_code" name="s_code" value="<?=$s_code?>">
                            <input type="text" id="p_code" value="<?=$s_code?>" disabled>
                        </td>
                    </tr>
                    <tr>
                        <th>
                        <label for="s_airline">항공사</label>
                        </th>
                        <td>
                            <select name="s_airline" id="s_airline" class="form-select">
                                <option value="">항공사 선택</option>
                                <option value="아시아나항공">아시아나항공</option>
                                <option value="대한항공">대한항공</option>
                                <option value="제주항공">제주항공</option>
                                <option value="델타항공">델타항공</option>
                                <option value="티웨이항공">티웨이항공</option>
                            </select>
                            <?php
                                echo "<script>document.getElementById('s_airline').value = '".$row['s_airline']."';</script>";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th rowspan="2"><label for="s_dep_time1">출발항공정보</label></th>
                        <td>
                        <input type="hidden" id="s_dep_time1" name="s_dep_time1" value="<?= date('Y-m-d',strtotime($row['s_dep_time1'])) ?>">
                        <input type="text" id="s_dep_time1" value="<?= date('Y-m-d',strtotime($row['s_dep_time1'])) ?>" disabled>
                        <input type="text" name="s_dep_time1_h" id="s_dep_time1_h" value="<?= date('H',strtotime($row['s_dep_time1'])) ?>"><span>&nbsp;시</span>
                        <input type="text" name="s_dep_time1_m" id="s_dep_time1_m" value="<?= date('i',strtotime($row['s_dep_time1'])) ?>"><span>&nbsp;분 출발</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" id="s_dep_time2" name="s_dep_time2" value="<?= date('Y-m-d',strtotime($row['s_dep_time2'])) ?>">
                            <input type="text" name="s_dep_time2_h"   id="s_dep_time2_h" value="<?= date('H',strtotime($row['s_dep_time2'])) ?>"><span>&nbsp;시</span>
                            <input type="text" name="s_dep_time2_m" id="s_dep_time2_m" value="<?= date('i',strtotime($row['s_dep_time2'])) ?>"><span>&nbsp;분 도착</span>
                            <input type="text" name="s_dep_code" id="s_dep_code" class="airport" style="width: 100px;" value="<?= $row['s_dep_code'] ?>"><span>&nbsp;편</span>
                        </td>
                    </tr>
                    <tr>
                        <th rowspan="2"><label for="s_des_time1">복귀항공정보</label></th>
                        <td>
                            <input type="text" id="s_des_time1" name="s_des_time1" value="<?= date('Y-m-d',strtotime($row['s_des_time1'])) ?>">
                            <input type="text" name="s_des_time1_h" id="s_des_time1_h" value="<?= date('H',strtotime($row['s_des_time1'])) ?>"><span>&nbsp;시</span>
                            <input type="text" name="s_des_time1_m" id="s_des_time1_m" value="<?= date('i',strtotime($row['s_des_time1'])) ?>"><span>&nbsp;분 출발</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" id="s_des_time2" name="s_des_time2" value="<?= date('Y-m-d',strtotime($row['s_des_time2'])) ?>">
                            <input type="text" name="s_des_time2_h" id="s_des_time2_h" value="<?= date('H',strtotime($row['s_des_time2'])) ?>"><span>&nbsp;시</span>
                            <input type="text" name="s_des_time2_m" id="s_des_time2_m" value="<?= date('i',strtotime($row['s_des_time2'])) ?>"><span>&nbsp;분 도착</span>
                            <input type="text" name="s_des_code" id="s_des_code" class="airport" style="width: 100px;" value="<?= $row['s_des_code'] ?>"><span>&nbsp;편</span>
                        </td>
                    </tr>
                    <tr>
                        <th><label for="s_meeting">미팅장소</label></th>
                        <td><input type="text" name="s_meeting" id="s_meeting" value="<?=$row['s_meeting']?>"></td>
                    </tr>
                    <tr>
                        <th>금액</th>
                        <td>
                        <label for="s_price_adult">성인&nbsp;</label>
                        <input type="text" value="<?=$row['s_price_adult']?>" id="s_price_adult" name="s_price_adult">
                        <span>&nbsp;원</span><br>
                        <label for="s_price_child">아동&nbsp;</label>
                        <input type="text" value="<?=$row['s_price_child']?>"id="s_price_child" name="s_price_child">
                        <span>&nbsp;원</span><br>
                        <label for="s_price_baby">유아&nbsp;</label>
                        <input type="text" value="<?=$row['s_price_baby']?>" id="s_price_baby" name="s_price_baby">
                        <span>&nbsp;원</span>
                        </td>
                    </tr>
                </table>
                <div class="submit">
                    <input type="submit" value="일정 수정 하기" class="btn btn-primary">
                    <a href="javascript:history.back();" class="btn btn-danger" style="color:#fff !important;">취소</a>
                </div>
            </div>
        </form>
    </main>

    <?php include('footer2.php')?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function form_check() {
            if(document.getElementById('s_airline').value === '') {
                alert('항공사를 선택하세요.');
                document.getElementById('s_airline').focus();
                return false;
            }

            if(document.getElementById('s_dep_time1').value === '') {
                alert('출발일/시간을 선택하세요.');
                document.getElementById('s_dep_time1').focus();
                return false;
            }

            if(document.getElementById('s_dep_time2').value === '') {
                alert('여행지 도착일/시간을 선택하세요.');
                document.getElementById('s_dep_time2').focus();
                return false;
            }

            if(document.getElementById('s_des_time1').value === '') {
                alert('복귀일/시간을 선택하세요.');
                document.getElementById('s_des_time1').focus();
                return false;
            }

            if(document.getElementById('s_des_time2').value === '') {
                alert('복귀 도착일/시간을 선택하세요.');
                document.getElementById('s_des_time2').focus();
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
    </script>
</body>
</html>