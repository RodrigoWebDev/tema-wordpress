<?php get_header();?>
    <div class="container">
    <div class="row">
        <div class="col-sm-9 blog-main">
            <h2>Error 404</h2>
            <p>Sorry, a page you are looking for does not exist <i class="far fa-frown"></i></p>
             <?php the_widget("WP_Widget_Recent_Posts", array(
                    "title" => "Last posts",
                    "number" => 5
                ));?>
        </div>
        <!-- /.blog-main -->

        <?php get_sidebar();?>
    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<?php get_footer();?>