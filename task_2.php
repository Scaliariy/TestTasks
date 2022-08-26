<?php

$deliveryMethodsArray = [
    [
        'code' => 'dhl',
        'customer_costs' => [
            22 => '1.000',
            11 => '3.000',
        ]
    ],
    [
        'code' => 'fedex',
        'customer_costs' => [
            22 => '4.000',
            11 => '6.000',
        ]
    ],
];
function sortDeliveryMethods($array) {
    $sorted_array = [];
    $keys = [];

    for ($i = 0; $i < count($array); $i++) {
        $keys = (array_keys($array[$i]['customer_costs']));
    }
    for ($i = 0; $i < count($keys); $i++) {
        foreach ($array as $arr) {

            $code = $arr['code'];
            $sorted_array[$keys[$i]][$code] = $arr['customer_costs'][$keys[$i]];

        }
    }
    return $sorted_array;
}

$result = sortDeliveryMethods($deliveryMethodsArray);
var_dump($result);



