<?php

namespace App\Enums;

enum OrderStatusEnum: int
{
    case UNPAID = 1;
    case PAID = 2;
    case CANCELLED = 3;
    case SHIPPED = 4;
    case COMPLETED = 5;

    /**
     * Get statuses
     *
     * @return array
     */
    public static function getStatuses()
    {
        return [
            self::UNPAID,
            self::PAID,
            self::CANCELLED,
            self::SHIPPED,
            self::COMPLETED,
        ];
    }
}
