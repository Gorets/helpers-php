<?php
/**
 * Created by PhpStorm.
 * User: gorets
 * Date: 26.04.2015
 * Time: 21:21
 */

namespace gorets\Addons;


class HLP{

    public static function pre($s){

        echo "<pre>";
        print_r($s);
        echo "</pre>";
    }

}