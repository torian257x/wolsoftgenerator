<?php

declare(strict_types=1);

namespace AdCP\MediaBuy\Enums;



enum ReachUnit: string {
    
        case Individuals = 'individuals';
    
        case Households = 'households';
    
        case Devices = 'devices';
    
        case Accounts = 'accounts';
    
        case Cookies = 'cookies';
    
        case Custom = 'custom';
    

    
}
