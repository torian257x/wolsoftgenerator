<?php

declare(strict_types=1);

namespace AdCP\MediaBuy\Enums;



enum CompletionSource: string {
    
        case SellerAttested = 'seller_attested';
    
        case VendorAttested = 'vendor_attested';
    

    
}
