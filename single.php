<?php get_header(); ?>

<div id="mtr-primary" class="">

    <main id="mtr-main" role="main">

        <?php if ( have_posts() ) : ?>

        <?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header id="mtr-single-post-header">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            </header>
            <div id="mtr-post-content">
                <?php the_content(); ?>
            </div>
        </article>

        <?php endwhile; ?>

        <?php else : ?>


        <?php endif; ?>

    </main>

    <div id="mtr-sidenav" role="navigation">

    </div>

</div>

<?php get_footer(); ?>