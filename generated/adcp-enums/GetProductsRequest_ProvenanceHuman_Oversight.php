<?php

declare(strict_types=1);

namespace AdCP\MediaBuy\Enums;



enum GetProductsRequest_ProvenanceHuman_Oversight: string {
    
        case None = 'none';
    
        case PromptOnly = 'prompt_only';
    
        case Selected = 'selected';
    
        case Edited = 'edited';
    
        case Directed = 'directed';
    

    
}
