<?php

declare(strict_types=1);

namespace AdCP\MediaBuy\Enums;



enum CatalogType: string {
    
        case Offering = 'offering';
    
        case Product = 'product';
    
        case Inventory = 'inventory';
    
        case Store = 'store';
    
        case Promotion = 'promotion';
    
        case Hotel = 'hotel';
    
        case Flight = 'flight';
    
        case Job = 'job';
    
        case Vehicle = 'vehicle';
    
        case RealEstate = 'real_estate';
    
        case Education = 'education';
    
        case Destination = 'destination';
    
        case App = 'app';
    

    
}
