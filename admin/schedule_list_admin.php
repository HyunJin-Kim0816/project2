<?php
    include('../php/dbconn.php');
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>참좋은여행 관리자 - 여행일정목록</title>
    <!-- 파비콘, 기본서식 파일 -->
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/common.css" type="text/css">
    <link rel="stylesheet" href="./css/reset.css" type="text/css">
    <link rel="stylesheet" href="./css/list_admin.css" type="text/css">
    <style>
        .manage_table table td {text-indent:0px;}
    </style>
</head>
<body>
    <?php include('header2.php')?>

    <main>
        <div class="manage_table">
            <h4>여행일정목록</h4>
            <div>
                <a href="./php/product_delete_all.php" title="상품 목록 전체 삭제" class="delete_all">전체삭제</a>
                <a href="schedule_add_admin.php" title="여행일정 등록하기">등록하기</a>
            </div>
            <table style="text-align: center;">
                <thead>
                    <tr>
                        <th style="width: 12%;">여행코드</th>
                        <th style="width: 12%;">출발일</th>
                        <th style="width: 30%">상품제목</th>
                        <th style="width: 15%">여행일정</th>
                        <th style="width: 15%;">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT count(s_code) FROM project_schedule";
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

                        $sql = "SELECT project_schedule.*, project_product.* FROM project_schedule INNER JOIN project_product ON project_schedule.p_code = project_product.p_code ORDER BY s_dep_time1 ASC LIMIT $start, $list_num";
                        $result = mysqli_query($conn, $sql);
                    ?>
                    <?php 
                        while($row = mysqli_fetch_assoc($result)){
                            echo '<tr>';
                            echo '<td style="color:var(--m_color2); font-weight:bold;">' . $row['p_code'] . '</td>';
                            echo '<td>' . date('Y-m-d H:i',strtotime($row['s_dep_time1'])) . '</td>';
                            echo '<td><a href="product_detail_admin.php?p_code='.$row['p_code'].'">' . $row['p_title'] . '</a></td>';
                            echo '<td>' . date('Y-m-d',strtotime($row['s_dep_time1'])) . ' ~ ' . date('Y-m-d',strtotime($row['s_des_time2'])) . '</td>';
                            echo "<td><a href='schedule_edit_admin.php?s_code=".$row['s_code']."' title='수정하기' class='btn btn-primary' style='color: #fff !important; padding:5px 20px 5px 18px'>수정</a><a href='./php/schedule_delete_admin.php?s_code=".$row['s_code']."' title='내용 삭제하기' class='btn btn-secondary' style='color: #fff !important; padding:5px 20px 5px 18px' onclick='return del_check();'>삭제</a></td>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
        
        <div class="page_num m-3">
            <p class="pagination justify-content-center">
            <?php
                if($page <= 1){
            ?>
                <span class="page-link disabled">&laquo;</span>
            <?php } else { ?>
                <a class="page-link" href="schedule_list_admin.php?page=<?php echo ($page - 1);?>" title='이전페이지로 이동'>&laquo;</a>
            <?php } ?>

            <?php
                for($print_page=$s_pageNum;$print_page <= $e_pageNum;$print_page++){
                if($print_page!=$page){ ?>
                <a class="page-link" href="schedule_list_admin.php?page=<?php echo $print_page;?>">
                <?= $print_page ?></a>
            <?php
                } else {echo "<span class='page-link disabled'>".$print_page."</span>";}
            }
            ?>

            <?php
                if($page < $total_page){
            ?>
                <a class="page-link" href="list.php?page=<?php if($search_check === 0) echo ($page + 1);
                    else echo ($page + 1)."&keyword=".$keyword."&type=".$type;
                ?>" title='다음페이지로 이동'>&raquo;</a>
            <?php } else { ?>
                <span class="page-link disabled">&raquo;</span>
            <?php } ?>
            </p>
        </div>
    </main>
    <script>
        function del_check(){
            return confirm("삭제하시겠습니까?");
        }
    </script>

    <?php include('footer2.php')?>
</body>
</html>