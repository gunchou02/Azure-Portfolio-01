# Azure App Service Deployment Project ☁️

PHP ベースの Web アプリケーションを Microsoft Azure App Service (PaaS) 上に構築・デプロイしたプロジェクトです。
Web サーバーの構築から、GitHub と連携した継続的なデプロイ(CD)環境のセットアップまでを実施しました。

## 🔗 Demo

**Live URL:** [parkjeongbin-portfolio-cpewexg2bagqd6dk.japaneast-01.azurewebsites.net]

## 🛠 Architecture

本プロジェクトのインフラ構成図です。

graph LR
User((User)) -- HTTPS --> Azure[Azure App Service\n(Linux/PHP 8.4)]
GitHub[GitHub Repository] -- Push/Auto Deploy --> Azure
Point: ローカル環境ではなく、Azure のマネージドサービス(PaaS)を利用することで、OS 管理の手間を省き、アプリケーション開発に集中できる環境を構築しました。

💻 Tech Stack
Cloud: Microsoft Azure (App Service)

OS: Linux

Language: PHP 8.4

Infrastructure: PaaS (Platform as a Service)

CI/CD: GitHub Actions (Deployment Center)

🚀 Key Features & Learnings
このプロジェクトを通じて学んだこと・実装した内容：

Azure App Service の構築

Linux ベースの Web アプリホスティング環境のセットアップ

ランタイムスタック(PHP)の構成管理

デプロイの自動化 (CI/CD)

GitHub と Azure Deployment Center を連携

コードを Push するだけでサーバーに反映されるパイプラインの構築

クラウド基礎設定

リージョン選択(Japan East)によるレイテンシ考慮

本番環境での動作確認

📝 Future Roadmap
今後のアップデート予定（学習ロードマップ）：

[ ] Azure Database for MySQL との連携 (3-Tier 構成化)

[ ] Environment Variables を使用したセキュアな接続情報の管理

[ ] カスタムドメインと SSL 証明書の適用

Created by [PARK JEONGBIN]. Student at HAL Tokyo.

```

```
