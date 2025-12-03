# クイックデプロイガイド

## 提供された情報
- **FTPサーバー**: www1080.conoha.ne.jp
- **ユーザー名**: takeru7736@suzukireinetsu.com
- **パスワード**: h3QRh72h@@8yTR5

## GitHub Secretsを設定してください

1. https://github.com/finger0822-cmd/businesspress-child/settings/secrets/actions にアクセス

2. 以下の4つのSecretを追加：

| Name | Value |
|------|-------|
| `FTP_SERVER` | `www1080.conoha.ne.jp` |
| `FTP_USERNAME` | `takeru7736@suzukireinetsu.com` |
| `FTP_PASSWORD` | `h3QRh72h@@8yTR5` |
| `FTP_REMOTE_DIR` | `/wp-content/themes/businesspress-child/` |

**注意**: `FTP_REMOTE_DIR` のパスは実際のサーバー構成によって異なる可能性があります。
以下が一般的なパターンです：
- `/wp-content/themes/businesspress-child/` ← まずこれを試してください
- `/public_html/wp-content/themes/businesspress-child/`
- `/home/takeru7736/www/wp-content/themes/businesspress-child/`

## Secrets設定後のデプロイ実行

Secretsを設定したら、以下のいずれかの方法でデプロイを実行できます：

### 方法1: 手動でワークフローを実行
1. GitHubリポジトリの「Actions」タブを開く
2. 左メニューから「Deploy to WordPress Server」を選択
3. 「Run workflow」ボタンをクリック
4. 「Run workflow」をクリック

### 方法2: 自動デプロイ（プッシュ時に自動実行）
- このファイルをコミットしてプッシュすると自動的にデプロイが開始されます

## デプロイの確認

デプロイが成功すると、WordPressサーバーに以下のファイルがアップロードされます：
- functions.php
- page-ouchi-support.php
- screenshot.png
- style.css

デプロイの実行状況は、GitHubの「Actions」タブで確認できます。

