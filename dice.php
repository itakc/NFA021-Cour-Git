<?php

$numbers =[];
$iterations = 3;

for ($i = 0; $iterations; $i++) {
    numbers[] = random_int(1,6);


}
echo "vous avez tiré :<br>\n";
foreach ($numbers as $number) {
    echo " -un $number<br>\n";
}

$n = random_int(1, 6);
echo "vous aves tiré un un $n<br>\n";

