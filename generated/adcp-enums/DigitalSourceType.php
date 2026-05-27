<?php

declare(strict_types=1);

namespace AdCP\MediaBuy\Enums;



enum DigitalSourceType: string {
    
        case DigitalCapture = 'digital_capture';
    
        case DigitalCreation = 'digital_creation';
    
        case TrainedAlgorithmicMedia = 'trained_algorithmic_media';
    
        case CompositeWithTrainedAlgorithmicMedia = 'composite_with_trained_algorithmic_media';
    
        case AlgorithmicMedia = 'algorithmic_media';
    
        case CompositeCapture = 'composite_capture';
    
        case CompositeSynthetic = 'composite_synthetic';
    
        case HumanEdits = 'human_edits';
    
        case DataDrivenMedia = 'data_driven_media';
    

    
}
