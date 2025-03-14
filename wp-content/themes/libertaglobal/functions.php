<?php
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('menus');

// THEME SETTINGS 
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Configurações do Site',
        'menu_title'    => 'Opções do Tema',
        'menu_slug'     => 'site-config',
        'capability'    => 'edit_posts',
        'parent_slug'   => 'themes.php', 
        'redirect'      => false
    ));
}

// MENU
function meu_tema_registrar_menus() {
    register_nav_menus(
        array(
            'menu-principal' => 'Menu Principal'
        )
    );
}
add_action('after_setup_theme', 'meu_tema_registrar_menus');

function adicionar_classes_personalizadas_no_menu($classes, $item, $args) {
    $estilo = get_field('style', $item); 
    if ($estilo) {
        $classes[] = esc_attr($estilo); 
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'adicionar_classes_personalizadas_no_menu', 10, 3);


// CUSTOM LOGIN
function hide_page_from_users_list($query) {
    if (is_admin() && $query->is_main_query() && isset($query->query_vars['post_type']) && $query->query_vars['post_type'] == 'page') {
        $query->set('post__not_in', array(91));
    }
}
add_action('pre_get_posts', 'hide_page_from_users_list');


?>