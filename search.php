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
                <h2 class="blog-post-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                <p><span>Categories:</span> <?php the_category(", ");?></p>
                <p><?php the_excerpt();?></p>
            </div>
            <?php
                    }
                    the_posts_pagination(
                    array(
                        "prev_text" => "Previous",
                        "next_text" => "Next",
                        "screen_reader_text" => "Post navigation" 
                    )
                );
            ?>
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