<?php
for ($i = 1; $i <= 5; $i++) {
  echo $i*2 . '<br/>';
}

$i = 0;

while ($i < 3) {
  echo 'i = ' . $i . '<br />';
  $i += 1;
}

$count = 0;

while ($count <= 100) {
  if ($count % 3 == 0) {
    $count++;
    continue;
  }
  if ($count == 20) {
    break;
  }
  echo $count . '<br />';
  $count++;
}

$nume = 0;
do {
  echo 'num = ' . $nume . '<br />';
  $nume++;
} while ($nume < 3);

for ($i = 0; $i <= 100; $i++) {
  if(($i % 3 == 0) && ($i % 5 == 0)) {
    echo 'FizzBuzz' . '<br />';
  }
  elseif ($i % 3 == 0) {
    echo 'Fizz' . '<br />';
  }
  elseif ($i % 5 == 0) {
    echo 'Buzz' . '<br />';
  }
  else {
    echo $i . '<br />';
  }
}

for ($i = 1; $i < 6; $i++) {
  for ($j = 1; $j < 6; $j++) {
    echo "●";
  }
  echo "<br />";
}