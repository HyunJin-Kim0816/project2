<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>참좋은여행 관리자 - 자주 묻는 질문</title>
    <!-- 파비콘, 기본서식 파일 -->
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/common.css" type="text/css">
    <link rel="stylesheet" href="./css/reset.css" type="text/css">
    <link rel="stylesheet" href="./css/list_admin.css" type="text/css">
</head>
<body>
    <?php include('header2.php')?>

    <main>
        <div class="manage_table">
            <h4>자주 묻는 질문</h4>
            <div>
                <a href="product_delete_all.php" title="상품 목록 전체 삭제" class="delete_all">전체삭제</a>
                <a href="roduct_add_admin.php" title="여행지 등록하기">등록하기</a>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>질문</th>
                        <th>작성일</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        /*$sql = "SELECT count(id) FROM board";
                        $result = mysqli_query($conn, $sql);
                        $count = mysqli_fetch_array($result);

                        $total_count = $count[0];
                        $list_per_page = 10;
                        $page_limit = 5;
                        $list_num = 10;
                        $page_num = 3;

                        //현재 페이지 번호 설정(GET방식으로 받아옴)
                        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

                        //전체 페이지 갯수 계산
                        //$total_page = floor($total_count/$list_per_page);
                        $total_page = ceil($total_count/$list_per_page);

                        //전체 블럭계산
                        $total_block = ceil($total_page/$page_num);

                        //현재 블럭계산
                        $now_block = ceil($page/$page_num);

                        //블럭당 시작페이지 번호
                        $s_pageNum = ($now_block-1) * $page_num + 1;

                        //데이터가 0인 경우
                        if($s_pageNum <=0) {$s_pageNum = 1;}

                        //블럭당 마지막 페이지 번호
                        $e_pageNum = $now_block * $page_num;

                        //마지막 번호가 전체 페이지 번호보다 크면 동일한 값으로 설정한다
                        if($e_pageNum > $total_page) {$e_pageNum = $total_page;}

                        $start = ($page -1) * $list_num;
                        $cnt = $start+1;

                        $sql = "SELECT * FROM board ORDER BY id dESC LIMIT $start, $list_num";
                        $result = mysqli_query($conn, $sql);*/
                    ?>
                    <tr>
                        <td>Q1</td>
                        <td>예약 후 언제까지 결제를 해야 하나요?</td>
                        <td>2025.04.07</td>
                        <td><a href="qna_edit.php" title="질문/답변 수정하기" class="edit">수정</a>&nbsp;&nbsp;<a href="delete.php" title="삭제" class="delete">삭제</a></td>
                    </tr>
                    <tr>
                        <td>Q2</td>
                        <td>호텔 투숙일 이후 취소나 변경 규정은 어떻게 되나요?</td>
                        <td>2025.04.05</td>
                        <td><a href="qna_edit.php" title="질문/답변 수정하기" class="edit">수정</a>&nbsp;&nbsp;<a href="delete.php" title="삭제" class="delete">삭제</a></td>
                    </tr>
                    <?php 
                        /*while($row = mysqli_fetch_assoc($result)){
                            echo '<tr>';
                            echo '<td>' . $row['p_des'] . '</td>';
                            echo '<td>' . $row['p_code'] . '</td>';
                            echo '<td>' . $row['p_title'] . '</td>';
                            echo '<td>' . $row['s_dep_time1p_'] . '~' . $row['s_des_time2] . '</td>';
                            echo '<div><a href="product_edit_admin.php" title="수정하기">수정</a><a>remove.php?id=<?php echo $row['id']?>" id="<?php echo $row['id'] ?>" title="내용 삭제하기">삭제</a>
                        }*/
                    ?>
                </tbody>
            </table>
        </div>
    </main>

    <?php include('footer2.php')?>
</body>
</html>