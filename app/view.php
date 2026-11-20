<?php
require_once "db.php";

// 게시글 번호 받기
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if (!$id || $id < 1) {
    http_response_code(400);
    exit("잘못된 게시글 번호입니다.");
}

// 해당 게시글 조회
$sql = "SELECT * FROM posts WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute([':id' => $id]);

$post = $stmt->fetch();

if (!$post) {
    http_response_code(404);
    exit("게시글이 존재하지 않습니다.");
}
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>게시글 보기</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>나의 미니 홈페이지</h1>
</header>

<nav>
    <a href="index.php">홈</a>
    <a href="board.php">게시판</a>
    <a href="write.php">글쓰기</a>
</nav>

<main>
    <h2><?= htmlspecialchars($post['title'], ENT_QUOTES, 'UTF-8') ?></h2>

    <p>작성자: <?= htmlspecialchars($post['name'], ENT_QUOTES, 'UTF-8') ?></p>

    <p>작성일: <?= htmlspecialchars($post['created_at'], ENT_QUOTES, 'UTF-8') ?></p>

    <hr>

    <p style="white-space: pre-wrap; overflow-wrap: anywhere;"><?= htmlspecialchars($post['content'], ENT_QUOTES, 'UTF-8') ?></p>

    <a class="btn" href="board.php">목록으로</a>
</main>
</body>
</html>
