<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>title</title>
        <link rel='stylesheet' type='text/css' href='main.css'/>
    </head>

    <body>
        <main>
<?php
//declare variables.
$name = filter_input(INPUT_POST, 'name');
$saying = filter_input(INPUT_POST, 'saying');
// $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");

//variables manipulating user input for saying.
$saying_counted = strlen($saying);
$saying_words_counted = str_word_count($saying, 0);
$saying_uppercase = strtoupper($saying);
$saying_ucwords = ucwords($saying);
// $saying_with_stars = str_replace($vowels, '*', $saying);
// $saying_exploded = explode($saying);

//Print a statements matching assignment
echo $string = <<<EOD
The favorite saying of <strong>$name</strong> is: <br>
<i>$saying</i> <br>
That saying consists of variable $saying_counted and $saying_words_counted words. <br>
<br>
As a heading or title it looks like this. . . <br>
$saying_ucwords <br>
<br>
Or it may look like this. . . <br>
$saying_uppercase <br>
<br>
EOD;

//break string into an array
$saying_exploded = explode(" ", $saying);

$pattern = '/[aeiou]/m';
$replacement = '*';
echo 'Saying with vowels replaced: <br>';
echo preg_replace($pattern, $replacement, $saying);

//print each word in the arrray on a new line
// foreach ($saying_exploded as $key => $value) {
//     print $value;
//     echo '<br>';
// }
echo '<br><br> Hear is the saying in list format.'
?>
        <ol>
            <?php foreach ($saying_exploded as $key => $value): ?>
                <li><?php echo $value . '<br>'; ?></li>
            <?php endforeach; ?>
        </ol>
        </main>
    </body>
</html>
