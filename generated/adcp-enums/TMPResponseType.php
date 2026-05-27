<?php

declare(strict_types=1);

namespace AdCP\MediaBuy\Enums;



enum TMPResponseType: string {
    
        case Activation = 'activation';
    
        case CatalogItems = 'catalog_items';
    
        case Creative = 'creative';
    
        case Deal = 'deal';
    

    
}
