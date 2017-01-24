<?php
# Database Configuration
define( 'DB_NAME', 'wp_andyrobsondsg' );
define( 'DB_USER', 'andyrobsondsg' );
define( 'DB_PASSWORD', 't0SwjwLeSDykei3fmZf4' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         ' qT.FHxI-EbKEr&:alZ8oW|-3NlhoBqisDl;NUQX_|FyySo.m45!AQy^EF)hMA_y');
define('SECURE_AUTH_KEY',  'U6ayj<G|v<Tk/z*U8Mch $dt) -)8T?iFL;+2P,t:2$z):I{_mH*ciHQ:;I3!L<+');
define('LOGGED_IN_KEY',    'WO.ui>)uwA(zW4R|*%$wz SW+t*2EFYuB~T+1%Ds1-`;Qmeun^bXkGFQMxTd(d_4');
define('NONCE_KEY',        'Rg/MDNlHg#>-&FqiQ9sE5rV-1)RZLf+q(pnA|F&6xy(ZtG<|N2m-7F~MFI?+p =p');
define('AUTH_SALT',        '%dnv,}[97Nh9(9b|ansxL[Dgj!hzS,_A1KF9x%vA3]aa0UcE_|~hJ!m_lQ|z!-:2');
define('SECURE_AUTH_SALT', '8a;hgO|3F-z6AX]V/l0CJkRFXzR)BMp,f[a;9MI-i/>}y4d}BZtVcZM*+`[M,S/K');
define('LOGGED_IN_SALT',   '_r6tm$gXOw$/3Wp|4Z[_juo*VwmS57lg&t|3Lh.A_zctGyV{2=blQU}-T2APA}q4');
define('NONCE_SALT',       '_ME6lzb~AE+Ug r{80;{vai(qWEqS:P-=l;Kgp)c6$o8vlY*JJN_>+&*=cC5g.d)');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'andyrobsondsg' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', '4fe1b5679c76d469de5b6de7797c2f80001821a1' );

define( 'WPE_CLUSTER_ID', '101013' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'andyrobsondsg.wpengine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-101013', );

$wpe_special_ips=array ( 0 => '104.196.161.96', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
