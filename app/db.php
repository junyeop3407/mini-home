<?php
// Docker Compose에서 전달한 DB 접속 정보
$host   = getenv('DB_HOST') ?: 'db';
$dbname = getenv('DB_NAME') ?: 'mini_db';
$user   = getenv('DB_USER') ?: 'miniuser';
$pass   = getenv('DB_PASSWORD');

try {
    // MySQL 데이터베이스 연결
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $user,
        $pass,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );

    // 최초 실행 시 게시판 테이블 자동 생성
    $sql = "CREATE TABLE IF NOT EXISTS posts (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50) NOT NULL,
        title VARCHAR(200) NOT NULL,
        content TEXT NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    ) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci";

    $pdo->exec($sql);

} catch (PDOException $e) {
    error_log($e->getMessage());
    http_response_code(500);
    exit("데이터베이스 연결 오류가 발생했습니다.");
}
?>
