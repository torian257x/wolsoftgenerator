<?php

declare(strict_types=1);

namespace AdCP\MediaBuy\Enums;



enum ImpairmentReasonCode: string {
    
        case PolicyViolation = 'policy_violation';
    
        case ConsentExpired = 'consent_expired';
    
        case TtlExpired = 'ttl_expired';
    
        case PiiAuditFailed = 'pii_audit_failed';
    
        case SellerRemoved = 'seller_removed';
    
        case ContentRejected = 'content_rejected';
    
        case SourceOffline = 'source_offline';
    
        case PropertyDepublished = 'property_depublished';
    

    
}
