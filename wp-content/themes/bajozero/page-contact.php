<?php

/**
 Template Name: Contact
 */

?>

<?php get_header(); ?>

<div class="bg-container-0-100">
    <div class="container py-5">
        <h1 class="display-4 text-center text-uppercase font-weight-normal page-title animated slow fadeInDown">Contact</h1>
    </div>
</div>

<div class="container-fluid my-5">
    <div class="row">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 mx-auto text-center bg-text-1">
            <p class="font-size-big text-green">
                If you want to book the venue, make a special request,
                improve anything, add a new flavor or simply say Hi!,
                we will be happy to read your message!
            </p>
        </div>
    </div>
</div>


<div class="bg-vanilla">
<div class="container bg-vanilla my-5 py-5">

<div class="row">
          <div class="col-lg-10 col-md-12 m-auto">
            <div class="row">
              <div class="col-md-4">
                <address>
                    <span>
                        <a href="/bajozero/contact/" class="btn btn-vanilla rounded-0 hvr-underline-from-center" alt="">
                            <i class="fab fa-facebook-square facebook-icon fa-2x p-2"></i>
                        </a>
                    </span>
                    
                    <span>
                        50 Metros Oeste de Restaurante Copa de Oro,<br />
                        Provincia de Guanacaste<br />
                        Liberia, Costa Rica
                    </span>
                </address>
                <address>
                  <span class="ti-email"></span>
                  <a href="mailto:example@leospa.com">example@leospa.com</a>
                  <a href="mailto:example@leospa.com">example@leospa.com</a>
                </address>
                <address>
                  <span class="ti-tablet"></span>
                  <a href="tel:+0236523653265(02)">tel:+02 365 2365 3265 (02)</a>
                  <a href="tel:+0136523653265(04)">+01 365 2365 3265 (04)</a>
                </address>
              </div>
              <div class="col-md-7 offset-md-1 mx-auto">
                  <?php echo do_shortcode( '[contact-form-7 id="169" title="Contact form"]' ); ?>
              </div>
            </div>
          </div>
        </div>

    <div class="row">
        <div class="col-12 col-md-6 align-self-center mx-auto">
            <div class="d-flex flex-column">
                <div>
                    <a href="/bajozero/contact/" class="btn btn-vanilla rounded-0 hvr-underline-from-center" alt="">
                        <i class="fab fa-facebook-square facebook-icon fa-2x p-2"></i>
                    </a>
                    <div>
                        50 Metros Oeste de Restaurante Copa de Oro,<br />
                        Provincia de Guanacaste<br />
                        Liberia, Costa Rica
                    </div>
                </div>
                <div>
                    <a href="/bajozero/contact/" class="btn btn-vanilla rounded-0 hvr-underline-from-center" alt="">
                        <i class="fab fa-facebook-square facebook-icon fa-2x p-2"></i>
                    </a>
                    <div>
                        heladeriabajozerocr@gmail.com
                    </div>
                </div>
                <div>
                    <a href="/bajozero/contact/" class="btn btn-vanilla rounded-0 hvr-underline-from-center" alt="">
                        <i class="fab fa-facebook-square facebook-icon fa-2x p-2"></i>
                    </a>
                    <div>
                        @BajoZeroCostaRica
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 mx-auto text-center">
            <?php echo do_shortcode( '[contact-form-7 id="169" title="Contact form"]' ); ?>
        </div>
    </div>
</div>
</div>

<hr class="divier my-5 w-75" />

<div class="container text-center my-5">
    <p>
        <img src="<?php echo content_url() . '/themes/bajozero/pictures/10.jpg' ?>" class="img-quote rounded shadow-picture-sm img-fluid " alt="">
    </p>

    <blockquote class="h3 blockquote">
        <p class="m-0 text-green font-italic animated pulse infinite slow">Not to like ice cream is to show oneself uninterested in food.</p>
        <footer class="blockquote-footer text-pink">Joseph Epstein</footer>
    </blockquote>

</div>

<?php get_footer(); ?>


