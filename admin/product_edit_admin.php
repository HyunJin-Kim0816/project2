<?php
    include('../php/dbconn.php');

    $p_code = $_GET['p_code'];

    $sql = "SELECT * FROM project_product WHERE p_code = '$p_code'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>참좋은여행 관리자 - 여행상품수정</title>
    <!-- 파비콘, 기본서식 파일 -->
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/common.css" type="text/css">
    <link rel="stylesheet" href="./css/reset.css" type="text/css">
    <link rel="stylesheet" href="./css/edit_admin.css" type="text/css">
</head>
<body>
    <?php include('header2.php')?>

    <main>
        <form name="product_update" method="post" action="./php/product_update_admin.php" enctype="multipart/form-data" onsubmit="return form_check()">
            <legend>여행상품수정</legend>
            <p>
                <label for="p_code">상품코드</label>
                <input type="hidden" name="p_code" value="<?=$p_code?>">
                <input type="text" id="p_code" value="<?=$p_code?>" disabled>              
            </p>
            <p>
                <label for="p_title">상품제목</label>
                <input type="text" id="p_title" name="p_title" value="<?=$row['p_title']?>">
            </p>
            <p>
                <label for="p_dep">출발지</label>
                <input type="text" id="p_dep" name="p_dep" value="<?=$row['p_dep']?>">
            </p>
            <p>
                <label for="p_des">여행지</label>
                <input type="text" id="p_des" name="p_des" value="<?=$row['p_des']?>">
            </p>
            <div class="select">
                <p>
                    <label for="p_stay">숙박일</label>
                    <input type="text" name="p_stay" id="p_stay" value="<?=$row['p_stay']?>">&nbsp;박
                    <label for="p_minnum" style="margin-left:50px">최소인원</label>
                    <input type="text" name="p_minnum" id="p_minnum" value="<?=$row['p_minnum']?>">&nbsp;명
                    
                </p>
                <p>
                    <label for="p_term">여행기간</label>
                    <input type="text" name="p_term" id="p_term" value="<?=$row['p_term']?>">&nbsp;일
                </p>
            </div>
            <p class="textarea">
                <label for="p_subtitle">요약설명</label>
                <textarea name="p_subtitle" id="p_subtitle" cols="80" rows="10"><?=htmlspecialchars(str_replace('<br />', "", $row['p_subtitle']));?></textarea>
            </p>
            <p class="textarea">
                <label for="p_plan">여행여정</label>
                <textarea name="p_plan" id="p_plan" cols="80" rows="10"><?=htmlspecialchars(str_replace('<br />', "", $row['p_plan']));?></textarea>
            </p>
            <p class="textarea">
                <label for="p_in">포함사항</label>
                <textarea name="p_in" id="p_in" cols="80" rows="10"><?=htmlspecialchars(str_replace('<br />', "", $row['p_in']));?></textarea>
            </p>
            <p class="textarea">
                <label for="p_notin">불포함사항</label>
                <textarea name="p_notin" id="p_notin" cols="80" rows="10"><?=htmlspecialchars(str_replace('<br />', "", $row['p_notin']));?></textarea>
            </p>
            <p>
                <label for="p_slide">관광지 이미지</label>
                <input type="file" name="p_slide1" class="form-control"><br>
                <input type="file" name="p_slide2" class="form-control"><br>
                <input type="file" name="p_slide3" class="form-control"><br>
            </p>
            <p>
                <label for="p_image">상품 상세 이미지</label>
                <input type="file" id="p_image" name="p_image" class="form-control">
            </p>
            <p class="guide">
                <label for="p_expense">가이드 경비</label>
                <input type="text" id="p_expense" name="p_expense" value="<?=$row['p_expense']?>">
            </p>
            <div>
                <input type="submit" value="상품 수정하기" class="btn btn-primary">
                <a href="product_detail_admin.php?p_code=<?=$p_code?>" class="btn btn-danger">취소</a>
            </div>
        </form>
    </main>

    <?php include('footer2.php')?>

    <script>
        function form_check() {
            if(!document.getElementById('p_title').value) {
                alert('상품의 이름을 입력하세요.');
                document.getElementById('p_title').focus();
                return false;
            }

            if(document.getElementById('p_term').value === '') {
                alert('상품의 여행기간을 선택하세요.');
                document.getElementById('p_term').focus();
                return false;
            }

            if(document.getElementById('p_minnum').value === '') {
                alert('상품의 최소인원을 선택하세요.');
                document.getElementById('p_minnum').focus();
                return false;
            }

            if(!document.getElementById('p_subtitle').value) {
                alert('상품의 요약설명을 입력하세요.');
                document.getElementById('p_subtitle').focus();
                return false;
            }

            if(!document.getElementById('p_plan').value) {
                alert('상품의 여행일정을 입력하세요.');
                document.getElementById('p_plan').focus();
                return false;
            }

            if(!document.getElementById('p_in').value) {
                alert('상품의 포함사항을 입력하세요.');
                document.getElementById('p_in').focus();
                return false;
            }

            if(!document.getElementById('p_notin').value) {
                alert('상품의 불포함사항을 입력하세요.');
                document.getElementById('p_notin').focus();
                return false;
            }
            if(document.getElementById('s_expense').value === '') {
                alert('상품의 가이드경비를 입력하세요.');
                document.getElementById('s_expense').focus();
                return false;
            }
        }
    </script>
</body>
</html>