<?php
get_header();

?>
<div id='qualities'>
    <div id="Qfirst" class="quality-item">
        <img class="cubeQ" src="http://localhost/wordpress/wp-content/uploads/2025/04/cube1.webp" alt="cube">
        <p class="quality first">CREATION</p>
        <img id="creation" src="http://localhost/wordpress/wp-content/uploads/2025/04/creation.webp" alt="cupcake creation">
    </div>
    <div id="Qsecond" class="quality-item">
        <img class="cubeQ" src="http://localhost/wordpress/wp-content/uploads/2025/04/cube1.webp" alt="cube">
        <p class="quality second">PASSION</p>
        <img id="passion" src="http://localhost/wordpress/wp-content/uploads/2025/04/passion.webp" alt="cupcake passion">
    </div>
    <div id="Qthird" class="quality-item">
        <img class="cubeQ" src="http://localhost/wordpress/wp-content/uploads/2025/04/cube1.webp" alt="cube">
        <p class="quality third">ORIGINALITY</p>
        <img id="originality" src="http://localhost/wordpress/wp-content/uploads/2025/04/originality.webp" alt="cupcake original">
    </div>
    <div id="Qfourth" class="quality-item">
        <img class="cubeQ" src="http://localhost/wordpress/wp-content/uploads/2025/04/cube1.webp" alt="cube">
        <p class="quality fourth">OPTIMISATION</p>
        <img id="opti" src="http://localhost/wordpress/wp-content/uploads/2025/04/optimisation.webp" alt="cupcake">
    </div>
</div>
<div id="AboutMe">
        <p class="titleAboutMe">ABOUT ME</p>
        <p class="bodyAboutMe">Passionnée par le code et le design, j’aime transformer des idées en expériences interactives fluides et ludiques.</p>
        <a class="buttonPurple" href="<?php echo get_permalink(get_page_by_path('about')); ?>">Read more</a>
</div>
<div id="projectsPreview">
        <a href="<?php echo get_permalink(get_page_by_path('project')); ?>" class="buttonPurple">More projects</a>
        <div id="firstProjectPreview">
            <img class="round1"src="http://localhost/wordpress/wp-content/uploads/2025/04/Ellipse-2.webp" alt="visage peint">
            <p class="titlePPreview">De la galerie de peinture</p>
        </div>
        <div id="secondProjectPreview">
            <p class="titlePPreview">A la protection de la nature</p>
            <img class="round2"src="http://localhost/wordpress/wp-content/uploads/2025/04/Ellipse-3.webp" alt="do it yourself">
        </div>
    </div>
<div id="grille">
        <img src="http://localhost/wordpress/wp-content/uploads/2025/04/Group-21.webp" alt="UI UX design">
        <img src="http://localhost/wordpress/wp-content/uploads/2025/04/Group-22.webp" alt="frontend">
        <img src="http://localhost/wordpress/wp-content/uploads/2025/04/Group-23-2.webp" alt="backend">
        <div id="animationCube">
        <div class="scene">
            <div class="cube">
                <div class="face front"><img src="http://localhost/wordpress/wp-content/uploads/2025/04/vecteezy_javascript-logo-png-javascript-icon-transparent-png_27127463-scaled.webp" alt="javascript"></div>
                <div class="face back"></div>
                <div class="face left"></div>
                <div class="face right"></div>
                <div class="face top"></div>
                <div class="face bottom"></div>
            </div>
        </div>
        </div>
        <img src="http://localhost/wordpress/wp-content/uploads/2025/04/Group-24-1.webp" alt="devops et outils">
        <img src="http://localhost/wordpress/wp-content/uploads/2025/04/Group-25-1.webp" alt="travail en communication et équipe">
        <img src="http://localhost/wordpress/wp-content/uploads/2025/04/Group-26.webp" alt="veille et apprentissage">
        <a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" class="buttonPurple">Contact now</a>
    </div>

<?php
get_footer();
?>