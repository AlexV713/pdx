<?php

require_once('utilities.php');

require_secure();

?>

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
    <meta name="description" content="PDX Handyman Services LLC is a family-owned business that offers the best handyman services in Oregon!">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="7RXmuTZLDBF2Ous7ohVPMjE9R8cOhy4JxxMHEC6BSAc" />
    <meta name="msvalidate.01" content="6333B848D98758E1D7861AA7814613E4" />
    <link rel="canonical" href="">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Roboto+Condensed&display=swap" rel="stylesheet"> 
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <title>PDX Handyman Services LLC</title>
</head>

<body>
    <div id="wrapper">

        <?php require_once ('includes/header.html.php'); ?>

        <main>

            <div id="bod">

                <?php require_once ('includes/slideshow.html.php'); ?>

                <div id="text">
                    <h2>Welcome to PDX Handyman Services LLC!</h2>
                    <p>PDX Handyman Services is a family-owned company that offers the ultimate handyman experience here
                        in Oregon! For more than 30 years in the field, ethical practices, and hard work have branded
                        our services.</p>
                    <p>PDX Handyman Services LLC offers a wide range of services like remodeling, installation,
                        landscape, hardscape, electric services, plumbing, and painting.</p>
                    <p><strong>Mission: </strong>Our mission is to provide great skill and devotion to the things that
                        matter most.</p>
                    <p><strong>Vision: </strong>Our vision is to deliver exceptional services while developing new
                        relationships.</p>
                    <p>For a free estimate, Please call or text: <span id="desktop">503-351-0987</span><a id="mobile"
                            href="tel:503-351-0987">503-351-0987</a></p>
                </div>
            </div>


        </main>

        <?php require_once ('includes/footer.html.php'); ?>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="scripts.js"></script>
</body>

</html>