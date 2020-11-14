<?php
//we create this array

$people= array(

array(
"name" => "Jennifer Kimbers",
"email" => "abc@gmail.com",
"city" => "Seattle",
"state" => "Washington"),

array(
"name" => "Rodney Hutchers",
"email" => "def@gmail.com",
"city" => "Los Angeles",
"state" => "California"),

array(
"name" => "Robert Smith",
"email" =>  "ghi@gmail.com",
"city" => "Michigan",
"state" => "Missouri")

);


$num=0;

foreach ($people as $person)
{
$num++;
echo "<br><b># $num</b><br>";
foreach ($person as $key=>$value)
{
echo "$key: $value <br>";

}
}

?>
