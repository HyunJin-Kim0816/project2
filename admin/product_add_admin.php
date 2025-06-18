<?php
    include('../php/dbconn.php');
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>참좋은여행 관리자 - 여행상품등록</title>
    <!-- 파비콘, 기본서식 파일 -->
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/common.css" type="text/css">
    <link rel="stylesheet" href="./css/reset.css" type="text/css">
    <link rel="stylesheet" href="./css/add_admin.css" type="text/css">
</head>
<body>
    <?php include('header2.php')?>

    <main>
        <form name="product_update" method="post" action="./php/product_insert_admin.php" enctype="multipart/form-data" onsubmit="return form_check()">
            <legend>여행상품등록</legend>
            <p>
                <label for="p_code">상품코드</label>
                <input type="text" id="p_code" name="p_code" placeholder="여행코드를 입력 후 중복 확인을 해주세요">
                <span id="code_check_btn" data-check="0" class="btn_codecheck">중복확인</span><br><span id="code_check"></span>
            </p>
            <p>
                <label for="p_title">상품제목</label>
                <input type="text" id="p_title" name="p_title" placeholder="상품의 이름을 입력하세요">
            </p>
            <p>
                <label for="p_dep">출발지</label>
                <input type="text" id="p_dep" name="p_dep" placeholder="출발지를 입력하세요">
            </p>
            <p>
                <label for="p_des">여행지</label>
                <input type="text" id="p_des" name="p_des" placeholder="여행지를 입력하세요">
            </p>
            <div class="select">
                <p>
                    <label for="p_stay">숙박일</label>
                    <input type="text" name="p_stay" id="p_stay">&nbsp;박
                    <label for="p_minnum" style="margin-left:50px">최소인원</label>
                    <input type="text" name="p_minnum" id="p_minnum">&nbsp;명
                </p>
                <p>
                    <label for="p_term">여행기간</label>
                    <input type="text" name="p_term" id="p_term">&nbsp;일
                </p>
            </div>
            <p class="textarea">
                <label for="p_subtitle">요약설명</label>
                <textarea name="p_subtitle" id="p_subtitle" cols="80" rows="10" placeholder="상품에 대해 간략하게 입력하세요"></textarea>
            </p>
            <p class="textarea">
                <label for="p_plan">여행여정</label>
                <textarea name="p_plan" id="p_plan" cols="80" rows="10" placeholder="전반적인 상품의 일정을 입력하세요 (출발일, 출발 위치, 미팅 장소, 출발 시간, 도착일, 도착 위치, 도착 시간, 등)"></textarea>
            </p>
            <p class="textarea">
                <label for="p_in">포함사항</label>
                <textarea name="p_in" id="p_in" cols="80" rows="10" placeholder="상품에 포함인 사항들을 입력하세요"></textarea>
            </p>
            <p class="textarea">
                <label for="p_notin">불포함사항</label>
                <textarea name="p_notin" id="p_notin" cols="80" rows="10" placeholder="상품에 비포함인 사항들을 입력하세요"></textarea>
            </p>
            <p>
                <label for="p_slide">관광지 이미지</label>
                <input type="file" name="p_slide1" class="form-control"><br>
                <input type="file" name="p_slide2" class="form-control"><br>
                <input type="file" name="p_slide3" class="form-control"><br>
            </p>
            <p>
                <label for="p_image">상품 상세 이미지</label>
                <input type="file" id="p_image" name="p_image" placeholder="여기를 눌러 상품 상세 이미지를 삽입하세요" class="form-control">
            </p>
            <p class="guide">
                <span>가이드 경비</span>
                <input type="radio" id="y_expense" name="s_expense" value="Y">
                <label for="y_expense">포함</label>
                <input type="radio" id="n_expense" name="s_expense" value="N">
                <label for="n_expense">미포함</label>

                <input type="text" id="p_expense" name="p_expense" placeholder="경비 가격을 입력하세요." disabled>
            </p>
            <input type="submit" value="상품 등록하기" class="add">
        </form>
    </main>

    <?php include('footer2.php')?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function form_check() {
            if(!document.getElementById('p_code').value) {
                alert('상품코드를 입력한 후 중복확인을 해주세요.');
                document.getElementById('p_code').focus();
                return false;
            }

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

            if(document.getElementById('p_slide').value === '') {
                alert('상품의 관광지 이미지를 삽입하세요.');
                document.getElementById('p_slide').focus();
                return false;
            }
            
            if(document.getElementById('p_image').value === '') {
                alert('상품의 상세 이미지를 삽입하세요.');
                document.getElementById('p_image').focus();
                return false;
            }

            if(document.getElementById('s_expense').value === '') {
                alert('상품의 상세 이미지를 삽입하세요.');
                document.getElementById('s_expense').focus();
                return false;
            }
        }

        $(document).ready(function(){

            $(function () {
                function toggleExpenseInput() {
                    if ($('#y_expense').is(':checked')) {
                        $('#p_expense').prop('disabled', false);
                    } else if ($('#n_expense').is(':checked')) {
                        $('#p_expense').prop('disabled', true).val('');
                    }
                }

                // 페이지 로드 시 초기 상태 설정
                toggleExpenseInput();

                // 라디오 버튼에 이벤트 바인딩
                $('input[name="s_expense"]').on('change', toggleExpenseInput);
            });

            $('#code_check_btn').click(function(){
                let inputCode = $('#p_code').val().trim();

                if(inputCode == ""){
                    $('#code_check').text('코드를 입력해주세요.').css('color', 'red');
                    return;
                }

                $.ajax({
                    url: './php/code_check.php',
                    type: 'POST',
                    data: {p_code: inputCode},
                    success: function(response){
                    response = response.trim();
                    if(response == 'ok'){
                        $('#code_check').text('사용 가능한 코드입니다.').css('color', 'var(--m_color)');
                    } else {
                        $('#code_check').text('이미 사용중인 코드입니다.').css('color', 'red');
                    }
                    },
                    error:function(){
                        alert('서버요청 실패, 다시 시도하세요.');
                    }
                });
            });
        });

    </script>
</body>
</html>