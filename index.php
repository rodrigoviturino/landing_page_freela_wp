<?php get_header(); ?>

<!-- Introduction -->
<section class="intro">
    <div class="container">
      <?php get_template_part("template_parts/home", "introduction"); ?>
    </div>
</section>
<!-- end Introduction -->

<!-- About -->
<section class="about">
    <div class="container">
      <?php get_template_part("template_parts/home", "about"); ?>
    </div>
</section>
<!-- end About -->

<!-- Services -->
<section class="services">
    <div class="container">
        <div class="services__block-title">
            <h2 class="title">Services</h2>
            <p class="desc">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
        </div>
          <?php get_template_part("template_parts/home", "services"); ?>
    </div>
</section>
<!-- end Services -->

<!-- Portfolio -->
<section class="portfolio">
    <div class="container">
      <?php get_template_part("template_parts/home", "portfolio"); ?>

<!-- end Portfolio -->

<!-- Call to Action -->
<section class="cta">
    <span class="overlay"></span>
    <div class="container">
      <?php get_template_part("template_parts/home", "call-to-action"); ?>
    </div>
</section>
<!-- end Call to Action -->

<!-- Pricing -->
<section class="pricing">
    <div class="container">
        <div class="pricing__block-title">
            <h2>Plans and Pricing</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam placerat est quis lorem tristique aliquet. Cras quis tristique felis, vitae eleifend sapien.</p>
        </div>
        <?php get_template_part("template_parts/home", "pricing"); ?>
    </div>
</section>
<!-- end Pricing -->

<!-- Customers -->
<section class="customers">
    <div class="container">
        <div class="customers__block-title">
            <h2>Our Clients</h2>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
        </div>
        <?php get_template_part("template_parts/home", "customers"); ?>
    </div>
</section>
<!-- end Customers -->

<!-- Contact -->
<section class="contact">
    <div class="container">
        <div class="contact__block-title">
            <span>READY TO DO THIS</span>
            <h2>Let's get to work</h2>
            <!-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p> -->
        </div>
        <?php get_template_part("template_parts/home", "contact"); ?>
    </div>
</section>
<!-- end Contact -->

<?php get_footer(); ?>