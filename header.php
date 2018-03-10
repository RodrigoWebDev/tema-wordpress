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
                <div class="col-md-6">
                   <?php wp_nav_menu(array(
                        "menu_class" => "container",
                        "container" => "nav",
                        "container_class" => "blog-nav",
                        "theme_location" => "meu-menu",
                    ));?>
                </div>
                <div class="col-md-6 text-right">
                    <?php get_search_form();?>
                </div>
            </div>
        </div>
    </div>
