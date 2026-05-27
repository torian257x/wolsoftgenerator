<?php

declare(strict_types=1);

namespace AdCP\MediaBuy\Enums;



enum FeedFormat: string {
    
        case GoogleMerchantCenter = 'google_merchant_center';
    
        case FacebookCatalog = 'facebook_catalog';
    
        case Shopify = 'shopify';
    
        case LinkedinJobs = 'linkedin_jobs';
    
        case Custom = 'custom';
    

    
}
