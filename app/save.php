<?php
require_once "db.php";

// POST 요청만 처리
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit("잘못된 요청입니다.");
}

// 입력 데이터 받기
$name    = trim($_POST['name'] ?? '');
$title   = trim($_POST['title'] ?? '');
$content = trim($_POST['content'] ?? '');

// 필수 입력값 확인
if ($name === '' || $title === '' || $content === '') {
    exit("모든 내용을 입력해 주세요.");
}

if (mb_strlen($name, 'UTF-8') > 50 || mb_strlen($title, 'UTF-8') > 200) {
    exit("입력 가능한 글자 수를 초과했습니다.");
}

// MySQL 데이터 저장
$sql = "INSERT INTO posts (name, title, content)
        VALUES (:name, :title, :content)";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    ':name'    => $name,
    ':title'   => $title,
    ':content' => $content
]);

// 저장 후 게시판으로 이동
header("Location: board.php", true, 303);
exit;
?>
