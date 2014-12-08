<?php
/**
 * Helper
 *
 * @author Farmer.Li <me@farmerli.com>
 */
namespace Resttest;

class Helper
{
    static function randString($length = 4) {
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $res = '';
        for ($i = 0; $i < $length; $i++) {
            $res .= $chars[mt_rand(0, strlen($chars) - 1)];
        }
        return $res;
    }
}