<?php
$name = 'Ralph Maron Eda';
$age = 21;

$concat1 = 'Hello there, '. $name.', you are '.$age. ' years old.';
$concat2 = <<<EOT
Hello there, $name, you are $age years old.
EOT;

// echo $concat1;
echo $concat2;