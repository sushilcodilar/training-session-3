<?php

namespace Sushil\Assignment2\Model;

class Product
{
    public function beforeAddProduct(
        \Magento\Checkout\Model\Cart $subject,
        $productInfo,
        $requestInfo = null
    ) {
        $requestInfo['qty'] = 2; // increasing quantity to 1
        return [$productInfo, $requestInfo];
    }
}
