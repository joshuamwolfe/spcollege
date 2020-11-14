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
        echo "<h1 class='text_align_center'> Page Two:</h1>";
        echo "<hr><br>";
        //TODO:
        //- Assign 'Murach' to another element of $_SESSION. Use the key 'publisher'.
        $_SESSION['Publisher'] = 'Murach';

        //- Delete the cookie that stored 'Hello world'.
        unset($_SESSION['greeting']);

        //- Use a foreach loop to display all session cookie names and values.
                
        foreach ($_SESSION as $key => $value) {
            echo 'The current key is: ' . $key;
            echo '<br>';
            echo 'The current value is: ' . $value;
            echo'<br> <br>';
        }

        echo '<br><br>';
        ?>
        <!-- //- Add another hyperlink that will execute page3.php when clicked. -->
        Procede to <a href="page3.php">Page Three</a>.
    </main>

    <footer class='text_align_center'>
        <hr> <small> SomeWebsite &copy; -- <?php echo date('M.jS.Y'); ?> </small>
    </footer>
</body>

</html>