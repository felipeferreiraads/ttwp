<?php
get_header();

$products = new WP_Query(['post_type' => 'product']);
$terms = get_terms('product_cat');

if($products->have_posts()): ?>
    <section class="shop">
        <header class="shop-header">
            <a href="<?php echo site_url('/store/');?>">
                <span class="helper">
                    <h1>TribalTech </h1>
                    <span class="sub">Store</span>
                </span>
            </a>
        </header>

        <div class="container">
            <div class="filter-products">
                <select id="filter-products">
                    <option value="" selected hidden>Categorias</option>
                    <option value="todos">Todos</option>
                    <?php
                    foreach($terms as $term)
                        echo '<option value="'.$term->slug.'">'.$term->name.'</option>';
                    ?>
                </select>
            </div>

            <div class="grid" id="grid-products">
            <?php
                while($products->have_posts()): $products->the_post();
                    $product = get_product($products->post);
                    $price = $product->get_price();
                    $interest = $price * 0.0299;
                    $installment = ($price / 3) + $interest;
                    $terms = wp_get_post_terms(get_the_ID(), 'product_cat');
                    $cats = ['todos'];
                    foreach($terms as $term)
                        $cats[] = $term->slug;?>

                    <div class="product-list" data-groups='<?php echo json_encode($cats);?>'>
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
                <div class="sizer-product"></div>
            </div>
        </div>
        <div class="skew black"></div>
    </section>
<?php
endif;

get_footer();
?>
