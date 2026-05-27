<?php

declare(strict_types=1);

namespace AdCP\MediaBuy\Enums;



enum AgeVerificationMethod: string {
    
        case FacialAgeEstimation = 'facial_age_estimation';
    
        case IdDocument = 'id_document';
    
        case DigitalId = 'digital_id';
    
        case CreditCard = 'credit_card';
    
        case WorldId = 'world_id';
    

    
}
