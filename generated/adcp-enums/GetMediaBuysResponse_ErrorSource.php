<?php

declare(strict_types=1);

namespace AdCP\MediaBuy\Enums;



enum GetMediaBuysResponse_ErrorSource: string {
    
        case Producer = 'producer';
    
        case Sdk = 'sdk';
    

    
}
