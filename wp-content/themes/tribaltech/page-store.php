<?php
get_header();

$products = new WP_Query(['post_type' => 'product']);

if($products->have_posts()): ?>
    <section class="shop">
        <header class="shop-header">
            <span class="helper">
                <h1>TribalTech </h1>
                <span class="sub">Store</span>
            </span>
        </header>

        <div class="container">
            <div class="grid">
            <?php
                while($products->have_posts()): $products->the_post();
                    $product = get_product($products->post);
                    $price = $product->get_price();
                    $interest = $price * 0.0299;
                    $installment = ($price / 3) + $interest;?>
                    <div class="product-list">
                        <figure>
                            <a href="<?php the_permalink();?>">
                                <img src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php get_the_title();?>">
                            </a>
                        </figure>
                        <a href="<?php the_permalink();?>" class="button">Comprar agora</a>
                        <div class="price-container">
                            <span class="price">
                                <?php echo $product->get_price_html();;?>
                            </span>
                            <span class="installment">
                                <?php echo 'ou 3x de R$ '.str_replace('.', ',', money_format('%.2n', $installment));?>
                            </span>
                        </div>
                    </div>
                <?php
                endwhile;
            ?>
            </div>
        </div>
        <div class="skew black"></div>
    </section>
<?php
endif;

get_footer();
?>
