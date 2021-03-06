<?php get_header();
?>
    <div class="container">
    <div class="row">

        <div class="col-md-9 blog-main contact">
            <?php 
                if(have_posts()){
                    while(have_posts()){
                        the_post();
            ?>
            <div class="blog-post">
                <div class="post-content">
                    <p ><?php the_content();?></p>
                </div>
                <hr>
                <h2>Send a message to us</h2>
                <?php echo do_shortcode('[contact-form-7 id="293" title="Formulário de contato 1"]');?>
                <hr>
                <h2>Our location</h2>
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3510.1268069289786!2d-81.56606268556897!3d28.385237701982405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88dd7ee634caa5f7%3A0xa71e391fd01cf1a0!2sWalt+Disney+World+Resort!5e0!3m2!1spt-BR!2sbr!4v1520556790798" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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