<?php

declare(strict_types=1);

namespace AdCP\MediaBuy\Enums;



enum DeviceType: string {
    
        case Desktop = 'desktop';
    
        case Mobile = 'mobile';
    
        case Tablet = 'tablet';
    
        case Ctv = 'ctv';
    
        case Dooh = 'dooh';
    
        case Unknown = 'unknown';
    

    
}
