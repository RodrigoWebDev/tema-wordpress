<?php get_header();?>
    <div class="container">
    <div class="row">

        <div class="col-md-9 blog-main archive">
            <?php 
                the_archive_title("<h1 class='archive-title'>","</h1>");
                the_archive_description();
            ?>
            <hr>
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