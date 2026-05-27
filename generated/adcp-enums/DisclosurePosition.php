<?php

declare(strict_types=1);

namespace AdCP\MediaBuy\Enums;



enum DisclosurePosition: string {
    
        case Prominent = 'prominent';
    
        case Footer = 'footer';
    
        case Audio = 'audio';
    
        case Subtitle = 'subtitle';
    
        case Overlay = 'overlay';
    
        case EndCard = 'end_card';
    
        case PreRoll = 'pre_roll';
    
        case Companion = 'companion';
    

    
}
