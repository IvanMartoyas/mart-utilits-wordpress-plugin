<?php
// подлкючаю стили и скрипты

function jQuery_3_7_1_init_public () {
    function Add_jQuery_3_7_1_init_public() {
        wp_enqueue_script('jQuery', plugins_url('libraris/jQuery/jquery-3.7.1.min.js', __FILE__), '3.7.1', true);
    }
    add_action( 'wp_head', 'Add_jQuery_3_7_1_init_public' );    // подключаю поддержку на клиенте
}
function jQuery_3_7_1_init_admin() {
    function Add_jQuery_3_7_1_init_admin() {
        wp_enqueue_script('jQuery', plugins_url('libraris/jQuery/jquery-3.7.1.min.js', __FILE__), '3.7.1', true);
    }
    add_action( 'admin_enqueue_scripts', 'Add_jQuery_3_7_1_init_admin' ); // подключаю поддержку в админке
}
