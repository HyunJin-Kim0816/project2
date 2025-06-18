<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>참좋은여행 - 자주 묻는 질문 수정</title>
    <!-- 파비콘, 기본서식 파일 -->
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/common.css" type="text/css">
    <link rel="stylesheet" href="./css/reset.css" type="text/css">
    <link rel="stylesheet" href="./css/qna_admin.css" type="text/css">
</head>
<body>
    <?php include('header2.php')?>

    <main>
        <form name="qna_edit" method="post" action="qna_update_admin.php">
            <legend>자주 묻는 질문 수정</legend>
            <p style="height: 100px; border-bottom: 1px solid var(--s_color_bk);">
                <label for="question">질문</label>
                <input type="text" id="question" name="question" value="<?= $row['question'] ?>">
            </p>
            <p style="border-bottom: 2px solid var(--s_color_bk);">
                <label for="answer">답변</label>
                <textarea name="answer" id="answer" style="margin:40px 0;" cols="80" rows="10" <?= nl2br(htmlspecialchars($row['answer'])) ?>></textarea>
            </p>
            <div>
                <button type="button" value="목록으로"><a href="qna.admin.php">목록으로</a></button>
                <input type="submit" value="수정하기">
            </div>
        </form>
    </main>

    <?php include('footer2.php')?>
</body>
</html>