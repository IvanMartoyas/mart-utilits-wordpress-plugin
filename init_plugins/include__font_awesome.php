<?php
// подлкючаю стили и скрипты

function Fontawesome_init_public() {
    function Add_fontawesome_init_public() {
        wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/47a7a67246.js');
    }
    add_action( 'wp_head', 'Add_fontawesome_init_public' );    // подключаю поддержку на клиенте
}
function Fontawesome_init_admin() {
    function Add_fontawesome_init_admin() {
        wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/47a7a67246.js');
    }
    add_action( 'admin_enqueue_scripts', 'Add_fontawesome_init_admin' ); // подключаю поддержку в админке
}

