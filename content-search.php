<div <?php post_class("blog-post");?>>
    <h2 class="blog-post-title"><a title="<?php the_title_attribute(); ?>" href="<?php the_permalink();?>"><?php the_title();?></a></h2>
    <?php 
    if (has_category()) { ?>
    <p><span>Categories:</span> <?php the_category(", ");?></p>
    <?php
	}
    ?>
    <div class="post-content">
        <p ><?php the_excerpt();?></p>
    </div>
   
</div>