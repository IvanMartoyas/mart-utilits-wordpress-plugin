<?php
// подлкючаю стили и скрипты

function Custom_grid_init_public() {
    function Add_custom_grid_init_public() {
        wp_enqueue_style('custom_grid', plugins_url('libraris/css/grid.css', __FILE__ ), array(),'2.0','all ');
    }
    add_action( 'wp_head', 'Add_custom_grid_init_public', 25 ); // подключаю поддержку на клиенте
}
function Custom_grid_init_admin() {
    function Add_custom_grid_init_admin() {
        wp_enqueue_style('custom_grid', plugins_url('libraris/css/grid.css', __FILE__ ), array(),'2.0','all ');
    }
    add_action( 'admin_enqueue_scripts', 'Add_custom_grid_init_admin', 25 ); // подключаю поддержку в админке
}




