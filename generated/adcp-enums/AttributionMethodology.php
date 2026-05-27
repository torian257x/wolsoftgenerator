<?php

declare(strict_types=1);

namespace AdCP\MediaBuy\Enums;



enum AttributionMethodology: string {
    
        case DeterministicPurchase = 'deterministic_purchase';
    
        case Probabilistic = 'probabilistic';
    
        case PanelBased = 'panel_based';
    
        case Modeled = 'modeled';
    

    
}
