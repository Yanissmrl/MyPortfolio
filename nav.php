<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Rubik:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="dist/css/reset.css" />
    <link rel="stylesheet" href="dist/css/styles.css" />

</head>

<nav class="bckg-topbar">
    <div class="container">
        <div class="bckg-topbar__topbar">

            <ul class="bckg-topbar__topbar_logo">

                <li><a href="index.php"><img src="src/images/icons-code-1.png" alt="logo code"></a></li>
                <li><a class="bckg-topbar__topbar_logo_h2" href="index.php">
                        Yaniss Marelle
                    </a>

                </li>
                <li><a href="index.php"><img src="src/images/icons-code-2.png" alt="logo code"></a></li>

            </ul> 

            <ul class="bckg-topbar__topbar_navigation">
            <?php if ($_SERVER['PHP_SELF'] == '/projet-portfolio/MyPortfolio/index.php'){echo '<li><a href="#profil" class="bckg-topbar__topbar_navigation_nav">Profil</a></li>';}?>  
                <li><a href="parcours.php" class="bckg-topbar__topbar_navigation_nav">Parcours</a></li>
                <li><a href="compétences.php" class="bckg-topbar__topbar_navigation_nav">Compétences</a></li>
                <li><a href="contact.php" class="bckg-topbar__topbar_navigation_nav">Me Contacter</a></li>
            </ul>
        </div>
    </div>
</nav>
