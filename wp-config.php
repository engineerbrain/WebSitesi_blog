<?php
define( 'WP_CACHE', true );
/**
 * WordPress için başlangıç ayar dosyası.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * Bu dosya şu ayarları içerir:
 * 
 * * MySQL ayarları
 * * Gizli anahtarlar
 * * Veritabanı tablo ön eki
 * * ABSPATH
 * 
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri servis sağlayıcınızdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'wordpressabc' );

/** MySQL veritabanı kullanıcısı */
define( 'DB_USER', 'root' );

/** MySQL veritabanı parolası */
define( 'DB_PASSWORD', '' );

/** MySQL sunucusu */
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
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'G0*::nfZ#+jx+L<7/~Wvv]?OReA(`D:zQz0r7/<fzlzjR|jYbE<8 ?.b?a:`UI~m' );
define( 'SECURE_AUTH_KEY',  'H!cO2HvGj^ZvltU /0YLh)`m}8e(ZeGQrxytHl2A 7yB$x`+KpfG>RiHEL&(_M!U' );
define( 'LOGGED_IN_KEY',    '1b5l--1u<~.<nj7BL_GB4c|nj]W2WA/Hpwyy,qnY6e+9(YX:[.W&a,H*,cs=`Lk>' );
define( 'NONCE_KEY',        '2h+[%T#<pL]X6#kP7qu~]0bTJ+8Y,-!,3Bw`<w/LT1HVB+FgF! G8mTyz<+r|UDg' );
define( 'AUTH_SALT',        'Xk=jjms%oe3MkT~bP==[m_r-Rn8+a~/).@<o+;G1Go;DtFQng] )Z7<+~cpZ: b:' );
define( 'SECURE_AUTH_SALT', 'gyZyz`-=#6f E|C6;)6q::0oG$*i!(QAS{pLL>[j<vtF?]FR4{}DIoY)$5@`aQp`' );
define( 'LOGGED_IN_SALT',   'h4^QlpHc(FBdQBTWd} uR~n*J(I>hG%::4R4&}8YX9JFsy~L!|%%/})S9DCXrQ`*' );
define( 'NONCE_SALT',       'w}15}m@*05tpD6s+{?eG}p:mdVnnQ,w ye ;c;p4Zi|h+RtC[|Ar :_q:s[_NPS=' );

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
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 * 
 * Hata ayıklama için kullanabilecek diğer sabitler ile ilgili daha fazla bilgiyi
 * belgelerden edinebilirsiniz.
 * 
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** WordPress değişkenlerini ve yollarını kurar. */
require_once ABSPATH . 'wp-settings.php';