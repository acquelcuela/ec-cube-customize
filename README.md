# ec-cube customize

## 動作確認
* docker環境作成〜EC-CUBE初期設定から、issue #2 のカスタマイズ部分までを確認頂ける手順です

1. 本リポジトリをclone
1. docker-compose build --no-cache
1. docker-compose up -d
1. 初期設定画面へアクセス http://localhost:8080/install/step1
1. EC-CUBEの初期設定を進む ※1
1. docker-compose exec ec-cube bash
1. bin/console cache:clear --no-warmup
1. bin/console doctrine:schema:update --dump-sql --force
1. http://localhost:8080/[admin_dir]/customer/new
1. 会員情報の新規・詳細画面にて「入会ルート、契約日、解約日」の追加項目確認

----
* ※1 EC-CUBE初期設定について
  * 送信を承諾するにチェックして次へ
  * 権限チェック、次へ
  * サイトの設定を入力、次へ
  * データベースの設定、SQLite選択、次へ
  * データベースの初期化、次へ
  * インストールが完了
