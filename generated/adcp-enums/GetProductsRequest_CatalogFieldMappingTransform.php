<?php

declare(strict_types=1);

namespace AdCP\MediaBuy\Enums;



enum GetProductsRequest_CatalogFieldMappingTransform: string {
    
        case Date = 'date';
    
        case Divide = 'divide';
    
        case Boolean = 'boolean';
    
        case Split = 'split';
    

    
}
