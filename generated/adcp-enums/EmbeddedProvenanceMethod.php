<?php

declare(strict_types=1);

namespace AdCP\MediaBuy\Enums;



enum EmbeddedProvenanceMethod: string {
    
        case ManifestWrapper = 'manifest_wrapper';
    
        case ProvenanceMarkers = 'provenance_markers';
    

    
}
