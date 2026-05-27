<?php

declare(strict_types=1);

namespace AdCP\MediaBuy\Enums;



enum AccountScope: string {
    
        case Operator = 'operator';
    
        case Brand = 'brand';
    
        case OperatorBrand = 'operator_brand';
    
        case Agent = 'agent';
    

    
}
