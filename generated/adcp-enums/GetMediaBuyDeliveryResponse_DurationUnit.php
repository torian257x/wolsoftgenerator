<?php

declare(strict_types=1);

namespace AdCP\MediaBuy\Enums;



enum GetMediaBuyDeliveryResponse_DurationUnit: string {
    
        case Seconds = 'seconds';
    
        case Minutes = 'minutes';
    
        case Hours = 'hours';
    
        case Days = 'days';
    
        case Campaign = 'campaign';
    

    
}
