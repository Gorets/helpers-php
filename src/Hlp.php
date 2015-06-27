<?php
/**
 * Created by PhpStorm.
 * User: gorets
 * Date: 26.04.2015
 * Time: 21:21
 */

namespace gorets\Addons;


class HLP
{
    private static $dbg_value = 1;

    /**
     * @param $s
     */
    public static function pre($s)
    {
        if (self::dbg()) {

            echo "<pre>";
            print_r($s);
            echo "</pre>";
        }
    }

    /*
    * функция для определения состояния отладки сайта
    */
    private static function dbg()
    {
        if (
            ((isset($_COOKIE['dbg']) and $_COOKIE['dbg'] == self::$dbg_value) || (isset($_GET['dbg']) and $_GET['dbg'] == self::$dbg_value))
            and (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest')
        ) return true;
        else return false;
    }
}