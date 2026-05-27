<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Required;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetMediaBuysResponse_ItemOfArrayStore_Catchments96ad80be436081bfc2ca2caf8bf1d39e
 * @package AdCP\MediaBuy 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/store_catchments/items')]

class GetMediaBuysResponse_ItemOfArrayStore_Catchments96ad80be436081bfc2ca2caf8bf1d39e implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/store_catchments/items/properties/catalog_id')]
        
            #[SchemaName('catalog_id')]
        
            #[Required]
        
        /** @var string Synced store-type catalog ID from sync_catalogs. */
        protected $catalogId;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/store_catchments/items/properties/store_ids')]
        
            #[SchemaName('store_ids')]
        
        /** @var string[]|null Filter to specific stores within the catalog. Omit to target all stores. */
        protected $storeIds;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/store_catchments/items/properties/catchment_ids')]
        
            #[SchemaName('catchment_ids')]
        
        /** @var string[]|null Catchment zone IDs to target (e.g., 'walk', 'drive'). Omit to target all catchment zones. */
        protected $catchmentIds;
    
        
            #[Internal]
        
        /** @var array Collect all additional properties provided to the schema */
        private $_additionalProperties = array (
);
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  1 => 'store_ids',
  2 => 'catchment_ids',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetMediaBuysResponse_ItemOfArrayStore_Catchments96ad80be436081bfc2ca2caf8bf1d39e constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processCatalogId($rawModelDataInput);
            
        
            
                $this->processStoreIds($rawModelDataInput);
            
        
            
                $this->processCatchmentIds($rawModelDataInput);
            
        
            
        
            
        

        
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
   'catalog_id',
   'store_ids',
   'catchment_ids',
)) as $propertyKey) {
        

        $this->_additionalProperties[$propertyKey] = $value[$propertyKey];
    }

    return false;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidAdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse_ItemOfArrayStore_Catchments96ad80be436081bfc2ca2caf8bf1d39e',
)));
}

            

            
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
                 * Get the value of catalog_id.
                 *
                 * Synced store-type catalog ID from sync_catalogs.
                 *
                 * @return string
                 */
                public function getCatalogId(): string
                {
                    

                    return $this->catalogId;
                }
            

            
                /**
                 * Set the value of catalog_id.
                 *
                 * @param string $catalogId Synced store-type catalog ID from sync_catalogs.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setCatalogId(
                    string $catalogId
                ): static {
                    if ($this->catalogId === $catalogId) {
                        return $this;
                    }

                    $value = $modelData['catalog_id'] = $catalogId;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateCatalogId($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->catalogId = $value;
                    $this->_rawModelDataInput['catalog_id'] = $catalogId;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property catalogId
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processCatalogId(array $modelData): void
            {
                

                $value = array_key_exists('catalog_id', $modelData) ? $modelData['catalog_id'] : $this->catalogId;

                

                $this->catalogId = $this->validateCatalogId($value, $modelData);
            }

            /**
             * Execute all validators for the property catalogId
             */
            protected function validateCatalogId($value, array $modelData)
            {
                
                    

if (!array_key_exists('catalog_id', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'catalog_id',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'catalog_id',
  1 => 'string',
)));
}

                

                return $value;
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
                    

                    return $this->storeIds;
                }
            

            
                /**
                 * Set the value of store_ids.
                 *
                 * @param string[] $storeIds Filter to specific stores within the catalog. Omit to target all stores.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setStoreIds(
                    array $storeIds
                ): static {
                    if ($this->storeIds === $storeIds) {
                        return $this;
                    }

                    $value = $modelData['store_ids'] = $storeIds;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateStoreIds($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->storeIds = $value;
                    $this->_rawModelDataInput['store_ids'] = $storeIds;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property storeIds
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processStoreIds(array $modelData): void
            {
                
                    if (!array_key_exists('store_ids', $modelData) && $this->storeIds === null) {
                        return;
                    }
                

                $value = array_key_exists('store_ids', $modelData) ? $modelData['store_ids'] : $this->storeIds;

                

                $this->storeIds = $this->validateStoreIds($value, $modelData);
            }

            /**
             * Execute all validators for the property storeIds
             */
            protected function validateStoreIds($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'store_ids',
  1 => 'array',
)));
}

                
                    $this->validateStoreIds_ArrayItem_bdc4c8dbab3bc84ccb6fc6f331d7bdd9($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'store_ids',
  1 => 1,
)));
}

                

                return $value;
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
                    

                    return $this->catchmentIds;
                }
            

            
                /**
                 * Set the value of catchment_ids.
                 *
                 * @param string[] $catchmentIds Catchment zone IDs to target (e.g., 'walk', 'drive'). Omit to target all catchment zones.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setCatchmentIds(
                    array $catchmentIds
                ): static {
                    if ($this->catchmentIds === $catchmentIds) {
                        return $this;
                    }

                    $value = $modelData['catchment_ids'] = $catchmentIds;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateCatchmentIds($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->catchmentIds = $value;
                    $this->_rawModelDataInput['catchment_ids'] = $catchmentIds;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property catchmentIds
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processCatchmentIds(array $modelData): void
            {
                
                    if (!array_key_exists('catchment_ids', $modelData) && $this->catchmentIds === null) {
                        return;
                    }
                

                $value = array_key_exists('catchment_ids', $modelData) ? $modelData['catchment_ids'] : $this->catchmentIds;

                

                $this->catchmentIds = $this->validateCatchmentIds($value, $modelData);
            }

            /**
             * Execute all validators for the property catchmentIds
             */
            protected function validateCatchmentIds($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'catchment_ids',
  1 => 'array',
)));
}

                
                    $this->validateCatchmentIds_ArrayItem_04e82a8f20cda9df9ef5fd2b343df661($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'catchment_ids',
  1 => 1,
)));
}

                

                return $value;
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
    

    
        
            if (array_key_exists('catalog_id', $modelData) &&
                $modelData['catalog_id'] !== $this->catalogId
            ) {
                

                $rollbackValues['catalogId'] = $this->catalogId;
                $this->processCatalogId($modelData);
            }
        
    
        
            if (array_key_exists('store_ids', $modelData) &&
                $modelData['store_ids'] !== $this->storeIds
            ) {
                

                $rollbackValues['storeIds'] = $this->storeIds;
                $this->processStoreIds($modelData);
            }
        
    
        
            if (array_key_exists('catchment_ids', $modelData) &&
                $modelData['catchment_ids'] !== $this->catchmentIds
            ) {
                

                $rollbackValues['catchmentIds'] = $this->catchmentIds;
                $this->processCatchmentIds($modelData);
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


private function validateStoreIds_ArrayItem_bdc4c8dbab3bc84ccb6fc6f331d7bdd9(&$value, $modelData): void {
                    $invalidItems_6a1720523952015230cc4ead29575049 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_6a1720523952015230cc4ead29575049, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            

            
                

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array store_ids',
  1 => 'string',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_6a1720523952015230cc4ead29575049[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_6a1720523952015230cc4ead29575049[$index])
                ? $invalidItems_6a1720523952015230cc4ead29575049[$index][] = $e
                : $invalidItems_6a1720523952015230cc4ead29575049[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_6a1720523952015230cc4ead29575049);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'store_ids',
  1 => $invalidItems_6a1720523952015230cc4ead29575049,
)));
                    }
                }

private function validateCatchmentIds_ArrayItem_04e82a8f20cda9df9ef5fd2b343df661(&$value, $modelData): void {
                    $invalidItems_ccb0b4c93724a13db939f1ca29c74de3 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_ccb0b4c93724a13db939f1ca29c74de3, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            

            
                

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array catchment_ids',
  1 => 'string',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_ccb0b4c93724a13db939f1ca29c74de3[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_ccb0b4c93724a13db939f1ca29c74de3[$index])
                ? $invalidItems_ccb0b4c93724a13db939f1ca29c74de3[$index][] = $e
                : $invalidItems_ccb0b4c93724a13db939f1ca29c74de3[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_ccb0b4c93724a13db939f1ca29c74de3);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'catchment_ids',
  1 => $invalidItems_ccb0b4c93724a13db939f1ca29c74de3,
)));
                    }
                }


}

// @codeCoverageIgnoreEnd
