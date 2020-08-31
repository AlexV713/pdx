<!DOCTYPE html>
<html lang="en">

<?php require_once('includes/head.html.php') ?>

<body>
    <div id="wrapper">

        <?php require_once('includes/header.html.php'); ?>

        <main>

            <video controls>
                <source src="images/video.mp4" type="video/mp4">
                Your browser does not support the video tag :(
            </video>
            <p id="video_tag">Video of a Complete Remodeled House!</p>

            <p>Do you need a handyman or a landscaper? Give me a call or send me a text message explaining to me what
                you need.</p>
            <p id="contact">For a free estimate, Please call or text: <span id="desktop">503-351-0987</span><a
                    id="mobile" href="tel:503-351-0987">503-351-0987</a></p>
            <p id="important"><i>*I do not and will not accept any calls from promoters*</i></p>

            <?php require_once('includes/footer.html.php'); ?>

        </main>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="scripts.js"></script>
</body>

</html>
