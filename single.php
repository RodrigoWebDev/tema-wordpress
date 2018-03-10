<?php get_header();?>
    
    <div class="blog-header">
       <div class="container">
           <h1 class="blog-title"><a href="<?php  echo get_page_link(220); ?>"><?php bloginfo("name"); ?></a></h1>
            <p class="lead blog-description"><?php bloginfo("description")?></p>
        </div>
    </div>
    
    <div class="container">
    <div class="row">

        <div class="col-sm-9 blog-main">
            <?php 
                if(have_posts()){
                    while(have_posts()){
                        the_post();
            ?>
            <div class="blog-post">
                <h2 class="blog-post-title"><?php the_title();?></h2>
                <p class="blog-post-meta"><?php echo get_the_date();?> by <a href="<?php the_permalink();?>"><?php the_author();?></a></p>
                <p><?php the_content();?></p>
            </div>
            <?php
                    }
            wp_link_pages();
            ?>
            <?php
                }
            ?>
            <hr>
            <?php comments_template();?>


        </div>
        <!-- /.blog-main -->

        <?php get_sidebar();?>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<?php get_footer();?>