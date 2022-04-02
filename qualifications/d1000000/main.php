<?php

// Open file
$f = fopen('php://stdin', 'r');
// Read first line (parameters)
$T = trim(fgets($f));

// For each case
for ($t = 1; $t <= $T; $t++) {
  $N = trim(fgets($f));
  $dice_sides = explode(' ', trim(fgets($f)));
  print "Case #$t: ";
  sort($dice_sides);
  $answer = 1;
  for ($i = 0; $i < $N; $i++) {
    if ($dice_sides[$i] < $answer) {
      continue;
    }
    else {
      $answer++;
    }
  }
  echo --$answer . "\n";
}
