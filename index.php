<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Marelle Yaniss</title>
    <!-- <link rel="icon" type="image/png" href="src/images/pdp.png" /> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Rubik:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="dist/css/reset.css" />
    <link rel="stylesheet" href="dist/css/styles.css" />

</head>

<body>
    <header class="header">
        <?php include "nav.php" ?>
        <div class="container">
            <div class="header__content">

                <div class="header__content_pres">
                    <h1 class="header__content_pres_h1">Yaniss Marelle</h1>
                    <h2 class="header__content_pres_h2">étudiant Développeur Web</h2>
                    <div class="header__content_pres_logos">
                        <img class="header__content_pres_logos_logo" src="src/images/icons8-linkedin-256.png" alt="logo linkedin">
                        <img class="header__content_pres_logos_logo" src="src/images/icons8-github-144.png" alt="logo github">
                        <img class="header__content_pres_logos_logo" src="src/images/icons8-instagram-48.png" alt="logo instagram">
                    </div>
                    <div class="header__content_pres_image">
                        <img class="header__content_pres_image_img" src="src/images/undraw_developer_activity_re_39tg.svg" alt="Illustration Développeur">
                    </div>
                </div>

                <div class="header__content_myphoto">
                    <img class="header__content_myphoto_photo" src="src\images\photo-moi.jpg" alt="Photo de moi">
                </div>

            </div>
        </div>
    </header>

    <section class="section">
        <div class="container">

            <div class="section__content">
                <div class="section__content_moi">
                    <h2 class="section__content_moi_h2" id="profil">à propos de moi !</h2>
                    <p class="section__content_moi_p">Je suis un jeune étudiant de 18 ans, passionné par l'informatique
                        depuis mon enfance, qui commence une année dans une école en
                        Développeur Web à Digital Campus Rennes. Je suis plutôt curieux et
                        j'aime découvrir de nouveaux langages et de nouvelles technologies.
                        J'ai de nombreuses compétences en tant que développeur web, et je
                        m'améliore tous les jours pour les approfondirent vu que je ne suis
                        encore qu'au début de mes études.</p>
                </div>
                <div class="section__content_image">
                    <img class="section__content_image_img" src="src/images/avatar.png" alt="image avatar">
                </div>
            </div>

        </div>
    </section>

    <nav class="skills">
        <div class="bckg-skills">
            <div class="container">
                <div class="skills__skills-block">
                    <ul class="skills__skills-block_skill">
                        <li><a class="skills__skills-block_skill_h3" href="parcours.php">Parcours</a></li>
                        <li><a href="parcours.php"><img class="skills__skills-block_skill_img" src="src/images/icons8-timeline-128.png" alt=""></a></li>
                    </ul>
                    <ul class="skills__skills-block_skill">
                        <li><a class="skills__skills-block_skill_h3" href="compétences.php">Compétences</a></li>
                        <li><a href="compétences.php"><img class="skills__skills-block_skill_img" src="src/images/icons8-personal-growth-100.png" alt=""></a></li>
                    </ul>

                    <ul class="skills__skills-block_skill">
                        <li><a class="skills__skills-block_skill_h3" href="contact.php">Me Contacter</a></li>
                        <li><a href="contact.php"><img class="skills__skills-block_skill_img" src="src/images/icons8-contact-58 (1).png" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>


    <footer class="footer">
        <p class="footer__p">© 2021 Portfolio de Yaniss Marelle</p>
    </footer>

</body>

</html>