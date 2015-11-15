<?php
function gunuma_login_logo() { ?>
    <style type="text/css">
        .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/login-logo.png);
            padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'gunuma_login_logo' );

function gunuma_login_logo_url() {
    return "http://www.cbdweb.net/";
}
add_filter( 'login_headerurl', 'gunuma_login_logo_url' );

function gunuma_login_logo_url_title() {
    return 'Gunuma Site Administration Login';
}
add_filter( 'login_headertitle', 'gunuma_login_logo_url_title' );