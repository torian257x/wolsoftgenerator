<?php

declare(strict_types=1);

namespace AdCP\MediaBuy\Enums;



enum AvailableMetric: string {
    
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
    
        case Reach = 'reach';
    
        case Frequency = 'frequency';
    
        case Grps = 'grps';
    
        case Engagements = 'engagements';
    
        case EngagementRate = 'engagement_rate';
    
        case Follows = 'follows';
    
        case Saves = 'saves';
    
        case ProfileVisits = 'profile_visits';
    
        case Viewability = 'viewability';
    
        case QuartileData = 'quartile_data';
    
        case DoohMetrics = 'dooh_metrics';
    
        case CostPerClick = 'cost_per_click';
    
        case CostPerCompletedView = 'cost_per_completed_view';
    
        case Cpm = 'cpm';
    
        case Downloads = 'downloads';
    
        case UnitsSold = 'units_sold';
    
        case NewToBrandUnits = 'new_to_brand_units';
    
        case Plays = 'plays';
    
        case IncrementalSalesLift = 'incremental_sales_lift';
    
        case BrandLift = 'brand_lift';
    
        case FootTraffic = 'foot_traffic';
    
        case ConversionLift = 'conversion_lift';
    
        case BrandSearchLift = 'brand_search_lift';
    

    
}
