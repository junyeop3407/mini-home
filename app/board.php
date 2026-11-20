<?php
require_once "db.php";

// 최신 게시글부터 조회
$sql = "SELECT id, name, title, created_at
        FROM posts
        ORDER BY id DESC";

$stmt = $pdo->query($sql);
$posts = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판 | MY SPACE</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="subpage">

<header class="sub-header">
    <a href="index.php" class="sub-logo">MY<span>SPACE.</span></a>

    <nav class="sub-nav">
        <a href="index.php">홈</a>
        <a href="board.php" class="active">게시판</a>
        <a href="write.php">글쓰기</a>
    </nav>
</header>

<main class="sub-main">

    <div class="sub-heading">
        <span>COMMUNITY / BOARD</span>
        <h1>자유 게시판</h1>
        <p>생각과 일상을 자유롭게 나누는 공간입니다.</p>
    </div>

    <section class="board-card">

        <div class="board-top">
            <div>
                <h2>전체 게시글</h2>
                <p>총 <?= count($posts) ?>개의 게시글이 있습니다.</p>
            </div>

            <a href="write.php" class="sub-button submit-button">
                글쓰기 +
            </a>
        </div>

        <div class="table-wrap">
            <table class="board-table">
                <thead>
                    <tr>
                        <th class="number-column">번호</th>
                        <th>제목</th>
                        <th class="writer-column">작성자</th>
                        <th class="date-column">작성일</th>
                    </tr>
                </thead>

                <tbody>
                <?php if (!empty($posts)): ?>

                    <?php foreach ($posts as $post): ?>
                    <tr>
                        <td class="number-column">
                            <?= (int)$post['id'] ?>
                        </td>

                        <td class="title-column">
                            <a href="view.php?id=<?= (int)$post['id'] ?>">
                                <?= htmlspecialchars($post['title'], ENT_QUOTES, 'UTF-8') ?>
                            </a>
                        </td>

                        <td class="writer-column">
                            <?= htmlspecialchars($post['name'], ENT_QUOTES, 'UTF-8') ?>
                        </td>

                        <td class="date-column">
                            <?= htmlspecialchars($post['created_at'], ENT_QUOTES, 'UTF-8') ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>

                <?php else: ?>

                    <tr>
                        <td colspan="4" class="empty-message">
                            아직 등록된 게시글이 없습니다.<br>
                            첫 번째 게시글을 작성해 보세요!
                        </td>
                    </tr>

                <?php endif; ?>
                </tbody>
            </table>
        </div>

    </section>

</main>

<footer class="sub-footer">
    <p>MY SPACE. | 나만의 이야기를 만들어 가는 공간</p>
</footer>

</body>
</html>
