<?php

declare(strict_types=1);

return [
    'dashboard' => [
        'users' => 'ユーザー総数',
        'available_users' => '有効ユーザー数',
        'paid_users' => '有料ユーザー数',
        'active_days_users' => ':days日以内にアクティブだったユーザー',
        'inactive_days_users' => ':days日以上非アクティブなユーザー',
        'online_users' => '現在オンラインのユーザー',
        'expiring_users' => 'まもなく有効期限切れのユーザー',
        'overuse_users' => '大量データ使用ユーザー(90%以上)',
        'abnormal_users' => '直近1時間で異常トラフィックのあったユーザー',
        'nodes' => 'ノード数',
        'maintaining_nodes' => 'メンテナンス中のノード',
        'current_month_traffic_consumed' => '今月のトラフィック使用量',
        'days_traffic_consumed' => ':days日でのトラフィック使用量',
        'orders' => '注文総数',
        'online_orders' => 'オンライン決済注文数',
        'succeed_orders' => '支払い成功注文数',
        'credit' => '総残高',
        'withdrawing_commissions' => '未払いの報酬',
        'withdrawn_commissions' => '支払済みの報酬',
    ],
    'action' => [
        'edit_item' => ':attributeを編集',
        'add_item' => ':attributeを追加',
    ],
    'confirm' => [
        'delete' => [0 => ':attribute【', 1 => '】を削除しますか?'],
        'continues' => '操作を続行しますか?',
        'export' => 'すべてエクスポートしますか?',
    ],
    'user_dashboard' => 'ユーザーダッシュボード',
    'menu' => [
        'dashboard' => 'ダッシュボード',
        'user' => [
            'attribute' => 'ユーザーシステム',
            'list' => 'ユーザー管理',
            'oauth' => 'OAuth認証',
            'group' => 'ユーザーグループ',
            'credit_log' => '残高履歴',
            'subscribe' => 'サブスクリプション管理',
        ],
        'rbac' => [
            'attribute' => '権限システム',
            'permission' => '権限リスト',
            'role' => 'ロールリスト',
        ],
        'customer_service' => [
            'attribute' => 'カスタマーサポート',
            'ticket' => 'チケット',
            'article' => '記事管理',
            'push' => 'プッシュ通知',
            'mail' => 'メール配信',
        ],
        'node' => [
            'attribute' => 'ノードシステム',
            'list' => 'ノード管理',
            'auth' => 'ノード認証',
            'cert' => '証明書リスト',
        ],
        'rule' => [
            'attribute' => '監査ルール',
            'list' => 'ルールリスト',
            'group' => 'ルールグループ',
            'trigger' => '発動記録',
        ],
        'shop' => [
            'attribute' => 'ショップ',
            'goods' => '商品管理',
            'coupon' => 'クーポン管理',
            'order' => '注文',
        ],
        'promotion' => [
            'attribute' => '紹介プログラム',
            'invite' => '招待管理',
            'withdraw' => '出金管理',
            'rebate_flow' => 'リベート履歴',
        ],
        'analysis' => [
            'attribute' => '分析レポート',
            'accounting' => '会計',
            'user_flow' => 'ユーザー分析',
        ],
        'log' => [
            'attribute' => 'ログ',
            'traffic' => 'データ使用量',
            'traffic_flow' => 'データ変動',
            'service_ban' => 'BAN記録',
            'online_logs' => 'オンラインログ',
            'online_monitor' => 'オンラインモニター',
            'notify' => '通知記録',
            'payment_callback' => '支払いコールバック',
            'system' => 'システムログ',
        ],
        'tools' => [
            'attribute' => 'ツール',
            'decompile' => 'デコンパイル',
            'convert' => 'フォーマット変換',
            'import' => 'データインポート',
            'analysis' => 'ログ分析',
        ],
        'setting' => [
            'attribute' => '設定',
            'email_suffix' => 'メールフィルター',
            'universal' => '全般',
            'system' => 'システム',
        ],
    ],
    'user' => [
        'massive' => [
            'text' => '生成ユーザー数',
            'failed' => 'ユーザー生成に失敗しました',
            'succeed' => 'ユーザー生成に成功しました',
            'note' => 'バックエンドによる一括ユーザー生成',
        ],
        'proxy_info' => '設定情報',
        'traffic_monitor' => 'トラフィック統計',
        'online_monitor' => 'オンラインモニター',
        'reset_traffic' => 'データリセット',
        'user_view' => 'ユーザービューに切り替え',
        'connection_test' => '接続テスト',
        'counts' => '合計 <code>:num</code> アカウント',
        'reset_confirm' => [0 => '【', 1 => '】のデータをリセットしますか?'],
        'info' => [
            'account' => 'アカウント情報',
            'proxy' => 'プロキシ情報',
            'switch' => 'アイデンティティの切り替え',
            'reset_date_hint' => '次のデータリセット日',
            'expired_date_hint' => '空欄の場合はデフォルトで1年',
            'uuid_hint' => 'V2Ray用のUUID',
            'recharge_placeholder' => 'マイナス値を入力すると残高を減らす',
        ],
        'update_help' => '更新に成功しました。戻りますか?',
        'proxies_config' => '【:username】の設定情報',
        'group' => [
            'title' => 'ユーザーグループ <small>(複数のグループにノードを割り当てられるが、ユーザーは1つのグループのみ)</small>',
            'name' => 'グループ名',
            'counts' => '合計 <code>:num</code> グループ',
        ],
    ],
    'zero_unlimited_hint' => '0または空欄の場合は無制限',
    'node' => [
        'traffic_monitor' => 'トラフィック統計',
        'refresh_geo' => '地理情報更新',
        'ping' => 'レイテンシーテスト',
        'connection_test' => '接続テスト',
        'counts' => '合計 <code>:num</code> ノード',
        'reload_all' => 'すべてのバックエンドをリロード',
        'refresh_geo_all' => 'すべてのノードの地理情報を更新',
        'reload_confirm' => 'ノードのリロードを確認',
        'info' => [
            'hint' => '<strong>注意:</strong> 自動生成された<code>ID</code>はShadowsocksRの<code>node_id</code>、V2Rayの<code>nodeId</code>です',
            'basic' => '基本情報',
            'ddns_hint' => '動的IPノードは<a href="https://github.com/NewFuture/DDNS" target="_blank">DDNS</a>が必要です。接続テストはドメイン名を使用します',
            'domain_placeholder' => 'サーバードメイン、優先的に使用する1つ目に入力',
            'domain_hint' => 'DDNS有効時、ドメインは自動的にIPにバインドされます。DNSレコードの手動変更は不要です。',
            'extend' => '拡張情報',
            'display' => [
                'invisible' => '完全非表示',
                'node' => 'ノードページのみ表示',
                'sub' => 'サブスクリプションのみ表示',
                'all' => '完全表示',
                'hint' => 'サブスクリプション/ノードリストでの表示の有無',
            ],
            'ipv4_hint' => '複数の場合は","で区切る 例: 1.1.1.1, 8.8.8.8',
            'ipv6_hint' => '複数の場合は","で区切る 例: 1.1.1.1, 8.8.8.8',
            'ipv4_placeholder' => 'サーバーIPv4アドレス',
            'ipv6_placeholder' => 'サーバーIPv6アドレス',
            'push_port_hint' => '必須。ファイアウォールで開放してプッシュ失敗を回避',
            'data_rate_hint' => '例: 0.1 の場合 100Mが10Mとして計算、5 の場合 100Mが500Mとして計算',
            'level_hint' => 'レベル: 0 = 無レーティング、全ノード表示',
            'detection' => [
                'tcp' => 'TCPのみ',
                'icmp' => 'ICMPのみ',
                'all' => 'すべて検知',
                'hint' => '30~60分ごとにランダムチェック',
            ],
            'obfs_param_hint' => 'obfsが[plain]以外の場合、パラメータを入力してトラフィックを偽装',
            'additional_ports_hint' => '<span class="red-700"><a href="javascript:showTnc();">additional_ports</a></span> を設定してください',
            'v2_method_hint' => 'WebSocketの場合noneを使用しない',
            'v2_net_hint' => 'WebSocketの場合TLSを有効にする',
            'v2_cover' => [
                'none' => 'なし',
                'http' => 'HTTP',
                'srtp' => 'SRTP',
                'utp' => 'uTP',
                'wechat' => 'WeChatビデオ通話',
                'dtls' => 'DTLS 1.2',
                'wireguard' => 'WireGuard',
            ],
            'v2_host_hint' => 'HTTPの場合は","で複数のドメイン。WebSocketの場合は1つのみ。',
            'v2_tls_provider_hint' => 'バックエンドによって設定が異なります:',
            'single_hint' => 'ポート80/443推奨。バックエンドは<br>strictモードの設定が必要です。(<a href="javascript:showPortsOnlyConfig();">設定方法</a>)',
        ],
        'proxy_info' => '*SSとの互換性',
        'proxy_info_hint' => '互換性のため、プロトコルと洗濯に<span class="red-700">_compatible</span>を追加してください',
        'reload' => 'バックエンドのリロード',
        'auth' => [
            'title' => 'ノード認証 <small>WEBAPI</small>',
            'deploy' => [
                'title' => ':type_label バックエンドのデプロイ',
                'attribute' => 'バックエンドのデプロイ',
                'command' => 'コマンド',
                'update' => 'アップデート',
                'uninstall' => 'アンインストール',
                'start' => '開始',
                'stop' => '停止',
                'status' => 'ステータス',
                'recent_logs' => '最近のログ',
                'real_time_logs' => 'リアルタイムログ',
                'restart' => '再起動',
                'same' => '上と同じ',
                'trojan_hint' => '先に<a href=":url" target="_blank">ドメイン</a>を設定し、DNSをIPに解決してください',
            ],
            'reset_auth' => 'キーのリセット',
            'counts' => '合計 <code>:num</code> 認証',
            'generating_all' => 'すべてのノードの認証を生成しますか?',
        ],
        'cert' => [
            'title' => 'ドメイン証明書 <small>(V2Rayノードのスプーフィング用)</small>',
            'counts' => '合計 <code>:num</code> 証明書',
            'key_placeholder' => 'ドメイン証明書のKEY。VNET-V2Rayが自動証明書に対応しているため、空欄可',
            'pem_placeholder' => 'ドメイン証明書のPEM。VNET-V2Rayが自動証明書に対応しているため、空欄可',
        ],
    ],
    'hint' => 'ヒント',
    'oauth' => [
        'title' => 'ユーザーOAuth',
        'counts' => '合計 <code>:num</code> 認証',
    ],
    'select_all' => '全選択',
    'clear' => 'クリア',
    'unselected_hint' => '割り当て対象はここで検索',
    'selected_hint' => '割り当て済みはここで検索',
    'clone' => '複製',
    'monitor' => [
        'daily_chart' => '日次トラフィック',
        'monthly_chart' => '月次トラフィック',
        'node' => 'ノードトラフィック',
        'user' => 'ユーザートラフィック',
        'hint' => '<strong>ヒント:</strong> データがない場合はスケジュールされたタスクを確認してください',
    ],
    'tools' => [
        'analysis' => [
            'title' => 'SSRログ分析 <small>単一ノードの場合</small>',
            'req_url' => '最近のリクエストURL',
            'not_enough' => '15,000件未満のため、分析できません',
        ],
        'convert' => [
            'title' => 'フォーマット変換 <small>SSからSSRへ</small>',
            'content_placeholder' => '変換する設定情報を入力してください',
        ],
        'decompile' => [
            'title' => 'デコンパイル <small>設定情報への変換</small>',
            'attribute' => 'デコンパイル',
            'content_placeholder' => 'デコンパイルするSSRリンクを1行ずつ入力してください',
        ],
    ],
    'ticket' => [
        'title' => 'チケット',
        'counts' => '合計 <code>:num</code> チケット',
        'send_to' => 'ターゲットユーザーの詳細を入力してください',
        'user_info' => 'ユーザー情報',
        'inviter_info' => '招待者情報',
        'close_confirm' => 'チケットをクローズしますか?',
        'error' => '不明なエラーです。ログを確認してください。',
    ],
    'logs' => [
        'subscribe' => 'サブスクリプション',
        'counts' => '合計 <code>:num</code> 記録',
        'rule' => [
            'clear_all' => 'すべての記録をクリア',
            'title' => '発動記録',
            'name' => '発動ルール',
            'reason' => '発動理由',
            'created_at' => '発動時刻',
            'tag' => '✅ 許可されていないアクセス',
            'clear_confirm' => 'すべての記録をクリアしますか?',
        ],
        'order' => [
            'title' => '注文',
            'is_expired' => '期限切れ',
            'is_coupon' => 'クーポン使用',
        ],
        'user_traffic' => [
            'title' => 'データ使用記録',
            'choose_node' => 'ノードを選択',
        ],
        'user_data_modify_title' => 'データ変更記録',
        'callback' => 'コールバックログ <small>(支払い)</small>',
        'notification' => 'メールログ',
        'ip_monitor' => 'オンラインIP <small>リアルタイム2分</small>',
        'user_ip' => [
            'title' => 'オンラインIP <small>最近10分</small>',
            'connect' => '接続中IP',
        ],
        'ban' => [
            'title' => 'ユーザーBAN',
            'time' => '期間',
            'reason' => '理由',
            'ban_time' => 'BAN日時',
            'last_connect_at' => '最終ログイン',
        ],
        'credit_title' => '残高変動記録',
    ],
    'start_time' => '開始',
    'end_time' => '終了',
    'goods' => [
        'title' => '商品一覧',
        'type' => [
            'top_up' => 'チャージ',
            'package' => 'データパッケージ',
            'plan' => 'プラン',
        ],
        'info' => [
            'type_hint' => 'プランはアカウントの有効期限に影響しますが、パッケージはデータのみ減算され、有効期限には影響しません',
            'period_hint' => 'プランのデータ容量はN日ごとにリセットされます',
            'limit_num_hint' => 'ユーザー1人当たりの購入可能回数。0は無制限',
            'available_date_hint' => '有効期限到来時に合計データから自動的に控除',
            'desc_placeholder' => '簡単な説明',
            'list_placeholder' => 'カスタムコンテンツを追加',
            'list_hint' => '各行は <code><li></code> で開始し <code></li></code> で終了',
        ],
        'status' => [
            'yes' => '販売中',
            'no' => '販売停止',
        ],
        'sell_and_used' => '使用済み/販売済み',
        'counts' => '合計 <code>:num</code> 商品',
    ],
    'sort_asc' => 'ソート値が大きいほうが優先順位が高い',
    'yes' => 'はい',
    'no' => 'いいえ',
    'rule' => [
        'type' => [
            'reg' => '正規表現',
            'domain' => 'ドメイン',
            'ip' => 'IP',
            'protocol' => 'プロトコル',
        ],
        'counts' => '合計 <code>:num</code> ルール',
        'title' => 'ルール',
        'group' => [
            'type' => [
                'off' => 'ブロック',
                'on' => '許可',
            ],
            'title' => 'ルールグループ',
            'counts' => '合計 <code>:num</code> グループ',
        ],
    ],
    'role' => [
        'name_hint' => '一意の識別子 例:管理者',
        'description_hint' => '表示名 例: 管理者',
        'title' => 'ロール',
        'permissions_all' => 'すべての権限',
        'counts' => '合計 <code>:num</code> ロール',
    ],
    'report' => [
        'monthly_accounting' => '月次会計',
        'annually_accounting' => '年次会計',
        'historic_accounting' => '過去の会計',
        'current_month' => '今月',
        'last_month' => '先月',
        'current_year' => '今年',
        'last_year' => '昨年',
        'hourly_traffic' => '時間別トラフィック',
        'daily_traffic' => '日次トラフィック',
        'today' => '今日',
    ],
    'permission' => [
        'title' => '権限',
        'description_hint' => '説明 例: [Xシステム] Aの編集',
        'name_hint' => 'ルート名 例: admin.user.update',
        'counts' => '合計 <code>:num</code> 権限',
    ],
    'marketing' => [
        'email' => [
            'title' => 'メールマーケティング',
            'group_send' => 'メール送信',
            'counts' => '合計 <code>:num</code> メール',
        ],
        'send_status' => '送信状況',
        'send_time' => '送信日時',
        'error_message' => 'エラーメッセージ',
        'push' => [
            'title' => 'プッシュ通知',
            'send' => '通知送信',
            'counts' => '合計 <code>:num</code> メッセージ',
        ],
    ],
    'creating' => '追加中...',
    'article' => [
        'type' => [
            'knowledge' => '記事',
            'announcement' => 'お知らせ',
        ],
        'category_hint' => '同じカテゴリはグループ化されます',
        'logo_hint' => '推奨サイズ: 100x75',
        'title' => '記事',
        'counts' => '合計 <code>:num</code> 記事',
    ],
    'coupon' => [
        'title' => 'クーポン',
        'name_hint' => '表示用',
        'sn_hint' => '空欄の場合は8桁のランダムコード',
        'type' => [
            'voucher' => '割引',
            'discount' => '値引き',
            'charge' => 'チャージ',
        ],
        'type_hint' => '割引: 金額を差し引く; 値引き: パーセンテージOFF; チャージ: 残高に金額を追加',
        'value' => '{1} ➖ :num|{2} :num%オフ|{3} ➕ :num',
        'value_hint' => '範囲 1% ~ 99%',
        'priority_hint' => '最高255。同じ条件の場合は優先順位が高いクーポンが適用される',
        'minimum_hint' => '支払い金額が<strong>:num</strong>以上の場合に適用可能',
        'used_hint' => 'ユーザー1人当たり<strong>:num</strong>回まで利用可能',
        'levels_hint' => '選択したユーザーレベルのみ利用可能',
        'groups_hint' => '選択したユーザーグループのみ利用可能',
        'users_placeholder' => 'ユーザーIDを入力してEnter',
        'user_whitelist_hint' => 'ホワイトリストユーザーのみ利用可能。未使用の場合は空欄',
        'users_blacklist_hint' => 'ブラックリストユーザーは利用不可。未使用の場合は空欄',
        'services_placeholder' => '商品IDを入力してEnter',
        'services_whitelist_hint' => 'ホワイトリスト商品のみ適用可能。未使用の場合は空欄',
        'services_blacklist_hint' => 'ブラックリスト商品は適用不可。未使用の場合は空欄',
        'newbie' => [
            'first_discount' => '初回利用時',
            'first_order' => '初回購入時',
            'created_days' => 'アカウント登録からの日数',
        ],
        'created_days_hint' => '登録から<code>:days</code>日以内',
        'limit_hint' => '条件は<strong>AND</strong>関係',
        'info_title' => 'クーポン情報',
        'counts' => '合計 <code>:num</code> クーポン',
        'discount' => '割引',
        'export_title' => 'エクスポート',
        'single_use' => '1回限定',
    ],
    'times' => '回',
    'massive_export' => '一括エクスポート',
    'system_generate' => 'システム生成',
    'aff' => [
        'rebate_title' => 'リベート履歴',
        'counts' => '合計 <code>:num</code> リベート',
        'title' => '出金リクエスト',
        'apply_counts' => '合計 <code>:num</code> リクエスト',
        'referral' => '紹介リベート',
        'commission_title' => 'リクエストの詳細',
        'commission_counts' => '<code>:num</code> 注文が関係',
    ],
    'setting' => [
        'common' => [
            'title' => '全般設定',
            'set_default' => 'デフォルトに設定',
            'connect_nodes' => '関連ノード数',
        ],
        'email' => [
            'title' => 'メールフィルター <small>(登録用)</small>',
            'tail' => 'メールサフィックス',
            'rule' => '制限の種類',
            'black' => 'ブラックリスト',
            'white' => 'ホワイトリスト',
            'tail_placeholder' => 'メールサフィックスを入力',
        ],
        'system' => [
            'title' => 'システム設定',
            'web' => '全般',
            'account' => 'アカウント',
            'node' => 'ノード',
            'extend' => '拡張機能',
            'check_in' => 'チェックイン',
            'promotion' => 'アフィリエイト',
            'notify' => '通知',
            'auto_job' => '自動タスク',
            'other' => 'ロゴ|カスタマーサポート|アナリティクス',
            'payment' => '支払システム',
            'menu' => 'メニュー',
        ],
        'no_permission' => 'パラメータを変更する権限がありません!',
    ],
    'system' => [
        'account_expire_notification' => 'アカウント有効期限切れ通知',
        'active_times' => 'アカウント有効化の上限回数',
        'admin_invite_days' => '[管理者] 招待コードの有効期限',
        'aff_salt' => '[リファラルURL] ユーザーID暗号化',
        'alipay_qrcode' => 'Alipay QRコード',
        'AppStore_id' => '[Apple] アカウント',
        'AppStore_password' => '[Apple] パスワード',
        'auto_release_port' => 'ポートの自動解放',
        'bark_key' => '[Bark] デバイスキー',
        'captcha_key' => 'Captchaキー',
        'captcha_secret' => 'Captchaシークレット/ID',
        'codepay_id' => '[CodePay] ID',
        'codepay_key' => '[CodePay] キー',
        'codepay_url' => '[CodePay] URL',
        'data_anomaly_notification' => 'データ異常通知',
        'data_exhaust_notification' => 'データ枯渇通知',
        'ddns_key' => '[DNS] キー',
        'ddns_mode' => 'DNS同期',
        'ddns_secret' => '[DNS] シークレット',
        'default_days' => 'デフォルトのアカウント期間',
        'default_traffic' => 'デフォルトの初期データ容量',
        'detection_check_times' => 'ノードブロックアラート回数',
        'dingTalk_access_token' => '[DingTalk] アクセストークン',
        'dingTalk_secret' => '[DingTalk] シークレット',
        'epay_key' => '[ePay] キー',
        'epay_mch_id' => '[ePay] 商品ID',
        'epay_url' => '[ePay] URL',
        'expire_days' => '有効期限切れ通知の開始',
        'f2fpay_app_id' => '[Alipay] APP ID',
        'f2fpay_private_key' => '[Alipay] プライベートキー',
        'f2fpay_public_key' => '[Alipay] パブリックキー',
        'forbid_mode' => 'アクセス制限',
        'invite_num' => 'デフォルトの招待数',
        'is_activate_account' => 'アカウント有効化',
        'is_AliPay' => 'Alipay',
        'is_ban_status' => '有効期限切れ時の自動BAN',
        'is_captcha' => 'Captcha',
        'is_checkin' => 'チェックインの報酬',
        'is_clear_log' => 'ログの自動削除',
        'is_custom_subscribe' => '高度なサブスクリプション',
        'is_email_filtering' => 'メールフィルタリング',
        'is_forbid_robot' => 'ボットのアクセス禁止',
        'is_free_code' => 'フリーの招待コード',
        'is_invite_register' => '招待による登録',
        'is_otherPay' => 'カスタム決済',
        'is_QQPay' => 'QQ Pay',
        'is_rand_port' => 'ランダムポート',
        'is_register' => 'ユーザー登録',
        'is_subscribe_ban' => '異常リクエストによる自動BAN',
        'is_traffic_ban' => '異常データ使用による自動BAN',
        'is_WeChatPay' => 'WeChat Pay',
        'iYuu_token' => '[IYUU] トークン',
        'maintenance_content' => 'メンテナンス通知',
        'maintenance_mode' => 'メンテナンスモード',
        'maintenance_time' => 'メンテナンス終了',
        'min_port' => 'ポートの範囲',
        'min_rand_traffic' => 'データの範囲',
        'node_blocked_notification' => 'ノードブロック通知',
        'node_daily_notification' => 'デイリーノードレポート',
        'node_offline_notification' => 'ノードオフライン通知',
        'oauth_path' => 'OAuthプラットフォーム',
        'offline_check_times' => 'オフライン通知回数',
        'password_reset_notification' => 'パスワードリセット通知',
        'paybeaver_app_id' => '[PayBeaver] App ID',
        'paybeaver_app_secret' => '[PayBeaver] Appシークレット',
        'payjs_key' => '[PayJs] キー',
        'payjs_mch_id' => '[PayJs] 商品ID',
        'payment_confirm_notification' => '手動支払い確認通知',
        'payment_received_notification' => '支払い成功通知',
        'paypal_app_id' => 'App ID',
        'paypal_client_id' => 'Client ID',
        'paypal_client_secret' => 'Clientシークレット',
        'pushDeer_key' => '[PushDeer] キー',
        'pushplus_token' => '[PushPlus] トークン',
        'rand_subscribe' => 'ランダムサブスクリプション',
        'redirect_url' => 'リダイレクトURL',
        'referral_money' => '最低出金限度額',
        'referral_percent' => 'リベート割合',
        'referral_status' => 'アフィリエイト機能',
        'referral_traffic' => '登録ボーナスデータ',
        'referral_type' => 'リベートタイプ',
        'register_ip_limit' => '同一IPの登録上限',
        'reset_password_times' => 'パスワードリセット回数制限',
        'reset_traffic' => 'データの自動リセット',
        'server_chan_key' => '[ServerChan] SCKEY',
        'standard_currency' => '基準通貨',
        'stripe_public_key' => 'パブリックキー',
        'stripe_secret_key' => 'シークレットキー',
        'stripe_signing_secret' => 'Webhookシークレット',
        'subject_name' => 'カスタム商品名',
        'subscribe_ban_times' => 'サブスクリプションリクエストの上限',
        'subscribe_domain' => 'サブスクリプションドメイン',
        'subscribe_max' => '最大サブスクリプションノード数',
        'telegram_token' => 'Telegramトークン',
        'tg_chat_token' => 'TG Chatトークン',
        'theadpay_key' => '[THeadPay] キー',
        'theadpay_mchid' => '[THeadPay] 商品ID',
        'theadpay_url' => '[THeadPay] URL',
        'ticket_closed_notification' => 'チケットクローズ通知',
        'ticket_created_notification' => '新規チケット通知',
        'ticket_replied_notification' => 'チケット返信通知',
        'traffic_ban_time' => 'BAN期間',
        'traffic_ban_value' => 'データ消費の異常検知閾値',
        'traffic_limit_time' => 'チェックインのインターバル',
        'traffic_warning_percent' => 'データ使用量警告閾値',
        'trojan_license' => 'Trojanライセンス',
        'username_type' => 'アカウントのユーザー名タイプ',
        'user_invite_days' => '[ユーザー] 招待コードの有効期限',
        'v2ray_license' => 'V2Rayライセンス',
        'v2ray_tls_provider' => 'V2Ray TLS設定',
        'webmaster_email' => '管理者メール',
        'website_analytics' => 'アナリティクスコード',
        'website_callback_url' => '決済コールバックドメイン',
        'website_customer_service' => 'カスタマーサポートコード',
        'website_home_logo' => 'ホームページロゴ',
        'website_logo' => '内部ページロゴ',
        'website_name' => 'サイト名',
        'website_security_code' => 'セキュリティコード',
        'website_url' => 'サイトドメイン',
        'web_api_url' => 'APIドメイン',
        'wechat_aid' => 'WeChat AID',
        'wechat_cid' => 'WeChat CID',
        'wechat_encodingAESKey' => 'WeChat Encoding Key',
        'wechat_qrcode' => 'WeChat QRコード',
        'wechat_secret' => 'WeChatシークレット',
        'wechat_token' => 'WeChatトークン',
        'hint' => [
            'account_expire_notification' => '有効期限切れを通知する',
            'active_times' => '24時間以内のアカウント有効化数',
            'admin_invite_days' => '管理者の招待コード有効期限',
            'aff_salt' => 'リファラルURLのユーザーIDを暗号化',
            'AppStore_id' => '記事で使用するAppleアカウント',
            'AppStore_password' => '記事で使用するAppleパスワード',
            'auto_release_port' => '<code>'.config('tasks.release_port').'</code>日間使用禁止/有効期限切れのアカウントのポートを自動解放',
            'bark_key' => 'iOS通知用のデバイスキー',
            'captcha_key' => '<a href="https://proxypanel.gitbook.io/wiki/captcha" target="_blank">設定ガイド</a>を参照',
            'data_anomaly_notification' => '時間当たりのデータが閾値を超えた時、管理者に通知',
            'data_exhaust_notification' => 'データ残量が少なくなった時に通知',
            'ddns_key' => "<a href='https://proxypanel.gitbook.io/wiki/ddns' target='_blank'>設定ガイド</a>を参照",
            'ddns_mode' => 'ノードのドメイン/IPの変更時にDNSプロバイダーを自動更新',
            'default_days' => '新規アカウントのデフォルトの有効期限。0は本日有効期限切れ',
            'default_traffic' => '新規アカウントのデフォルトデータ容量',
            'detection_check_times' => 'N回のアラート後自動的にノードをオフラインにする。0は無制限、最大12',
            'dingTalk_access_token' => 'カスタムボットの<a href=https://open.dingtalk.com/document/group/custom-robot-access#title-jfe-yo9-jl2 target=_blank>アクセストークン</a>',
            'dingTalk_secret' => '署名有効時は必須項目',
            'expire_days' => 'アカウント有効期限切れの通知開始',
            'f2fpay_app_id' => 'Alipay APPID',
            'f2fpay_private_key' => '秘密鍵ツールで生成したアプリ秘密鍵',
            'f2fpay_public_key' => 'アプリ公開鍵ではありません',
            'forbid_mode' => '指定地域からのアクセスをブロック',
            'invite_num' => 'デフォルトのユーザー当たりの招待数',
            'is_activate_account' => 'メールによるアカウントの有効化が必要になる',
            'is_ban_status' => '(注意) アカウントBANはすべてのデータをリセットしログイン不可にする',
            'is_captcha' => '有効時はログイン/登録でキャプチャが必要',
            'is_checkin' => 'チェックイン時にデータ範囲内でランダム報酬',
            'is_clear_log' => '(推奨) 不要なログの自動削除',
            'is_custom_subscribe' => '有効時、サブスクリプションに有効期限/残データを表示',
            'is_email_filtering' => 'ブラックリスト: 許可メール以外可、ホワイトリスト: 許可メールのみ可',
            'is_forbid_robot' => 'ボットやプロキシからアクセスされると404エラー',
            'is_free_code' => '無効時、フリー招待コードが非表示',
            'is_rand_port' => 'ユーザー追加/登録時にランダムポート',
            'is_register' => '無効時、登録不可',
            'is_subscribe_ban' => 'サブスクリプションリクエストが閾値を超えると自動BAN',
            'is_traffic_ban' => '1時間でデータ使用が閾値を超えると自動的にサービス無効化',
            'iYuu_token' => '有効にする前に<a href=https://iyuu.cn target=_blank>IYUUトークン</a>を取得',
            'maintenance_content' => 'カスタムメンテナンス通知',
            'maintenance_mode' => "有効時、ユーザーをメンテナンスページにリダイレクト|管理者は <a href='javascript:(0)'>:url</a> からログイン可",
            'maintenance_time' => 'メンテナンスページのカウントダウン用',
            'min_port' => 'ポート範囲: 1000 - 65535',
            'node_blocked_notification' => '時間ごとにノードブロックを検知し管理者に通知',
            'node_daily_notification' => '前日のノードごとの使用状況を報告',
            'node_offline_notification' => '10分ごとにオフラインノードを検知し通知',
            'oauth_path' => '.ENVに先に設定してからここで有効化',
            'offline_check_times' => '24時間でN回の通知後、通知を停止',
            'password_reset_notification' => '有効時、メールからのパスワードリセットが可能',
            'paybeaver_app_id' => '<a href="https://merchant.paybeaver.com/" target="_blank">マーチャントセンター</a> -> 開発者 -> App ID',
            'paybeaver_app_secret' => '<a href="https://merchant.paybeaver.com/" target="_blank">マーチャントセンター</a> -> 開発者 -> Appシークレット',
            'payjs_mch_id' => '<a href="https://payjs.cn/dashboard/member" target="_blank">こちらのページ</a>から取得',
            'payment_confirm_notification' => '手動支払い後、管理者に処理を通知',
            'payment_received_notification' => '支払いを受け取った時、ユーザーに通知',
            'pushDeer_key' => '有効にする前に<a href=https://www.pushdeer.com/official.html target=_blank>PushDeer Pushキー</a>を取得',
            'pushplus_token' => '有効にする前に<a href=https://www.pushplus.plus/push1.html target=_blank>PushPlusトークン</a>を取得',
            'rand_subscribe' => '有効時、ランダムにノード情報を返す',
            'redirect_url' => 'ルール発動時にブロックされリダイレクトされるURL',
            'referral_money' => '出金可能な最低金額',
            'referral_percent' => '購入金額に対するリベート率',
            'referral_status' => '既存データに影響せず機能のみオフ',
            'referral_traffic' => 'リファラル経由で登録時の付与データ容量',
            'referral_type' => '新しいリベートは新しい方式で計算',
            'register_ip_limit' => '24時間当たりの同一IPからの登録数。0は無制限',
            'reset_password_times' => '24時間当たりのメール経由でのパスワードリセット数',
            'reset_traffic' => '購入したプランのサイクルに基づきデータを自動リセット',
            'server_chan_key' => '有効にする前に<a href=https://sc.ftqq.com target=_blank>ServerChan SCKEY</a>を取得',
            'standard_currency' => 'パネルで使用する主要通貨',
            'subject_name' => '決済ゲートウェイの商品タイトルに使用',
            'subscribe_ban_times' => '24時間当たりのサブスクリプションリクエスト数の制限',
            'subscribe_domain' => 'DNSポイズニングによる失敗を回避するため、http://またはhttps://が必要',
            'subscribe_max' => 'クライアント側のサブスクリプションで返すノード数。0は全ノードを返す',
            'telegram_token' => '<a href=https://t.me/BotFather target=_blank>@BotFather</a>からTOKENを取得',
            'tg_chat_token' => '有効化前に<a href=https://t.me/realtgchat_bot target=_blank>TG Chatトークン</a>を取得',
            'ticket_closed_notification' => 'チケットクローズ時にユーザーに通知',
            'ticket_created_notification' => '新規チケット作成時、管理者orユーザーに通知',
            'ticket_replied_notification' => 'チケット返信時、相手に通知',
            'traffic_ban_time' => '異常検知によるBAN期間',
            'traffic_ban_value' => '1時間でこの値を超えると自動BAN',
            'traffic_limit_time' => 'チェックインの間隔',
            'traffic_warning_percent' => '残量がこの割合以下になったら通知を送る',
            'username_type' => 'ユーザーアカウントのデフォルトのタイプ',
            'user_invite_days' => 'ユーザー生成招待コードの有効期限',
            'v2ray_tls_provider' => '自動TLS証明書取得時にこのノード設定が優先',
            'webmaster_email' => 'エラー時に表示する連絡先メール',
            'website_analytics' => 'アナリティクスJSコード',
            'website_callback_url' => 'DNSポイズニングによるコールバック失敗を防止',
            'website_customer_service' => 'カスタマーサポートJSコード',
            'website_name' => 'メールで使用する名前',
            'website_security_code' => '設定時は<a href=":url" target="_blank">安全入り口</a>からアクセス必要',
            'website_url' => 'パスワードリセット等に必要',
            'web_api_url' => '例: '.config('app.url'),
            'wechat_aid' => '<a href="https://work.weixin.qq.com/wework_admin/frame#apps" target="_blank">アプリ管理</a> -> AgentId',
            'wechat_cid' => '<a href="https://work.weixin.qq.com/wework_admin/frame#profile" target="_blank">企業情報</a>から取得',
            'wechat_encodingAESKey' => 'アプリ管理 -> アプリ設定 -> EncodingAESKey',
            'wechat_secret' => 'アプリシークレット (企業WeChat必要)',
            'wechat_token' => 'アプリ設定 -> TOKEN。コールバックURL: :url',
        ],
        'placeholder' => [
            'default_url' => 'デフォルトは:url',
            'server_chan_key' => 'ServerChan SCKEYを入力して更新をクリック',
            'pushDeer_key' => 'PushDeerキーを入力して更新をクリック',
            'iYuu_token' => 'IYUUトークンを入力して更新をクリック',
            'bark_key' => 'Barkキーを入力して更新をクリック',
            'telegram_token' => 'Telegramトークンを入力して更新をクリック',
            'pushplus_token' => 'ServerChanから取得してください',
            'dingTalk_access_token' => 'カスタムボットのアクセストークン',
            'dingTalk_secret' => '署名後に表示されるシークレット',
            'wechat_aid' => 'アプリのAgentId',
            'wechat_cid' => 'WeChat IDを入力して更新をクリック',
            'wechat_secret' => 'アプリのシークレット',
            'tg_chat_token' => 'Telegramから取得してください',
            'codepay_url' => 'https://codepay.fateqq.com/creat_order/?',
        ],
        'payment' => [
            'attribute' => '決済設定',
            'channel' => [
                'alipay' => 'Alipay F2F',
                'codepay' => 'CodePay',
                'epay' => 'ePay',
                'payjs' => 'PayJs',
                'paypal' => 'PayPal',
                'stripe' => 'Stripe',
                'paybeaver' => 'PayBeaver',
                'theadpay' => 'THeadPay',
                'manual' => '手動支払',
            ],
            'hint' => [
                'alipay' => 'この機能には<a href="https://open.alipay.com/platform/appManage.htm?#/create/" target="_blank">蚂蚁金服オープンプラットフォーム</a>への申請が必要です',
                'codepay' => '<a href="https://codepay.fateqq.com/i/377289" target="_blank">CodePay</a>へサインアップし、ソフトウェアをダウンロードして設定してください',
                'payjs' => '<a href="https://payjs.cn/ref/zgxjnb" target="_blank">PayJs</a>でアカウントを取得してください',
                'paypal' => 'マーチャントアカウントで<a href="https://www.paypal.com/businessprofile/mytools/apiaccess/firstparty" target="_blank">API認証ページ</a>にログインし、設定情報を取得してください',
                'paybeaver' => '<a href="https://merchant.paybeaver.com/?aff_code=iK4GNuX8" target="_blank">PayBeaver</a>でアカウントを取得してください',
                'theadpay' => '<a href="https://theadpay.com/" target="_blank">THeadPay</a>でアカウントをリクエストしてください',
                'manual' => '設定後にユーザーエンドに表示されます',
            ],
        ],
        'notification' => [
            'channel' => [
                'telegram' => 'Telegram',
                'wechat' => 'WeChat Enterprise',
                'dingtalk' => 'DingTalk',
                'email' => 'メール',
                'bark' => 'Bark',
                'serverchan' => 'ServerChan',
                'pushdeer' => 'PushDeer',
                'pushplus' => 'PushPlus',
                'iyuu' => 'IYUU',
                'tg_chat' => 'TG Chat',
                'site' => 'サイト内通知',
            ],
            'send_test' => 'テストメッセージを送信',
        ],
        'forbid' => [
            'mainland' => '中国本土アクセスを禁止',
            'china' => '中国アクセスを禁止',
            'oversea' => '海外アクセスを禁止',
        ],
        'username' => [
            'email' => 'メールアドレス',
            'mobile' => '電話番号',
            'any' => '任意のユーザー名',
        ],
        'active_account' => [
            'before' => '事前アクティベーション',
            'after' => '登録後のアクティベーション',
        ],
        'ddns' => [
            'namesilo' => 'Namesilo',
            'aliyun' => 'AliCloud/Aliyun',
            'dnspod' => 'DNSPod',
            'cloudflare' => 'CloudFlare',
        ],
        'captcha' => [
            'standard' => '標準',
            'geetest' => 'Geetest',
            'recaptcha' => 'Google ReCaptcha',
            'hcaptcha' => 'hCaptcha',
            'turnstile' => 'Turnstile',
        ],
        'referral' => [
            'once' => '初回購入のみリベート',
            'loop' => '継続リベート',
        ],
    ],
    'set_to' => ':attributeに設定',
    'minute' => '分',
    'query' => '検索',
    'optional' => 'オプション',
    'require' => '必須',
];
