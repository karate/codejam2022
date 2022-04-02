<?php

  // Open file
  //$f = fopen($filename, "r");
  $f = fopen('php://stdin', 'r');
  // Read first line (parameters)
  $T = trim(fgets($f));

  // For each case
  for ($t = 1; $t <= $T; $t++) {
    list($R, $C) = explode(' ', trim(fgets($f)));
    print "Case #$t:\n";
    $output = "";
    foreach(range(0, $R - 1) as $i) {
      foreach(range(0, $C - 1) as $j) {
        if ($i < 1 && $j < 1) {
          print "..";
        }
        else {
          print "+-";
        }
      }
      print "+\n";
      foreach(range(0, $C - 1) as $j) {
        if ($i < 1 && $j < 1) {
          print "..";
        }
        else {
          print "|.";
        }
      }
      print "|\n";
    }
    foreach(range(0, $C - 1) as $j) {
      print "+-";
    }
    print "+\n";
  }
  fclose($f);

function n($number) {
  return number_format($number, 0, '', ',');
}

function d($output) {
  if (is_string($output)) {
    echo ">> $output\n";
  } else {
    print_r($output);
  }
}
