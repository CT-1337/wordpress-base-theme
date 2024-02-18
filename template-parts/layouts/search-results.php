<div class="search">

    <div class="container" id="content">

        <div class="entry-title-container">
            <h1 class="entry-title ">Search Results</h1>
        </div>


        <div class="searched-terms">
            <h2>You searched for: <?php echo get_search_query();?></h2>
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
