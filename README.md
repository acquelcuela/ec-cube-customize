# ec-cube customize

## 動作確認
1. 本リポジトリをclone
1. wget https://github.com/EC-CUBE/ec-cube/releases/download/4.0.5/eccube-4.0.5.tar.gz ※1
1. tar xzvf eccube-4.0.5.tar.gz
1. mv eccube-4.0.5 ec-cube
1. docker-compose build --no-cache
1. docker-compose up -d
1. http://localhost:8080/install/step1
1. EC-CUBEの初期設定を進む ※2
1. bin/console cache:clear --no-warmup
1. bin/console doctrine:schema:update --dump-sql --force
1. http://localhost:8080/[admin_dir]/customer/new
1. 会員情報の新規・詳細画面にて「入会ルート、契約日、解約日」の追加項目確認

----
* ※1 wgetが無い場合：curl -OL https://github.com/EC-CUBE/ec-cube/releases/download/4.0.5/eccube-4.0.5.tar.gz 
* ※2 EC-CUBE初期設定について
  * 送信を承諾するにチェックして次へ
  * 権限チェック、次へ
  * サイトの設定を入力、次へ
  * データベースの設定、SQLite選択、次へ
  * データベースの初期化、次へ
  * インストールが完了
