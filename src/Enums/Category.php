<?php

namespace App\Enums;

use ReflectionClass;

class Category
{
    const FRONT = 1;
    const BACKEND = 2;
    const CMS = 3;
    const DESIGN = 4;

    public static function getlist()
    {
        $result = [];
        foreach (static::getConstants() as $label => $value){
            $result[] = [
                'id' => $value,
                'label' => static::getDescription($value),
            ];
        }
        return $result;
    }
    private static function getConstants()
    {
        $classeReflection = new ReflectionClass(__CLASS__);
        return $classeReflection->getConstants();

    }
    public static function getDescription($id)
    {
        switch($id){
            case static::FRONT:
                return 'Projet Front';
            case static::BACKEND:
                return 'Projet Back';
            case static::CMS:
                return 'Projet CMS';
            case static::DESIGN:
                return 'Projet DESIGN';
        }
    }
}