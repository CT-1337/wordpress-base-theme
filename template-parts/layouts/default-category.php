
<div class="category-archives">

    <div class="container" id="content">

        <?php
            $cat_base = get_option( 'category_base' ); $name = ( !empty($cat_base) ) ? $cat_base : 'Blog';
        ?>


        <div class="entry-title-container">
            <h1 class="category cat-title">
                <?php echo ( is_home() ) ? ucfirst($name) : single_term_title('', false); ?>
            </h1>
        </div>


        <section class="articles">

            <div class="row article-list">

                <?php

                    if ( have_posts() ) {

                        while ( have_posts() ) : the_post();

                            get_template_part( 'template-parts/post/category-post', null, array(
                                'id' => get_the_ID(),
                            ));

                        endwhile; // End of the loop.

                        echo {{theme_name}}_theme_pagination('', get_query_var('paged'));

                    } else {

                        get_template_part( 'template-parts/content', 'none' );

                    }

                ?>
            </div>

        </section>

    </div>
</div>
