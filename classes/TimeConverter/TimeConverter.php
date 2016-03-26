<?php

/**
 * Created by PhpStorm.
 * User: DataKeyt
 * Date: 22.03.2016
 * Time: 9:50
 */
class TimeConverter
{
    function MinSec($value1)
    {
        return $value1 * 60;
    }

    function SecMin($value1)
    {
        return $value1 / 60;
    }
}