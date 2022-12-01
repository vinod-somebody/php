<?php
$x = 'a@b.com';
function c($a, $b) {return strpos($a, $b);}

echo filter_var($x, FILTER_VALIDATE_EMAIL);
exit;

if (c($x, '@') === false || c($x, '@') === 0 || c($x, '.') === false || c($x, '.') < 3) {
    print 'not email';
} else {
    print 'email';
}
