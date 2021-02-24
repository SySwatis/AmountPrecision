<?php
namespace Syswatis\AmountPrecision\Plugin\Framework\Locale;

class Format
{
  public function afterGetPriceFormat($subject, $result) {
    $result['precision'] = 4;
    $result['requiredPrecision'] = 4;

    return $result;
  }
}