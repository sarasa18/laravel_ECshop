
## udemy Laravel講座

## ダウンロード方法
git clone
git clone https://github.com/sarasa18/laravel_ECshop.git

ブランチを指定してダウンロードする場合
git clone -b ブランチ名 https://github.com/sarasa18/laravel_ECshop.git

もしくはzipファイルでダウンロードしてください。

## インストール方法

cd laravel_ECshop
composer install
npm install
npm run dev

.env.example をコピーして .env ファイルを作成

.envファイルの中の下記をご利用の環境に合わせて変更してください。

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_ECshop
DB_USERNAME=sail
DB_PASSWORD=password

XAMPP/MAMPまたは他の開発環境でDBを起動した後に

php artisan migrate:fresh --seed

と実行してください。(データベーステーブルとダミーデータが追加されればOK)

最後に
Php artisan key:generate
と入力してキーを生成後、

Php artisan serve
で簡易サーバーを立ち上げ、表示確認してください。
Dockerの場合はurl
http://localhost/
で最初のページにアクセスできます。


## インストール後の実施事項

画像のダミーデータは
public/imagesフォルダ内に
sample1.jpg ~ sample6.jpg として保存しています。

php artisan storage:link でstorageフォルダにリンク後、
storage/app/public/productsフォルダ内に保存すると表示されます。
（productsフォルダがない場合は作成してください。）

ショップの画像も表示する場合は、
storage/app/public/shopsフォルダを作成し,その中に保存すると表示されます。

画像コピー後

php artisan migrate:fresh --seed
と実施してください。

## section7の補足

決済のテストとしてstripeを利用しています。
必要な場合は .env にstripeの情報を追記してください。
(講座内で解説しています)

## section8の補足

メールのテストとしてmailtrapを利用しています。
必要な場合は .env にmailtrapの情報を追記してください。
(講座内で解説しています)

メール処理には時間がかかるので、
キューを使用しています。

必要な場合は php artisan queue:workで
ワーカーを立ち上げて動作確認するようにしてください。
(講座内で解説しています)