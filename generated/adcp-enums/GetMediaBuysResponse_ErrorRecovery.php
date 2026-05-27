<?php

declare(strict_types=1);

namespace AdCP\MediaBuy\Enums;



enum GetMediaBuysResponse_ErrorRecovery: string {
    
        case Transient = 'transient';
    
        case Correctable = 'correctable';
    
        case Terminal = 'terminal';
    

    
}
