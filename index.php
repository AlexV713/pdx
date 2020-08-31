<?php

require_once('utilities.php');

require_secure();

?>

<!DOCTYPE html>
<html lang="en">

<?php require_once ('includes/head.html.php') ?>

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