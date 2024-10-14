<?
/*
 * Plugin Name: Mart Utilits
 * Description: Плагин позволяет выборочно подлючать библиотеки такие как Vue js и Bootstrap, в будующем и другие. для активации вставить шорткод в functions.php do_shortcode( '[init__libraris bootstrap="true" vue="true"]') 
 * Author: IOAN MARTOYAS
 * 
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Version:     3
 * Network:     not
 */
 require_once(plugin_dir_path( __FILE__ ) .'/init_plugins/include__vue.php'); // подключаю  vue
 
 require_once(plugin_dir_path( __FILE__ ) .'/init_plugins/admin/init_post_type.php');


 // подключаю файл который библиотеки и плагины
 require_once(plugin_dir_path( __FILE__ ) .'/init_plugins/_includes_plugins_and_libraris.php');

 incudce__labraris();  //подключаю библиотеки
 incudce__plugins();   //подключаю библиотеки

/*
    // [ init__libraris fontawesome="true" bootstrap="true" vue="true"]
    add_shortcode( 'init__libraris', 'init__libraris_func' ); 

    function init__libraris_func( $atts ){ 
        ob_start(); // уберает от ошибкe когда вставляемый шорткод выводиться с начала всего контента
    
        static $already_run = false;
        if ( $already_run == true ) {
            return;
        }
        $already_run = true;
        
        
        // проверяю указанны ли в шорткоде поля, а также преобразую их из string в bool тип
        $vue          = isset($atts['vue'])? ($atts['vue'] == 'true')? true: false : false;
        $bootstrap    = isset($atts['bootstrap'])? ($atts['bootstrap'] == 'true')? true: false : false;
        $font_awesome = isset($atts['fontawesome'])? ($atts['fontawesome'] == 'true')? true: false : false;

     
        if($vue) 
        {
            
        }
        if($bootstrap) {
           require_once('init_plugins/include_bootstrap.php'); // подключаю добавление слайдов в админке
        }
        if($font_awesome) {
           require_once('init_plugins/include__font_awesome.php'); // подключаю font awesome иконки
        }

        return ob_get_clean();
    
    }  
*/
 //   require_once('init_plugins/admin/init_admin_metabox.php');