<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner">
            <video autoplay loop muted poster="<?php echo get_template_directory_uri() . '/assets/images/banner.png'; ?>">
                <source src="<?php echo get_stylesheet_directory_uri() . '/Studio_Koukaki_video.mp4'; ?>" type="video/mp4">
            </video>
            <img class="float" data-center="position: fixed" data-300="position: relative; top: 200px" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
        </section>
        <section id="story" class="story">
            <h2><span>L'histoire</span></h2>
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>

            <?php get_template_part( 'characters' ); ?>

            <article id="place">
                <div>
                    <h3><span>Le Lieu</span></h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>
                <div class="nuage">
                    <img class="nuage__petit" src="<?php echo get_stylesheet_directory_uri() . '/images/little_cloud.png'; ?> " data-bottom-top="right: 300px" data-top-bottom="right: 0px" alt="Petit nuage">
                    <img class="nuage__gros" src="<?php echo get_stylesheet_directory_uri() . '/images/big_cloud.png'; ?> " data-bottom-top="right: 300px" data-top-bottom="right: 0px" alt="Gros nuage">
                </div>
            </article>
        </section>


        <section id="studio">
            <h2><span>Studio Koukaki</span></h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
            </section>
    </main><!-- #main -->

<?php
get_footer();
