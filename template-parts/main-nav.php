<div class="nav-wrapper">

    <div class="top-nav">

        <div class="search">
            Search bar here
        </div>

        <div class="logo-container">
            <?php the_custom_logo() ; ?>
        </div>

        <div class="nav-logos">
            Nav logos here
        </div>

    </div>

    <div class="main-nav">

        <nav class="navbar">

            <?php
                wp_nav_menu(
                    array(
                        'theme_location'  => 'main',
                        'depth'           => 3,
                        'container'       => 'div',
                        'container_class' => '',
                        'menu_class'      => 'navbar-nav',
                        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'          => new WP_Bootstrap_Navwalker()
                    )
                );
            ?>
            
        </nav>

    </div>

</div>
