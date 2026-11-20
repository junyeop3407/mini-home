<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>글쓰기 | MY SPACE</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="subpage">

<header class="sub-header">
    <a href="index.php" class="sub-logo">MY<span>SPACE.</span></a>

    <nav class="sub-nav">
        <a href="index.php">홈</a>
        <a href="board.php">게시판</a>
        <a href="write.php" class="active">글쓰기</a>
    </nav>
</header>

<main class="sub-main">

    <div class="sub-heading">
        <span>COMMUNITY / WRITE</span>
        <h1>새로운 이야기를 남겨보세요.</h1>
        <p>여러분의 생각과 일상을 자유롭게 기록할 수 있습니다.</p>
    </div>

    <section class="write-card">
        <h2>게시글 작성</h2>
        <p class="card-description">아래 내용을 입력하고 등록 버튼을 눌러주세요.</p>

        <form action="save.php" method="post" class="write-form">

            <div class="form-group">
                <label for="name">작성자</label>
                <input type="text" id="name" name="name" maxlength="50"
                       placeholder="작성자 이름을 입력하세요" required>
            </div>

            <div class="form-group">
                <label for="title">제목</label>
                <input type="text" id="title" name="title" maxlength="200"
                       placeholder="게시글 제목을 입력하세요" required>
            </div>

            <div class="form-group">
                <label for="content">내용</label>
                <textarea id="content" name="content" rows="10"
                          placeholder="여기에 내용을 자유롭게 작성하세요." required></textarea>
            </div>

            <div class="form-buttons">
                <a href="board.php" class="sub-button cancel-button">목록으로</a>
                <button type="submit" class="sub-button submit-button">게시글 등록 →</button>
            </div>

        </form>
    </section>

</main>

<footer class="sub-footer">
    <p>MY SPACE. | 나만의 이야기를 만들어 가는 공간</p>
</footer>

</body>
</html>
