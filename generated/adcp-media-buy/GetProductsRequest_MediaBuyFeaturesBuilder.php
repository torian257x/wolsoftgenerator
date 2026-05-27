<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Builder class for GetProductsRequest_MediaBuyFeatures
 */
class GetProductsRequest_MediaBuyFeaturesBuilder implements BuilderInterface
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
     * Set up a new instance of GetProductsRequest_MediaBuyFeatures with fully validated properties
     */
    public function validate(): GetProductsRequest_MediaBuyFeatures
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetProductsRequest_MediaBuyFeatures($this->_rawModelDataInput);
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
             * Get the value of inline_creative_management.
             *
             * Supports creatives provided inline in create_media_buy requests
             *
             * @return bool|null
             */
            public function getInlineCreativeManagement(): ?bool
            {
                return $this->_rawModelDataInput['inline_creative_management'] ?? null;
            }

            /**
             * Set the value of inline_creative_management.
             *
             * @param bool $inlineCreativeManagement Supports creatives provided inline in create_media_buy requests
             *
             * {@link GetProductsRequest_MediaBuyFeatures::processInlineCreativeManagement}
             * 
             *
             * @return static
             */
            public function setInlineCreativeManagement(
                bool $inlineCreativeManagement
            ): static {
                if (array_key_exists('inline_creative_management', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['inline_creative_management'] === $inlineCreativeManagement
                ) {
                    return $this;
                }

                $value = $modelData['inline_creative_management'] = $inlineCreativeManagement;

                

                

                $this->_rawModelDataInput['inline_creative_management'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of property_list_filtering.
             *
             * Honors property_list parameter in get_products to filter results to buyer-approved properties
             *
             * @return bool|null
             */
            public function getPropertyListFiltering(): ?bool
            {
                return $this->_rawModelDataInput['property_list_filtering'] ?? null;
            }

            /**
             * Set the value of property_list_filtering.
             *
             * @param bool $propertyListFiltering Honors property_list parameter in get_products to filter results to buyer-approved properties
             *
             * {@link GetProductsRequest_MediaBuyFeatures::processPropertyListFiltering}
             * 
             *
             * @return static
             */
            public function setPropertyListFiltering(
                bool $propertyListFiltering
            ): static {
                if (array_key_exists('property_list_filtering', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['property_list_filtering'] === $propertyListFiltering
                ) {
                    return $this;
                }

                $value = $modelData['property_list_filtering'] = $propertyListFiltering;

                

                

                $this->_rawModelDataInput['property_list_filtering'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of catalog_management.
             *
             * Supports sync_catalogs task for catalog feed management with platform review and approval
             *
             * @return bool|null
             */
            public function getCatalogManagement(): ?bool
            {
                return $this->_rawModelDataInput['catalog_management'] ?? null;
            }

            /**
             * Set the value of catalog_management.
             *
             * @param bool $catalogManagement Supports sync_catalogs task for catalog feed management with platform review and approval
             *
             * {@link GetProductsRequest_MediaBuyFeatures::processCatalogManagement}
             * 
             *
             * @return static
             */
            public function setCatalogManagement(
                bool $catalogManagement
            ): static {
                if (array_key_exists('catalog_management', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['catalog_management'] === $catalogManagement
                ) {
                    return $this;
                }

                $value = $modelData['catalog_management'] = $catalogManagement;

                

                

                $this->_rawModelDataInput['catalog_management'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of committed_metrics_supported.
             *
             * Seller has per-package snapshot infrastructure for the reporting contract. When true, the seller MUST populate `package.committed_metrics` on every `create_media_buy` response and MUST honor append-only mid-flight metric additions via `update_media_buy`. The unified `committed_metrics` array (per the metric-accountability design) covers both standard and vendor-defined metric entries, so a single flag is load-bearing. Buyers filtering on this flag are detecting 'this seller can stamp the reporting contract,' which closes the audit gap from PR #3510 where absence of `committed_metrics` was indistinguishable between 'didn't snapshot' and 'snapshot infrastructure not implemented.'
             *
             * @return bool|null
             */
            public function getCommittedMetricsSupported(): ?bool
            {
                return $this->_rawModelDataInput['committed_metrics_supported'] ?? null;
            }

            /**
             * Set the value of committed_metrics_supported.
             *
             * @param bool $committedMetricsSupported Seller has per-package snapshot infrastructure for the reporting contract. When true, the seller MUST populate `package.committed_metrics` on every `create_media_buy` response and MUST honor append-only mid-flight metric additions via `update_media_buy`. The unified `committed_metrics` array (per the metric-accountability design) covers both standard and vendor-defined metric entries, so a single flag is load-bearing. Buyers filtering on this flag are detecting 'this seller can stamp the reporting contract,' which closes the audit gap from PR #3510 where absence of `committed_metrics` was indistinguishable between 'didn't snapshot' and 'snapshot infrastructure not implemented.'
             *
             * {@link GetProductsRequest_MediaBuyFeatures::processCommittedMetricsSupported}
             * 
             *
             * @return static
             */
            public function setCommittedMetricsSupported(
                bool $committedMetricsSupported
            ): static {
                if (array_key_exists('committed_metrics_supported', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['committed_metrics_supported'] === $committedMetricsSupported
                ) {
                    return $this;
                }

                $value = $modelData['committed_metrics_supported'] = $committedMetricsSupported;

                

                

                $this->_rawModelDataInput['committed_metrics_supported'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
