<?php
get_header();

if( have_posts() ): ?>
    <section class="shop">
        <header class="shop-header">
            <span class="helper">
                <h1>TribalTech </h1>
                <span class="sub">Store</span>
            </span>
        </header>

        <div class="container">
            <div class="grid">
                <?php woocommerce_content(); ?>
            </div>
        </div>
        <div class="skew black"></div>
    </section>
<?php
endif;

get_footer();
?>
