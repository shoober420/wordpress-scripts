add_filter('json_enabled', '__return_false');

/* 
 * Hide scripts and styles version
 * */
function remove_wp_version_strings( $src ) {
    global $wp_version;
    parse_str( parse_url( $src, PHP_URL_QUERY ), $query );
    if ( !empty( $query['ver'] ) && $query['ver'] === $wp_version ) {
        $src = remove_query_arg( 'ver', $src );
    }
    return $src;
} 
add_filter( 'script_loader_src', 'remove_wp_version_strings' );
add_filter( 'style_loader_src', 'remove_wp_version_strings' );

/*
 * Hide tag generator from headings
 * */
function remove_wp_generator() {
    return '';
}
add_filter( 'the_generator', 'remove_wp_generator' );

add_filter( 'auto_update_plugin', '__return_true' );

add_filter( 'auto_update_theme', '__return_true' );
