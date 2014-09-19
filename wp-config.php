<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、言語、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */

define('DB_NAME', 'heroku_0e2018a5af7e483');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'ba1d76917d2117');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'b96092b8');

/** MySQL のホスト名 */
define('DB_HOST', 'us-cdbr-iron-east-01.cleardb.net');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         's6`aP_<N~;sm`2F=6xk^WG>/f0aK5<fNd5=(%-|b_uR:2HW{g]EjnfGnVQ_GcKI$');
define('SECURE_AUTH_KEY',  '&1vQC@JlE3-r%Ao>&9Olz(MO~Uv`ru&wX)Pxq;?+9%8~qxwbX1N7R/>I(>ZkdQkh');
define('LOGGED_IN_KEY',    '~?V<%y>7tJkqa[&q7w;8[ab%i[3y>MnLn|gFqIR?Lm^Y};OVE`lMU4!im5sg:IB;');
define('NONCE_KEY',        'YqF<$P`U/USnZj|-y7c<PeyccZZc2)0YCZPKM51N,$>}E),YM`lGA8!WOX<`JS{X');
define('AUTH_SALT',        '{5*9X 8NAWVlu7_0F`M3ia}:dr1~pkj`~kT|LwvlLExh0crRk.ezRIIxCMYB&GBa');
define('SECURE_AUTH_SALT', 'LCp)4.T*ntK!r-V<-|Dv9e-V&c)}iP|KAWz|W>_]|mcR:c1j3p*X;-jT{ #EEav6');
define('LOGGED_IN_SALT',   '1-yVk|OEv{u<Q;}HXRz-=KTf<G|bcK+CyCw&x#=o4DLPax}3RN!2Tu#L!EYn#5W@');
define('NONCE_SALT',       'LnN5BLi(#8}}=@g*[0SY$=|e;wb;IPX^9-)?Xo$J3<+dvJn-FttNO)]]GjHHWd!e');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', true);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
