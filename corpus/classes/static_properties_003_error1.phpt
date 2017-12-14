==========
Attempting to access static properties using instance property syntax 
==========

<?php
class C {
    protected static $y = 'C::$y';
}
$c = new C;

echo "\n--> Access non-visible static prop like instance prop:\n";
unset($c->y);
?>
==Done==
--EXPECTF--

--> Access non-visible static prop like instance prop:

Fatal error: Uncaught Error: Cannot access protected property C::$y in %s:8
Stack trace:
#0 {main}
  thrown in %s on line 8