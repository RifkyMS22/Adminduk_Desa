<?php

function formatCurrency($amount)
{
    return '$' . number_format($amount, 2);
}

function generateDivBoxes($totalBox, $value) {
  $result = '';

  // Jika panjang nilai lebih kecil atau sama dengan total box, maka setiap box berisi satu karakter
  if (strlen($value) <= $totalBox) {
      for ($i = 0; $i < $totalBox; $i++) {
          $char = $value[$i] ?? ''; // Ambil karakter ke-$i dari nilai $value
          $div = '<div class="box">' . $char . '</div>';
          $result .= $div;
      }
  } else {
      // Jika panjang nilai lebih besar dari total box, ulangi nilai hingga memenuhi total box
      $repeatedValue = str_repeat($value, ceil($totalBox / strlen($value)));
      for ($i = 0; $i < $totalBox; $i++) {
          $char = $repeatedValue[$i];
          $div = '<div class="box">' . $char . '</div>';
          $result .= $div;
      }
  }

  return $result;
}