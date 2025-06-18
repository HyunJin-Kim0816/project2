<?php
  include('../php/dbconn.php');
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>참좋은여행 관리자 - 여행상품관리</title>
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
            <h4>여행상품관리</h4>
            <div>
                <a href="./php/product_delete_all.php" title="상품 목록 전체 삭제" class="delete_all">전체삭제</a>
                <a href="./product_add_admin.php" title="여행지 등록하기">등록하기</a>
            </div>
            <table>
                <thead>
                    <tr>
                        <th style="width: 12%;">나라/지역</th>
                        <th style="width: 12%;">여행코드</th>
                        <th style="width: 30%">상품제목</th>
                        <th style="width: 15%">여행일정</th>
                        <th style="width: 15%;">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT count(p_code) FROM project_product";
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

                        $sql = "SELECT * FROM project_product ORDER BY p_code DESC LIMIT $start, $list_num";
                        $result = mysqli_query($conn, $sql);
                    ?>
                    <?php 
                        while($row = mysqli_fetch_assoc($result)){
                            echo '<tr>';
                            echo '<td>' . $row['p_des'] . '</td>';
                            echo '<td>' . $row['p_code'] . '</td>';
                            echo '<td><a href="product_detail_admin.php?p_code='.$row['p_code'].'">' . $row['p_title'] . '</a></td>';
                            echo '<td>' . $row['p_stay'] . '박 ' . $row['p_term'] . '일</td>';
                            echo "<td><a href='product_edit_admin.php?p_code=".$row['p_code']."' class='btn btn-primary' style='color: #fff !important;' title='수정하기'>수정</a><a href='product_remove_admin.php?p_code=".$row['p_code']."' class='btn btn-secondary' style='color: #fff !important;' title='내용 삭제하기'>삭제</a></td>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </main>

    <?php include('footer2.php')?>
</body>
</html>