<?
function Bootstrap_init_public () {
    function Add_Bootstrap_init_public() {
        wp_enqueue_script('Bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', array('jQuery'), '5.0', true);
        wp_enqueue_style('Bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
    }
    add_action( 'wp_head', 'Add_Bootstrap_init_public' );    // подключаю поддержку на клиенте
}
function Bootstrap_init_admin() {
    function Add_Bootstrap_init_admin() {
        wp_enqueue_script('Bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', array('jQuery'), '5.0', true);
        wp_enqueue_style('Bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
    }
    add_action( 'admin_enqueue_scripts', 'Add_Bootstrap_init_admin' );  // подключаю поддержку в админке
}

