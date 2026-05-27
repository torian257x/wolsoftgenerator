<?php

declare(strict_types=1);

namespace AdCP\MediaBuy\Enums;



enum UpdateFrequency: string {
    
        case Realtime = 'realtime';
    
        case Hourly = 'hourly';
    
        case Daily = 'daily';
    
        case Weekly = 'weekly';
    

    
}
