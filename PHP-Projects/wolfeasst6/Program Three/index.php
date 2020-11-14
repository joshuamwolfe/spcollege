<!DOCTYPE html>
<html lang='en' dir='ltr'>
    <head>
        <meta charset='utf-8'>
        <title>Program Three</title>
        <link rel='stylesheet' href='main.css'>
    </head>
    <body>
        <main>
            <?php

                echo '<h1>Two Demensional Array\'s</h1>';
                echo '<hr>';

                $nfl['Buccaneers'] = array(
                    'QB' => 'Winston',
                    'DT' => 'Martin',
                    'OT' => 'Evans'
                );

                $nfl['Broncos'] = array(
                    'QB' => 'Attaochu',
                    'RB' => 'Bailey',
                    'WR' => 'Bausby'
                );

                $nfl['Browns'] = array(
                    'QB' => 'Zimmer',
                    'LB' => 'McCray',
                    'SQ' => 'Davis'
                );

                $array_keys = array_keys($nfl);
                $nfl_team_counter = 0;
                foreach ($nfl as $key => $value) {
                    $nfl_team_counter++;
                    echo '<b>NFL Team #' . $nfl_team_counter . ', ' . $key . '.<br></b>';
                    foreach ($value as $k => $v) {

                        echo $k . ' is ' . $v . '.<br>';
                    }
                    echo '<br>';
                }
            ?>

        </main>
        <footer class='text_align_center'>
            <hr> <small> SomeWebsite &copy; -- <?php echo date('M-jS-Y'); ?> </small>
        </footer>
    </body>
</html>
