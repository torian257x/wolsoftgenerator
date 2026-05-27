<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Builder class for GetMediaBuysResponse_ItemOfArrayStore_Catchments96ad80be436081bfc2ca2caf8bf1d39e
 */
class GetMediaBuysResponse_ItemOfArrayStore_Catchments96ad80be436081bfc2ca2caf8bf1d39eBuilder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuysResponse_ItemOfArrayStore_Catchments96ad80be436081bfc2ca2caf8bf1d39e with fully validated properties
     */
    public function validate(): GetMediaBuysResponse_ItemOfArrayStore_Catchments96ad80be436081bfc2ca2caf8bf1d39e
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysResponse_ItemOfArrayStore_Catchments96ad80be436081bfc2ca2caf8bf1d39e($this->_rawModelDataInput);
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
             * Get the value of catalog_id.
             *
             * Synced store-type catalog ID from sync_catalogs.
             *
             * @return string|null
             */
            public function getCatalogId(): ?string
            {
                return $this->_rawModelDataInput['catalog_id'] ?? null;
            }

            /**
             * Set the value of catalog_id.
             *
             * @param string $catalogId Synced store-type catalog ID from sync_catalogs.
             *
             * {@link GetMediaBuysResponse_ItemOfArrayStore_Catchments96ad80be436081bfc2ca2caf8bf1d39e::processCatalogId}
             * 
             *
             * @return static
             */
            public function setCatalogId(
                string $catalogId
            ): static {
                if (array_key_exists('catalog_id', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['catalog_id'] === $catalogId
                ) {
                    return $this;
                }

                $value = $modelData['catalog_id'] = $catalogId;

                

                

                $this->_rawModelDataInput['catalog_id'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of store_ids.
             *
             * Filter to specific stores within the catalog. Omit to target all stores.
             *
             * @return string[]|null
             */
            public function getStoreIds(): ?array
            {
                return $this->_rawModelDataInput['store_ids'] ?? null;
            }

            /**
             * Set the value of store_ids.
             *
             * @param string[] $storeIds Filter to specific stores within the catalog. Omit to target all stores.
             *
             * {@link GetMediaBuysResponse_ItemOfArrayStore_Catchments96ad80be436081bfc2ca2caf8bf1d39e::processStoreIds}
             * 
             *
             * @return static
             */
            public function setStoreIds(
                array $storeIds
            ): static {
                if (array_key_exists('store_ids', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['store_ids'] === $storeIds
                ) {
                    return $this;
                }

                $value = $modelData['store_ids'] = $storeIds;

                

                

                $this->_rawModelDataInput['store_ids'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of catchment_ids.
             *
             * Catchment zone IDs to target (e.g., 'walk', 'drive'). Omit to target all catchment zones.
             *
             * @return string[]|null
             */
            public function getCatchmentIds(): ?array
            {
                return $this->_rawModelDataInput['catchment_ids'] ?? null;
            }

            /**
             * Set the value of catchment_ids.
             *
             * @param string[] $catchmentIds Catchment zone IDs to target (e.g., 'walk', 'drive'). Omit to target all catchment zones.
             *
             * {@link GetMediaBuysResponse_ItemOfArrayStore_Catchments96ad80be436081bfc2ca2caf8bf1d39e::processCatchmentIds}
             * 
             *
             * @return static
             */
            public function setCatchmentIds(
                array $catchmentIds
            ): static {
                if (array_key_exists('catchment_ids', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['catchment_ids'] === $catchmentIds
                ) {
                    return $this;
                }

                $value = $modelData['catchment_ids'] = $catchmentIds;

                

                

                $this->_rawModelDataInput['catchment_ids'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
