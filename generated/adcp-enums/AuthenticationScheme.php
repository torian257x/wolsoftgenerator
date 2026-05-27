<?php

declare(strict_types=1);

namespace AdCP\MediaBuy\Enums;



enum AuthenticationScheme: string {
    
        case Bearer = 'Bearer';
    
        case HmacSha256 = 'HMAC-SHA256';
    

    
}
