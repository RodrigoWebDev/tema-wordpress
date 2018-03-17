<?php

require get_template_directory() . "/inc/customizer.php";
remove_action("wp_head","wp_generator");
register_nav_menus(
    array(
        "meu-menu" => "Menu principal"
    )
);

function theme_slug_widgets_init(){
    if (function_exists("register_sidebar")){
        register_sidebar(array(
            "name" => "Top Sidebar",
            "id" => "top-sidebar",
            "before_widget" => "<div class='sidebar-module'>",
            "after_widget" => "</div>",
            "before_title" => "<h4>",
            "after_title" => "</h4>"
        ));
         register_sidebar(
            array(
                'name' => 'Redes Sociais',
                'id' => 'social-medias',
                'description' => 'Icones das redes sociais',
                'before_widget' => '<div class="social-media">',
            )
        );

    }
}

add_action("widgets_init", "theme_slug_widgets_init");

add_theme_support("post-thumbnails");
add_theme_support("html5",array("search-form"));

function show_phone(){
    if(wp_is_mobile()){
        $result = '<div class="phone"><p>Call now: <a href="tel:000000000">0000-000</a></p></div>';
    }
    return $result;
}

add_shortcode("myphone","show_phone");

?>