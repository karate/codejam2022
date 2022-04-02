<?php

// Open file
$f = fopen('php://stdin', 'r');
// Read first line (parameters)
$T = trim(fgets($f));

// For each case
for ($t = 1; $t <= $T; $t++) {
  list($C1, $M1, $Y1, $K1) = explode(' ', trim(fgets($f)));
  list($C2, $M2, $Y2, $K2) = explode(' ', trim(fgets($f)));
  list($C3, $M3, $Y3, $K3) = explode(' ', trim(fgets($f)));
  print "Case #$t: ";
  // Get smaller Cyan
  $min_cyan = min([$C1, $C2, $C3]);
  // Get smaller Magenta
  $min_magenta = min([$M1, $M2, $M3]);
  // Get smaller Yellow
  $min_yellow = min([$Y1, $Y2, $Y3]);
  // Get smaller Black
  $min_black = min([$K1, $K2, $K3]);

  if ($min_cyan + $min_magenta + $min_yellow + $min_black < 1000000) {
    echo "IMPOSSIBLE";
  }
  else {
    print "$min_cyan ";
    $rest = 1000000 - $min_cyan;
    if ($rest - $min_magenta < 0) {
      print "$rest ";
      $rest = 0;
    }
    else {
      print "$min_magenta ";
      $rest -= $min_magenta;
    }
    if ($rest - $min_yellow < 0) {
      print "$rest ";
      $rest = 0;
    }
    else {
      print "$min_yellow ";
      $rest -= $min_yellow;
    }
    if ($rest - $min_black < 0) {
      print "$rest ";
      $rest = 0;
    }
    else {
      print "$min_black ";
      $rest -= $min_black;
    }
  }
  print "\n";
}
