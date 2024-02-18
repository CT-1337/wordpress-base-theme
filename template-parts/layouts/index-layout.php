<div class="index">

    <div class="container" id="content">



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
