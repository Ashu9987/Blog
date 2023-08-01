# Blog

## インストール

\*まずこのリポジトリのクローンを作成し、依存関係をインストールして、.env ファイルをセットアップします。

```
git clone https://github.com/Ashu9987/Blog.git blog
composer install
```
.env ファイルの名前を変更する

\*次に、必要なデータベースを作成します。

```
php artisan db
create database blog
```

\*Run the initial migrations and seeders.

```
php artisan key:generate
php artisan migrate --seed
```

## 使い方

```
php artisan serve
```

\*ユーザー登録とログイン
