<?php

namespace App\Enums;

enum AppointmentEnums: int
{
    case PENDING = 0 ;
    case CONFIRMED = 1 ;
    case CANCELED = 2 ;
    case SHEDULED = 3 ;

}
