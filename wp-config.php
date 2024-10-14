define( 'DISALLOW_FILE_EDIT', true );

define( 'DISALLOW_FILE_MODS', true );

define('FORCE_SSL_LOGIN', true);
define('FORCE_SSL_ADMIN', true);

function no_wordpress_login_errors() {
    return "This website is protected.";
}
add_filter( 'login_errors', 'no_wordpress_login_errors' );

error_reporting( 0 );
ini_set( 'display_errors', 0 );

#define( 'WP_AUTO_UPDATE_CORE', true );