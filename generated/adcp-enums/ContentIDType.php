<?php

declare(strict_types=1);

namespace AdCP\MediaBuy\Enums;



enum ContentIDType: string {
    
        case Sku = 'sku';
    
        case Gtin = 'gtin';
    
        case OfferingId = 'offering_id';
    
        case JobId = 'job_id';
    
        case HotelId = 'hotel_id';
    
        case FlightId = 'flight_id';
    
        case VehicleId = 'vehicle_id';
    
        case ListingId = 'listing_id';
    
        case StoreId = 'store_id';
    
        case ProgramId = 'program_id';
    
        case DestinationId = 'destination_id';
    
        case AppId = 'app_id';
    

    
}
