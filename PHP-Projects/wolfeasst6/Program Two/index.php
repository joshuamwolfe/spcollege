<!DOCTYPE html>
<html lang='en' dir='ltr'>
    <head>
        <meta charset='utf-8'>
        <title>Program One</title>
        <link rel='stylesheet' href='main.css'>
    </head>
    <body>
        <main>
<?php
$numbers = array();
for ($i=0; $i < 25 ; $i++) {
    $numbers[] = mt_rand(1,10);
};

$numbers_string = '';
for ($i=0; $i < count ($numbers); $i++) {
    $numbers_string .= $numbers[$i] . ' ';
};

$array_sum = array_sum($numbers);

echo $string = <<<EOD
<h1> Playing With Random Numbers </h1>
<hr>
<br>
A list of 25 random numbers (1-10):
<br><br>
$numbers_string
<br><br>
All of the numbers added up equals $array_sum.
EOD;
$array_sorted = array_count_values($numbers);
echo '<br>';
foreach ($array_sorted as $key => $value) {
    echo '<br>There are ' . $value . ' occurrences of ' . $key . '.<br>';
}
?>
        </main>
        <footer class='text_align_center'>
            <hr> <small> SomeWebsite &copy; -- <?php echo date('M.jS.Y'); ?> </small>
        </footer>
    </body>
</html>
