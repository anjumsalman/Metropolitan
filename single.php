<?php get_header(); ?>

<div id="mtr-primary" class="">

    <main id="mtr-single-main" role="main">

        <?php if ( have_posts() ) : ?>

        <?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header id="mtr-single-post-header">
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            </header>
            <div id="mtr-single-post-meta">
                <span><img src="<?php echo get_template_directory_uri(); ?>/images/time-colored.png"></span>
                <span class="meta-details"> <?php echo get_the_date() ?></span>
                <span><img src="<?php echo get_template_directory_uri(); ?>/images/comments-colored.png"></span>
                <span class="meta-details"> <?php echo get_comments_number() ?></span>
            </div>
            <div id="mtr-post-content">
                <?php the_content(); ?>
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