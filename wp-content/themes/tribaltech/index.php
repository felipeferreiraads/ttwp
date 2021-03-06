<?php get_header(); ?>

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
                <span class="time" id="days">00</span>
                <span class="measure">dias</span>
            </div>
            <div class="item-time">
                <span class="time" id="hours">00</span>
                <span class="measure">horas</span>
            </div>
            <div class="item-time">
                <span class="time" id="minutes">00</span>
                <span class="measure">min</span>
            </div>
            <div class="item-time">
                <span class="time" id="seconds">00</span>
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
            <h2 class="ui-title">Artistas<br />Confirmados</h2>
            <div class="grid">
            <?php
            $artists = new WP_Query(['post_type' => 'artistas', 'posts_per_page' => 100]);
            $count = 0;
            while($artists->have_posts()): $artists->the_post();
                $count++;
                $multiply = ($count % 2 == 0) ? 'multiply' : '';?>
                <div class="artist <?php echo $multiply;?>" style="background-image: url(<?php echo get_the_post_thumbnail_url();?>)">
                    <div class="info">
                        <?php the_title('<span>', '</span>');?>
                    </div>
                </div><?php
            endwhile;
            ?>
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
            while ( have_rows('repeater_field_name') ) : the_row();
                $count++;
                $gradient = ($count % 2 == 0) ? 'gradient' : '';?>
                <div class="ticket <?php echo $gradient;?>">
                    <span class="category"><?php the_sub_field('tipo_do_ingresso');?></span>
                    <span class="price">R$ <i><?php the_sub_field('valor');?></i></span>
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
        <div class="skew black"></div>
    </section>

<?php get_footer(); ?>