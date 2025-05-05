<?php
get_header();
?>
<div id="projectsHeader">
    <p class="title">EXPLORE MY PROJECTS</p>
    <p class="sous_title">And if you have any questions</p>
    <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" class="buttonPurple">CONTACT NOW</a>
    </div>
    <div class="center">
    <div id="cards">
        <div class="card">
            <div id="headerCard">
            <img id="logoSmall" src="http://localhost/wordpress/wp-content/uploads/2025/04/Lutopia__6_-removebg-preview.webp" alt="logo">
            <p class="titleCard">Animation Cubes GSAP</p>
            </div>
            <div id="imgPrincipale"></div>
            <p class="site">Site LUTOPIA</p>
            <p class="details">
            <span class="purple">Contexte </span>: Gestion de bibliothèque en ligne (emprunt et réservation), pour les enfants de 0 à 10 ans.<br></br>
            <span class="purple">Côté front </span>  SASS, JS (Vanilla, GSAP)<br>
            Interface intuitive et responsive
            </p>
            <?php
                $post = get_page_by_path( 'animation', OBJECT, 'post' );
                if ( $post ) :
                ?>
            <p class="buttonPurple"><a href="<?php echo esc_url( get_permalink( $post ) ); ?>">Discover</a></p>
            <?php endif; ?>
        </div>
        <div class="card">
            <div id="headerCard">
            <img id="logoSmall" src="http://localhost/wordpress/wp-content/uploads/2025/04/Lutopia__6_-removebg-preview.webp" alt="logo">
            <p class="titleCard">Card Do It Yourself</p>
            </div>
            <div id="imgPrincipale2"></div>
            <p class="site">Site PACHA MAMA</p>
            <p class="details">
            <span class="purple">Objectif</span> : Concevoir un site vitrine pour une organisation fictive (ou réelle), présentant ses missions, activités, événements et moyens de contact/don.<br></br>
            <span class="purple">Compétences</span> : Design axé sur la mise en valeur des messages, responsive, mise en page de contenus variés.<br>
            </p>
            <?php
                $post = get_page_by_path( 'card-do-it-yourself', OBJECT, 'post' );
                if ( $post ) :
                ?>
            <p class="buttonPurple"><a href="<?php echo esc_url( get_permalink( $post ) ); ?>">Discover</a></p>
            <?php endif; ?>
        </div>
        <div class="card">
            <div id="headerCard">
            <img id="logoSmall" src="http://localhost/wordpress/wp-content/uploads/2025/04/Lutopia__6_-removebg-preview.webp" alt="logo">
            <p class="titleCard">Carrousel</p>
            </div>
            <div id="imgPrincipale3"></div>
            <p class="site">Galerie de peinture en ligne - Livre d’Or</p>
            <p class="details">
            <span class="purple">Contexte</span> : Créer un livre d’or permettant aux utilisateurs de laisser des messages après s’être inscrits et connectés.<br></br>
            <span class="purple">Contraintes techniques</span> : Langages : PHP (sans POO), HTML, CSS, SQL, Bootstrap, MCD, MLD, Figma, RWD<br>
            </p>
            <?php
            $post = get_page_by_path( 'carrousel', OBJECT, 'post' );
            if ( $post ) :
            ?>
            <p class="buttonPurple"><a href="<?php echo esc_url( get_permalink( $post ) ); ?>">Discover</a></p>
            <?php endif; ?>
        </div>
        <div class="card">
            <div id="headerCard">
            <img id="logoSmall" src="http://localhost/wordpress/wp-content/uploads/2025/04/Lutopia__6_-removebg-preview.webp" alt="logo">
            <p class="titleCard">Animation Connection/Register</p>
            </div>
            <div id="imgPrincipale4"></div>
            <p class="site">Site LUTOPIA</p>
            <p class="details">
            <span class="purple">Contexte</span> : Gestion de bibliothèque en ligne (emprunt et réservation), pour les enfants de 0 à 10 ans.<br></br>
            <span class="purple">Côté front</span> : SASS, JS (Vanilla, GSAP)
            Interface intuitive et responsive<br>
            </p>
            <?php
            $post = get_page_by_path( 'connection-register', OBJECT, 'post' );
            if ( $post ) :
            ?>
            <p class="buttonPurple"><a href="<?php echo esc_url( get_permalink( $post ) ); ?>">Discover</a></p>
            <?php endif; ?>
        </div>
        <div class="card">
            <div id="headerCard">
            <img id="logoSmall" src="http://localhost/wordpress/wp-content/uploads/2025/04/Lutopia__6_-removebg-preview.webp" alt="logo">
            <p class="titleCard">LOGO</p>
            </div>
            <div id="imgPrincipale5"></div>
            <p class="site">Site LUTOPIA</p>
            <p class="details">
            <span class="purple">Contexte</span> : Gestion de bibliothèque en ligne (emprunt et réservation), pour les enfants de 0 à 10 ans.<br></br>
            <span class="purple">Côté front</span> : SASS, JS (Vanilla, GSAP), Inkscape
            Interface intuitive et responsive<br>
            </p>
            <?php
            $post = get_page_by_path( 'logo-lutopia', OBJECT, 'post' );
            if ( $post ) :
            ?>
            <p class="buttonPurple"><a href="<?php echo esc_url( get_permalink( $post ) ); ?>">Discover</a></p>
            <?php endif; ?>
        </div>
    </div>
    </div>
<?php
get_footer();
?>
