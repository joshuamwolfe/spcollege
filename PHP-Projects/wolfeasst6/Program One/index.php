<!DOCTYPE html>
<html lang='en' dir='ltr'>
    <head>
        <meta charset='utf-8'>
        <title>Program One</title>
        <link rel='stylesheet' href='main.css'>
    </head>
    <body>
        <main>
            <h1 class='text_align_center'>Trump's Cabinet</h1>
            <hr>
            <?php
                $trump_cabinet = array(
                    'Agriculture' => 'Sonny Perdue',
                    'General' => 'William Barr',
                    'Commerce' => 'Wilbur Ross',
                    'Defense' => 'Mark Esper',
                    'Education' => 'Elisabeth DeVos',
                    'Energy' => 'Dan Brouillette',
                    'Labor' => 'Eugene Scalia',
                    'State' => 'Mike Pompeo',
                    'Veterans' => 'Robert Wilkie'
                );
                asort($trump_cabinet);

                echo '<h4> Sorted by Value </h4>';

                echo '<ul>';

                foreach ($trump_cabinet as $key => $value) {
                    echo '<li>' . $key . ' is ' . $value . '</li>' . '.<br>';
                };

                echo '</ul>';

                ksort($trump_cabinet);

                echo '<hr>';

                echo '<h4> Sorted by Key </h4>';

                echo '<ol>';

                foreach ($trump_cabinet as $key => $value) {
                    echo '<li>' . $key . ' is ' . $value . '</li>' . '.<br>';
                };

                echo '</ol>';
            ?>
        </main>
        <footer class='text_align_center'>
            <hr> <small> SomeWebsite &copy; -- <?php echo date('M.jS.Y'); ?> </small>
        </footer>
    </body>
</html>
