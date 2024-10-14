<?php
global $wpdb;

// default__init несли нет данных в бд вернёт их
$default__init =  " {
    libraris: [
        {
            id: 1,
            name: 'jQuery',
            is_active_publick: true,
            is_active_admin: true,
            description: 'jQuery - это быстрая, небольшая и многофункциональная библиотека JavaScript.',
        },
        {
            id: 2,
            name: 'Bootstrap',
            is_active_publick: false,
            is_active_admin: false,
            description: 'Мощный, расширяемый и полнофункциональный инструментарий для интерфейса. Создавайте и настраивайте с помощью Sass, используйте готовые grid-систему и компоненты и воплощайте проекты в жизнь с помощью мощных плагинов JavaScript.',
        },
        {
            id: 3,
            name: 'Vue 3',
            is_active_publick: true,
            is_active_admin: true,
            description: 'Прогрессивный JavaScript-фреймворк',
        },
        {
            id: 4,
            name: 'Custom Grid CSS',
            is_active_publick: false,
            is_active_admin: true,
            description: 'Поддержка кастомной сетки',
        },
        {
            id: 5,
            name: 'Font Awesome 5',
            is_active_publick: false,
            is_active_admin: true,
            description: 'Font Awesome - это интернет-библиотека иконок и инструментарий, которыми пользуются миллионы дизайнеров, разрабов и создателей контента.',
        },
    ],
    plugins: [
        {
            id: 1,
            name: 'Custom slider',
            is_active: true,
            description: 'Добавляет в админ панель слайдер',
        },
        {
            id: 2,
            name: 'Custom types',
            is_active: false,
            description: 'Добавляет в админ панель возможность создавать свои типы данных и выводить их на сайте',
        },
        {
            id: 3,
            name: 'Custom Pop-up Windows',
            is_active: false,
            description: 'Добавляет возможность создавать pop-up окна',
        },
        {
            id: 4,
            name: 'WooCommerce',
            is_active: false,
            description: 'Добавляет дополнительные возможности для работы c WooCommerce',
        },
    ]
}"; 
// Проверяю на сущетсвование таблици в бд
// $table_name = 'init__libraris';
// if ( $wpdb->get_var( $wpdb->prepare( "SHOW TABLES LIKE %s", $table_name ) ) === $table_name ) {
//     echo 'Table exists' . ': ' . print_r( $table_name, true );
// } else {
//     echo  'Table does not exist' . ': ' . print_r( $table_name, true );
// }
$table_name = 'init_libraris';
$table_name = $wpdb->get_blog_prefix().$table_name; // добавляет приписку какая у всех таблиц в БД, по умолчанию _wp



if ( $wpdb->get_var( $wpdb->prepare( "SHOW TABLES LIKE %s", $table_name ) ) === $table_name ) { // если такая таблица существует
    
    //  $result вернёт массив обьектов через count могу узнать их количество
    $result = $wpdb->get_results( "SELECT * FROM $table_name WHERE product_id = 1");

    // echo 'data '.count($result);
    
    if(count($result) > 0) {

        $result = $result[0]->libraris; // если данные существуют

        // СОХРАНЕНИЕ ДАННЫХ
        if(isset($_POST['init__data'])) { // если в $_POST['init__data'] есть данные то я их сохраняю
            $wpdb->update( $table_name,
                [ 'libraris' => $_POST['init__data'] ],
                [ 'product_id' => 1 ] 
            );
           // echo ' данные сохранены';
        }
  
    } else {
        // если первой записи с сохранением ещё нет то содаю её
        // в бд будет сохранна всего одна запись с id 1
        
        if(isset($_POST['init__data'])) { // создаю запись с данными

            $done = $wpdb->insert($table_name, [ 'product_id' => 1, 'libraris' => $_POST['init__data'] ] );
        // echo 'данные сохранины';
        } else {
        //  echo 'not data';
        }

    }

    
} else {
    
    // если нет таблици (init_libraris), то создаю
    
    function create_table($name) {
        global $wpdb;
    
        require_once ABSPATH . 'wp-admin/includes/upgrade.php';

   
        $sql = "CREATE TABLE {$name} (
            id  bigint(20) unsigned NOT NULL auto_increment,
            product_id     BIGINT(20)   NOT NULL default 0  COMMENT 'id записи',
            libraris LONGTEXT NOT NULL default '' COMMENT 'данные',
            PRIMARY KEY  (id))";
    
        dbDelta($sql);
    }
    
    create_table($table_name );

 //   echo 'таблица созданна';
}


function get_libraris_data() { // функция достаёт данные сохранение из БД
    global $wpdb;
    $table_name = 'wp_init_libraris';
    // в бд сохраненна всего одна запись с id 1
    $result = $wpdb->get_results( "SELECT * FROM $table_name WHERE product_id = 1");
    if(count($result) > 0) {// если данные существуют
        $result = $result[0]; // возвращаю сохранение
        if($result == "") {
            return null;
        }
    } else {
        return null; // если данных нет вернёт null и тогда из компонента подставятся данные по умолчанию
    }
    
    return $result;     
}
