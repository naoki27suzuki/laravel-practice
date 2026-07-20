# laravel-practice / Makefile
# よく使う開発コマンドをまとめたもの。`make` または `make help` で一覧を表示します。

# シェルを bash に固定
SHELL := /bin/bash

# help をデフォルトターゲットにする
.DEFAULT_GOAL := help

.PHONY: help setup install fresh dev serve build watch \
        migrate migrate-fresh seed rollback \
        test lint format ci tinker key clear optimize

## ------------------------------------------------------------------
## ヘルプ
## ------------------------------------------------------------------
help: ## このヘルプを表示
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) \
		| sort \
		| awk 'BEGIN {FS = ":.*?## "}; {printf "  \033[36m%-16s\033[0m %s\n", $$1, $$2}'

## ------------------------------------------------------------------
## セットアップ
## ------------------------------------------------------------------
setup: ## 初回セットアップ（CI と同じ composer setup を実行）
	composer setup

install: ## 依存関係をインストール（composer + npm）
	composer install
	npm install

key: ## アプリケーションキーを生成
	php artisan key:generate

fresh: ## DB を作り直して初期化（migrate:fresh + seed）
	php artisan migrate:fresh --seed

## ------------------------------------------------------------------
## 開発サーバー
## ------------------------------------------------------------------
dev: ## 開発サーバーをまとめて起動（composer dev: serve + queue + vite）
	composer dev

serve: ## PHP 開発サーバーのみ起動（http://127.0.0.1:8000）
	php artisan serve

watch: ## Vite の開発サーバー（HMR）を起動
	npm run dev

build: ## フロントエンドをビルド
	npm run build

## ------------------------------------------------------------------
## データベース
## ------------------------------------------------------------------
migrate: ## マイグレーションを実行
	php artisan migrate

migrate-fresh: ## テーブルを全削除して再マイグレーション
	php artisan migrate:fresh

seed: ## シーダーを実行
	php artisan db:seed

rollback: ## 直前のマイグレーションを1つ戻す
	php artisan migrate:rollback

## ------------------------------------------------------------------
## テスト / 静的解析
## ------------------------------------------------------------------
test: ## テストを実行
	php artisan test

lint: ## Laravel Pint でコード規約をチェック（--test は変更しない）
	./vendor/bin/pint --test

format: ## Laravel Pint でコードを自動整形
	./vendor/bin/pint

ci: ## CI と同じチェックを実行（composer ci:check）
	composer ci:check

## ------------------------------------------------------------------
## その他ユーティリティ
## ------------------------------------------------------------------
tinker: ## Tinker（対話コンソール）を起動
	php artisan tinker

clear: ## 各種キャッシュをクリア
	php artisan optimize:clear

optimize: ## 設定・ルート・ビューをキャッシュ
	php artisan optimize
