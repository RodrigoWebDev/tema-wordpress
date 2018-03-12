<?php get_header();?>
    <div class="container">
    <div class="row">

        <div class="col-sm-9 blog-main index">
            <?php 
                if(have_posts()){
                    while(have_posts()){
                        the_post();
                        get_template_part("post");
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