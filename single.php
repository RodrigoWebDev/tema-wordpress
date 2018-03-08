<?php get_header();?>
    <div class="container">

    <div class="blog-header">
        <h1 class="blog-title"><a href="<?php echo get_page_link(220);?>">The Bootstrap Blog</a></h1>
        <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
    </div>

    <div class="row">

        <div class="col-sm-8 blog-main">
            <?php 
                if(have_posts()){
                    while(have_posts()){
                        the_post();
            ?>
            <div class="blog-post">
                <h2 class="blog-post-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                <p class="blog-post-meta"><?php echo get_the_date();?> by <a href="<?php the_permalink();?>"><?php the_author();?></a></p>
                <p><?php the_content();?></p>
            </div>
            <?php
                    }
                }
            ?>
            <nav>
                <ul class="pager">
                    <li><a href="#">Previous</a></li>
                    <li><a href="#">Next</a></li>
                </ul>
            </nav>

        </div>
        <!-- /.blog-main -->

        <?php get_sidebar();?>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<?php get_footer();?>