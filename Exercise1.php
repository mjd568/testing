<?php

$mortgagerate = .0575;

$result=((is_double($mortgagerate))?
"The variable contains a decimal number":
"The variable does not contain a decimal number");

echo $result;


?>