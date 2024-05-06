<?php
$name = htmlspecialchars($_GET["name"], ENT_QUOTES);
print "私の名前は、" . $name;
echo "<br />";

$choices = htmlspecialchars($_GET["choices"], ENT_QUOTES);
print "ご希望の商品は、" . $choices;
echo "<br />";

$count = htmlspecialchars($_GET["count"], ENT_QUOTES);
print "ご注文数は、" . $count;