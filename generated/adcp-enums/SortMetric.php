<?php

declare(strict_types=1);

namespace AdCP\MediaBuy\Enums;



enum SortMetric: string {
    
        case Impressions = 'impressions';
    
        case Spend = 'spend';
    
        case Clicks = 'clicks';
    
        case Ctr = 'ctr';
    
        case Views = 'views';
    
        case CompletedViews = 'completed_views';
    
        case CompletionRate = 'completion_rate';
    
        case Conversions = 'conversions';
    
        case ConversionValue = 'conversion_value';
    
        case Roas = 'roas';
    
        case CostPerAcquisition = 'cost_per_acquisition';
    
        case NewToBrandRate = 'new_to_brand_rate';
    
        case Leads = 'leads';
    
        case Grps = 'grps';
    
        case Reach = 'reach';
    
        case Frequency = 'frequency';
    
        case Engagements = 'engagements';
    
        case Follows = 'follows';
    
        case Saves = 'saves';
    
        case ProfileVisits = 'profile_visits';
    
        case EngagementRate = 'engagement_rate';
    
        case CostPerClick = 'cost_per_click';
    

    
}
