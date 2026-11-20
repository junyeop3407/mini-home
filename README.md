# MY SPACE — 미니 홈페이지

VirtualBox Ubuntu 24.04 환경에서 만든 **PHP + MySQL 게시판 미니 홈페이지**입니다.
Docker Compose로 웹서버(PHP 8.2 + Apache)와 DB(MySQL 8.0)를 함께 실행합니다.

## 주요 페이지

| 페이지 | 파일 | 설명 |
|---|---|---|
| 메인 홈페이지 | `app/index.php` | 소개, 관심사, 오늘의 한마디, 게시판 바로가기 |
| 게시판 | `app/board.php` | 게시글 목록 (최신 글 순) |
| 글쓰기 | `app/write.php` | 작성자·제목·내용 입력 후 등록 |

그 외 파일: `db.php`(DB 연결·테이블 자동 생성), `save.php`(글 저장), `view.php`(상세 보기), `style.css`(네이비→블루 그라데이션 디자인)

## 기술 스택

HTML · CSS · PHP 8.2 · MySQL 8.0 · Apache · Docker · Docker Compose

## 폴더 구조

```
mini-home/
├── app/
│   ├── index.php
│   ├── board.php
│   ├── write.php
│   ├── save.php
│   ├── view.php
│   ├── db.php
│   └── style.css
├── Dockerfile
├── compose.yaml
└── .env.example
```

## 실행 방법

```bash
git clone https://github.com/junyeop3407/mini-home.git
cd mini-home
cp .env.example .env        # 비밀번호 수정
sudo docker compose up -d --build
```

- 메인 홈페이지: http://localhost:8081
- 게시판: http://localhost:8081/board.php
- 글쓰기: http://localhost:8081/write.php

## 참고

- 실습용 프로젝트라 로그인, 권한 관리, CSRF 방어 기능은 없습니다.
- 8080 포트 충돌로 웹 포트를 8081로 사용합니다.
