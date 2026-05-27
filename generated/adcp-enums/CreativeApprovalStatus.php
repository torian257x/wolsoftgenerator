<?php

declare(strict_types=1);

namespace AdCP\MediaBuy\Enums;



enum CreativeApprovalStatus: string {
    
        case PendingReview = 'pending_review';
    
        case Approved = 'approved';
    
        case Rejected = 'rejected';
    

    
}
