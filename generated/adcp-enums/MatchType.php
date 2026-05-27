<?php

declare(strict_types=1);

namespace AdCP\MediaBuy\Enums;



enum MatchType: string {
    
        case Broad = 'broad';
    
        case Phrase = 'phrase';
    
        case Exact = 'exact';
    

    
}
