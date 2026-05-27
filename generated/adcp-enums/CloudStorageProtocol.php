<?php

declare(strict_types=1);

namespace AdCP\MediaBuy\Enums;



enum CloudStorageProtocol: string {
    
        case S3 = 's3';
    
        case Gcs = 'gcs';
    
        case AzureBlob = 'azure_blob';
    

    
}
