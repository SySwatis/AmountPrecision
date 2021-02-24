<?php
namespace Syswatis\AmountPrecision\Plugin\Directory\Model;

class PriceCurrency
{
  public function beforeConvertAndRound(
    $subject,
    $amount,
    $scope = null,
    $currency = null,
    $precision = \Magento\Directory\Model\PriceCurrency::DEFAULT_PRECISION
  ) {
    return [$amount, $scope, $currency, 4];
  }

  public function beforeFormat(
    $subject,
    $amount,
    $includeContainer = true,
    $precision = \Magento\Directory\Model\PriceCurrency::DEFAULT_PRECISION,
    $scope = null,
    $currency = null
  ) {
    return [$amount, $includeContainer, 4, $scope, $currency];
  }
}