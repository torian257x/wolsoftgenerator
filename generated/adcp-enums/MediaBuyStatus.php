<?php

declare(strict_types=1);

namespace AdCP\MediaBuy\Enums;



enum MediaBuyStatus: string {
    
        case PendingCreatives = 'pending_creatives';
    
        case PendingStart = 'pending_start';
    
        case Active = 'active';
    
        case Paused = 'paused';
    
        case Completed = 'completed';
    
        case Rejected = 'rejected';
    
        case Canceled = 'canceled';
    

    
}
