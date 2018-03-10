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
            <h2>Error 404</h2>
            <p>Sorry, a page you are looking for does not exist <i class="far fa-frown"></i></p>
        </div>
        <!-- /.blog-main -->

        <?php get_sidebar();?>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<?php get_footer();?>