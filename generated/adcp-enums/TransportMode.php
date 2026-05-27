<?php

declare(strict_types=1);

namespace AdCP\MediaBuy\Enums;



enum TransportMode: string {
    
        case Walking = 'walking';
    
        case Cycling = 'cycling';
    
        case Driving = 'driving';
    
        case PublicTransport = 'public_transport';
    

    
}
