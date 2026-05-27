<?php

declare(strict_types=1);

namespace AdCP\MediaBuy\Enums;



enum PerformanceStandardMetric: string {
    
        case Viewability = 'viewability';
    
        case Ivt = 'ivt';
    
        case CompletionRate = 'completion_rate';
    
        case BrandSafety = 'brand_safety';
    
        case AttentionScore = 'attention_score';
    

    
}
