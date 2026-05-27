<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;

    use AdCP\MediaBuy\Enums\GetProductsRequestBuying_Mode;

    use AdCP\MediaBuy\Enums\DeliveryType;

    use AdCP\MediaBuy\Enums\GetProductsRequestItemOfArrayFields;


/**
 * Builder class for GetProductsRequest
 */
class GetProductsRequestBuilder implements BuilderInterface
{
    /** @var array */
    protected $_rawModelDataInput = [];

    
        /** @var ErrorRegistryException */
        protected $_errorRegistry;
    

    public function __construct(array $rawModelDataInput = [])
    {
        $this->_rawModelDataInput = $rawModelDataInput;

        
            $this->_errorRegistry = new ErrorRegistryException();
        
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
     * Set up a new instance of GetProductsRequest with fully validated properties
     */
    public function validate(): GetProductsRequest
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetProductsRequest($this->_rawModelDataInput);
    }

    // PHPs builtin array_walk_recursive doesn't handle newly inserted arrays which we need to visit
    private function _array_walk_recursive_real(array &$array, callable $callback): void
    {
        foreach ($array as &$value) {
            $callback($value);

            if (is_array($value)) {
                $this->_array_walk_recursive_real($value, $callback);
            }
        }
    }

    
        
            /**
             * Get the value of buying_mode.
             *
             * Declares buyer intent for this request. 'brief': publisher curates product recommendations from the provided brief. 'wholesale': buyer requests raw inventory to apply their own audiences — brief must not be provided, and proposals are omitted. 'refine': iterate on products and proposals from a previous get_products response using the refine array of change requests. v3 clients MUST include buying_mode. Sellers receiving requests from pre-v3 clients without buying_mode SHOULD default to 'brief'. Timing semantics: 'wholesale' is a catalog read — sellers SHOULD return a synchronous response and MUST NOT route a 'wholesale' request through the async/Submitted arm; partial completion is signalled via the response's incomplete[] field (with optional estimated_wait), not via a task-handoff envelope. 'brief' and 'refine' MAY complete synchronously, or MAY return a Submitted envelope (see get-products-async-response-submitted.json) when curation requires upstream-system queries or HITL review the seller cannot complete inside time_budget. Buyers needing predictable fast catalog access MUST use 'wholesale'; buyers open to slower curation use 'brief' or 'refine'.
             *
             * @return string|GetProductsRequestBuying_Mode|null
             */
            public function getBuyingMode(): string | GetProductsRequestBuying_Mode | null
            {
                return $this->_rawModelDataInput['buying_mode'] ?? null;
            }

            /**
             * Set the value of buying_mode.
             *
             * @param string|GetProductsRequestBuying_Mode $buyingMode Declares buyer intent for this request. 'brief': publisher curates product recommendations from the provided brief. 'wholesale': buyer requests raw inventory to apply their own audiences — brief must not be provided, and proposals are omitted. 'refine': iterate on products and proposals from a previous get_products response using the refine array of change requests. v3 clients MUST include buying_mode. Sellers receiving requests from pre-v3 clients without buying_mode SHOULD default to 'brief'. Timing semantics: 'wholesale' is a catalog read — sellers SHOULD return a synchronous response and MUST NOT route a 'wholesale' request through the async/Submitted arm; partial completion is signalled via the response's incomplete[] field (with optional estimated_wait), not via a task-handoff envelope. 'brief' and 'refine' MAY complete synchronously, or MAY return a Submitted envelope (see get-products-async-response-submitted.json) when curation requires upstream-system queries or HITL review the seller cannot complete inside time_budget. Buyers needing predictable fast catalog access MUST use 'wholesale'; buyers open to slower curation use 'brief' or 'refine'.
             *
             * {@link GetProductsRequest::processBuyingMode}
             * 
             *
             * @return static
             */
            public function setBuyingMode(
                string | GetProductsRequestBuying_Mode $buyingMode
            ): static {
                if (array_key_exists('buying_mode', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['buying_mode'] === $buyingMode
                ) {
                    return $this;
                }

                $value = $modelData['buying_mode'] = $buyingMode;

                

                

                $this->_rawModelDataInput['buying_mode'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['brief'] ?? null;
            }

            /**
             * Set the value of brief.
             *
             * @param string $brief Natural language description of campaign requirements. Required when buying_mode is 'brief'. Must not be provided when buying_mode is 'wholesale' or 'refine'.
             *
             * {@link GetProductsRequest::processBrief}
             * 
             *
             * @return static
             */
            public function setBrief(
                string $brief
            ): static {
                if (array_key_exists('brief', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['brief'] === $brief
                ) {
                    return $this;
                }

                $value = $modelData['brief'] = $brief;

                

                

                $this->_rawModelDataInput['brief'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of refine.
             *
             * Array of change requests for iterating on products and proposals from a previous get_products response. Each entry declares a scope (request, product, or proposal) and what the buyer is asking for. Only valid when buying_mode is 'refine'. The seller responds to each entry via refinement_applied in the response, matched by position.

Finalize-exclusivity rule: if any entry has `action: 'finalize'`, ALL entries in the array MUST be proposal-scoped with `action: 'finalize'` — mixing finalize entries with `include`/`omit` entries or with request- / product-scoped entries MUST be rejected by the seller with `INVALID_REQUEST`. Finalize is a commit, not a refinement; the buyer expressing intent to commit means refinements have already converged. Buyers needing to refine AND commit in close succession sequence the calls: first a refine call (no finalize), then a finalize call against the resulting `proposal_id`(s).

Multi-finalize semantics: multiple finalize entries against different `proposal_id` values in a single call are allowed and MUST be **atomic at the observation point** — sellers MUST NOT return a success response unless every named proposal has both completed and been persisted as committed. Pre-commit validation runs before any side-effects (inventory pull, terms lock, governance attestation); if any proposal fails validation, the seller MUST reject the entire call without committing any of the named proposals. There is no rollback operation in the spec — an `unfinalize` would itself be a new mutation surface; the atomicity guarantee runs entirely on the seller's pre-commit validation gate, not on post-commit reversal. Sellers that cannot guarantee atomic pre-commit validation MUST reject multi-finalize arrays with `MULTI_FINALIZE_UNSUPPORTED` (preferred — distinguishes seller-side capability gap from a malformed request) or `INVALID_REQUEST` (acceptable fallback for sellers on a pre-3.1 error catalog). If a mid-commit failure occurs *after* validation passed but before all proposals persist (e.g., a downstream ad server fails between commits one and two), the seller MUST return `INTERNAL_ERROR` with `refinement_applied[]` carrying per-position outcomes — the spec does NOT define a recovery path for this case, and buyers SHOULD treat the resulting state as undefined and re-read via `get_media_buys` / equivalent before retrying. Buyers MUST NOT assume multi-finalize support without a successful first attempt — there is no capability flag for this; the failure response is the discovery surface. Buyers whose intent specifically requires atomic commit (e.g., budget-shared proposals where one finalizing without the other is incoherent) MUST be prepared to abandon the intent if the seller returns `MULTI_FINALIZE_UNSUPPORTED` — there is no recovery for that loss of buyer intent beyond sequencing single-finalize calls and accepting the looser commit guarantee.
             *
             * @return GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001[]|GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001Builder[]|array|null
             */
            public function getRefine(): mixed
            {
                return $this->_rawModelDataInput['refine'] ?? null;
            }

            /**
             * Set the value of refine.
             *
             * @param GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001[]|GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001Builder[]|array $refine Array of change requests for iterating on products and proposals from a previous get_products response. Each entry declares a scope (request, product, or proposal) and what the buyer is asking for. Only valid when buying_mode is 'refine'. The seller responds to each entry via refinement_applied in the response, matched by position.

Finalize-exclusivity rule: if any entry has `action: 'finalize'`, ALL entries in the array MUST be proposal-scoped with `action: 'finalize'` — mixing finalize entries with `include`/`omit` entries or with request- / product-scoped entries MUST be rejected by the seller with `INVALID_REQUEST`. Finalize is a commit, not a refinement; the buyer expressing intent to commit means refinements have already converged. Buyers needing to refine AND commit in close succession sequence the calls: first a refine call (no finalize), then a finalize call against the resulting `proposal_id`(s).

Multi-finalize semantics: multiple finalize entries against different `proposal_id` values in a single call are allowed and MUST be **atomic at the observation point** — sellers MUST NOT return a success response unless every named proposal has both completed and been persisted as committed. Pre-commit validation runs before any side-effects (inventory pull, terms lock, governance attestation); if any proposal fails validation, the seller MUST reject the entire call without committing any of the named proposals. There is no rollback operation in the spec — an `unfinalize` would itself be a new mutation surface; the atomicity guarantee runs entirely on the seller's pre-commit validation gate, not on post-commit reversal. Sellers that cannot guarantee atomic pre-commit validation MUST reject multi-finalize arrays with `MULTI_FINALIZE_UNSUPPORTED` (preferred — distinguishes seller-side capability gap from a malformed request) or `INVALID_REQUEST` (acceptable fallback for sellers on a pre-3.1 error catalog). If a mid-commit failure occurs *after* validation passed but before all proposals persist (e.g., a downstream ad server fails between commits one and two), the seller MUST return `INTERNAL_ERROR` with `refinement_applied[]` carrying per-position outcomes — the spec does NOT define a recovery path for this case, and buyers SHOULD treat the resulting state as undefined and re-read via `get_media_buys` / equivalent before retrying. Buyers MUST NOT assume multi-finalize support without a successful first attempt — there is no capability flag for this; the failure response is the discovery surface. Buyers whose intent specifically requires atomic commit (e.g., budget-shared proposals where one finalizing without the other is incoherent) MUST be prepared to abandon the intent if the seller returns `MULTI_FINALIZE_UNSUPPORTED` — there is no recovery for that loss of buyer intent beyond sequencing single-finalize calls and accepting the looser commit guarantee.
             *
             * {@link GetProductsRequest::processRefine}
             * 
             *
             * @return static
             */
            public function setRefine(
                mixed $refine
            ): static {
                if (array_key_exists('refine', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['refine'] === $refine
                ) {
                    return $this;
                }

                $value = $modelData['refine'] = $refine;

                

                

                $this->_rawModelDataInput['refine'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of brand.
             *
             * Brand reference for product discovery context. Resolved to full brand identity at execution time.
             *
             * @return GetProductsRequest_BrandReference|GetProductsRequest_BrandReferenceBuilder|array|null
             */
            public function getBrand(): mixed
            {
                return $this->_rawModelDataInput['brand'] ?? null;
            }

            /**
             * Set the value of brand.
             *
             * @param GetProductsRequest_BrandReference|GetProductsRequest_BrandReferenceBuilder|array $brand Brand reference for product discovery context. Resolved to full brand identity at execution time.
             *
             * {@link GetProductsRequest::processBrand}
             * 
             *
             * @return static
             */
            public function setBrand(
                mixed $brand
            ): static {
                if (array_key_exists('brand', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['brand'] === $brand
                ) {
                    return $this;
                }

                $value = $modelData['brand'] = $brand;

                

                

                $this->_rawModelDataInput['brand'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of catalog.
             *
             * Catalog of items the buyer wants to promote. The seller matches catalog items against its inventory and returns products where matches exist. Supports all catalog types: a job catalog finds job ad products, a product catalog finds sponsored product slots. Reference a synced catalog by catalog_id, or provide inline items.
             *
             * @return GetProductsRequest_Catalog|GetProductsRequest_CatalogBuilder|array|null
             */
            public function getCatalog(): mixed
            {
                return $this->_rawModelDataInput['catalog'] ?? null;
            }

            /**
             * Set the value of catalog.
             *
             * @param GetProductsRequest_Catalog|GetProductsRequest_CatalogBuilder|array $catalog Catalog of items the buyer wants to promote. The seller matches catalog items against its inventory and returns products where matches exist. Supports all catalog types: a job catalog finds job ad products, a product catalog finds sponsored product slots. Reference a synced catalog by catalog_id, or provide inline items.
             *
             * {@link GetProductsRequest::processCatalog}
             * 
             *
             * @return static
             */
            public function setCatalog(
                mixed $catalog
            ): static {
                if (array_key_exists('catalog', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['catalog'] === $catalog
                ) {
                    return $this;
                }

                $value = $modelData['catalog'] = $catalog;

                

                

                $this->_rawModelDataInput['catalog'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of account.
             *
             * Account for product lookup. Returns products with pricing specific to this account's rate card.
             *
             * @return GetProductsRequest_AccountReference|GetProductsRequest_AccountReferenceBuilder|array|null
             */
            public function getAccount(): mixed
            {
                return $this->_rawModelDataInput['account'] ?? null;
            }

            /**
             * Set the value of account.
             *
             * @param GetProductsRequest_AccountReference|GetProductsRequest_AccountReferenceBuilder|array $account Account for product lookup. Returns products with pricing specific to this account's rate card.
             *
             * {@link GetProductsRequest::processAccount}
             * 
             *
             * @return static
             */
            public function setAccount(
                mixed $account
            ): static {
                if (array_key_exists('account', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['account'] === $account
                ) {
                    return $this;
                }

                $value = $modelData['account'] = $account;

                

                

                $this->_rawModelDataInput['account'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of preferred_delivery_types.
             *
             * Delivery types the buyer prefers, in priority order. Unlike filters.delivery_type which excludes non-matching products, this signals preference for curation — the publisher may still include other delivery types when they match the brief well.
             *
             * @return string[]|DeliveryType[]|null
             */
            public function getPreferredDeliveryTypes(): array | DeliveryType | null
            {
                return $this->_rawModelDataInput['preferred_delivery_types'] ?? null;
            }

            /**
             * Set the value of preferred_delivery_types.
             *
             * @param string[]|DeliveryType[]|null $preferredDeliveryTypes Delivery types the buyer prefers, in priority order. Unlike filters.delivery_type which excludes non-matching products, this signals preference for curation — the publisher may still include other delivery types when they match the brief well.
             *
             * {@link GetProductsRequest::processPreferredDeliveryTypes}
             * 
             *
             * @return static
             */
            public function setPreferredDeliveryTypes(
                array | DeliveryType | null $preferredDeliveryTypes
            ): static {
                if (array_key_exists('preferred_delivery_types', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['preferred_delivery_types'] === $preferredDeliveryTypes
                ) {
                    return $this;
                }

                $value = $modelData['preferred_delivery_types'] = $preferredDeliveryTypes;

                

                

                $this->_rawModelDataInput['preferred_delivery_types'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of filters.
             *
             * Structured filters for product discovery
             *
             * @return GetProductsRequest_ProductFilters|GetProductsRequest_ProductFiltersBuilder|array|null
             */
            public function getFilters(): mixed
            {
                return $this->_rawModelDataInput['filters'] ?? null;
            }

            /**
             * Set the value of filters.
             *
             * @param GetProductsRequest_ProductFilters|GetProductsRequest_ProductFiltersBuilder|array $filters Structured filters for product discovery
             *
             * {@link GetProductsRequest::processFilters}
             * 
             *
             * @return static
             */
            public function setFilters(
                mixed $filters
            ): static {
                if (array_key_exists('filters', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['filters'] === $filters
                ) {
                    return $this;
                }

                $value = $modelData['filters'] = $filters;

                

                

                $this->_rawModelDataInput['filters'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of property_list.
             *
             * [AdCP 3.0] Reference to an externally managed property list. When provided, the sales agent should filter products to only those available on properties in the list.
             *
             * @return GetProductsRequest_PropertyListReference|GetProductsRequest_PropertyListReferenceBuilder|array|null
             */
            public function getPropertyList(): mixed
            {
                return $this->_rawModelDataInput['property_list'] ?? null;
            }

            /**
             * Set the value of property_list.
             *
             * @param GetProductsRequest_PropertyListReference|GetProductsRequest_PropertyListReferenceBuilder|array $propertyList [AdCP 3.0] Reference to an externally managed property list. When provided, the sales agent should filter products to only those available on properties in the list.
             *
             * {@link GetProductsRequest::processPropertyList}
             * 
             *
             * @return static
             */
            public function setPropertyList(
                mixed $propertyList
            ): static {
                if (array_key_exists('property_list', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['property_list'] === $propertyList
                ) {
                    return $this;
                }

                $value = $modelData['property_list'] = $propertyList;

                

                

                $this->_rawModelDataInput['property_list'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of fields.
             *
             * Specific product fields to include in the response. When omitted, all fields are returned. Use for lightweight discovery calls where only a subset of product data is needed (e.g., just IDs and pricing for comparison). Required fields (product_id, name) are always included regardless of selection.
             *
             * @return string[]|GetProductsRequestItemOfArrayFields[]|null
             */
            public function getFields(): array | GetProductsRequestItemOfArrayFields | null
            {
                return $this->_rawModelDataInput['fields'] ?? null;
            }

            /**
             * Set the value of fields.
             *
             * @param string[]|GetProductsRequestItemOfArrayFields[]|null $fields Specific product fields to include in the response. When omitted, all fields are returned. Use for lightweight discovery calls where only a subset of product data is needed (e.g., just IDs and pricing for comparison). Required fields (product_id, name) are always included regardless of selection.
             *
             * {@link GetProductsRequest::processFields}
             * 
             *
             * @return static
             */
            public function setFields(
                array | GetProductsRequestItemOfArrayFields | null $fields
            ): static {
                if (array_key_exists('fields', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['fields'] === $fields
                ) {
                    return $this;
                }

                $value = $modelData['fields'] = $fields;

                

                

                $this->_rawModelDataInput['fields'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of time_budget.
             *
             * Maximum time the buyer will commit to this request. The seller returns the best results achievable within this budget and does not start processes (human approvals, expensive external queries) that cannot complete in time. When omitted, the seller decides timing.
             *
             * @return GetProductsRequest_Duration|GetProductsRequest_DurationBuilder|array|null
             */
            public function getTimeBudget(): mixed
            {
                return $this->_rawModelDataInput['time_budget'] ?? null;
            }

            /**
             * Set the value of time_budget.
             *
             * @param GetProductsRequest_Duration|GetProductsRequest_DurationBuilder|array $timeBudget Maximum time the buyer will commit to this request. The seller returns the best results achievable within this budget and does not start processes (human approvals, expensive external queries) that cannot complete in time. When omitted, the seller decides timing.
             *
             * {@link GetProductsRequest::processTimeBudget}
             * 
             *
             * @return static
             */
            public function setTimeBudget(
                mixed $timeBudget
            ): static {
                if (array_key_exists('time_budget', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['time_budget'] === $timeBudget
                ) {
                    return $this;
                }

                $value = $modelData['time_budget'] = $timeBudget;

                

                

                $this->_rawModelDataInput['time_budget'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of pagination.
             *
             * Standard cursor-based pagination parameters for list operations
             *
             * @return GetProductsRequest_PaginationRequest|GetProductsRequest_PaginationRequestBuilder|array|null
             */
            public function getPagination(): mixed
            {
                return $this->_rawModelDataInput['pagination'] ?? null;
            }

            /**
             * Set the value of pagination.
             *
             * @param GetProductsRequest_PaginationRequest|GetProductsRequest_PaginationRequestBuilder|array $pagination Standard cursor-based pagination parameters for list operations
             *
             * {@link GetProductsRequest::processPagination}
             * 
             *
             * @return static
             */
            public function setPagination(
                mixed $pagination
            ): static {
                if (array_key_exists('pagination', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['pagination'] === $pagination
                ) {
                    return $this;
                }

                $value = $modelData['pagination'] = $pagination;

                

                

                $this->_rawModelDataInput['pagination'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['if_catalog_version'] ?? null;
            }

            /**
             * Set the value of if_catalog_version.
             *
             * @param string $ifCatalogVersion Opaque catalog_version token returned by a prior get_products response from this agent. When provided, the seller compares against its current catalog version for the buyer's cache_scope and MAY return an unchanged: true response (with products omitted) if nothing has changed. The token is scope-keyed: buyers cache `(cache_scope, catalog_version)` pairs. Scoping dimensions: (agent, buying_mode, filters, property_list, catalog) for cache_scope: 'public'; that tuple plus account_id for cache_scope: 'account'. pagination.cursor is NOT part of the scoping tuple. Backward-compatible: pre-v3.1 agents that ignore this field simply return the full payload, same as the unchanged-server path. See specs/catalog-change-feed.md for the full sync pattern.
             *
             * {@link GetProductsRequest::processIfCatalogVersion}
             * 
             *
             * @return static
             */
            public function setIfCatalogVersion(
                string $ifCatalogVersion
            ): static {
                if (array_key_exists('if_catalog_version', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['if_catalog_version'] === $ifCatalogVersion
                ) {
                    return $this;
                }

                $value = $modelData['if_catalog_version'] = $ifCatalogVersion;

                

                

                $this->_rawModelDataInput['if_catalog_version'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['if_pricing_version'] ?? null;
            }

            /**
             * Set the value of if_pricing_version.
             *
             * @param string $ifPricingVersion Opaque pricing_version token from a prior get_products response. MUST only be sent together with if_catalog_version — pricing version has no structural baseline to compare against on its own. Evaluation order: (1) if_catalog_version mismatch → seller returns the full payload (pricing is implicitly stale); (2) if_catalog_version matches but if_pricing_version mismatches → seller returns the full payload so the buyer sees updated pricing_options; (3) both match → seller MAY return unchanged: true. Agents that don't track pricing separately ignore if_pricing_version and fall back to if_catalog_version semantics. Useful for storefronts that re-price compositions far more often than they re-render catalogs.
             *
             * {@link GetProductsRequest::processIfPricingVersion}
             * 
             *
             * @return static
             */
            public function setIfPricingVersion(
                string $ifPricingVersion
            ): static {
                if (array_key_exists('if_pricing_version', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['if_pricing_version'] === $ifPricingVersion
                ) {
                    return $this;
                }

                $value = $modelData['if_pricing_version'] = $ifPricingVersion;

                

                

                $this->_rawModelDataInput['if_pricing_version'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of context.
             *
             * Opaque correlation data that is echoed unchanged in responses. Used for internal tracking, UI session IDs, trace IDs, and other caller-specific identifiers that don't affect protocol behavior. Context data is never parsed by AdCP agents - it's simply preserved and returned.
             *
             * @return GetProductsRequest_ExtensionObject|GetProductsRequest_ExtensionObjectBuilder|array|null
             */
            public function getContext(): mixed
            {
                return $this->_rawModelDataInput['context'] ?? null;
            }

            /**
             * Set the value of context.
             *
             * @param GetProductsRequest_ExtensionObject|GetProductsRequest_ExtensionObjectBuilder|array $context Opaque correlation data that is echoed unchanged in responses. Used for internal tracking, UI session IDs, trace IDs, and other caller-specific identifiers that don't affect protocol behavior. Context data is never parsed by AdCP agents - it's simply preserved and returned.
             *
             * {@link GetProductsRequest::processContext}
             * 
             *
             * @return static
             */
            public function setContext(
                mixed $context
            ): static {
                if (array_key_exists('context', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['context'] === $context
                ) {
                    return $this;
                }

                $value = $modelData['context'] = $context;

                

                

                $this->_rawModelDataInput['context'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['required_policies'] ?? null;
            }

            /**
             * Set the value of required_policies.
             *
             * @param string[] $requiredPolicies Registry policy IDs that the buyer requires to be enforced for products in this response. Sellers filter products to only those that comply with or already enforce the requested policies.
             *
             * {@link GetProductsRequest::processRequiredPolicies}
             * 
             *
             * @return static
             */
            public function setRequiredPolicies(
                array $requiredPolicies
            ): static {
                if (array_key_exists('required_policies', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['required_policies'] === $requiredPolicies
                ) {
                    return $this;
                }

                $value = $modelData['required_policies'] = $requiredPolicies;

                

                

                $this->_rawModelDataInput['required_policies'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of ext.
             *
             * Extension object for platform-specific, vendor-namespaced parameters. Extensions are always optional and must be namespaced under a vendor/platform key (e.g., ext.gam, ext.roku). Used for custom capabilities, partner-specific configuration, and features being proposed for standardization.
             *
             * @return GetProductsRequest_ExtensionObject|GetProductsRequest_ExtensionObjectBuilder|array|null
             */
            public function getExt(): mixed
            {
                return $this->_rawModelDataInput['ext'] ?? null;
            }

            /**
             * Set the value of ext.
             *
             * @param GetProductsRequest_ExtensionObject|GetProductsRequest_ExtensionObjectBuilder|array $ext Extension object for platform-specific, vendor-namespaced parameters. Extensions are always optional and must be namespaced under a vendor/platform key (e.g., ext.gam, ext.roku). Used for custom capabilities, partner-specific configuration, and features being proposed for standardization.
             *
             * {@link GetProductsRequest::processExt}
             * 
             *
             * @return static
             */
            public function setExt(
                mixed $ext
            ): static {
                if (array_key_exists('ext', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['ext'] === $ext
                ) {
                    return $this;
                }

                $value = $modelData['ext'] = $ext;

                

                

                $this->_rawModelDataInput['ext'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of adcp_version.
             *
             * Release-precision AdCP version (VERSION.RELEASE, e.g. "3.0", "3.1", "3.1-beta"). On a request: the buyer's release pin — the seller validates against its supported_versions and returns VERSION_UNSUPPORTED on cross-major mismatch, or downshifts to the highest supported release within the same major. On a response: the release the seller actually served — clients SHOULD validate the response against that release's schema, not against their pin. Patches are not negotiated; surface them as build_version on capabilities for operational visibility. When omitted, falls back to adcp_major_version (deprecated) or server default. Buyers SHOULD emit both adcp_version and adcp_major_version through 3.x to remain compatible with sellers that only read the legacy field. NORMALIZATION: SDKs that read full-semver values from bundle metadata (e.g. ComplianceIndex.published_version = "3.1.0-beta.1") MUST normalize to release-precision ("3.1-beta.1") before emitting on the wire — meta-field values are NOT valid wire values.
             *
             * @return string|null
             */
            public function getAdcpVersion(): ?string
            {
                return $this->_rawModelDataInput['adcp_version'] ?? null;
            }

            /**
             * Set the value of adcp_version.
             *
             * @param string $adcpVersion Release-precision AdCP version (VERSION.RELEASE, e.g. "3.0", "3.1", "3.1-beta"). On a request: the buyer's release pin — the seller validates against its supported_versions and returns VERSION_UNSUPPORTED on cross-major mismatch, or downshifts to the highest supported release within the same major. On a response: the release the seller actually served — clients SHOULD validate the response against that release's schema, not against their pin. Patches are not negotiated; surface them as build_version on capabilities for operational visibility. When omitted, falls back to adcp_major_version (deprecated) or server default. Buyers SHOULD emit both adcp_version and adcp_major_version through 3.x to remain compatible with sellers that only read the legacy field. NORMALIZATION: SDKs that read full-semver values from bundle metadata (e.g. ComplianceIndex.published_version = "3.1.0-beta.1") MUST normalize to release-precision ("3.1-beta.1") before emitting on the wire — meta-field values are NOT valid wire values.
             *
             * {@link GetProductsRequest::processAdcpVersion}
             * 
             *
             * @return static
             */
            public function setAdcpVersion(
                string $adcpVersion
            ): static {
                if (array_key_exists('adcp_version', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['adcp_version'] === $adcpVersion
                ) {
                    return $this;
                }

                $value = $modelData['adcp_version'] = $adcpVersion;

                

                

                $this->_rawModelDataInput['adcp_version'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['adcp_major_version'] ?? null;
            }

            /**
             * Set the value of adcp_major_version.
             *
             * @param int $adcpMajorVersion DEPRECATED in favor of adcp_version (release-precision string). Servers MUST continue to honor this field through 3.x. Removed in 4.0. Original semantics: the AdCP major version the buyer's payloads conform to. Sellers validate against their supported major_versions and return VERSION_UNSUPPORTED if unsupported. When omitted, the seller assumes its highest supported version.
             *
             * {@link GetProductsRequest::processAdcpMajorVersion}
             * 
             *
             * @return static
             */
            public function setAdcpMajorVersion(
                int $adcpMajorVersion
            ): static {
                if (array_key_exists('adcp_major_version', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['adcp_major_version'] === $adcpMajorVersion
                ) {
                    return $this;
                }

                $value = $modelData['adcp_major_version'] = $adcpMajorVersion;

                

                

                $this->_rawModelDataInput['adcp_major_version'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
