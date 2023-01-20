<?php

namespace Dminustin\LSNE\CorePackage\Lists;

class ObjectTypesList
{
    protected static array $list = [];

    public static function addToList(string $className, string $objectType)
    {
        static::$list[$objectType] = $className;
    }

    public static function getList(): array
    {
        return static::$list;
    }
}
