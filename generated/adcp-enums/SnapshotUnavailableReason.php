<?php

declare(strict_types=1);

namespace AdCP\MediaBuy\Enums;



enum SnapshotUnavailableReason: string {
    
        case SnapshotUnsupported = 'SNAPSHOT_UNSUPPORTED';
    
        case SnapshotTemporarilyUnavailable = 'SNAPSHOT_TEMPORARILY_UNAVAILABLE';
    
        case SnapshotPermissionDenied = 'SNAPSHOT_PERMISSION_DENIED';
    

    
}
