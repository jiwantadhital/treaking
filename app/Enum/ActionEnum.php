<?php

namespace App\Enum;

enum ActionEnum:string
{
    case pending = "pending";


    case approved = "approved";


    public static function all()
    {
        return [
            self::pending,

            self::approved,

        ];
    }

}
