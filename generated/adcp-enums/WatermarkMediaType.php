<?php

declare(strict_types=1);

namespace AdCP\MediaBuy\Enums;



enum WatermarkMediaType: string {
    
        case Audio = 'audio';
    
        case Image = 'image';
    
        case Video = 'video';
    
        case Text = 'text';
    

    
}
