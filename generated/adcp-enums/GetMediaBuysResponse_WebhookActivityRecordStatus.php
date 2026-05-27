<?php

declare(strict_types=1);

namespace AdCP\MediaBuy\Enums;



enum GetMediaBuysResponse_WebhookActivityRecordStatus: string {
    
        case Success = 'success';
    
        case Failed = 'failed';
    
        case Timeout = 'timeout';
    
        case ConnectionError = 'connection_error';
    
        case Pending = 'pending';
    

    
}
