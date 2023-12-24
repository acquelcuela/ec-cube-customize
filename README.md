1. clone
1. wget https://github.com/EC-CUBE/ec-cube/releases/download/4.0.5/eccube-4.0.5.tar.gz 
　※wgetがない場合：curl -OL https://github.com/EC-CUBE/ec-cube/releases/download/4.0.5/eccube-4.0.5.tar.gz 
1. tar xzvf eccube-4.0.5.tar.gz
1. mv eccube-4.0.5 ec-cube
1. docker-compose build --no-cache
1. docker-compose up -d
1. http://localhost:8080/install/step1
1. EC-CUBEの初期設定を進む
・送信を承諾するにチェックして次へ
・権限チェック、次へ
・サイトの設定を入力、次へ
・データベースの設定、SQLite選択、次へ
・データベースの初期化、次へ
・インストールが完了
