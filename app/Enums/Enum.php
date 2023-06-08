<?php

namespace App\Enums;

use ReflectionClass;

abstract class Enum
{
    /**
     * Return an associative array with constant name as key and constant value as value.
     * @return array
     * @throws \ReflectionException
     */
    static function getConstants ()
    {
        $class = new ReflectionClass(get_called_class());

        return $class->getConstants();
    }

    /**
     * Return constants names
     * @return array
     * @throws \ReflectionException
     */
    static function getKeys ()
    {
        return array_keys(self::getConstants());
    }

    /**
     * Return constants values
     * @return array
     * @throws \ReflectionException
     */
    static function getValues ()
    {
        return array_values(self::getConstants());
    }
}
