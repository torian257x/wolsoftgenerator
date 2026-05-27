<?php

declare(strict_types=1);

namespace AdCP\MediaBuy\Enums;



enum GetMediaBuysResponse_ImpairmentResource_Type: string {
    
        case Audience = 'audience';
    
        case Creative = 'creative';
    
        case CatalogItem = 'catalog_item';
    
        case EventSource = 'event_source';
    
        case Property = 'property';
    

    
}
