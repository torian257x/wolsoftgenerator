<?php

declare(strict_types=1);

namespace AdCP\MediaBuy\Enums;



enum MetroAreaSystem: string {
    
        case NielsenDma = 'nielsen_dma';
    
        case UkItl1 = 'uk_itl1';
    
        case UkItl2 = 'uk_itl2';
    
        case EurostatNuts2 = 'eurostat_nuts2';
    
        case Custom = 'custom';
    

    
}
