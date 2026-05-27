<?php

declare(strict_types=1);

namespace AdCP\MediaBuy\Enums;



enum MediaBuyActionMode: string {
    
        case SelfServe = 'self_serve';
    
        case ConditionalSelfServe = 'conditional_self_serve';
    
        case RequiresProposal = 'requires_proposal';
    
        case RequiresApproval = 'requires_approval';
    

    
}
