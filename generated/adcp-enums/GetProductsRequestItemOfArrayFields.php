<?php

declare(strict_types=1);

namespace AdCP\MediaBuy\Enums;



enum GetProductsRequestItemOfArrayFields: string {
    
        case ProductId = 'product_id';
    
        case Name = 'name';
    
        case Description = 'description';
    
        case PublisherProperties = 'publisher_properties';
    
        case Channels = 'channels';
    
        case FormatIds = 'format_ids';
    
        case Placements = 'placements';
    
        case DeliveryType = 'delivery_type';
    
        case Exclusivity = 'exclusivity';
    
        case PricingOptions = 'pricing_options';
    
        case Forecast = 'forecast';
    
        case OutcomeMeasurement = 'outcome_measurement';
    
        case DeliveryMeasurement = 'delivery_measurement';
    
        case ReportingCapabilities = 'reporting_capabilities';
    
        case CreativePolicy = 'creative_policy';
    
        case CatalogTypes = 'catalog_types';
    
        case MetricOptimization = 'metric_optimization';
    
        case ConversionTracking = 'conversion_tracking';
    
        case DataProviderSignals = 'data_provider_signals';
    
        case MaxOptimizationGoals = 'max_optimization_goals';
    
        case CatalogMatch = 'catalog_match';
    
        case Collections = 'collections';
    
        case CollectionTargetingAllowed = 'collection_targeting_allowed';
    
        case Installments = 'installments';
    
        case BriefRelevance = 'brief_relevance';
    
        case ExpiresAt = 'expires_at';
    
        case ProductCard = 'product_card';
    
        case ProductCardDetailed = 'product_card_detailed';
    
        case EnforcedPolicies = 'enforced_policies';
    
        case TrustedMatch = 'trusted_match';
    

    
}
