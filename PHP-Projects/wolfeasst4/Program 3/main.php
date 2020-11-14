<?php
    //variables
    $loop = filter_input(INPUT_POST, 'loop');
?>

<!DOCTYPE html>
<html lang='en' dir='ltr'>
    <head>
        <meta charset='utf-8'>
        <title>Module 4</title>
        <link rel='stylesheet' href='main.css'>
    </head>
    <body>
        <main>
            <p>
                <?php
                    //outer loop
                    for ($i = $loop; $i >= 0; $i--) {
                        //inner loop
                        for ($j = $i; $j >= 0; $j--) {
                            echo '* ';
                        }
                        echo '<br>';
                    }
                ?>
            </p>
            <footer>
                <hr id='small'>
                &copy; Random Website <a href='index.html'>Return</a>
            </footer>
        </main>

    </body>
</html>

<!--
//                  // control structure based on responses
if ($referal === 'google') {
echo 'We work hard to be found on google!';

} else if ($referal === 'friend') {
echo 'Please thank your friend for us.';

} else if ($referal === 'television') {
echo 'We are glad that our TV ads are working.';

} else {
echo 'Welcome back! We love you! :).';
}
-->
