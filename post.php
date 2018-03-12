<div <?php post_class("blog-post");?>>
    <div class="post-image">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail(); ?>
        </a>
    </div>
    <h2 class="blog-post-title">
        <a title="<?php the_title_attribute();?>" href="<?php the_permalink();?>">
            <?php the_title();?>
        </a>
    </h2>
    <p class="blog-post-meta">
        <?php echo get_the_date();?> by
        <?php the_author_posts_link();?> -
        <?php comments_popup_link("Sem comentários", "1 comentário", "% comentários"); ?>
    </p>
    <p><span>Categories:</span>
        <?php the_category(", ");?>
    </p>
    <p>
        <?php the_tags("<span>Tags:</span> ", ", ");?></p>
    <p>
        <?php the_excerpt();?>
    </p>
    <hr>
</div>
