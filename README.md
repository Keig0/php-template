# php-template

PHP 8.4 + Apache + MySQL 8.4 + phpMyAdmin の開発環境テンプレートです。

## はじめに

### 1. テンプレートからリポジトリを作成
1. GitHub でこのリポジトリのページを開きます。
2. 右上の緑色の **「Use this template」** ボタンをクリックし、**「Create a new repository」** を選びます。
3. 次の項目を設定します。
   - **Owner**: 自分のアカウント
   - **Repository name**: 好きなリポジトリ名（例: `my-php-app`）
   - **Public / Private**: 公開範囲を選択
4. **「Create repository」** をクリックすると、自分のアカウントに新しいリポジトリが作成されます。

### 2. GitHub Desktop でクローン
1. 作成したリポジトリのページで、緑色の **「Code」** ボタンをクリックします。
2. **「Open with GitHub Desktop」** を選びます。
3. GitHub Desktop が起動したら、**Local Path**（保存先のフォルダ）を確認して **「Clone」** をクリックします。

### 3. VS Code で開く
GitHub Desktop の **「Open in Visual Studio Code」** ボタン（またはメニューの **Repository → Open in Visual Studio Code**）をクリックすると、クローンしたフォルダが VS Code で開きます。

このあとは、下の「使い方」に進んでください。

## 使い方

### 1. 環境変数の設定
プロジェクトのルートで `.env.example` をコピーして `.env` を作成します。

作成した`.env`ファイルを開き、データベースのrootパスワードを設定してください。

```
MYSQL_ROOT_PASSWORD="好きなパスワード"
```

### 2. コンテナの起動
VSCodeで本ディレクトリを開くと右下に「コンテナーで再度開く」というポップアップが出てくるためそれをクリックします。

出てこない場合はVSCode左下の「><」マークを押して「コンテナーで再度開く」を押してください。


## アクセス方法

### Webアプリ
- **URL**: http://localhost:8080

### PHPMyAdmin
- Webブラウザからデータベースを操作するためのツールです。
- **URL**: http://localhost:8081
- ログイン情報:
  - **サーバー**: `db`
  - **ユーザー名**: `root`
  - **パスワード**: `.env`で設定したパスワード
