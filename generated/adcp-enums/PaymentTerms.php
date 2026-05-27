<?php

declare(strict_types=1);

namespace AdCP\MediaBuy\Enums;



enum PaymentTerms: string {
    
        case Net15 = 'net_15';
    
        case Net30 = 'net_30';
    
        case Net45 = 'net_45';
    
        case Net60 = 'net_60';
    
        case Net90 = 'net_90';
    
        case Prepay = 'prepay';
    

    
}
