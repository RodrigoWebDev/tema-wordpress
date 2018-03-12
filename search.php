<?php get_header();?>
    <div class="container">
    <div class="row">

        <div class="col-sm-9 blog-main search">
             <h1>Search results for: <?php echo get_search_query()?></h1>
             <div class="search-form">
                <?php get_search_form(); ?>
             </div>
             <hr>
            <?php 
                if(have_posts()){
                    while(have_posts()){
                        the_post();
                        get_template_part("content-search");
                    }
                    get_template_part("pagination");
                }
            ?>

        </div>
        <!-- /.blog-main -->

        <?php get_sidebar();?>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<?php get_footer();?>