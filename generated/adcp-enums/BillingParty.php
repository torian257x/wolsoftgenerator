<?php

declare(strict_types=1);

namespace AdCP\MediaBuy\Enums;



enum BillingParty: string {
    
        case Operator = 'operator';
    
        case Agent = 'agent';
    
        case Advertiser = 'advertiser';
    

    
}
