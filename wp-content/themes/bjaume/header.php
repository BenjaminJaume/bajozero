<!DOCTYPE html>
<html>
    <head>
        <?php wp_head(); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.jsdelivr.net/npm/axios@0.19.2/dist/axios.min.js"></script>
        
        <?php global $template; console(basename($template)); ?>

    </head>

    <body>

        <header class="sticky-top" role="banner">
            <nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
                <div class="container">
                    <a class="navbar-brand text-uppercase mx-auto" href="/bajozero" style="padding-left: 56px">
                        <?php echo wp_get_attachment_image(33, 'navbar-logo', '', ["class" => "align-middle"]); ?>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <?php
                    wp_nav_menu( array(
                        'theme_location'    => 'menu',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse text-uppercase',
                        'container_id'      => 'navbar',
                        'menu_class'        => 'nav navbar-nav mx-auto',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker(),
                    ) );
                    ?>
                </div>
            </nav>
        </header>