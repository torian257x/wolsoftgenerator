<?php

declare(strict_types=1);

namespace AdCP\MediaBuy\Enums;



enum DevicePlatform: string {
    
        case Ios = 'ios';
    
        case Android = 'android';
    
        case Windows = 'windows';
    
        case Macos = 'macos';
    
        case Linux = 'linux';
    
        case Chromeos = 'chromeos';
    
        case Tvos = 'tvos';
    
        case Tizen = 'tizen';
    
        case Webos = 'webos';
    
        case FireOs = 'fire_os';
    
        case RokuOs = 'roku_os';
    
        case Unknown = 'unknown';
    

    
}
