<?php get_header();
?>
    <div class="container">
    <div class="row">

        <div class="col-sm-9 blog-main about">
            <?php 
                if(have_posts()){
                    while(have_posts()){
                        the_post();
            ?>
            <div class="blog-post">
                <p><?php the_content();?></p>
            </div>
            <?php
                    }
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