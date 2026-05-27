<?php

declare(strict_types=1);

namespace AdCP\MediaBuy\Enums;



enum MediaBuyValidAction: string {
    
        case Pause = 'pause';
    
        case Resume = 'resume';
    
        case Cancel = 'cancel';
    
        case ExtendFlight = 'extend_flight';
    
        case ShortenFlight = 'shorten_flight';
    
        case UpdateFlightDates = 'update_flight_dates';
    
        case IncreaseBudget = 'increase_budget';
    
        case DecreaseBudget = 'decrease_budget';
    
        case ReallocateBudget = 'reallocate_budget';
    
        case UpdateTargeting = 'update_targeting';
    
        case UpdatePacing = 'update_pacing';
    
        case UpdateFrequencyCaps = 'update_frequency_caps';
    
        case ReplaceCreative = 'replace_creative';
    
        case UpdateCreativeAssignments = 'update_creative_assignments';
    
        case RemoveCreative = 'remove_creative';
    
        case AddPackages = 'add_packages';
    
        case RemovePackages = 'remove_packages';
    
        case UpdateBudget = 'update_budget';
    
        case UpdateDates = 'update_dates';
    
        case UpdatePackages = 'update_packages';
    
        case SyncCreatives = 'sync_creatives';
    

    
}
