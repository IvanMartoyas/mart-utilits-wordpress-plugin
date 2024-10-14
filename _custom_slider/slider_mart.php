<?
/*
 * Plugin Name: SLider Mart
 * Description: Кастомный слайдер
 * Author: IOAN MARTOYAS
 * 
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Version:     2
 * Network:     false
 */


require_once(plugin_dir_path( __FILE__ ) .'/include__assets.php'); // подключаю js  и css
require_once(plugin_dir_path( __FILE__ ) .'/admin_side_slider.php'); // подключаю добавление слайдов в админке
require_once(plugin_dir_path( __FILE__ ) .'/admin_side_slider_metabox.php'); // добавлят метабокс в админку
require_once(plugin_dir_path( __FILE__ ) .'/create_shortcode.php'); // подключаю создание шорткода
require_once(plugin_dir_path( __FILE__ ) .'/admin_slider_update_metabox.php');// сохранение данные слайдера

/**
 * Чтобы использовать плагин отдельно от mart-utilits.php, нужно зайти в  admin_side_slider.php и поставить параметр  'show_in_menu' на true
 * он удаляет отображение custom_post_type из админского меню чтобы я его мог добавить потом в подменю плагина  mart-utilits
 */