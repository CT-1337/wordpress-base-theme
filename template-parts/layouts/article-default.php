<div class="blog-post article-default">

    <div class="container">

        <?php while ( have_posts() ) : the_post(); ?>

            <article <?php post_class(); ?> id="content">

                <section class="default-intro row">

                    <div class="article-details">

                        <h1 class="entry-title"><?php the_title(); ?></h1>
                        <h3 class="excerpt"><?php echo get_the_excerpt(); ?></h3>

                    </div>
                </section>

                <section class="content ">
                    <div class="primary-content">
                        <?php echo get_the_content(); ?>
                    </div>
                </section>
            </article>

        <?php endwhile; // End of the loop. ?>

    </div>

</div>
