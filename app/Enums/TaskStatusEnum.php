<?php

namespace App\Enums;

enum TaskStatusEnum
{

    case TODO;
    case IN_PROGRESS;
    case ON_HOLD;
    case CANCELLED;
    case READY_FOR_TESTING;
    case IN_TESTING;
    case READY_FOR_DEPLOYMENT;
    case DONE;


    public static function toArray(): array
    {
        return array_column(self::cases(), 'name');
    }
}
