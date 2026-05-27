<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use UnitEnum;

    use AdCP\MediaBuy\Enums\GetProductsRequestBuying_Mode;

    use AdCP\MediaBuy\Enums\DeliveryType;

    use AdCP\MediaBuy\Enums\GetProductsRequestItemOfArrayFields;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

    use AdCP\MediaBuy\Enums\GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001d5b392d89eb0397d01ef36b451045a72Action;

    use AdCP\MediaBuy\Enums\GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001966d960c0a8231c9cf148f923aed05adAction;

    use AdCP\MediaBuy\Enums\DigitalSourceType;

    use AdCP\MediaBuy\Enums\GetProductsRequest_ProvenanceHuman_Oversight;

    use AdCP\MediaBuy\Enums\GetProductsRequest_Declared_By13c986791ce55365e13a7cd5ff90f7dcRole;

    use AdCP\MediaBuy\Enums\EmbeddedProvenanceMethod;

    use AdCP\MediaBuy\Enums\WatermarkMediaType;

    use AdCP\MediaBuy\Enums\C2PAWatermarkAction;

    use AdCP\MediaBuy\Enums\DisclosurePersistence;

    use AdCP\MediaBuy\Enums\DisclosurePosition;

    use AdCP\MediaBuy\Enums\GetProductsRequest_ItemOfArrayVerificationab0379bc9ff851960f9f645c9916029eResult;

    use AdCP\MediaBuy\Enums\CatalogType;

    use AdCP\MediaBuy\Enums\FeedFormat;

    use AdCP\MediaBuy\Enums\UpdateFrequency;

    use AdCP\MediaBuy\Enums\ContentIDType;

    use AdCP\MediaBuy\Enums\EventType;

    use AdCP\MediaBuy\Enums\GetProductsRequest_CatalogFieldMappingTransform;

    use AdCP\MediaBuy\Enums\Exclusivity;

    use AdCP\MediaBuy\Enums\MediaChannel;

    use AdCP\MediaBuy\Enums\AvailableMetric;

    use AdCP\MediaBuy\Enums\MetroAreaSystem;

    use AdCP\MediaBuy\Enums\TMPResponseType;

    use AdCP\MediaBuy\Enums\GeographicTargetingLevel;

    use AdCP\MediaBuy\Enums\PostalCodeSystem;

    use AdCP\MediaBuy\Enums\TransportMode;

    use AdCP\MediaBuy\Enums\TravelTimeUnit;

    use AdCP\MediaBuy\Enums\DistanceUnit;

    use AdCP\MediaBuy\Enums\GetProductsRequest_Geometry89c19613b4b641142039d1a7df56f98aType;

    use AdCP\MediaBuy\Enums\PerformanceStandardMetric;

    use AdCP\MediaBuy\Enums\ViewabilityStandard;

    use AdCP\MediaBuy\Enums\MatchType;

    use AdCP\MediaBuy\Enums\GetProductsRequest_DurationUnit;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Required;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetProductsRequest
 * @package AdCP\MediaBuy 
 *
 * Request parameters for discovering or refining advertising products. buying_mode declares the buyer's intent: 'brief' for curated discovery, 'wholesale' for raw catalog access, or 'refine' to iterate on known products and proposals.
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('')]

class GetProductsRequest implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/buying_mode')]
        
            #[SchemaName('buying_mode')]
        
            #[Required]
        
        /** @var GetProductsRequestBuying_Mode Declares buyer intent for this request. 'brief': publisher curates product recommendations from the provided brief. 'wholesale': buyer requests raw inventory to apply their own audiences — brief must not be provided, and proposals are omitted. 'refine': iterate on products and proposals from a previous get_products response using the refine array of change requests. v3 clients MUST include buying_mode. Sellers receiving requests from pre-v3 clients without buying_mode SHOULD default to 'brief'. Timing semantics: 'wholesale' is a catalog read — sellers SHOULD return a synchronous response and MUST NOT route a 'wholesale' request through the async/Submitted arm; partial completion is signalled via the response's incomplete[] field (with optional estimated_wait), not via a task-handoff envelope. 'brief' and 'refine' MAY complete synchronously, or MAY return a Submitted envelope (see get-products-async-response-submitted.json) when curation requires upstream-system queries or HITL review the seller cannot complete inside time_budget. Buyers needing predictable fast catalog access MUST use 'wholesale'; buyers open to slower curation use 'brief' or 'refine'. */
        protected $buyingMode;
    
        
            #[JsonPointer('/properties/brief')]
        
            #[SchemaName('brief')]
        
        /** @var string|null Natural language description of campaign requirements. Required when buying_mode is 'brief'. Must not be provided when buying_mode is 'wholesale' or 'refine'. */
        protected $brief;
    
        
            #[JsonPointer('/properties/refine')]
        
            #[SchemaName('refine')]
        
        /** @var GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001[]|null Array of change requests for iterating on products and proposals from a previous get_products response. Each entry declares a scope (request, product, or proposal) and what the buyer is asking for. Only valid when buying_mode is 'refine'. The seller responds to each entry via refinement_applied in the response, matched by position.

Finalize-exclusivity rule: if any entry has `action: 'finalize'`, ALL entries in the array MUST be proposal-scoped with `action: 'finalize'` — mixing finalize entries with `include`/`omit` entries or with request- / product-scoped entries MUST be rejected by the seller with `INVALID_REQUEST`. Finalize is a commit, not a refinement; the buyer expressing intent to commit means refinements have already converged. Buyers needing to refine AND commit in close succession sequence the calls: first a refine call (no finalize), then a finalize call against the resulting `proposal_id`(s).

Multi-finalize semantics: multiple finalize entries against different `proposal_id` values in a single call are allowed and MUST be **atomic at the observation point** — sellers MUST NOT return a success response unless every named proposal has both completed and been persisted as committed. Pre-commit validation runs before any side-effects (inventory pull, terms lock, governance attestation); if any proposal fails validation, the seller MUST reject the entire call without committing any of the named proposals. There is no rollback operation in the spec — an `unfinalize` would itself be a new mutation surface; the atomicity guarantee runs entirely on the seller's pre-commit validation gate, not on post-commit reversal. Sellers that cannot guarantee atomic pre-commit validation MUST reject multi-finalize arrays with `MULTI_FINALIZE_UNSUPPORTED` (preferred — distinguishes seller-side capability gap from a malformed request) or `INVALID_REQUEST` (acceptable fallback for sellers on a pre-3.1 error catalog). If a mid-commit failure occurs *after* validation passed but before all proposals persist (e.g., a downstream ad server fails between commits one and two), the seller MUST return `INTERNAL_ERROR` with `refinement_applied[]` carrying per-position outcomes — the spec does NOT define a recovery path for this case, and buyers SHOULD treat the resulting state as undefined and re-read via `get_media_buys` / equivalent before retrying. Buyers MUST NOT assume multi-finalize support without a successful first attempt — there is no capability flag for this; the failure response is the discovery surface. Buyers whose intent specifically requires atomic commit (e.g., budget-shared proposals where one finalizing without the other is incoherent) MUST be prepared to abandon the intent if the seller returns `MULTI_FINALIZE_UNSUPPORTED` — there is no recovery for that loss of buyer intent beyond sequencing single-finalize calls and accepting the looser commit guarantee. */
        protected $refine;
    
        
            #[JsonPointer('/properties/brand')]
        
            #[SchemaName('brand')]
        
        /** @var GetProductsRequest_BrandReference|null Brand reference for product discovery context. Resolved to full brand identity at execution time. */
        protected $brand;
    
        
            #[JsonPointer('/properties/catalog')]
        
            #[SchemaName('catalog')]
        
        /** @var GetProductsRequest_Catalog|null Catalog of items the buyer wants to promote. The seller matches catalog items against its inventory and returns products where matches exist. Supports all catalog types: a job catalog finds job ad products, a product catalog finds sponsored product slots. Reference a synced catalog by catalog_id, or provide inline items. */
        protected $catalog;
    
        
            #[JsonPointer('/properties/account')]
        
            #[SchemaName('account')]
        
        /** @var GetProductsRequest_AccountReference|null Account for product lookup. Returns products with pricing specific to this account's rate card. */
        protected $account;
    
        
            #[JsonPointer('/properties/preferred_delivery_types')]
        
            #[SchemaName('preferred_delivery_types')]
        
        /** @var DeliveryType[]|null Delivery types the buyer prefers, in priority order. Unlike filters.delivery_type which excludes non-matching products, this signals preference for curation — the publisher may still include other delivery types when they match the brief well. */
        protected $preferredDeliveryTypes;
    
        
            #[JsonPointer('/properties/filters')]
        
            #[SchemaName('filters')]
        
        /** @var GetProductsRequest_ProductFilters|null Structured filters for product discovery */
        protected $filters;
    
        
            #[JsonPointer('/properties/property_list')]
        
            #[SchemaName('property_list')]
        
        /** @var GetProductsRequest_PropertyListReference|null [AdCP 3.0] Reference to an externally managed property list. When provided, the sales agent should filter products to only those available on properties in the list. */
        protected $propertyList;
    
        
            #[JsonPointer('/properties/fields')]
        
            #[SchemaName('fields')]
        
        /** @var GetProductsRequestItemOfArrayFields[]|null Specific product fields to include in the response. When omitted, all fields are returned. Use for lightweight discovery calls where only a subset of product data is needed (e.g., just IDs and pricing for comparison). Required fields (product_id, name) are always included regardless of selection. */
        protected $fields;
    
        
            #[JsonPointer('/properties/time_budget')]
        
            #[SchemaName('time_budget')]
        
        /** @var GetProductsRequest_Duration|null Maximum time the buyer will commit to this request. The seller returns the best results achievable within this budget and does not start processes (human approvals, expensive external queries) that cannot complete in time. When omitted, the seller decides timing. */
        protected $timeBudget;
    
        
            #[JsonPointer('/properties/pagination')]
        
            #[SchemaName('pagination')]
        
        /** @var GetProductsRequest_PaginationRequest|null Standard cursor-based pagination parameters for list operations */
        protected $pagination;
    
        
            #[JsonPointer('/properties/if_catalog_version')]
        
            #[SchemaName('if_catalog_version')]
        
        /** @var string|null Opaque catalog_version token returned by a prior get_products response from this agent. When provided, the seller compares against its current catalog version for the buyer's cache_scope and MAY return an unchanged: true response (with products omitted) if nothing has changed. The token is scope-keyed: buyers cache `(cache_scope, catalog_version)` pairs. Scoping dimensions: (agent, buying_mode, filters, property_list, catalog) for cache_scope: 'public'; that tuple plus account_id for cache_scope: 'account'. pagination.cursor is NOT part of the scoping tuple. Backward-compatible: pre-v3.1 agents that ignore this field simply return the full payload, same as the unchanged-server path. See specs/catalog-change-feed.md for the full sync pattern. */
        protected $ifCatalogVersion;
    
        
            #[JsonPointer('/properties/if_pricing_version')]
        
            #[SchemaName('if_pricing_version')]
        
        /** @var string|null Opaque pricing_version token from a prior get_products response. MUST only be sent together with if_catalog_version — pricing version has no structural baseline to compare against on its own. Evaluation order: (1) if_catalog_version mismatch → seller returns the full payload (pricing is implicitly stale); (2) if_catalog_version matches but if_pricing_version mismatches → seller returns the full payload so the buyer sees updated pricing_options; (3) both match → seller MAY return unchanged: true. Agents that don't track pricing separately ignore if_pricing_version and fall back to if_catalog_version semantics. Useful for storefronts that re-price compositions far more often than they re-render catalogs. */
        protected $ifPricingVersion;
    
        
            #[JsonPointer('/properties/context')]
        
            #[SchemaName('context')]
        
        /** @var GetProductsRequest_ExtensionObject|null Opaque correlation data that is echoed unchanged in responses. Used for internal tracking, UI session IDs, trace IDs, and other caller-specific identifiers that don't affect protocol behavior. Context data is never parsed by AdCP agents - it's simply preserved and returned. */
        protected $context;
    
        
            #[JsonPointer('/properties/required_policies')]
        
            #[SchemaName('required_policies')]
        
        /** @var string[]|null Registry policy IDs that the buyer requires to be enforced for products in this response. Sellers filter products to only those that comply with or already enforce the requested policies. */
        protected $requiredPolicies;
    
        
            #[JsonPointer('/properties/ext')]
        
            #[SchemaName('ext')]
        
        /** @var GetProductsRequest_ExtensionObject|null Extension object for platform-specific, vendor-namespaced parameters. Extensions are always optional and must be namespaced under a vendor/platform key (e.g., ext.gam, ext.roku). Used for custom capabilities, partner-specific configuration, and features being proposed for standardization. */
        protected $ext;
    
        
            #[JsonPointer('/allOf/0/properties/adcp_version')]
        
            #[SchemaName('adcp_version')]
        
        /** @var string|null Release-precision AdCP version (VERSION.RELEASE, e.g. "3.0", "3.1", "3.1-beta"). On a request: the buyer's release pin — the seller validates against its supported_versions and returns VERSION_UNSUPPORTED on cross-major mismatch, or downshifts to the highest supported release within the same major. On a response: the release the seller actually served — clients SHOULD validate the response against that release's schema, not against their pin. Patches are not negotiated; surface them as build_version on capabilities for operational visibility. When omitted, falls back to adcp_major_version (deprecated) or server default. Buyers SHOULD emit both adcp_version and adcp_major_version through 3.x to remain compatible with sellers that only read the legacy field. NORMALIZATION: SDKs that read full-semver values from bundle metadata (e.g. ComplianceIndex.published_version = "3.1.0-beta.1") MUST normalize to release-precision ("3.1-beta.1") before emitting on the wire — meta-field values are NOT valid wire values. */
        protected $adcpVersion;
    
        
            #[JsonPointer('/allOf/0/properties/adcp_major_version')]
        
            #[SchemaName('adcp_major_version')]
        
        /** @var int|null DEPRECATED in favor of adcp_version (release-precision string). Servers MUST continue to honor this field through 3.x. Removed in 4.0. Original semantics: the AdCP major version the buyer's payloads conform to. Sellers validate against their supported major_versions and return VERSION_UNSUPPORTED if unsupported. When omitted, the seller assumes its highest supported version. */
        protected $adcpMajorVersion;
    
        
            #[Internal]
        
        /** @var array Track the internal validation state of composed validations */
        private $_propertyValidationState = array (
  0 => 
  array (
  ),
);
    
        
            #[Internal]
        
        /** @var array Collect all additional properties provided to the schema */
        private $_additionalProperties = array (
);
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  1 => 'brief',
  2 => 'refine',
  3 => 'brand',
  4 => 'catalog',
  5 => 'account',
  6 => 'preferred_delivery_types',
  7 => 'filters',
  8 => 'property_list',
  9 => 'fields',
  10 => 'time_budget',
  11 => 'pagination',
  12 => 'if_catalog_version',
  13 => 'if_pricing_version',
  14 => 'context',
  15 => 'required_policies',
  16 => 'ext',
  17 => 'adcp_version',
  18 => 'adcp_major_version',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetProductsRequest constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processBuyingMode($rawModelDataInput);
            
        
            
                $this->processBrief($rawModelDataInput);
            
        
            
                $this->processRefine($rawModelDataInput);
            
        
            
                $this->processBrand($rawModelDataInput);
            
        
            
                $this->processCatalog($rawModelDataInput);
            
        
            
                $this->processAccount($rawModelDataInput);
            
        
            
                $this->processPreferredDeliveryTypes($rawModelDataInput);
            
        
            
                $this->processFilters($rawModelDataInput);
            
        
            
                $this->processPropertyList($rawModelDataInput);
            
        
            
                $this->processFields($rawModelDataInput);
            
        
            
                $this->processTimeBudget($rawModelDataInput);
            
        
            
                $this->processPagination($rawModelDataInput);
            
        
            
                $this->processIfCatalogVersion($rawModelDataInput);
            
        
            
                $this->processIfPricingVersion($rawModelDataInput);
            
        
            
                $this->processContext($rawModelDataInput);
            
        
            
                $this->processRequiredPolicies($rawModelDataInput);
            
        
            
                $this->processExt($rawModelDataInput);
            
        
            
                $this->processAdcpVersion($rawModelDataInput);
            
        
            
                $this->processAdcpMajorVersion($rawModelDataInput);
            
        
            
        
            
        
            
        

        
            if (count($this->_errorRegistry->getErrors())) {
                throw $this->_errorRegistry;
            }
        

        $this->_rawModelDataInput = $rawModelDataInput;

        
    }

    
        protected function executeBaseValidators(array &$modelData): void
        {
            $value = &$modelData;

            
                

if ((function () use ($value) {
    foreach (array_diff(array_keys($value), array (
   'buying_mode',
   'brief',
   'refine',
   'brand',
   'catalog',
   'account',
   'preferred_delivery_types',
   'filters',
   'property_list',
   'fields',
   'time_budget',
   'pagination',
   'if_catalog_version',
   'if_pricing_version',
   'context',
   'required_policies',
   'ext',
)) as $propertyKey) {
        

        $this->_additionalProperties[$propertyKey] = $value[$propertyKey];
    }

    return false;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidAdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetProductsRequest',
)));
}

            

            
                $this->validateComposition_0($modelData);
            
        }
    

    /**
     * Get the raw input used to set up the model
     *
     * @return array
     */
    public function getRawModelDataInput(): array
    {
        return $this->_rawModelDataInput;
    }

    
        
            
                /**
                 * Get the value of buying_mode.
                 *
                 * Declares buyer intent for this request. 'brief': publisher curates product recommendations from the provided brief. 'wholesale': buyer requests raw inventory to apply their own audiences — brief must not be provided, and proposals are omitted. 'refine': iterate on products and proposals from a previous get_products response using the refine array of change requests. v3 clients MUST include buying_mode. Sellers receiving requests from pre-v3 clients without buying_mode SHOULD default to 'brief'. Timing semantics: 'wholesale' is a catalog read — sellers SHOULD return a synchronous response and MUST NOT route a 'wholesale' request through the async/Submitted arm; partial completion is signalled via the response's incomplete[] field (with optional estimated_wait), not via a task-handoff envelope. 'brief' and 'refine' MAY complete synchronously, or MAY return a Submitted envelope (see get-products-async-response-submitted.json) when curation requires upstream-system queries or HITL review the seller cannot complete inside time_budget. Buyers needing predictable fast catalog access MUST use 'wholesale'; buyers open to slower curation use 'brief' or 'refine'.
                 *
                 * @return GetProductsRequestBuying_Mode
                 */
                public function getBuyingMode(): GetProductsRequestBuying_Mode
                {
                    

                    return $this->buyingMode;
                }
            

            
                /**
                 * Set the value of buying_mode.
                 *
                 * @param string|GetProductsRequestBuying_Mode $buyingMode Declares buyer intent for this request. 'brief': publisher curates product recommendations from the provided brief. 'wholesale': buyer requests raw inventory to apply their own audiences — brief must not be provided, and proposals are omitted. 'refine': iterate on products and proposals from a previous get_products response using the refine array of change requests. v3 clients MUST include buying_mode. Sellers receiving requests from pre-v3 clients without buying_mode SHOULD default to 'brief'. Timing semantics: 'wholesale' is a catalog read — sellers SHOULD return a synchronous response and MUST NOT route a 'wholesale' request through the async/Submitted arm; partial completion is signalled via the response's incomplete[] field (with optional estimated_wait), not via a task-handoff envelope. 'brief' and 'refine' MAY complete synchronously, or MAY return a Submitted envelope (see get-products-async-response-submitted.json) when curation requires upstream-system queries or HITL review the seller cannot complete inside time_budget. Buyers needing predictable fast catalog access MUST use 'wholesale'; buyers open to slower curation use 'brief' or 'refine'.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setBuyingMode(
                    string | GetProductsRequestBuying_Mode $buyingMode
                ): static {
                    if ($this->buyingMode === $buyingMode) {
                        return $this;
                    }

                    $value = $modelData['buying_mode'] = $buyingMode;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validateBuyingMode($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->buyingMode = $value;
                    $this->_rawModelDataInput['buying_mode'] = $buyingMode;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property buyingMode
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processBuyingMode(array $modelData): void
            {
                

                $value = array_key_exists('buying_mode', $modelData) ? $modelData['buying_mode'] : $this->buyingMode;

                

                $this->buyingMode = $this->validateBuyingMode($value, $modelData);
            }

            /**
             * Execute all validators for the property buyingMode
             */
            protected function validateBuyingMode($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof GetProductsRequestBuying_Mode)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'buying_mode',
  1 => 'GetProductsRequestBuying_Mode',
)));
}

                
                    

if (!array_key_exists('buying_mode', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'buying_mode',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'buying_mode',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'brief',
   'wholesale',
   'refine',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'buying_mode',
  1 => 
  array (
    0 => 'brief',
    1 => 'wholesale',
    2 => 'refine',
  ),
)));
}

                
                    
$transformationFailed = false;
if (!($value instanceof UnitEnum) && 
(
    
    (function (&$value) use (&$transformationFailed): bool {
        // make sure exceptions from the filter are caught and added to the error handling
        try {
            $value = \PHPModelGenerator\Filter\Enum::filter($value, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\GetProductsRequestBuying_Mode',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'buying_mode',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'buying_mode',
  1 => 'php_model_generator_enum',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of brief.
                 *
                 * Natural language description of campaign requirements. Required when buying_mode is 'brief'. Must not be provided when buying_mode is 'wholesale' or 'refine'.
                 *
                 * @return string|null
                 */
                public function getBrief(): ?string
                {
                    

                    return $this->brief;
                }
            

            
                /**
                 * Set the value of brief.
                 *
                 * @param string $brief Natural language description of campaign requirements. Required when buying_mode is 'brief'. Must not be provided when buying_mode is 'wholesale' or 'refine'.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setBrief(
                    string $brief
                ): static {
                    if ($this->brief === $brief) {
                        return $this;
                    }

                    $value = $modelData['brief'] = $brief;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validateBrief($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->brief = $value;
                    $this->_rawModelDataInput['brief'] = $brief;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property brief
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processBrief(array $modelData): void
            {
                
                    if (!array_key_exists('brief', $modelData) && $this->brief === null) {
                        return;
                    }
                

                $value = array_key_exists('brief', $modelData) ? $modelData['brief'] : $this->brief;

                

                $this->brief = $this->validateBrief($value, $modelData);
            }

            /**
             * Execute all validators for the property brief
             */
            protected function validateBrief($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'brief',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of refine.
                 *
                 * Array of change requests for iterating on products and proposals from a previous get_products response. Each entry declares a scope (request, product, or proposal) and what the buyer is asking for. Only valid when buying_mode is 'refine'. The seller responds to each entry via refinement_applied in the response, matched by position.

Finalize-exclusivity rule: if any entry has `action: 'finalize'`, ALL entries in the array MUST be proposal-scoped with `action: 'finalize'` — mixing finalize entries with `include`/`omit` entries or with request- / product-scoped entries MUST be rejected by the seller with `INVALID_REQUEST`. Finalize is a commit, not a refinement; the buyer expressing intent to commit means refinements have already converged. Buyers needing to refine AND commit in close succession sequence the calls: first a refine call (no finalize), then a finalize call against the resulting `proposal_id`(s).

Multi-finalize semantics: multiple finalize entries against different `proposal_id` values in a single call are allowed and MUST be **atomic at the observation point** — sellers MUST NOT return a success response unless every named proposal has both completed and been persisted as committed. Pre-commit validation runs before any side-effects (inventory pull, terms lock, governance attestation); if any proposal fails validation, the seller MUST reject the entire call without committing any of the named proposals. There is no rollback operation in the spec — an `unfinalize` would itself be a new mutation surface; the atomicity guarantee runs entirely on the seller's pre-commit validation gate, not on post-commit reversal. Sellers that cannot guarantee atomic pre-commit validation MUST reject multi-finalize arrays with `MULTI_FINALIZE_UNSUPPORTED` (preferred — distinguishes seller-side capability gap from a malformed request) or `INVALID_REQUEST` (acceptable fallback for sellers on a pre-3.1 error catalog). If a mid-commit failure occurs *after* validation passed but before all proposals persist (e.g., a downstream ad server fails between commits one and two), the seller MUST return `INTERNAL_ERROR` with `refinement_applied[]` carrying per-position outcomes — the spec does NOT define a recovery path for this case, and buyers SHOULD treat the resulting state as undefined and re-read via `get_media_buys` / equivalent before retrying. Buyers MUST NOT assume multi-finalize support without a successful first attempt — there is no capability flag for this; the failure response is the discovery surface. Buyers whose intent specifically requires atomic commit (e.g., budget-shared proposals where one finalizing without the other is incoherent) MUST be prepared to abandon the intent if the seller returns `MULTI_FINALIZE_UNSUPPORTED` — there is no recovery for that loss of buyer intent beyond sequencing single-finalize calls and accepting the looser commit guarantee.
                 *
                 * @return GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001[]|null
                 */
                public function getRefine(): ?array
                {
                    

                    return $this->refine;
                }
            

            
                /**
                 * Set the value of refine.
                 *
                 * @param GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001[] $refine Array of change requests for iterating on products and proposals from a previous get_products response. Each entry declares a scope (request, product, or proposal) and what the buyer is asking for. Only valid when buying_mode is 'refine'. The seller responds to each entry via refinement_applied in the response, matched by position.

Finalize-exclusivity rule: if any entry has `action: 'finalize'`, ALL entries in the array MUST be proposal-scoped with `action: 'finalize'` — mixing finalize entries with `include`/`omit` entries or with request- / product-scoped entries MUST be rejected by the seller with `INVALID_REQUEST`. Finalize is a commit, not a refinement; the buyer expressing intent to commit means refinements have already converged. Buyers needing to refine AND commit in close succession sequence the calls: first a refine call (no finalize), then a finalize call against the resulting `proposal_id`(s).

Multi-finalize semantics: multiple finalize entries against different `proposal_id` values in a single call are allowed and MUST be **atomic at the observation point** — sellers MUST NOT return a success response unless every named proposal has both completed and been persisted as committed. Pre-commit validation runs before any side-effects (inventory pull, terms lock, governance attestation); if any proposal fails validation, the seller MUST reject the entire call without committing any of the named proposals. There is no rollback operation in the spec — an `unfinalize` would itself be a new mutation surface; the atomicity guarantee runs entirely on the seller's pre-commit validation gate, not on post-commit reversal. Sellers that cannot guarantee atomic pre-commit validation MUST reject multi-finalize arrays with `MULTI_FINALIZE_UNSUPPORTED` (preferred — distinguishes seller-side capability gap from a malformed request) or `INVALID_REQUEST` (acceptable fallback for sellers on a pre-3.1 error catalog). If a mid-commit failure occurs *after* validation passed but before all proposals persist (e.g., a downstream ad server fails between commits one and two), the seller MUST return `INTERNAL_ERROR` with `refinement_applied[]` carrying per-position outcomes — the spec does NOT define a recovery path for this case, and buyers SHOULD treat the resulting state as undefined and re-read via `get_media_buys` / equivalent before retrying. Buyers MUST NOT assume multi-finalize support without a successful first attempt — there is no capability flag for this; the failure response is the discovery surface. Buyers whose intent specifically requires atomic commit (e.g., budget-shared proposals where one finalizing without the other is incoherent) MUST be prepared to abandon the intent if the seller returns `MULTI_FINALIZE_UNSUPPORTED` — there is no recovery for that loss of buyer intent beyond sequencing single-finalize calls and accepting the looser commit guarantee.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setRefine(
                    array $refine
                ): static {
                    if ($this->refine === $refine) {
                        return $this;
                    }

                    $value = $modelData['refine'] = $refine;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validateRefine($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->refine = $value;
                    $this->_rawModelDataInput['refine'] = $refine;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property refine
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processRefine(array $modelData): void
            {
                
                    if (!array_key_exists('refine', $modelData) && $this->refine === null) {
                        return;
                    }
                

                $value = array_key_exists('refine', $modelData) ? $modelData['refine'] : $this->refine;

                

                $this->refine = $this->validateRefine($value, $modelData);
            }

            /**
             * Execute all validators for the property refine
             */
            protected function validateRefine($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'refine',
  1 => 'array',
)));
}

                
                    $this->validateRefine_ArrayItem_fc58a6b3340233d07976a88ac73511c2($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'refine',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of brand.
                 *
                 * Brand reference for product discovery context. Resolved to full brand identity at execution time.
                 * @example {"domain":"nova-brands.com","brand_id":"spark"}
                 * @example {"domain":"nova-brands.com","brand_id":"glow"}
                 * @example {"domain":"acme-corp.com"}
                 *
                 * @return GetProductsRequest_BrandReference|null
                 */
                public function getBrand(): ?GetProductsRequest_BrandReference
                {
                    

                    return $this->brand;
                }
            

            
                /**
                 * Set the value of brand.
                 *
                 * @param GetProductsRequest_BrandReference $brand Brand reference for product discovery context. Resolved to full brand identity at execution time.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setBrand(
                    GetProductsRequest_BrandReference $brand
                ): static {
                    if ($this->brand === $brand) {
                        return $this;
                    }

                    $value = $modelData['brand'] = $brand;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validateBrand($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->brand = $value;
                    $this->_rawModelDataInput['brand'] = $brand;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property brand
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processBrand(array $modelData): void
            {
                
                    if (!array_key_exists('brand', $modelData) && $this->brand === null) {
                        return;
                    }
                

                $value = array_key_exists('brand', $modelData) ? $modelData['brand'] : $this->brand;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetProductsRequest_BrandReference($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'brand',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->brand = $this->validateBrand($value, $modelData);
            }

            /**
             * Execute all validators for the property brand
             */
            protected function validateBrand($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'brand',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsRequest_BrandReference)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'brand',
  1 => 'GetProductsRequest_BrandReference',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of catalog.
                 *
                 * Catalog of items the buyer wants to promote. The seller matches catalog items against its inventory and returns products where matches exist. Supports all catalog types: a job catalog finds job ad products, a product catalog finds sponsored product slots. Reference a synced catalog by catalog_id, or provide inline items.
                 * @example {"description":"Synced product catalog from Google Merchant Center","data":{"catalog_id":"gmc-primary","name":"Primary Product Feed","type":"product","url":"https://feeds.acmecorp.com/products.xml","feed_format":"google_merchant_center","update_frequency":"daily"}}
                 * @example {"description":"Inventory feed for store-level stock data","data":{"catalog_id":"store-inventory","name":"Store Inventory","type":"inventory","url":"https://feeds.acmecorp.com/inventory.json","feed_format":"custom","update_frequency":"hourly"}}
                 * @example {"description":"Store locator feed","data":{"catalog_id":"retail-locations","name":"Retail Locations","type":"store","url":"https://feeds.acmecorp.com/stores.json","feed_format":"custom","update_frequency":"weekly"}}
                 * @example {"description":"Promotional pricing feed","data":{"catalog_id":"summer-sale","name":"Summer Sale Promotions","type":"promotion","url":"https://feeds.acmecorp.com/promotions.json","feed_format":"google_merchant_center","update_frequency":"daily"}}
                 * @example {"description":"Inline offering catalog (no sync needed)","data":{"type":"offering","items":[{"offering_id":"summer-sale","name":"Summer Sale","landing_url":"https://acme.com/summer"}]}}
                 * @example {"description":"Reference to a previously synced catalog by ID","data":{"catalog_id":"gmc-primary","type":"product","ids":["SKU-12345","SKU-67890"]}}
                 * @example {"description":"Product catalog with GTIN cross-retailer matching and attribution","data":{"type":"product","gtins":["00013000006040","00013000006057"],"content_id_type":"gtin","conversion_events":["purchase","add_to_cart"]}}
                 * @example {"description":"Inline store catalog with catchment areas","data":{"catalog_id":"retail-locations","name":"Retail Locations","type":"store","items":[{"store_id":"amsterdam-flagship","name":"Amsterdam Flagship","location":{"lat":52.3676,"lng":4.9041},"catchments":[{"catchment_id":"walk","travel_time":{"value":10,"unit":"min"},"transport_mode":"walking"},{"catchment_id":"drive","travel_time":{"value":15,"unit":"min"},"transport_mode":"driving"}]}]}}
                 *
                 * @return GetProductsRequest_Catalog|null
                 */
                public function getCatalog(): ?GetProductsRequest_Catalog
                {
                    

                    return $this->catalog;
                }
            

            
                /**
                 * Set the value of catalog.
                 *
                 * @param GetProductsRequest_Catalog $catalog Catalog of items the buyer wants to promote. The seller matches catalog items against its inventory and returns products where matches exist. Supports all catalog types: a job catalog finds job ad products, a product catalog finds sponsored product slots. Reference a synced catalog by catalog_id, or provide inline items.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setCatalog(
                    GetProductsRequest_Catalog $catalog
                ): static {
                    if ($this->catalog === $catalog) {
                        return $this;
                    }

                    $value = $modelData['catalog'] = $catalog;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validateCatalog($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->catalog = $value;
                    $this->_rawModelDataInput['catalog'] = $catalog;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property catalog
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processCatalog(array $modelData): void
            {
                
                    if (!array_key_exists('catalog', $modelData) && $this->catalog === null) {
                        return;
                    }
                

                $value = array_key_exists('catalog', $modelData) ? $modelData['catalog'] : $this->catalog;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetProductsRequest_Catalog($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'catalog',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->catalog = $this->validateCatalog($value, $modelData);
            }

            /**
             * Execute all validators for the property catalog
             */
            protected function validateCatalog($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'catalog',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsRequest_Catalog)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'catalog',
  1 => 'GetProductsRequest_Catalog',
)));
}

                
                    
$missingAttributes = [];
if (array_key_exists('catalog', $modelData) && (static function () use ($modelData, &$missingAttributes) {
    foreach (array (
   'brand',
) as $dependency) {
        if (!array_key_exists($dependency, $modelData)) {
            $missingAttributes[] = $dependency;
        }
    }

    return !empty($missingAttributes);
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Dependency\InvalidPropertyDependencyException($value ?? null, ...array (
  0 => 'catalog',
  1 => $missingAttributes,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of account.
                 *
                 * Account for product lookup. Returns products with pricing specific to this account's rate card.
                 * @example {"account_id":"acc_acme_001"}
                 * @example {"brand":{"domain":"acme-corp.com"},"operator":"acme-corp.com"}
                 * @example {"brand":{"domain":"nova-brands.com","brand_id":"spark"},"operator":"pinnacle-media.com"}
                 * @example {"brand":{"domain":"acme-corp.com"},"operator":"acme-corp.com","sandbox":true}
                 *
                 * @return GetProductsRequest_AccountReference|null
                 */
                public function getAccount(): ?GetProductsRequest_AccountReference
                {
                    

                    return $this->account;
                }
            

            
                /**
                 * Set the value of account.
                 *
                 * @param GetProductsRequest_AccountReference $account Account for product lookup. Returns products with pricing specific to this account's rate card.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setAccount(
                    GetProductsRequest_AccountReference $account
                ): static {
                    if ($this->account === $account) {
                        return $this;
                    }

                    $value = $modelData['account'] = $account;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validateAccount($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->account = $value;
                    $this->_rawModelDataInput['account'] = $account;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property account
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processAccount(array $modelData): void
            {
                
                    if (!array_key_exists('account', $modelData) && $this->account === null) {
                        return;
                    }
                

                $value = array_key_exists('account', $modelData) ? $modelData['account'] : $this->account;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetProductsRequest_AccountReference($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'account',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->account = $this->validateAccount($value, $modelData);
            }

            /**
             * Execute all validators for the property account
             */
            protected function validateAccount($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'account',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsRequest_AccountReference)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'account',
  1 => 'GetProductsRequest_AccountReference',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of preferred_delivery_types.
                 *
                 * Delivery types the buyer prefers, in priority order. Unlike filters.delivery_type which excludes non-matching products, this signals preference for curation — the publisher may still include other delivery types when they match the brief well.
                 *
                 * @return DeliveryType[]|null
                 */
                public function getPreferredDeliveryTypes(): array | DeliveryType | null
                {
                    

                    return $this->preferredDeliveryTypes;
                }
            

            
                /**
                 * Set the value of preferred_delivery_types.
                 *
                 * @param string[]|DeliveryType[]|null $preferredDeliveryTypes Delivery types the buyer prefers, in priority order. Unlike filters.delivery_type which excludes non-matching products, this signals preference for curation — the publisher may still include other delivery types when they match the brief well.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setPreferredDeliveryTypes(
                    array | DeliveryType | null $preferredDeliveryTypes
                ): static {
                    if ($this->preferredDeliveryTypes === $preferredDeliveryTypes) {
                        return $this;
                    }

                    $value = $modelData['preferred_delivery_types'] = $preferredDeliveryTypes;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validatePreferredDeliveryTypes($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->preferredDeliveryTypes = $value;
                    $this->_rawModelDataInput['preferred_delivery_types'] = $preferredDeliveryTypes;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property preferredDeliveryTypes
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processPreferredDeliveryTypes(array $modelData): void
            {
                
                    if (!array_key_exists('preferred_delivery_types', $modelData) && $this->preferredDeliveryTypes === null) {
                        return;
                    }
                

                $value = array_key_exists('preferred_delivery_types', $modelData) ? $modelData['preferred_delivery_types'] : $this->preferredDeliveryTypes;

                

                $this->preferredDeliveryTypes = $this->validatePreferredDeliveryTypes($value, $modelData);
            }

            /**
             * Execute all validators for the property preferredDeliveryTypes
             */
            protected function validatePreferredDeliveryTypes($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'preferred_delivery_types',
  1 => 'array',
)));
}

                
                    $this->validatePreferredDeliveryTypes_ArrayItem_0dd64a25beb0398d1afacd9ac5091350($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'preferred_delivery_types',
  1 => 1,
)));
}

                
                    

if (is_array($value) && (static function (array $items): bool {
    if (empty($items)) {
        return false;
    }

    asort($items);
    $lastSeen = array_shift($items);

    foreach ($items as $value) {
        if ($value === $lastSeen) {
            return true;
        }

        $lastSeen = $value;
    }

    return false;
})($value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\UniqueItemsException($value ?? null, ...array (
  0 => 'preferred_delivery_types',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of filters.
                 *
                 * Structured filters for product discovery
                 *
                 * @return GetProductsRequest_ProductFilters|null
                 */
                public function getFilters(): ?GetProductsRequest_ProductFilters
                {
                    

                    return $this->filters;
                }
            

            
                /**
                 * Set the value of filters.
                 *
                 * @param GetProductsRequest_ProductFilters $filters Structured filters for product discovery
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setFilters(
                    GetProductsRequest_ProductFilters $filters
                ): static {
                    if ($this->filters === $filters) {
                        return $this;
                    }

                    $value = $modelData['filters'] = $filters;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validateFilters($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->filters = $value;
                    $this->_rawModelDataInput['filters'] = $filters;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property filters
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processFilters(array $modelData): void
            {
                
                    if (!array_key_exists('filters', $modelData) && $this->filters === null) {
                        return;
                    }
                

                $value = array_key_exists('filters', $modelData) ? $modelData['filters'] : $this->filters;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetProductsRequest_ProductFilters($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'filters',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->filters = $this->validateFilters($value, $modelData);
            }

            /**
             * Execute all validators for the property filters
             */
            protected function validateFilters($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'filters',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsRequest_ProductFilters)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'filters',
  1 => 'GetProductsRequest_ProductFilters',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of property_list.
                 *
                 * [AdCP 3.0] Reference to an externally managed property list. When provided, the sales agent should filter products to only those available on properties in the list.
                 *
                 * @return GetProductsRequest_PropertyListReference|null
                 */
                public function getPropertyList(): ?GetProductsRequest_PropertyListReference
                {
                    

                    return $this->propertyList;
                }
            

            
                /**
                 * Set the value of property_list.
                 *
                 * @param GetProductsRequest_PropertyListReference $propertyList [AdCP 3.0] Reference to an externally managed property list. When provided, the sales agent should filter products to only those available on properties in the list.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setPropertyList(
                    GetProductsRequest_PropertyListReference $propertyList
                ): static {
                    if ($this->propertyList === $propertyList) {
                        return $this;
                    }

                    $value = $modelData['property_list'] = $propertyList;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validatePropertyList($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->propertyList = $value;
                    $this->_rawModelDataInput['property_list'] = $propertyList;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property propertyList
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processPropertyList(array $modelData): void
            {
                
                    if (!array_key_exists('property_list', $modelData) && $this->propertyList === null) {
                        return;
                    }
                

                $value = array_key_exists('property_list', $modelData) ? $modelData['property_list'] : $this->propertyList;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetProductsRequest_PropertyListReference($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'property_list',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->propertyList = $this->validatePropertyList($value, $modelData);
            }

            /**
             * Execute all validators for the property propertyList
             */
            protected function validatePropertyList($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'property_list',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsRequest_PropertyListReference)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'property_list',
  1 => 'GetProductsRequest_PropertyListReference',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of fields.
                 *
                 * Specific product fields to include in the response. When omitted, all fields are returned. Use for lightweight discovery calls where only a subset of product data is needed (e.g., just IDs and pricing for comparison). Required fields (product_id, name) are always included regardless of selection.
                 *
                 * @return GetProductsRequestItemOfArrayFields[]|null
                 */
                public function getFields(): array | GetProductsRequestItemOfArrayFields | null
                {
                    

                    return $this->fields;
                }
            

            
                /**
                 * Set the value of fields.
                 *
                 * @param string[]|GetProductsRequestItemOfArrayFields[]|null $fields Specific product fields to include in the response. When omitted, all fields are returned. Use for lightweight discovery calls where only a subset of product data is needed (e.g., just IDs and pricing for comparison). Required fields (product_id, name) are always included regardless of selection.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setFields(
                    array | GetProductsRequestItemOfArrayFields | null $fields
                ): static {
                    if ($this->fields === $fields) {
                        return $this;
                    }

                    $value = $modelData['fields'] = $fields;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validateFields($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->fields = $value;
                    $this->_rawModelDataInput['fields'] = $fields;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property fields
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processFields(array $modelData): void
            {
                
                    if (!array_key_exists('fields', $modelData) && $this->fields === null) {
                        return;
                    }
                

                $value = array_key_exists('fields', $modelData) ? $modelData['fields'] : $this->fields;

                

                $this->fields = $this->validateFields($value, $modelData);
            }

            /**
             * Execute all validators for the property fields
             */
            protected function validateFields($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'fields',
  1 => 'array',
)));
}

                
                    $this->validateFields_ArrayItem_be99b0eb8136e7ff327154fb26e1d036($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'fields',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of time_budget.
                 *
                 * Maximum time the buyer will commit to this request. The seller returns the best results achievable within this budget and does not start processes (human approvals, expensive external queries) that cannot complete in time. When omitted, the seller decides timing.
                 *
                 * @return GetProductsRequest_Duration|null
                 */
                public function getTimeBudget(): mixed
                {
                    

                    return $this->timeBudget;
                }
            

            
                /**
                 * Set the value of time_budget.
                 *
                 * @param GetProductsRequest_Duration $timeBudget Maximum time the buyer will commit to this request. The seller returns the best results achievable within this budget and does not start processes (human approvals, expensive external queries) that cannot complete in time. When omitted, the seller decides timing.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setTimeBudget(
                    mixed $timeBudget
                ): static {
                    if ($this->timeBudget === $timeBudget) {
                        return $this;
                    }

                    $value = $modelData['time_budget'] = $timeBudget;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validateTimeBudget($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->timeBudget = $value;
                    $this->_rawModelDataInput['time_budget'] = $timeBudget;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property timeBudget
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processTimeBudget(array $modelData): void
            {
                
                    if (!array_key_exists('time_budget', $modelData) && $this->timeBudget === null) {
                        return;
                    }
                

                $value = array_key_exists('time_budget', $modelData) ? $modelData['time_budget'] : $this->timeBudget;

                

                $this->timeBudget = $this->validateTimeBudget($value, $modelData);
            }

            /**
             * Execute all validators for the property timeBudget
             */
            protected function validateTimeBudget($value, array $modelData)
            {
                
                    $this->validateTimeBudget_ComposedProperty_2dc2ac957e9f1192a279e7afa05f0a63($value, $modelData);
                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of pagination.
                 *
                 * Standard cursor-based pagination parameters for list operations
                 *
                 * @return GetProductsRequest_PaginationRequest|null
                 */
                public function getPagination(): ?GetProductsRequest_PaginationRequest
                {
                    

                    return $this->pagination;
                }
            

            
                /**
                 * Set the value of pagination.
                 *
                 * @param GetProductsRequest_PaginationRequest $pagination Standard cursor-based pagination parameters for list operations
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setPagination(
                    GetProductsRequest_PaginationRequest $pagination
                ): static {
                    if ($this->pagination === $pagination) {
                        return $this;
                    }

                    $value = $modelData['pagination'] = $pagination;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validatePagination($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->pagination = $value;
                    $this->_rawModelDataInput['pagination'] = $pagination;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property pagination
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processPagination(array $modelData): void
            {
                
                    if (!array_key_exists('pagination', $modelData) && $this->pagination === null) {
                        return;
                    }
                

                $value = array_key_exists('pagination', $modelData) ? $modelData['pagination'] : $this->pagination;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetProductsRequest_PaginationRequest($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'pagination',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->pagination = $this->validatePagination($value, $modelData);
            }

            /**
             * Execute all validators for the property pagination
             */
            protected function validatePagination($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'pagination',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsRequest_PaginationRequest)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'pagination',
  1 => 'GetProductsRequest_PaginationRequest',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of if_catalog_version.
                 *
                 * Opaque catalog_version token returned by a prior get_products response from this agent. When provided, the seller compares against its current catalog version for the buyer's cache_scope and MAY return an unchanged: true response (with products omitted) if nothing has changed. The token is scope-keyed: buyers cache `(cache_scope, catalog_version)` pairs. Scoping dimensions: (agent, buying_mode, filters, property_list, catalog) for cache_scope: 'public'; that tuple plus account_id for cache_scope: 'account'. pagination.cursor is NOT part of the scoping tuple. Backward-compatible: pre-v3.1 agents that ignore this field simply return the full payload, same as the unchanged-server path. See specs/catalog-change-feed.md for the full sync pattern.
                 *
                 * @return string|null
                 */
                public function getIfCatalogVersion(): ?string
                {
                    

                    return $this->ifCatalogVersion;
                }
            

            
                /**
                 * Set the value of if_catalog_version.
                 *
                 * @param string $ifCatalogVersion Opaque catalog_version token returned by a prior get_products response from this agent. When provided, the seller compares against its current catalog version for the buyer's cache_scope and MAY return an unchanged: true response (with products omitted) if nothing has changed. The token is scope-keyed: buyers cache `(cache_scope, catalog_version)` pairs. Scoping dimensions: (agent, buying_mode, filters, property_list, catalog) for cache_scope: 'public'; that tuple plus account_id for cache_scope: 'account'. pagination.cursor is NOT part of the scoping tuple. Backward-compatible: pre-v3.1 agents that ignore this field simply return the full payload, same as the unchanged-server path. See specs/catalog-change-feed.md for the full sync pattern.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setIfCatalogVersion(
                    string $ifCatalogVersion
                ): static {
                    if ($this->ifCatalogVersion === $ifCatalogVersion) {
                        return $this;
                    }

                    $value = $modelData['if_catalog_version'] = $ifCatalogVersion;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validateIfCatalogVersion($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->ifCatalogVersion = $value;
                    $this->_rawModelDataInput['if_catalog_version'] = $ifCatalogVersion;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property ifCatalogVersion
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processIfCatalogVersion(array $modelData): void
            {
                
                    if (!array_key_exists('if_catalog_version', $modelData) && $this->ifCatalogVersion === null) {
                        return;
                    }
                

                $value = array_key_exists('if_catalog_version', $modelData) ? $modelData['if_catalog_version'] : $this->ifCatalogVersion;

                

                $this->ifCatalogVersion = $this->validateIfCatalogVersion($value, $modelData);
            }

            /**
             * Execute all validators for the property ifCatalogVersion
             */
            protected function validateIfCatalogVersion($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'if_catalog_version',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of if_pricing_version.
                 *
                 * Opaque pricing_version token from a prior get_products response. MUST only be sent together with if_catalog_version — pricing version has no structural baseline to compare against on its own. Evaluation order: (1) if_catalog_version mismatch → seller returns the full payload (pricing is implicitly stale); (2) if_catalog_version matches but if_pricing_version mismatches → seller returns the full payload so the buyer sees updated pricing_options; (3) both match → seller MAY return unchanged: true. Agents that don't track pricing separately ignore if_pricing_version and fall back to if_catalog_version semantics. Useful for storefronts that re-price compositions far more often than they re-render catalogs.
                 *
                 * @return string|null
                 */
                public function getIfPricingVersion(): ?string
                {
                    

                    return $this->ifPricingVersion;
                }
            

            
                /**
                 * Set the value of if_pricing_version.
                 *
                 * @param string $ifPricingVersion Opaque pricing_version token from a prior get_products response. MUST only be sent together with if_catalog_version — pricing version has no structural baseline to compare against on its own. Evaluation order: (1) if_catalog_version mismatch → seller returns the full payload (pricing is implicitly stale); (2) if_catalog_version matches but if_pricing_version mismatches → seller returns the full payload so the buyer sees updated pricing_options; (3) both match → seller MAY return unchanged: true. Agents that don't track pricing separately ignore if_pricing_version and fall back to if_catalog_version semantics. Useful for storefronts that re-price compositions far more often than they re-render catalogs.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setIfPricingVersion(
                    string $ifPricingVersion
                ): static {
                    if ($this->ifPricingVersion === $ifPricingVersion) {
                        return $this;
                    }

                    $value = $modelData['if_pricing_version'] = $ifPricingVersion;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validateIfPricingVersion($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->ifPricingVersion = $value;
                    $this->_rawModelDataInput['if_pricing_version'] = $ifPricingVersion;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property ifPricingVersion
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processIfPricingVersion(array $modelData): void
            {
                
                    if (!array_key_exists('if_pricing_version', $modelData) && $this->ifPricingVersion === null) {
                        return;
                    }
                

                $value = array_key_exists('if_pricing_version', $modelData) ? $modelData['if_pricing_version'] : $this->ifPricingVersion;

                

                $this->ifPricingVersion = $this->validateIfPricingVersion($value, $modelData);
            }

            /**
             * Execute all validators for the property ifPricingVersion
             */
            protected function validateIfPricingVersion($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'if_pricing_version',
  1 => 'string',
)));
}

                
                    
$missingAttributes = [];
if (array_key_exists('if_pricing_version', $modelData) && (static function () use ($modelData, &$missingAttributes) {
    foreach (array (
   'if_catalog_version',
) as $dependency) {
        if (!array_key_exists($dependency, $modelData)) {
            $missingAttributes[] = $dependency;
        }
    }

    return !empty($missingAttributes);
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Dependency\InvalidPropertyDependencyException($value ?? null, ...array (
  0 => 'if_pricing_version',
  1 => $missingAttributes,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of context.
                 *
                 * Opaque correlation data that is echoed unchanged in responses. Used for internal tracking, UI session IDs, trace IDs, and other caller-specific identifiers that don't affect protocol behavior. Context data is never parsed by AdCP agents - it's simply preserved and returned.
                 *
                 * @return GetProductsRequest_ExtensionObject|null
                 */
                public function getContext(): ?GetProductsRequest_ExtensionObject
                {
                    

                    return $this->context;
                }
            

            
                /**
                 * Set the value of context.
                 *
                 * @param GetProductsRequest_ExtensionObject $context Opaque correlation data that is echoed unchanged in responses. Used for internal tracking, UI session IDs, trace IDs, and other caller-specific identifiers that don't affect protocol behavior. Context data is never parsed by AdCP agents - it's simply preserved and returned.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setContext(
                    GetProductsRequest_ExtensionObject $context
                ): static {
                    if ($this->context === $context) {
                        return $this;
                    }

                    $value = $modelData['context'] = $context;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validateContext($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->context = $value;
                    $this->_rawModelDataInput['context'] = $context;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property context
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processContext(array $modelData): void
            {
                
                    if (!array_key_exists('context', $modelData) && $this->context === null) {
                        return;
                    }
                

                $value = array_key_exists('context', $modelData) ? $modelData['context'] : $this->context;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetProductsRequest_ExtensionObject($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'context',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->context = $this->validateContext($value, $modelData);
            }

            /**
             * Execute all validators for the property context
             */
            protected function validateContext($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'context',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsRequest_ExtensionObject)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'context',
  1 => 'GetProductsRequest_ExtensionObject',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of required_policies.
                 *
                 * Registry policy IDs that the buyer requires to be enforced for products in this response. Sellers filter products to only those that comply with or already enforce the requested policies.
                 *
                 * @return string[]|null
                 */
                public function getRequiredPolicies(): ?array
                {
                    

                    return $this->requiredPolicies;
                }
            

            
                /**
                 * Set the value of required_policies.
                 *
                 * @param string[] $requiredPolicies Registry policy IDs that the buyer requires to be enforced for products in this response. Sellers filter products to only those that comply with or already enforce the requested policies.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setRequiredPolicies(
                    array $requiredPolicies
                ): static {
                    if ($this->requiredPolicies === $requiredPolicies) {
                        return $this;
                    }

                    $value = $modelData['required_policies'] = $requiredPolicies;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validateRequiredPolicies($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->requiredPolicies = $value;
                    $this->_rawModelDataInput['required_policies'] = $requiredPolicies;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property requiredPolicies
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processRequiredPolicies(array $modelData): void
            {
                
                    if (!array_key_exists('required_policies', $modelData) && $this->requiredPolicies === null) {
                        return;
                    }
                

                $value = array_key_exists('required_policies', $modelData) ? $modelData['required_policies'] : $this->requiredPolicies;

                

                $this->requiredPolicies = $this->validateRequiredPolicies($value, $modelData);
            }

            /**
             * Execute all validators for the property requiredPolicies
             */
            protected function validateRequiredPolicies($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'required_policies',
  1 => 'array',
)));
}

                
                    $this->validateRequiredPolicies_ArrayItem_779d728dd42973822575eea38ea6f9dc($value, $modelData);
                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of ext.
                 *
                 * Extension object for platform-specific, vendor-namespaced parameters. Extensions are always optional and must be namespaced under a vendor/platform key (e.g., ext.gam, ext.roku). Used for custom capabilities, partner-specific configuration, and features being proposed for standardization.
                 *
                 * @return GetProductsRequest_ExtensionObject|null
                 */
                public function getExt(): ?GetProductsRequest_ExtensionObject
                {
                    

                    return $this->ext;
                }
            

            
                /**
                 * Set the value of ext.
                 *
                 * @param GetProductsRequest_ExtensionObject $ext Extension object for platform-specific, vendor-namespaced parameters. Extensions are always optional and must be namespaced under a vendor/platform key (e.g., ext.gam, ext.roku). Used for custom capabilities, partner-specific configuration, and features being proposed for standardization.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setExt(
                    GetProductsRequest_ExtensionObject $ext
                ): static {
                    if ($this->ext === $ext) {
                        return $this;
                    }

                    $value = $modelData['ext'] = $ext;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validateExt($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->ext = $value;
                    $this->_rawModelDataInput['ext'] = $ext;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property ext
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processExt(array $modelData): void
            {
                
                    if (!array_key_exists('ext', $modelData) && $this->ext === null) {
                        return;
                    }
                

                $value = array_key_exists('ext', $modelData) ? $modelData['ext'] : $this->ext;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetProductsRequest_ExtensionObject($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'ext',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->ext = $this->validateExt($value, $modelData);
            }

            /**
             * Execute all validators for the property ext
             */
            protected function validateExt($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'ext',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsRequest_ExtensionObject)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'ext',
  1 => 'GetProductsRequest_ExtensionObject',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of adcp_version.
                 *
                 * Release-precision AdCP version (VERSION.RELEASE, e.g. "3.0", "3.1", "3.1-beta"). On a request: the buyer's release pin — the seller validates against its supported_versions and returns VERSION_UNSUPPORTED on cross-major mismatch, or downshifts to the highest supported release within the same major. On a response: the release the seller actually served — clients SHOULD validate the response against that release's schema, not against their pin. Patches are not negotiated; surface them as build_version on capabilities for operational visibility. When omitted, falls back to adcp_major_version (deprecated) or server default. Buyers SHOULD emit both adcp_version and adcp_major_version through 3.x to remain compatible with sellers that only read the legacy field. NORMALIZATION: SDKs that read full-semver values from bundle metadata (e.g. ComplianceIndex.published_version = "3.1.0-beta.1") MUST normalize to release-precision ("3.1-beta.1") before emitting on the wire — meta-field values are NOT valid wire values.
                 * @example 3.0
                 * @example 3.1
                 * @example 3.1-beta
                 * @example 3.1-rc.1
                 *
                 * @return string|null
                 */
                public function getAdcpVersion(): ?string
                {
                    

                    return $this->adcpVersion;
                }
            

            
                /**
                 * Set the value of adcp_version.
                 *
                 * @param string $adcpVersion Release-precision AdCP version (VERSION.RELEASE, e.g. "3.0", "3.1", "3.1-beta"). On a request: the buyer's release pin — the seller validates against its supported_versions and returns VERSION_UNSUPPORTED on cross-major mismatch, or downshifts to the highest supported release within the same major. On a response: the release the seller actually served — clients SHOULD validate the response against that release's schema, not against their pin. Patches are not negotiated; surface them as build_version on capabilities for operational visibility. When omitted, falls back to adcp_major_version (deprecated) or server default. Buyers SHOULD emit both adcp_version and adcp_major_version through 3.x to remain compatible with sellers that only read the legacy field. NORMALIZATION: SDKs that read full-semver values from bundle metadata (e.g. ComplianceIndex.published_version = "3.1.0-beta.1") MUST normalize to release-precision ("3.1-beta.1") before emitting on the wire — meta-field values are NOT valid wire values.
                 *
                 * 
                 *
                 * @return static
                 */
                public function setAdcpVersion(
                    string $adcpVersion
                ): static {
                    if ($this->adcpVersion === $adcpVersion) {
                        return $this;
                    }

                    $value = $modelData['adcp_version'] = $adcpVersion;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    $this->validateComposition_0($modelData);



                    $value = $this->validateAdcpVersion($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->adcpVersion = $value;
                    $this->_rawModelDataInput['adcp_version'] = $adcpVersion;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property adcpVersion
             *
             * @param array $modelData
             *
             * 
             */
            protected function processAdcpVersion(array $modelData): void
            {
                
                    if (!array_key_exists('adcp_version', $modelData) && $this->adcpVersion === null) {
                        return;
                    }
                

                $value = array_key_exists('adcp_version', $modelData) ? $modelData['adcp_version'] : $this->adcpVersion;

                

                $this->adcpVersion = $this->validateAdcpVersion($value, $modelData);
            }

            /**
             * Execute all validators for the property adcpVersion
             */
            protected function validateAdcpVersion($value, array $modelData)
            {
                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of adcp_major_version.
                 *
                 * DEPRECATED in favor of adcp_version (release-precision string). Servers MUST continue to honor this field through 3.x. Removed in 4.0. Original semantics: the AdCP major version the buyer's payloads conform to. Sellers validate against their supported major_versions and return VERSION_UNSUPPORTED if unsupported. When omitted, the seller assumes its highest supported version.
                 *
                 * @return int|null
                 */
                public function getAdcpMajorVersion(): ?int
                {
                    

                    return $this->adcpMajorVersion;
                }
            

            
                /**
                 * Set the value of adcp_major_version.
                 *
                 * @param int $adcpMajorVersion DEPRECATED in favor of adcp_version (release-precision string). Servers MUST continue to honor this field through 3.x. Removed in 4.0. Original semantics: the AdCP major version the buyer's payloads conform to. Sellers validate against their supported major_versions and return VERSION_UNSUPPORTED if unsupported. When omitted, the seller assumes its highest supported version.
                 *
                 * 
                 *
                 * @return static
                 */
                public function setAdcpMajorVersion(
                    int $adcpMajorVersion
                ): static {
                    if ($this->adcpMajorVersion === $adcpMajorVersion) {
                        return $this;
                    }

                    $value = $modelData['adcp_major_version'] = $adcpMajorVersion;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    $this->validateComposition_0($modelData);



                    $value = $this->validateAdcpMajorVersion($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->adcpMajorVersion = $value;
                    $this->_rawModelDataInput['adcp_major_version'] = $adcpMajorVersion;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property adcpMajorVersion
             *
             * @param array $modelData
             *
             * 
             */
            protected function processAdcpMajorVersion(array $modelData): void
            {
                
                    if (!array_key_exists('adcp_major_version', $modelData) && $this->adcpMajorVersion === null) {
                        return;
                    }
                

                $value = array_key_exists('adcp_major_version', $modelData) ? $modelData['adcp_major_version'] : $this->adcpMajorVersion;

                

                $this->adcpMajorVersion = $this->validateAdcpMajorVersion($value, $modelData);
            }

            /**
             * Execute all validators for the property adcpMajorVersion
             */
            protected function validateAdcpMajorVersion($value, array $modelData)
            {
                

                return $value;
            }
        
    
        
    
        
    
        
    

    /**
 * Validate updated properties which are part of a composition validation
 *
 * @param array $modifiedModelData An array containing all updated data as key-value pairs
 *
 * 
 */
private function validateComposition_0(array &$modifiedModelData): void
{
    $validatorIndex = 0;
    $value = $modelData = array_merge($this->_rawModelDataInput, $modifiedModelData);

    
            $succeededCompositionElements = 0;
            $compositionErrorCollection = [];
        
    if (
(function (&$value) use (
    &$modelData,
    &$modifiedModelData,
    &$compositionErrorCollection,
    &$succeededCompositionElements,
    &$validatorIndex
) {
    $succeededCompositionElements = 1;
    $validatorComponentIndex = 0;
    $originalModelData = $value;
    $proposedValue = null;
    $modifiedValues = [];

    
        $originalPropertyValidationState = $this->_propertyValidationState ?? [];
    

    
        $originalErrorRegistry = $this->_errorRegistry;
    

    
        try {
            
                // check if the state of the validator is already known.
                // If none of the properties affected by the validator are changed the validator must not be re-evaluated
                if (isset($validatorIndex) &&
                    isset($this->_propertyValidationState[$validatorIndex][$validatorComponentIndex]) &&
                    !array_intersect(
                        array_keys($modifiedModelData),
                        [
                            
                                'adcp_version',
                            
                                'adcp_major_version',
                            
                        ]
                    )
                ) {
                    
                        $compositionErrorCollection[] = $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex];
                    

                    if (
                            $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex]->getErrors()
                        
                    ) {
                        throw new \Exception();
                    }
                } else {
            

                
                    // collect errors for each composition element
                    $this->_errorRegistry = new ErrorRegistryException();
                

                

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetProductsRequest_AdCPVersionEnvelope($value) : $value;
    } catch (\Exception $instantiationException) {
        
            
                foreach($instantiationException->getErrors() as $nestedValidationError) {
                    $this->_errorRegistry->addError($nestedValidationError);
                }
            
        

        
            return $instantiationException;
        
    }
})($value)
;

                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'GetProductsRequest',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsRequest_AdCPVersionEnvelope)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'GetProductsRequest',
  1 => 'GetProductsRequest_AdCPVersionEnvelope',
)));
}

                

                
                    $compositionErrorCollection[] = $this->_errorRegistry;

                    
                        if (isset($validatorIndex)) {
                            $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex] = $this->_errorRegistry;
                        }
                    

                    // an error inside the composed validation occurred. Throw an exception to count the validity of the
                    // composition item
                    if ($this->_errorRegistry->getErrors()) {
                        throw new \Exception();
                    }
                

                
                    $proposedValue = $proposedValue ?? $value;
                

                if (is_object($value) && is_array($originalModelData)) {
                    $modifiedValues = array_merge($modifiedValues, $this->_getModifiedValues_2db2e($originalModelData, $value));
                }
            
                
            }
            
        } catch (\Exception $e) {
            

            $succeededCompositionElements--;
        }

        $value = $originalModelData;
        $validatorComponentIndex++;
    

    
        $value = $proposedValue;
    

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    $result = !($succeededCompositionElements === 1);

    
        if ($result) {
            $this->_propertyValidationState = $originalPropertyValidationState;
        }
    

    return $result;
})($value)
) {
        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\ComposedValue\AllOfException($value ?? null, ...array (
  0 => 'GetProductsRequest',
  1 => $succeededCompositionElements,
  2 => $compositionErrorCollection,
)));
    }

    foreach (array_keys($modifiedModelData) as $property) {
        $modifiedModelData[$property] = $modelData[$property];
    }
}


/**
 * Update the model with the provided data. If the update fails due to any violations an exception will be thrown and
 * no properties of the model will be updated.
 *
 * @param array $modelData May contain any subset of the models properties
 *
 * @return self
 *
 * @throws ErrorRegistryException
 */
public function populate(array $modelData): self
{
    $rollbackValues = [];

    
        $this->_errorRegistry = new ErrorRegistryException();
    

    foreach (['_additionalProperties', '_patternProperties'] as $property) {
        if (isset($this->{$property})) {
            $rollbackValues[$property] = $this->{$property};
        }
    }

    
        $this->executeBaseValidators($modelData);
    

    
        
            if (array_key_exists('buying_mode', $modelData) &&
                $modelData['buying_mode'] !== $this->buyingMode
            ) {
                



                $rollbackValues['buyingMode'] = $this->buyingMode;
                $this->processBuyingMode($modelData);
            }
        
    
        
            if (array_key_exists('brief', $modelData) &&
                $modelData['brief'] !== $this->brief
            ) {
                



                $rollbackValues['brief'] = $this->brief;
                $this->processBrief($modelData);
            }
        
    
        
            if (array_key_exists('refine', $modelData) &&
                $modelData['refine'] !== $this->refine
            ) {
                



                $rollbackValues['refine'] = $this->refine;
                $this->processRefine($modelData);
            }
        
    
        
            if (array_key_exists('brand', $modelData) &&
                $modelData['brand'] !== $this->brand
            ) {
                



                $rollbackValues['brand'] = $this->brand;
                $this->processBrand($modelData);
            }
        
    
        
            if (array_key_exists('catalog', $modelData) &&
                $modelData['catalog'] !== $this->catalog
            ) {
                



                $rollbackValues['catalog'] = $this->catalog;
                $this->processCatalog($modelData);
            }
        
    
        
            if (array_key_exists('account', $modelData) &&
                $modelData['account'] !== $this->account
            ) {
                



                $rollbackValues['account'] = $this->account;
                $this->processAccount($modelData);
            }
        
    
        
            if (array_key_exists('preferred_delivery_types', $modelData) &&
                $modelData['preferred_delivery_types'] !== $this->preferredDeliveryTypes
            ) {
                



                $rollbackValues['preferredDeliveryTypes'] = $this->preferredDeliveryTypes;
                $this->processPreferredDeliveryTypes($modelData);
            }
        
    
        
            if (array_key_exists('filters', $modelData) &&
                $modelData['filters'] !== $this->filters
            ) {
                



                $rollbackValues['filters'] = $this->filters;
                $this->processFilters($modelData);
            }
        
    
        
            if (array_key_exists('property_list', $modelData) &&
                $modelData['property_list'] !== $this->propertyList
            ) {
                



                $rollbackValues['propertyList'] = $this->propertyList;
                $this->processPropertyList($modelData);
            }
        
    
        
            if (array_key_exists('fields', $modelData) &&
                $modelData['fields'] !== $this->fields
            ) {
                



                $rollbackValues['fields'] = $this->fields;
                $this->processFields($modelData);
            }
        
    
        
            if (array_key_exists('time_budget', $modelData) &&
                $modelData['time_budget'] !== $this->timeBudget
            ) {
                



                $rollbackValues['timeBudget'] = $this->timeBudget;
                $this->processTimeBudget($modelData);
            }
        
    
        
            if (array_key_exists('pagination', $modelData) &&
                $modelData['pagination'] !== $this->pagination
            ) {
                



                $rollbackValues['pagination'] = $this->pagination;
                $this->processPagination($modelData);
            }
        
    
        
            if (array_key_exists('if_catalog_version', $modelData) &&
                $modelData['if_catalog_version'] !== $this->ifCatalogVersion
            ) {
                



                $rollbackValues['ifCatalogVersion'] = $this->ifCatalogVersion;
                $this->processIfCatalogVersion($modelData);
            }
        
    
        
            if (array_key_exists('if_pricing_version', $modelData) &&
                $modelData['if_pricing_version'] !== $this->ifPricingVersion
            ) {
                



                $rollbackValues['ifPricingVersion'] = $this->ifPricingVersion;
                $this->processIfPricingVersion($modelData);
            }
        
    
        
            if (array_key_exists('context', $modelData) &&
                $modelData['context'] !== $this->context
            ) {
                



                $rollbackValues['context'] = $this->context;
                $this->processContext($modelData);
            }
        
    
        
            if (array_key_exists('required_policies', $modelData) &&
                $modelData['required_policies'] !== $this->requiredPolicies
            ) {
                



                $rollbackValues['requiredPolicies'] = $this->requiredPolicies;
                $this->processRequiredPolicies($modelData);
            }
        
    
        
            if (array_key_exists('ext', $modelData) &&
                $modelData['ext'] !== $this->ext
            ) {
                



                $rollbackValues['ext'] = $this->ext;
                $this->processExt($modelData);
            }
        
    
        
            if (array_key_exists('adcp_version', $modelData) &&
                $modelData['adcp_version'] !== $this->adcpVersion
            ) {
                $this->validateComposition_0($modelData);



                $rollbackValues['adcpVersion'] = $this->adcpVersion;
                $this->processAdcpVersion($modelData);
            }
        
    
        
            if (array_key_exists('adcp_major_version', $modelData) &&
                $modelData['adcp_major_version'] !== $this->adcpMajorVersion
            ) {
                $this->validateComposition_0($modelData);



                $rollbackValues['adcpMajorVersion'] = $this->adcpMajorVersion;
                $this->processAdcpMajorVersion($modelData);
            }
        
    
        
    
        
    
        
    

    
        if (count($this->_errorRegistry->getErrors())) {
            foreach ($rollbackValues as $property => $value) {
                $this->{$property} = $value;
            }

            throw $this->_errorRegistry;
        }
    

    $this->_rawModelDataInput = array_merge($this->_rawModelDataInput, $modelData);

    
        
    
        
    
        
    
        
    
        
    
        
    
        
    
        
    
        
    
        
    
        
    
        
    
        
    
        
    
        
    
        
    
        
    
        
    
        
    
        
    
        
    
        
    

    return $this;
}


/**
 * serialize the property buyingMode
 */
protected function serializeBuyingMode()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->buyingMode, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\GetProductsRequestBuying_Mode',
));
}



    protected function resolveSerializationHook(array $data, int $depth, array $except): array
    {
        $data = array_merge($this->serializeAdditionalProperties($depth, $except), $data);

        return $data;
    }


protected function serializeAdditionalProperties(int $depth, array $except): array
{
    

    return $this->getSerializedValue(
        $this->_additionalProperties,
        $depth,
        $except
    );
}


private function validateRefine_ArrayItem_fc58a6b3340233d07976a88ac73511c2(&$value, $modelData): void {
                    $invalidItems_c798192684daafe07114655104b45b8e = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_c798192684daafe07114655104b45b8e, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            $value = (function ($value) {
    try {
        return is_array($value) ? new GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001($value) : $value;
    } catch (\Exception $instantiationException) {
        
            
                foreach($instantiationException->getErrors() as $nestedValidationError) {
                    $this->_errorRegistry->addError($nestedValidationError);
                }
            
        

        
            return $instantiationException;
        
    }
})($value)
;

            
                

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array refine',
  1 => 'object',
)));
}

            
                

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'item of array refine',
  1 => 'GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_c798192684daafe07114655104b45b8e[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_c798192684daafe07114655104b45b8e[$index])
                ? $invalidItems_c798192684daafe07114655104b45b8e[$index][] = $e
                : $invalidItems_c798192684daafe07114655104b45b8e[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_c798192684daafe07114655104b45b8e);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'refine',
  1 => $invalidItems_c798192684daafe07114655104b45b8e,
)));
                    }
                }

private function validatePreferredDeliveryTypes_ArrayItem_0dd64a25beb0398d1afacd9ac5091350(&$value, $modelData): void {
                    $invalidItems_db9edbb9780f2bc219f7d20b773278c2 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_db9edbb9780f2bc219f7d20b773278c2, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            

            
                

if ($value instanceof UnitEnum && !($value instanceof DeliveryType)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'delivery_type',
  1 => 'DeliveryType',
)));
}

            
                

if ($value instanceof UnitEnum && !($value instanceof DeliveryType)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array preferred_delivery_types',
  1 => 'DeliveryType',
)));
}

            
                

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array preferred_delivery_types',
  1 => 'string',
)));
}

            
                

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'guaranteed',
   'non_guaranteed',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'delivery_type',
  1 => 
  array (
    0 => 'guaranteed',
    1 => 'non_guaranteed',
  ),
)));
}

            
                
$transformationFailed = false;
if (!($value instanceof UnitEnum) && 
(
    
    (function (&$value) use (&$transformationFailed): bool {
        // make sure exceptions from the filter are caught and added to the error handling
        try {
            $value = \PHPModelGenerator\Filter\Enum::filter($value, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\DeliveryType',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'delivery_type',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'delivery_type',
  1 => 'php_model_generator_enum',
)));
}

            
                
$transformationFailed = false;
if (!($value instanceof UnitEnum) && 
(
    
    (function (&$value) use (&$transformationFailed): bool {
        // make sure exceptions from the filter are caught and added to the error handling
        try {
            $value = \PHPModelGenerator\Filter\Enum::filter($value, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\DeliveryType',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'item of array preferred_delivery_types',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'item of array preferred_delivery_types',
  1 => 'php_model_generator_enum',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_db9edbb9780f2bc219f7d20b773278c2[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_db9edbb9780f2bc219f7d20b773278c2[$index])
                ? $invalidItems_db9edbb9780f2bc219f7d20b773278c2[$index][] = $e
                : $invalidItems_db9edbb9780f2bc219f7d20b773278c2[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_db9edbb9780f2bc219f7d20b773278c2);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'preferred_delivery_types',
  1 => $invalidItems_db9edbb9780f2bc219f7d20b773278c2,
)));
                    }
                }

private function validateFields_ArrayItem_be99b0eb8136e7ff327154fb26e1d036(&$value, $modelData): void {
                    $invalidItems_fb572363d578d394034ad2f9c8d994a9 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_fb572363d578d394034ad2f9c8d994a9, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            

            
                

if ($value instanceof UnitEnum && !($value instanceof GetProductsRequestItemOfArrayFields)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array fields',
  1 => 'GetProductsRequestItemOfArrayFields',
)));
}

            
                

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array fields',
  1 => 'string',
)));
}

            
                

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'product_id',
   'name',
   'description',
   'publisher_properties',
   'channels',
   'format_ids',
   'placements',
   'delivery_type',
   'exclusivity',
   'pricing_options',
   'forecast',
   'outcome_measurement',
   'delivery_measurement',
   'reporting_capabilities',
   'creative_policy',
   'catalog_types',
   'metric_optimization',
   'conversion_tracking',
   'data_provider_signals',
   'max_optimization_goals',
   'catalog_match',
   'collections',
   'collection_targeting_allowed',
   'installments',
   'brief_relevance',
   'expires_at',
   'product_card',
   'product_card_detailed',
   'enforced_policies',
   'trusted_match',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'item of array fields',
  1 => 
  array (
    0 => 'product_id',
    1 => 'name',
    2 => 'description',
    3 => 'publisher_properties',
    4 => 'channels',
    5 => 'format_ids',
    6 => 'placements',
    7 => 'delivery_type',
    8 => 'exclusivity',
    9 => 'pricing_options',
    10 => 'forecast',
    11 => 'outcome_measurement',
    12 => 'delivery_measurement',
    13 => 'reporting_capabilities',
    14 => 'creative_policy',
    15 => 'catalog_types',
    16 => 'metric_optimization',
    17 => 'conversion_tracking',
    18 => 'data_provider_signals',
    19 => 'max_optimization_goals',
    20 => 'catalog_match',
    21 => 'collections',
    22 => 'collection_targeting_allowed',
    23 => 'installments',
    24 => 'brief_relevance',
    25 => 'expires_at',
    26 => 'product_card',
    27 => 'product_card_detailed',
    28 => 'enforced_policies',
    29 => 'trusted_match',
  ),
)));
}

            
                
$transformationFailed = false;
if (!($value instanceof UnitEnum) && 
(
    
    (function (&$value) use (&$transformationFailed): bool {
        // make sure exceptions from the filter are caught and added to the error handling
        try {
            $value = \PHPModelGenerator\Filter\Enum::filter($value, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\GetProductsRequestItemOfArrayFields',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'item of array fields',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'item of array fields',
  1 => 'php_model_generator_enum',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_fb572363d578d394034ad2f9c8d994a9[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_fb572363d578d394034ad2f9c8d994a9[$index])
                ? $invalidItems_fb572363d578d394034ad2f9c8d994a9[$index][] = $e
                : $invalidItems_fb572363d578d394034ad2f9c8d994a9[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_fb572363d578d394034ad2f9c8d994a9);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'fields',
  1 => $invalidItems_fb572363d578d394034ad2f9c8d994a9,
)));
                    }
                }

private function validateTimeBudget_ComposedProperty_2dc2ac957e9f1192a279e7afa05f0a63(&$value, $modelData): void {
                    
            $succeededCompositionElements = 0;
            $compositionErrorCollection = [];
        
                    
                    if (
(function (&$value) use (
    &$modelData,
    &$modifiedModelData,
    &$compositionErrorCollection,
    &$succeededCompositionElements,
    &$validatorIndex
) {
    $succeededCompositionElements = 1;
    $validatorComponentIndex = 0;
    $originalModelData = $value;
    $proposedValue = null;
    $modifiedValues = [];

    

    
        $originalErrorRegistry = $this->_errorRegistry;
    

    
        try {
            

                
                    // collect errors for each composition element
                    $this->_errorRegistry = new ErrorRegistryException();
                

                

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetProductsRequest_Duration($value) : $value;
    } catch (\Exception $instantiationException) {
        
            
                foreach($instantiationException->getErrors() as $nestedValidationError) {
                    $this->_errorRegistry->addError($nestedValidationError);
                }
            
        

        
            return $instantiationException;
        
    }
})($value)
;

                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'time_budget',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsRequest_Duration)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'time_budget',
  1 => 'GetProductsRequest_Duration',
)));
}

                

                
                    $compositionErrorCollection[] = $this->_errorRegistry;

                    

                    // an error inside the composed validation occurred. Throw an exception to count the validity of the
                    // composition item
                    if ($this->_errorRegistry->getErrors()) {
                        throw new \Exception();
                    }
                

                
                    $proposedValue = $proposedValue ?? $value;
                

                if (is_object($value) && is_array($originalModelData)) {
                    $modifiedValues = array_merge($modifiedValues, $this->_getModifiedValues_9eb1d($originalModelData, $value));
                }
            
        } catch (\Exception $e) {
            

            $succeededCompositionElements--;
        }

        $value = $originalModelData;
        $validatorComponentIndex++;
    

    
        if (is_object($proposedValue)) {
            if ($modifiedValues) {
                $value = array_merge($value, $modifiedValues);
            }

            $value = (function ($value) {
    try {
        return is_array($value) ? new GetProductsRequest_Duration($value) : $value;
    } catch (\Exception $instantiationException) {
        
            
                foreach($instantiationException->getErrors() as $nestedValidationError) {
                    $this->_errorRegistry->addError($nestedValidationError);
                }
            
        

        
            return $instantiationException;
        
    }
})($value)
;
        } else {
            $value = $proposedValue;
        }
    

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    $result = !($succeededCompositionElements === 1);

    

    return $result;
})($value)
) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\ComposedValue\AllOfException($value ?? null, ...array (
  0 => 'time_budget',
  1 => $succeededCompositionElements,
  2 => $compositionErrorCollection,
)));
                    }
                }

private function validateRequiredPolicies_ArrayItem_779d728dd42973822575eea38ea6f9dc(&$value, $modelData): void {
                    $invalidItems_646494cc63bb6ec60909ce4495e4d69f = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_646494cc63bb6ec60909ce4495e4d69f, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            

            
                

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array required_policies',
  1 => 'string',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_646494cc63bb6ec60909ce4495e4d69f[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_646494cc63bb6ec60909ce4495e4d69f[$index])
                ? $invalidItems_646494cc63bb6ec60909ce4495e4d69f[$index][] = $e
                : $invalidItems_646494cc63bb6ec60909ce4495e4d69f[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_646494cc63bb6ec60909ce4495e4d69f);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'required_policies',
  1 => $invalidItems_646494cc63bb6ec60909ce4495e4d69f,
)));
                    }
                }


                        private function _getModifiedValues_2db2e(array $originalModelData, object $nestedCompositionObject): array {
                            $modifiedValues = [];
                            $defaultValueMap = array (
  0 => 'skipNotProvidedPropertiesMap',
);
    
                            foreach (array (
  'adcp_version' => 'getAdcpVersion',
  'adcp_major_version' => 'getAdcpMajorVersion',
  'skipNotProvidedPropertiesMap' => 'get_skipNotProvidedPropertiesMap',
) as $key => $accessor) {
                                if ((isset($originalModelData[$key]) || in_array($key, $defaultValueMap))
                                    && method_exists($nestedCompositionObject, $accessor)
                                    && ($modifiedValue = $nestedCompositionObject->$accessor())
                                        !== ($originalModelData[$key] ?? !$modifiedValue)
                                ) {
                                    $modifiedValues[$key] = $modifiedValue;
                                }
                            }
    
                            return $modifiedValues;
                        }


                        private function _getModifiedValues_9eb1d(array $originalModelData, object $nestedCompositionObject): array {
                            $modifiedValues = [];
                            $defaultValueMap = array (
  0 => 'skipNotProvidedPropertiesMap',
);
    
                            foreach (array (
  'interval' => 'getInterval',
  'unit' => 'getUnit',
  'skipNotProvidedPropertiesMap' => 'get_skipNotProvidedPropertiesMap',
) as $key => $accessor) {
                                if ((isset($originalModelData[$key]) || in_array($key, $defaultValueMap))
                                    && method_exists($nestedCompositionObject, $accessor)
                                    && ($modifiedValue = $nestedCompositionObject->$accessor())
                                        !== ($originalModelData[$key] ?? !$modifiedValue)
                                ) {
                                    $modifiedValues[$key] = $modifiedValue;
                                }
                            }
    
                            return $modifiedValues;
                        }


}

// @codeCoverageIgnoreEnd
