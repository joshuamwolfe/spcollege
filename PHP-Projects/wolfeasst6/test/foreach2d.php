<?php

    $movies = array(
      array(
        "title" => "Rear Window",
        "director" => "Alfred Hitchcock",
        "year" => 1954
      ),

      array(
        "title" => "Full Metal Jacket",
        "director" => "Stanley Kubrick",
        "year" => 1987
      ),

      array(
        "title" => "Mean Streets",
        "director" => "Martin Scorsese",
        "year" => 1973
    )

    foreach ( $movies as $movie ) {

        echo '<dl style="margin-bottom: 1em;">';

        foreach ( $movie as $key => $value ) {
            echo "<dt>$key</dt><dd>$value</dd>";
        }

        echo '</dl>';
    };
);

?>
