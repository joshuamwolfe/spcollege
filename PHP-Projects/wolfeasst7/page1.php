<?php

session_start();

?>

<!DOCTYPE html>
<html lang='en' dir='ltr'>

<head>
    <meta charset='utf-8'>
    <title>Module 7 -- Page One</title>
    <link rel='stylesheet' href='main.css'>
</head>

<body>
    <main>
        <?php
        echo "<h1 class='text_align_center'> Page One:</h1>";
        echo "<hr><br>";
        //TODO:

        //- Start a session and display the session ID.
        $lifetime = 0;
        session_set_cookie_params($lifetime, '/');
        
        $id = session_id();
        echo 'Your session ID: ' . $id . '.';

        //- Assign the string 'Hello world' as a session cookie. You pick the key for this element.
        $_SESSION['greeting'] = "Hello World";
        echo "<br> <br>";

        //- Then use the $_SESSION array to display the string in this latter cookie.
        echo 'The content of $_SESSION[\'greeting\'] is "' . $_SESSION['greeting'] . '".';

        //- Assign two more ssession cookies(You make up the keys and values), dont display.        
        $_SESSION['greeting2'] = "Hello World the second time!";
        $_SESSION['greeting3'] = "Hello World the third time!";
        echo "<br> <br>";
        echo 'Two more elements were added to $_SESSION!';
        echo "<br> <br>";
        ?>

        <!-- //- Add an HTML hyperlink that will excute page2.php when clicked. -->
        Procede to <a href="page2.php">Page Two</a>.
        
    </main>
    <footer class='text_align_center'>
        <hr> <small> SomeWebsite &copy; -- <?php echo date('M.jS.Y'); ?> </small>
    </footer>
</body>

</html>