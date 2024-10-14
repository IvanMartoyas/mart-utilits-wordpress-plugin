<?php
// подлкючаю стили и скрипты

function Vue_init_public() {
    function Add_Vue_init_public() {
        wp_enqueue_script('Vue', plugins_url('libraris/vue/Vue.js', __FILE__), '3.0');
    }
    add_action( 'wp_head', 'Add_Vue_init_public' );    // подключаю поддержку на клиенте
}

function Vue_init_admin () {
   
    function Add_Vue_init_admin() {
        wp_enqueue_script('Vue', plugins_url('libraris/vue/Vue.js', __FILE__),'3.0');
    }
    add_action( 'admin_enqueue_scripts', 'Add_Vue_init_admin' ); // подключаю поддержку в админке
}

