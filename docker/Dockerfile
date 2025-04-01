# PHP + Apache の公式イメージを使用
FROM php:8.2-apache

# 必要な PHP 拡張をインストール（例: mysqli, pdo_mysql）
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Apache の mod_rewrite を有効化（必要なら）
RUN a2enmod rewrite

# Apache の設定ファイルをカスタマイズ（オプション）
COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

# ドキュメントルートを変更（オプション）
WORKDIR /var/www/html

# コンテナ起動時に Apache をフォアグラウンドで実行
CMD ["apache2-foreground"]
