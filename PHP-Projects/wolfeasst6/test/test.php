<?php
$fruits = array(
    'd' => 'lemon',
    'a' => 'orange',
    'b' => 'banana',
    'c' => 'apple');
asort($fruits);
foreach ($fruits as $key => $val) {
    echo $key . ' ' . $val . '.<br>';
}

// 'Vice President:' => 'Mike Pence',
// 'Secretary of State:' => 'Mike Pompeo',
// 'Seceretary of the Treasury:' => 'Steven Mnuchin',
// 'Attorney General:' => 'William Barr',
// 'Secretary of Commerce:' => 'Wilbur Ross',
// 'Secretary of Ariculture:' => 'Sonny Perdue'
?>
