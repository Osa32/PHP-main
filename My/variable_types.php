<?php

//As for me, curly braces serve good substitution for concatenation, 
//and they are quicker to type and code looks cleaner. Remember to use double quotes (" ") 
//as their content is parced by php, because in single quotes (' ') 
//you'll get litaral name of variable provided:

$a = '12345';

// This works:
echo "qwe{$a}rty"; // qwe12345rty, using braces
echo "qwe" . $a . "rty"; // qwe12345rty, concatenation used

// Does not work:
echo 'qwe{$a}rty'; // qwe{$a}rty, single quotes are not parsed
echo "qwe$arty"; // qwe, because $a became $arty, which is undefined
