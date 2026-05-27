<?php

declare(strict_types=1);

namespace AdCP\MediaBuy\Enums;



enum AttributionModel: string {
    
        case LastTouch = 'last_touch';
    
        case FirstTouch = 'first_touch';
    
        case Linear = 'linear';
    
        case TimeDecay = 'time_decay';
    
        case DataDriven = 'data_driven';
    

    
}
