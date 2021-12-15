<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Me Contacter</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Rubik:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="dist/css/reset.css" />
    <link rel="stylesheet" href="dist/css/styles.css" />

</head>

<body>

    <header class="contact">
        <?php include "nav.php" ?>

        <div class="container">
            <div class="contact__all">
                <div class="contact__all_image">

                    <h2 class="contact__all_image_h2">Me Contacter</h2>
                    <img class="contact__all_image_img" src="src/images/undraw_chatting_re_j55r.svg"
                        alt="image contact">

                </div>

                <div class="contact__all_form">
                    <div class="contact__all_form_first-inputs">
                        <input placeholder="Nom" class="contact__all_form_first-inputs_input frst-inpt" type="text">
                        <input placeholder="Email" class="contact__all_form_first-inputs_input1 frst-inpt" type="text">
                    </div>
                    <div class="contact__all_form_second-inputs">
                        <input placeholder="Sujet" class="contact__all_form_second-inputs_input scnd-inpt" type="text">
                        <input placeholder="Message" class="contact__all_form_second-inputs_input scnd-inpt"
                            type="text">
                        <button class="contact__all_form_second-inputs_button">Envoyer</button>

                    </div>

                </div>
            </div>
        </div>
    </header>
    
    <footer class="footer-contact">
        <p class="footer-contact__p">© 2021 Portfolio de Yaniss Marelle</p>
    </footer>

</body>

</html>