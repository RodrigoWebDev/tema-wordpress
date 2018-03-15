<?php
remove_action("wp_head","wp_generator");
register_nav_menus(
    array(
        "meu-menu" => "Menu principal"
    )
);

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

add_theme_support("post-thumbnails");
add_theme_support("html5",array("search-form"));

?>