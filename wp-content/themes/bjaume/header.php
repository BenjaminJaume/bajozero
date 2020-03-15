<!DOCTYPE html>
<html>
    <head>
        <?php wp_head(); ?>
        <script src="https://cdn.jsdelivr.net/npm/axios@0.19.2/dist/axios.min.js"></script>
    </head>

    <body>

        <header class="sticky-top" role="banner">
            <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <a class="navbar-brand" href="#">Bajo Zero</a>
                    <?php
                    wp_nav_menu( array(
                        'theme_location'    => 'menu',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'bs-example-navbar-collapse-1',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker(),
                    ) );
                    ?>
                </div>
            </nav>
        </header>