<?php

declare(strict_types=1);

namespace AdCP\MediaBuy\Enums;



enum GetMediaBuysResponse_Snapshot2308d2a610637988e7da2c8d3b1823deDelivery_Status: string {
    
        case Delivering = 'delivering';
    
        case NotDelivering = 'not_delivering';
    
        case Completed = 'completed';
    
        case BudgetExhausted = 'budget_exhausted';
    
        case FlightEnded = 'flight_ended';
    
        case GoalMet = 'goal_met';
    

    
}
