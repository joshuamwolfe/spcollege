<?php

session_start();

?>
<!DOCTYPE html>
<html lang='en' dir='ltr'>

<head>
    <meta charset='utf-8'>
    <title>Module 7 -- </title>
    <link rel='stylesheet' href='main.css'>
</head>

<body>
    <main>
        <?php
        echo "<h1 class='text_align_center'> Page Three:</h1>";
        echo "<hr><br>";
        //TODO:
        //- Delete all session cookies and destroy the session on the server.
        session_destroy();
        echo 'The server has been destroyed!';
        echo '<br>';

        //- Delete the session cookie from the browser.
        echo 'Your suger cookie has been destroyed!';     
        
        $time_till_expired = strtotime('-1 year');
        setcookie('publisher', '', $time_till_expired);
        setcookie('greeting2', '', $time_till_expired);
        setcookie('greeting3', '', $time_till_expired);

        ?>
        <p>
            Return <a href="page1.php">Home</a> to start over.
        </p>
    </main>
    <footer class='text_align_center'>
        <hr> <small> SomeWebsite &copy; -- <?php echo date('M.jS.Y'); ?> </small>
    </footer>
</body>

</html>