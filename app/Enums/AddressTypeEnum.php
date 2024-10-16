<?php

namespace App\Enums;

enum AddressTypeEnum: int
{
    case SHIPPING = 1;
    case BILLING = 2;
}
