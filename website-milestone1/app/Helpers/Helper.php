<?php

namespace App\Helpers;

class Helper
{
    public static function uid($length, $prefix=null)
    {
        $uid = "";
        $string = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $string.= "abcdefghijklmnopqrstuvwxyz";
        $string.= "0123456789";

        $max = strlen($string);

        for ($i = 0; $i < $length; $i++) {
            $uid .= $string[self::crypto_rand_secure(0, $max)];
        }

        return $prefix ? $prefix . '-' . $uid : $uid;
    }

    private static function crypto_rand_secure($min, $max)
    {
        $range = $max - $min;
        if ($range < 1)
            return $min;

        $log = ceil(log($range, 2));
        $bytes = (int) ($log / 8) + 1;
        $bits = (int) $log + 1;
        $filter = (int) (1 << $bits) - 1;

        do {
            $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
            $rnd = $rnd & $filter;
        } while ($rnd >= $range);
        
        return $min + $rnd;
    }
}
