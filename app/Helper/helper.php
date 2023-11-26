<?php

use Carbon\Carbon;
use Illuminate\Http\Request;
use Twilio\Rest\Client;
use App\Property;



if (!function_exists('generateRandomString')) {

    function generateRandomString($length) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}

if (!function_exists('formatPrice')) {
    function formatPrice($price)
    {
        if ($price < 1000) {
            return number_format($price, 2) . '';
        } elseif ($price < 100000) {
            return number_format($price / 1000, 2) . '(Thousand)';
        } elseif ($price < 10000000) {
            return number_format($price / 100000, 2) . '(Lakh)';
        } else {
            return number_format($price / 10000000, 2) . '(Crore)';
        }

        return $formattedPrice;
    }
}
