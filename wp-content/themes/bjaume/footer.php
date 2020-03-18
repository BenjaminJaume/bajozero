<?php wp_footer(); ?>

<footer class="container-fluid py-5 text-center">

    <p>
        <?php echo wp_get_attachment_image(33, 'logo-footer', ''); ?>
    </p>
    <p>

        <div class="test">
            <span class="text"> Settings Menu </span>
        </div>

        <p>
            <i class="far fa-user"></i> <!-- uses regular style -->
        </p>

        <p>
            <i class="fal fa-user"></i> <!-- uses light style -->
        </p>
        <p>

            <i class="fab fa-github-square"></i> <!-- uses brands style -->
        </p>
    </p>

</footer>


</body>
</html>