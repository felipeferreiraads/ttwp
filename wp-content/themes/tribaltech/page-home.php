<?php get_header(); the_post(); ?>

    <header class="site-header">
        <div class="video"></div>
        <div class="container">
            <div class="grid">
                <h1>TribalTech</h1>
                <p>
                    <span class="primary">Enlighten</span>
                    <span class="primary-two">22<img src="<?php echo get_template_directory_uri();?>/assets/img/bar.png">Set<img src="<?php echo get_template_directory_uri();?>/assets/img/bar.png">18</span>
                    <span class="primary-three">Usina 5</span>
                </p>
                <div class="info">
                    <a href="#ingressos" class="tickets">&nbsp;Ingressos</a>
                    <div class="social">
                        <span>Acompanhe</span>
                        <div class="links">
                            <a href="https://www.facebook.com/TribaltechOfficial/" target="_blank"><span class="icon-facebook"></span></a>
                            <a href="https://www.instagram.com/tribaltechofficial/" target="_blank"><span class="icon-instagram"></span></a>
                            <a href="https://www.youtube.com/channel/UCMQzWo23Kyh1sLEoUPkrZtQ" target="_blank"><span class="icon-youtube"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="skew"></div>
    </header>

    <section class="timer">
        <span class="title">&nbsp;faltam</span>
        <div class="grid">
            <div class="item-time">
                <span class="time" id="days">20</span>
                <span class="measure">dias</span>
            </div>
            <div class="item-time">
                <span class="time" id="hours">08</span>
                <span class="measure">horas</span>
            </div>
            <div class="item-time">
                <span class="time" id="minutes">35</span>
                <span class="measure">min</span>
            </div>
            <div class="item-time">
                <span class="time" id="seconds">17</span>
                <span class="measure">seg</span>
            </div>
        </div>
        <a href="#artistas" class="artists">
            <div class="triangle"></div>
        </a>
        <div class="skew black"></div>
    </section>

    <section class="line-up" id="artistas">
        <div class="container">
            <div class="grid-filter">
                <h2 class="ui-title">Artistas<br />Confirmados</h2>
                <div class="filter">
                    <button class="filter-category" data-group="tribaltech">TribalTech</button>
                    <button class="filter-category" data-group="timetech">Timetech</button>
                    <button class="filter-category" data-group="supercool">Supercool</button>
                    <button class="filter-category" data-group="organic-beat">Organic Beat</button>
                    <button class="filter-category" data-group="3dttrip">3DTTRIP</button>
                    <button class="filter-category" data-group="351">351</button>
                </div>
                <div class="filter-mobile">
                    <select id="filter-mobile">
                        <option value="">Escolha o palco desejado</option>
                        <option value="tribaltech">TribalTech</option>
                        <option value="timetech">Timetech</optio>
                        <option value="supercool">Supercool</option>
                        <option value="organic-beat">Organic Beat</option>
                        <option value="3dttrip">3DTTRIP</option>
                        <option value="351">351</option>
                    </select>
                </div>
            </div>

            <div class="grid" id="grid-artists">
            <?php
                $artists = new WP_Query(['post_type' => 'artistas', 'posts_per_page' => 100, 'order' => 'ASC', 'orderby' => 'title']);
                $count = 0;
                while($artists->have_posts()): $artists->the_post();
                    $count++;
                    $multiply = ($count % 2 == 0) ? 'multiply' : '';
                    $cat = get_the_category();?>
                    <div class="artist <?php echo $multiply;?>" style="background-image: url(<?php echo get_the_post_thumbnail_url();?>)" data-groups='<?php echo json_encode([$cat[0]->slug]);?>'>
                        <div class="info">
                            <?php the_title('<span>', '</span>');?>
                        </div>
                    </div><?php
                endwhile;
                wp_reset_postdata();
            ?>
                <div class="sizer"></div>
            </div>
        </div>
        <div class="skew gray"></div>
    </section>

    <section class="history" id="sobre">
        <div class="container">
            <h2 class="ui-title right uppercase">A TribalTech&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />Conheça o festival</h2>
            <div class="grid">
                <div class="left">
                    <div class="small image-1"></div>
                    <div class="small image-3"></div>
                </div>
                <div class="right">
                    <div class="big image-2">
                        <h3>Iluminar:<br /> prover conhecimento e compreensão sobre um assunto</h3>
                    </div>
                    <div class="big text">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="skew"></div>
    </section>

    <section class="location" id="local">
        <div class="container">
            <h2 class="ui-title black uppercase">Local<br />Curitiba - Paraná</h2>
            <div class="grid">
                <div class="size-1">
                    <h3>USINA 5</h3>
                    <p>Um complexo de galpões construídos há mais de meio século, onde se fabricava açúcar, sal e café, foi revitalizado e preparado para receber grandes eventos culturais alternativos, se tornando parte viva da cidade.</p>
                </div>
                <div class="size-2 image-1"></div>
                <div class="size-2 image-2"></div>
                <div class="js-map" id="js-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3602.3466160529306!2d-49.25568128543599!3d-25.460098983774596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce4e61febbe73%3A0x152192c761c66955!2sUsina+5+-+Entrada+Principal!5e0!3m2!1spt-BR!2sbr!4v1535420427008" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <section class="tickets" id="ingressos">
        <div class="container">
            <h2 class="ui-title black uppercase right">Ingressos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />Adquira o seu</h2>
            <div class="grid">
            <?php 
                $count = 0;
                while ( have_rows('ingressos') ) : the_row();
                    $count++;
                    $value = get_sub_field('valor');
                    $gradient = ($count % 2 == 0) ? 'gradient' : '';?>
                    <div class="ticket <?php echo $gradient;?>">
                        <span class="category"><?php the_sub_field('tipo_do_ingresso');?></span>
                        <?php if ($value): ?>
                        <span class="price">R$ <i><?php echo $value;?></i></span>
                        <?php endif; ?>
                        <span class="text"><?php the_sub_field('descricao');?></span>
                        <a href="http://www.aloingressos.com.br/tribaltech-2018-enlighten.html" target="_blank" class="link">
                            <span class="buy">Comprar</span>
                            <span class="icon icon-ticket"></span>
                        </a>
                    </div><?php
                endwhile;
            ?>
            </div>
        </div>
        <div class="skew white"></div>
    </section>

    <section class="trip" id="excursoes">
        <div class="container">
            <h2 class="ui-title right uppercase">Excursões&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />Organize a sua</h2>
            <div class="trips">
                <button>Excursões credenciadas <span class="icon-check"></span></button>
                <p class="mails right">silvana@aloingressos.com.br<br>41 3042-6262</p>
            </div>            
            <div class="packages">
                <h2 class="ui-title uppercase">Pacotes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />de turismo</h2>
                <div class="wt">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/wt.png" alt="WT">
                    <span>Passagens, hotel <br>e translado</span>
                </div>
                <img src="<?php echo get_template_directory_uri();?>/assets/img/icon-excursoes.png" alt="WT" class="icons">
                <span class="info">Adquira um pacote completo contendo passagens, hospedagem, translados e ingressos.</span>
                <p class="mails">bruna@worldtour.tur.br<br>41 3045-0809</p>
            </div>
        </div>
        <div class="skew black"></div>
    </section>    

<?php get_footer(); ?>