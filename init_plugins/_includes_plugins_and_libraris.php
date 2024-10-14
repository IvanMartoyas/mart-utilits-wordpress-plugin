<?

$getting_init_data = get_libraris_data(); // get_libraris_data фукнкция из файла init_config_in_BD.php 

$getting_init_data = json_decode($getting_init_data->libraris); // в libraris храниться сохранение
// структура сначала get_libraris_data возвращает обьект, в котором храниться поле libraris в котором строка json, которую нужно декодировать

function incudce__labraris () {   // подключаю библиотеки 
    global $getting_init_data;
    $libraris = $getting_init_data->libraris;
   // echo 'libraris '.var_dump($libraris);

    if(is_null($getting_init_data)) return;

    if(is_null($libraris)) {
     //   echo 'init libraris -  not data';
        }  else {
            foreach($libraris as $key => $item){

                if($item->id == 1){ //  if jQuery is active

                    require_once(plugin_dir_path( __FILE__ ) .'/include__jQuery.php');
                    
                    if($item->is_active_publick) {
                        
                        jQuery_3_7_1_init_public();
                    }
                    if($item->is_active_admin) {
                        jQuery_3_7_1_init_admin();
                    }
          
                } 
   
                if($item->id == 2){ //  if Bootstrap is active
                    require_once(plugin_dir_path( __FILE__ ) .'/include_bootstrap.php');
                    
                    if($item->is_active_publick) {
                        
                        Bootstrap_init_public();
                    }
                    if($item->is_active_admin) {
                       Bootstrap_init_admin();
                    }
                } 
    
                
                if($item->id == 3){ //  if Vue 3 is active
                    require_once(plugin_dir_path( __FILE__ ) .'/include__vue.php');
                    
                    if($item->is_active_publick) {
                        
                        Vue_init_public();
                    }
                    if($item->is_active_admin) {
                   
                        Vue_init_admin();
                    }
                } 
             
                if($item->id == 4){ //  if Custom Grid CSS is active
                    require_once(plugin_dir_path( __FILE__ ) .'/include__custom_grid.php');
                    
                    if($item->is_active_publick) {
                        
                        Custom_grid_init_public();
                    }
                    if($item->is_active_admin) {
                        Custom_grid_init_admin();
                    }
                } 
                if($item->id == 5){ //  if Font Awesome 5 is active
                    require_once(plugin_dir_path( __FILE__ ) .'/include__font_awesome.php');
                    
                    if($item->is_active_publick) {
                        
                        Fontawesome_init_public();
                    }
                    if($item->is_active_admin) {
                        Fontawesome_init_admin();
                    }
                } 
         
            }
        }
}
function incudce__plugins () {  // подключаю плагины 
    global $getting_init_data;
    $plagins = $getting_init_data->plugins;

    if(is_null($plagins)) {
    //echo ' not data';
    } else {
        foreach($plagins as $key => $item){

            if($item->id == 1 && $item->is_active){ //  if custom slider is active
                require_once(plugin_dir_path( __FILE__ ) .'../_custom_slider/slider_mart.php');

                add_action('admin_menu', 'add_submenu_post_type_slider', 30 );

                function add_submenu_post_type_slider() 
                {
                    add_submenu_page(
                        'init_utilits', 
                        'Добавить слайдер', 
                        'Слайдер', 
                        'delete_plugins', 
                        'edit.php?post_type=martoyas_slider', // custom post type add sub menu
                    );
                }
                
            } 

            if($item->id == 2 && $item->is_active){ //  if custom types is active
                
            } 

            if($item->id == 3 && $item->is_active){ //  if custom pop up is active

                add_action('admin_menu', 'add_submenu_popUp', 60 );
                
                function add_submenu_popUp() {
                    add_submenu_page(
                        'init_utilits',
                        'Добавить PopUp', 
                        'PopUp', 
                        'delete_plugins', 
                        '?page=popup', 
                        'Add_submenu_popUp_page'
                    );
                }
                function Add_submenu_popUp_page() 
                { 
                    echo '<h1>PopUp settings</h1>'; 
                }
            } 
            
            if($item->id == 4 && $item->is_active){ //  if custom WooCommerce is active
                
            } 
        
        }
    }
}
