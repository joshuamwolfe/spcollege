<?php
//variables
$referal = filter_input(INPUT_POST, 'referal');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <main>
            <p>
              <?php
              switch ($referal) {
                case 'friend':
                  echo 'Please thank your friend for us.';
                  break;
                case 'google':
                  echo 'We work hard to be found on google';
                  break;
                case 'television':
                  echo 'We are glad that our TV ads are working.';
                  break;
                case 'regular_customer':
                  echo 'Welcome back! We love you! :)';
              }
              ?>
            </p>
            <footer>
                <hr id="small">
                &copy; Random Website <a href="index.html">Want to chage your response?</a>
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
