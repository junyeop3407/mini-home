# 1. PHP + Apache 기본 이미지
FROM php:8.2-apache

# 2. PHP 확장 기능 설치
RUN apt-get update \
    && apt-get install -y --no-install-recommends libonig-dev \
    && docker-php-ext-install pdo_mysql mbstring \
    && rm -rf /var/lib/apt/lists/*

# 3. 홈페이지 코드를 웹서버 폴더로 복사
COPY app/ /var/www/html/

# 4. 웹서버 포트
EXPOSE 80
