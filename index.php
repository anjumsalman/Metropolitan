<?php get_header(); ?>

<div id="mtr-primary" class="">

    <main id="mtr-main" role="main">

        <?php if ( have_posts() ) : ?>

        <?php while ( have_posts() ) : the_post(); ?>
        <?php global $post; $random = rand(1,100)?>
        <?php $src= wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array(600,500), false, '' ); ?>

        <article class="mtr-brick <?php echo get_post_class(); if((get_post_meta(get_the_ID(), 'width', true)) == 'wide-brick'){echo ' mtr-wide-brick';}?>" id="post-<?php the_ID(); ?>" style="background: url(
                <?php echo $src[0]; ?> ) !important; background-size: cover;">
            <header class="mtr-post-header">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            </header>
            <div class="mtr-post-meta">
                <span>
                    <object width="15px" height="15px" type="image/svg+xml" data="<?php echo get_template_directory_uri(); ?>/images/time.svg">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/time.png">
                    </object>                
                </span>
                <span class="meta-details"> <?php echo get_the_date() ?></span>
                <span>
                    <object width="15px" height="15px" type="image/svg+xml" data="<?php echo get_template_directory_uri(); ?>/images/comments.svg">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/comments.png">
                    </object> 
                </span>
                <span class="meta-details"> <?php echo get_comments_number() ?></span>
                <div class="read-more">
                    <span><a href="<?php the_permalink(); ?>">Read More</a></span>
                </div>
            </div>
        </article>

        <?php endwhile; ?>

        <?php else : ?>


        <?php endif; ?>

    </main>

    <div id="mtr-sidenav" role="navigation">
        <ul>
            <li id="close-menu"><img src="<?php echo get_template_directory_uri(); ?>/images/back.png"></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/flask.png"></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/tech.png"></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/images/ball.png"></li>
        </ul>
    </div>

    <div id="mtr-sidebar">
        <img id="close-sidebar" src="<?php echo get_template_directory_uri(); ?>/images/close.png">
    </div>

</div>

<?php get_footer(); ?>