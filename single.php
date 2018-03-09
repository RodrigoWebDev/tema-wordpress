<?php get_header();?>
    
    <div class="blog-header">
       <div class="container">
           <h1 class="blog-title"><a href="<?php echo get_page_link(220);?>">The Minimalist Blog</a></h1>
            <p class="lead blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
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
            ?>
            <div class="pager">
                <?php wp_link_pages();?>
            </div>
            <?php
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