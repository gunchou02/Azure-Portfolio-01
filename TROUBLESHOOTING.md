# 🔧 Troubleshooting Log

プロジェクト構築中に発生した技術的な課題とその解決策の記録です。

## 1. Azure App Service デプロイ後のデフォルトページ表示問題
### 🔴 Issue
GitHub Actions でデプロイが `Success` と表示されているにもかかわらず、ブラウザでアクセスするとユーザー作成の `index.php` ではなく、Azure のデフォルト画面 (Hosting Start) が表示され続ける。

### 🔍 Root Cause
Azure App Service はデフォルトでルートディレクトリ (`/`) の `index.php` を参照する仕様だが、GitHub リポジトリの構成上、ソースコードがサブディレクトリ (`/portfolio/azure/...`) に配置されていたため、サーバーがファイルを認識できていなかった。

### ✅ Solution
* ディレクトリ構成をリファクタリングし、`index.php` と `README.md` をリポジトリのルート階層に移動。
* Git Push 後、Azure が正しくファイルを認識し、アプリケーションが表示されることを確認。

---

## 2. データベース接続情報のセキュリティ管理とUI変更への対応
### 🔴 Issue
PHP コード内にデータベースのパスワードを直接記述（ハードコーディング）するのはセキュリティ上危険であるため、環境変数を利用しようとした。しかし、Azure Portal の UI 更新により、環境変数設定メニューの場所が変更されており、設定箇所を見つけるのに時間を要した。

### 🔍 Root Cause
* 機密情報の分離（Security Best Practice）が必要。
* Azure App Service のメニュー構成が変更され、従来の「構成 (Configuration)」タブ内ではなく、独立した「環境変数 (Environment Variables)」メニューに移動していたため。

### ✅ Solution
* PHP コードでは `getenv()` 関数を使用するように記述を変更。
* Azure Portal の検索機能やドキュメントを参照し、新しい「環境変数」メニューを特定。
* `DB_HOST`, `DB_USERNAME`, `DB_PASSWORD` を登録し、コードを変更することなくセキュアに DB 接続に成功。

---

## 3. リージョン制限によるデプロイエラーへの対応
### 🔴 Issue
Azure Database for MySQL を「Japan East (東日本)」リージョンで作成しようとした際、デプロイエラーが発生し、リソースを作成できなかった。

### 🔍 Root Cause
学生用サブスクリプション (Azure for Students) のクォータ（割り当て）制限、もしくは Japan East リージョンの一時的なリソース不足により、新規作成が制限されていたため。

### ✅ Solution
* 地理的に日本と近く、ネットワーク遅延（レイテンシ）の影響が極めて少ない **「Korea Central (韓国中部)」** リージョンを代替地として選定。
* リージョン変更後、即座にデプロイが成功することを確認し、プロジェクトを遅延なく進行させた。
