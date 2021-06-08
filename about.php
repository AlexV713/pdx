<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-162296581-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-162296581-1');
    </script>

    <script src="https://kit.fontawesome.com/cf72e27b3d.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="7RXmuTZLDBF2Ous7ohVPMjE9R8cOhy4JxxMHEC6BSAc" />
    <meta name="msvalidate.01" content="6333B848D98758E1D7861AA7814613E4" />
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Roboto+Condensed&display=swap" rel="stylesheet"> 
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <title>About Me</title>
</head>

<body>
    <div id="wrapper">

        <?php require_once('includes/header.html.php'); ?>

        <main>

            <img id="card" src="images/pdx_card.jpg" alt="card_image">

            <h3 class="headings">My Story</h3>
            <p class="bio">Hello, I am Jose Valerio (owner) and I've been working as a Handyman for more than 30 years. I
                started working as a handyman
                back
                in my
                home country Mexico, and started my business after moving to the U.S.</p>

            <h3 class="headings">Where I Work</h3>
            <p class="bio">I am available in your area! All Forest Grove, Cornelius, Hillsboro, Beaverton, Aloha, Tigard, Newberg, Tillamook, Lincoln
                City, Oregon City, Portland, McMinnville, Lake Oswego, and Vancouver Washington!</p>

            <h3 class="headings">Services</h3>
            <p class="bio">Handyman work,
                landscape, hardscape, remodeling, painting, and installation! <br><br>Give me a call for your free estimate today!</p>

        </main>

        <?php require_once('includes/footer.html.php'); ?>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="scripts.js"></script>
</body>

</html>