<?php

declare(strict_types=1);

namespace AdCP\MediaBuy\Enums;



enum EventType: string {
    
        case PageView = 'page_view';
    
        case ViewContent = 'view_content';
    
        case SelectContent = 'select_content';
    
        case SelectItem = 'select_item';
    
        case Search = 'search';
    
        case Share = 'share';
    
        case AddToCart = 'add_to_cart';
    
        case RemoveFromCart = 'remove_from_cart';
    
        case ViewedCart = 'viewed_cart';
    
        case AddToWishlist = 'add_to_wishlist';
    
        case InitiateCheckout = 'initiate_checkout';
    
        case AddPaymentInfo = 'add_payment_info';
    
        case Purchase = 'purchase';
    
        case Refund = 'refund';
    
        case Lead = 'lead';
    
        case QualifyLead = 'qualify_lead';
    
        case CloseConvertLead = 'close_convert_lead';
    
        case DisqualifyLead = 'disqualify_lead';
    
        case CompleteRegistration = 'complete_registration';
    
        case Subscribe = 'subscribe';
    
        case StartTrial = 'start_trial';
    
        case AppInstall = 'app_install';
    
        case AppLaunch = 'app_launch';
    
        case Contact = 'contact';
    
        case Schedule = 'schedule';
    
        case Donate = 'donate';
    
        case SubmitApplication = 'submit_application';
    
        case Custom = 'custom';
    

    
}
