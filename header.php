<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php echo bloginfo("charset");?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo("description")?>">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?php bloginfo("name");?><?php wp_title(" | ");?></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="<?php echo get_template_directory_uri() . '/blog.css ' ;?>" rel="stylesheet">
    <?php wp_head();?>
</head>

<body>
    <div class="blog-masthead">
       <div class="container">
            <div class="row">
                <div class="col-6 col-md-3">
                    <h1><a href="<?php echo get_page_link(220);?>"><?php bloginfo("name");?></h1></a>
                </div>
                <div class="col-md-6 nav">
                   <?php wp_nav_menu(array(
                        "menu_class" => "container",
                        "container" => "nav",
                        "container_class" => "blog-nav",
                        "theme_location" => "meu-menu",
                    ));?>
                </div>
                <div class="col-6 nav-mobile">
                    <i class="fas fa-bars"></i>
                </div>
                <div class="col-sm-12 col-md-3 search-form-top">
                    <?php get_search_form();?>
                </div>
            </div>
            <div class="accordion">
               <?php get_search_form();?>
               <?php wp_nav_menu(array(
                    "menu_class" => "container",
                    "container" => "nav",
                    "container_class" => "blog-nav",
                    "theme_location" => "meu-menu",
                ));?>
            </div>
        </div>
    </div>