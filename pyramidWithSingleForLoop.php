<?php

function pyramid($num) { 
  $star = '';
  $space = str_repeat(' ', $num-1);

  for ($i = 1; $i < $num; $i++) {
    $space = substr_replace($space,'', -1);
    $star = $star.'* ';
    echo $space.$star."\n";
  }
}

pyramid(10);