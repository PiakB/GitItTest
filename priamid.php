<?php

$kleur ="red";
$lengte=300;
$dikte=10;
$aantal=10;

for ($i=0; $i < $aantal; $i++) {
  echo "<hr color=$kleur width=" . ($lengte*($i/$aantal)) . " size=$dikte align=center>";
}
?>
