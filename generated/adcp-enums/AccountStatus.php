<?php

declare(strict_types=1);

namespace AdCP\MediaBuy\Enums;



enum AccountStatus: string {
    
        case Active = 'active';
    
        case PendingApproval = 'pending_approval';
    
        case Rejected = 'rejected';
    
        case PaymentRequired = 'payment_required';
    
        case Suspended = 'suspended';
    
        case Closed = 'closed';
    

    
}
