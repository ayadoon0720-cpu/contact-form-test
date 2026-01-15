# アプリケーション名
お問い合わせフォーム
## 環境構築
ー　Dockerビルド
⑴git clone https://github.com/ayadoon0720-cpu/contact-form-test.git
⑵docker-compose up -d -build
ー　Laravel環境構築
⑴docker-compose exec php bash
⑵composer install
⑶.env.exampleファイルから.envを作成し、環境変数を変更
⑷php artisan key:generate
⑸php artisan migrate
⑹php artisan db:seed
## 使用技術
・PHP8.0
・Laravel10.0
・MySQL8.0
## ER図

## URL
・開発環境：http://localhost/
・phpMyadmin：http://localhost:8080/
