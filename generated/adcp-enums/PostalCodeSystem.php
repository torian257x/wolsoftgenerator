<?php

declare(strict_types=1);

namespace AdCP\MediaBuy\Enums;



enum PostalCodeSystem: string {
    
        case UsZip = 'us_zip';
    
        case UsZipPlusFour = 'us_zip_plus_four';
    
        case GbOutward = 'gb_outward';
    
        case GbFull = 'gb_full';
    
        case CaFsa = 'ca_fsa';
    
        case CaFull = 'ca_full';
    
        case DePlz = 'de_plz';
    
        case FrCodePostal = 'fr_code_postal';
    
        case AuPostcode = 'au_postcode';
    
        case ChPlz = 'ch_plz';
    
        case AtPlz = 'at_plz';
    

    
}
