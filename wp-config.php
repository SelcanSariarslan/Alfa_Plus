<?php
/**
 * WordPress için başlangıç ayar dosyası.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * Bu dosya şu ayarları içerir:
 * 
 * * Veritabanı ayarları
 * * Gizli anahtarlar
 * * Veritabanı tablo ön eki
 * * ABSPATH
 * 
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Veritabanı ayarları - Bu bilgileri servis sağlayıcınızdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'alfa_plus' );

/** Veritabanı kullanıcısı */
define( 'DB_USER', 'alfa_plus' );

/** Veritabanı parolası */
define( 'DB_PASSWORD', 'alfa_plus123.' );

/** Veritabanı sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define( 'DB_COLLATE', '' );

/**#@+
 * Eşsiz doğrulama anahtarları ve tuzlar.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * 
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz.
 * Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'GI(;o0pz{a: J!]y%qfV16.fQl.!l$hfze8+;is~7WDG#9wp=KTuatJE`it&Ji/.' );
define( 'SECURE_AUTH_KEY',  'xQ]D+Ui4YK@B/-qJ<0t#YO[zn,k]g}])7Cbi,%3]A-B?sL(%/)}&whl<xGm0vK|.' );
define( 'LOGGED_IN_KEY',    'pA<i&- bKFi1FlY Lw^ED;@?$| o|M^E ZoeRA-+a*M|*gf*g!KjFEMZM*,*(7Oj' );
define( 'NONCE_KEY',        '2o+]2Rs{_iS1U 9?Hgb<rE[8iF g|T`D[;]QLbOR5]f8I4Y`.HdTu~=C&-wrjEXf' );
define( 'AUTH_SALT',        'Vp(^-0jGITO*`0+)B]86@}&VlG}E_3q6}_Ug~RZn%;X!?bM 4Gh-?p D>s,IDoXU' );
define( 'SECURE_AUTH_SALT', ')YU<y66BsK)J*s LIj!u7N?3`1G@;H7p;tn[vo>x8iXqG,c<d~<$Tct2=xSLhGG]' );
define( 'LOGGED_IN_SALT',   '`EW2p@Sa#QSwneV*<HwoccF+.BGawD0t9Pd+%W.cwsQrq]l;9ESj?Hpw40/^wQ})' );
define( 'NONCE_SALT',       'jJcQX.WX<g/{RGElQ&8X9$.no{:y[.8U,Wu%ts-m`G9@^hH.PH6c*sYjJ^ZG8p7h' );

/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri true olarak ayarlayıp geliştirme sırasında hataların ekrana
 * basılmasını sağlayabilirsiniz. Tema ve eklenti geliştiricilerinin geliştirme
 * aşamasında WP_DEBUG kullanmalarını önemle tavsiye ederiz.
 * 
 * Hata ayıklama için kullanabilecek diğer sabitler ile ilgili daha fazla bilgiyi
 * belgelerden edinebilirsiniz.
 * 
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Her türlü özel değeri bu satı ile "Hepsi bu kadar" yazan satır arasına ekleyebilirsiniz. */



/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** WordPress değişkenlerini ve yollarını kurar. */
require_once ABSPATH . 'wp-settings.php';