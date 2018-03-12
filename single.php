<?php get_header();?>
    <div class="container">
    <div class="row">

        <div class="col-sm-9 blog-main single">
            <?php 
                while(have_posts()){
                    the_post();
            ?>
            <div <?php post_class("blog-post"); ?>>
                <h2 class="blog-post-title"><?php the_title();?></h2>
                <p class="blog-post-meta"><?php echo get_the_date();?> by <?php the_author_posts_link();?></p>
                <p><span>Categories:</span> <?php the_category(", ");?></p>
                <p><?php the_tags("<span>Tags:</span> ", ", ");?></p>
                <hr>
                <p><?php the_content();?></p>
            </div>
             <div class="pager">
                <div>
                    <?php previous_post_link(); ?>
                </div>
                <div>
                    <?php next_post_link(); ?>
                </div>
            </div>
            <hr>
            <?php
              comments_template();
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