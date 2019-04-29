<?php
$input=file_get_contents("Sine-Test.md");
preg_match_all('/sin\((?<degree>(-|)(\d+)) degrees\) \= (?<value>(-|)\d+(\.\d+))/i', $input, $gets);
print_r($gets['degree']);
print_r($gets['value']);
foreach($gets['degree'] as $index=>$degree) {
    //...
}
