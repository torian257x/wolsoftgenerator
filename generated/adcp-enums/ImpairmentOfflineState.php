<?php

declare(strict_types=1);

namespace AdCP\MediaBuy\Enums;



enum ImpairmentOfflineState: string {
    
        case Suspended = 'suspended';
    
        case Rejected = 'rejected';
    
        case Withdrawn = 'withdrawn';
    
        case Insufficient = 'insufficient';
    
        case Depublished = 'depublished';
    

    
}
