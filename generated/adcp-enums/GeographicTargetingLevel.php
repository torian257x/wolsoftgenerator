<?php

declare(strict_types=1);

namespace AdCP\MediaBuy\Enums;



enum GeographicTargetingLevel: string {
    
        case Country = 'country';
    
        case Region = 'region';
    
        case Metro = 'metro';
    
        case PostalArea = 'postal_area';
    

    
}
