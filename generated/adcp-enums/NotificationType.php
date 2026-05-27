<?php

declare(strict_types=1);

namespace AdCP\MediaBuy\Enums;



enum NotificationType: string {
    
        case Scheduled = 'scheduled';
    
        case Final = 'final';
    
        case Delayed = 'delayed';
    
        case Adjusted = 'adjusted';
    
        case Impairment = 'impairment';
    
        case CreativeStatusChanged = 'creative.status_changed';
    
        case CreativePurged = 'creative.purged';
    

    
}
