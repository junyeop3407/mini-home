<?php
$messages = [
    "오늘도 새로운 가능성을 만들어 봅니다.",
    "작은 노력이 모여 멋진 결과가 됩니다.",
    "나만의 속도로 천천히 성장하는 중입니다.",
    "평범한 하루도 기록하면 특별해집니다."
];

$message = $messages[date("z") % count($messages)];
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY SPACE | 나만의 홈페이지</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<header class="header">
    <a href="index.php" class="logo">MY<span>SPACE.</span></a>

    <nav class="navigation">
        <a href="index.php">HOME</a>
        <a href="#about">ABOUT</a>
        <a href="#favorites">FAVORITES</a>
        <a href="board.php">BOARD</a>
    </nav>
</header>

<main>

    <section class="hero">
        <div class="hero-content">
            <span class="hero-label">WELCOME TO MY SPACE</span>

            <h1>
                나만의 이야기가<br>
                시작되는 공간
            </h1>

            <p>
                일상과 관심사, 그리고 새로운 도전까지.<br>
                나만의 특별한 순간들을 기록합니다.
            </p>

            <div class="hero-buttons">
                <a href="#about" class="btn-primary">나를 소개합니다 →</a>
                <a href="board.php" class="btn-outline">게시판 구경하기</a>
            </div>
        </div>

        <div class="hero-decoration">
            <div class="decoration-circle">✦</div>
            <div class="decoration-text">MY LITTLE<br>UNIVERSE</div>
        </div>
    </section>

    <section class="content-section" id="about">

        <div class="section-heading">
            <span>01 / ABOUT ME</span>
            <h2>나를 소개합니다.</h2>
            <p>이곳은 나의 생각과 취향을 담아가는 작은 공간입니다.</p>
        </div>

        <div class="about-card">
            <div class="profile-symbol">👋</div>

            <div class="about-text">
                <span class="small-label">NICE TO MEET YOU</span>
                <h3>안녕하세요!</h3>

                <p>
                    새로운 것을 배우고 경험하는 것을 좋아합니다.
                    이 홈페이지를 통해 일상과 관심사를 기록하고,
                    나만의 공간을 하나씩 만들어 가고 있습니다.
                </p>

                <div class="tag-list">
                    <span>#나만의공간</span>
                    <span>#일상기록</span>
                    <span>#새로운도전</span>
                    <span>#성장하는중</span>
                </div>
            </div>
        </div>

    </section>

    <section class="content-section" id="favorites">

        <div class="section-heading">
            <span>02 / MY INTERESTS</span>
            <h2>내가 좋아하는 것들.</h2>
            <p>나를 즐겁게 만드는 다양한 관심사입니다.</p>
        </div>

        <div class="favorite-grid">

            <article class="favorite-card">
                <div class="favorite-icon">💻</div>
                <span>01</span>
                <h3>IT &amp; DEVELOPMENT</h3>
                <p>새로운 기술을 배우고 직접 만들어 보는 즐거움.</p>
            </article>

            <article class="favorite-card">
                <div class="favorite-icon">📷</div>
                <span>02</span>
                <h3>PHOTO &amp; DAILY</h3>
                <p>소중한 순간들을 사진과 글로 기록하기.</p>
            </article>

            <article class="favorite-card">
                <div class="favorite-icon">🌱</div>
                <span>03</span>
                <h3>SELF DEVELOPMENT</h3>
                <p>어제보다 조금 더 성장하기 위한 노력.</p>
            </article>

        </div>

    </section>

    <section class="today-section">
        <span>TODAY'S MESSAGE</span>
        <h2><?= htmlspecialchars($message, ENT_QUOTES, 'UTF-8') ?></h2>
        <p><?= date("Y년 m월 d일") ?></p>
    </section>

    <section class="board-section">

        <div>
            <span class="small-label">03 / COMMUNITY</span>
            <h2>나의 이야기를 기록해 보세요.</h2>
            <p>생각과 일상을 자유롭게 남길 수 있는 게시판입니다.</p>
        </div>

        <a href="board.php" class="btn-primary">게시판 바로가기 →</a>

    </section>

</main>

<footer class="footer">
    <a href="index.php" class="logo">MY<span>SPACE.</span></a>
    <p>나만의 이야기를 만들어 가는 공간</p>
    <small>© <?= date("Y") ?> MY SPACE. ALL RIGHTS RESERVED.</small>
</footer>

</body>
</html>
