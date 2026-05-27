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

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetProductsRequest_MediaBuyFeatures
 * @package AdCP\MediaBuy 
 *
 * Filter to products from sellers supporting specific protocol features. Only features set to true are used for filtering.
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/filters/properties/required_features')]

class GetProductsRequest_MediaBuyFeatures implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/filters/properties/required_features/properties/inline_creative_management')]
        
            #[SchemaName('inline_creative_management')]
        
        /** @var bool|null Supports creatives provided inline in create_media_buy requests */
        protected $inlineCreativeManagement;
    
        
            #[JsonPointer('/properties/filters/properties/required_features/properties/property_list_filtering')]
        
            #[SchemaName('property_list_filtering')]
        
        /** @var bool|null Honors property_list parameter in get_products to filter results to buyer-approved properties */
        protected $propertyListFiltering;
    
        
            #[JsonPointer('/properties/filters/properties/required_features/properties/catalog_management')]
        
            #[SchemaName('catalog_management')]
        
        /** @var bool|null Supports sync_catalogs task for catalog feed management with platform review and approval */
        protected $catalogManagement;
    
        
            #[JsonPointer('/properties/filters/properties/required_features/properties/committed_metrics_supported')]
        
            #[SchemaName('committed_metrics_supported')]
        
        /** @var bool|null Seller has per-package snapshot infrastructure for the reporting contract. When true, the seller MUST populate `package.committed_metrics` on every `create_media_buy` response and MUST honor append-only mid-flight metric additions via `update_media_buy`. The unified `committed_metrics` array (per the metric-accountability design) covers both standard and vendor-defined metric entries, so a single flag is load-bearing. Buyers filtering on this flag are detecting 'this seller can stamp the reporting contract,' which closes the audit gap from PR #3510 where absence of `committed_metrics` was indistinguishable between 'didn't snapshot' and 'snapshot infrastructure not implemented.' */
        protected $committedMetricsSupported;
    
        
            #[Internal]
        
        /** @var bool[] Collect all additional properties provided to the schema */
        private $_additionalProperties = array (
);
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  0 => 'inline_creative_management',
  1 => 'property_list_filtering',
  2 => 'catalog_management',
  3 => 'committed_metrics_supported',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetProductsRequest_MediaBuyFeatures constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processInlineCreativeManagement($rawModelDataInput);
            
        
            
                $this->processPropertyListFiltering($rawModelDataInput);
            
        
            
                $this->processCatalogManagement($rawModelDataInput);
            
        
            
                $this->processCommittedMetricsSupported($rawModelDataInput);
            
        
            
        
            
        

        
            if (count($this->_errorRegistry->getErrors())) {
                throw $this->_errorRegistry;
            }
        

        $this->_rawModelDataInput = $rawModelDataInput;

        
    }

    
        protected function executeBaseValidators(array &$modelData): void
        {
            $value = &$modelData;

            
                

            $properties = $value;
            $invalidProperties = [];
        
if ((function () use ($properties, &$invalidProperties, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    
    
        $rollbackValues = $this->_additionalProperties;
    

    foreach (array_diff(array_keys($properties), array (
   'inline_creative_management',
   'property_list_filtering',
   'catalog_management',
   'committed_metrics_supported',
)) as $propertyKey) {
        

        try {
            $value = $properties[$propertyKey];

            
                $this->_errorRegistry = new ErrorRegistryException();
            

            

            
                

if ((!is_bool($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'additional property',
  1 => 'bool',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidProperties[$propertyKey] = $this->_errorRegistry->getErrors();
                }
            

            
                $this->_additionalProperties[$propertyKey] = $value;
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid additional properties
            isset($invalidProperties[$propertyKey])
                ? $invalidProperties[$propertyKey][] = $e
                : $invalidProperties[$propertyKey] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    
        if (!empty($invalidProperties)) {
            $this->_additionalProperties = $rollbackValues;
        }
    

    return !empty($invalidProperties);
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidAdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetProductsRequest_MediaBuyFeatures',
  1 => $invalidProperties,
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
                 * Get the value of inline_creative_management.
                 *
                 * Supports creatives provided inline in create_media_buy requests
                 *
                 * @return bool|null
                 */
                public function getInlineCreativeManagement(): ?bool
                {
                    

                    return $this->inlineCreativeManagement;
                }
            

            
                /**
                 * Set the value of inline_creative_management.
                 *
                 * @param bool $inlineCreativeManagement Supports creatives provided inline in create_media_buy requests
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setInlineCreativeManagement(
                    bool $inlineCreativeManagement
                ): static {
                    if ($this->inlineCreativeManagement === $inlineCreativeManagement) {
                        return $this;
                    }

                    $value = $modelData['inline_creative_management'] = $inlineCreativeManagement;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateInlineCreativeManagement($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->inlineCreativeManagement = $value;
                    $this->_rawModelDataInput['inline_creative_management'] = $inlineCreativeManagement;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property inlineCreativeManagement
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processInlineCreativeManagement(array $modelData): void
            {
                
                    if (!array_key_exists('inline_creative_management', $modelData) && $this->inlineCreativeManagement === null) {
                        return;
                    }
                

                $value = array_key_exists('inline_creative_management', $modelData) ? $modelData['inline_creative_management'] : $this->inlineCreativeManagement;

                

                $this->inlineCreativeManagement = $this->validateInlineCreativeManagement($value, $modelData);
            }

            /**
             * Execute all validators for the property inlineCreativeManagement
             */
            protected function validateInlineCreativeManagement($value, array $modelData)
            {
                
                    

if ((!is_bool($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'inline_creative_management',
  1 => 'bool',
)));
}

                

                return $value;
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
                    

                    return $this->propertyListFiltering;
                }
            

            
                /**
                 * Set the value of property_list_filtering.
                 *
                 * @param bool $propertyListFiltering Honors property_list parameter in get_products to filter results to buyer-approved properties
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setPropertyListFiltering(
                    bool $propertyListFiltering
                ): static {
                    if ($this->propertyListFiltering === $propertyListFiltering) {
                        return $this;
                    }

                    $value = $modelData['property_list_filtering'] = $propertyListFiltering;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validatePropertyListFiltering($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->propertyListFiltering = $value;
                    $this->_rawModelDataInput['property_list_filtering'] = $propertyListFiltering;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property propertyListFiltering
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processPropertyListFiltering(array $modelData): void
            {
                
                    if (!array_key_exists('property_list_filtering', $modelData) && $this->propertyListFiltering === null) {
                        return;
                    }
                

                $value = array_key_exists('property_list_filtering', $modelData) ? $modelData['property_list_filtering'] : $this->propertyListFiltering;

                

                $this->propertyListFiltering = $this->validatePropertyListFiltering($value, $modelData);
            }

            /**
             * Execute all validators for the property propertyListFiltering
             */
            protected function validatePropertyListFiltering($value, array $modelData)
            {
                
                    

if ((!is_bool($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'property_list_filtering',
  1 => 'bool',
)));
}

                

                return $value;
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
                    

                    return $this->catalogManagement;
                }
            

            
                /**
                 * Set the value of catalog_management.
                 *
                 * @param bool $catalogManagement Supports sync_catalogs task for catalog feed management with platform review and approval
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setCatalogManagement(
                    bool $catalogManagement
                ): static {
                    if ($this->catalogManagement === $catalogManagement) {
                        return $this;
                    }

                    $value = $modelData['catalog_management'] = $catalogManagement;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateCatalogManagement($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->catalogManagement = $value;
                    $this->_rawModelDataInput['catalog_management'] = $catalogManagement;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property catalogManagement
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processCatalogManagement(array $modelData): void
            {
                
                    if (!array_key_exists('catalog_management', $modelData) && $this->catalogManagement === null) {
                        return;
                    }
                

                $value = array_key_exists('catalog_management', $modelData) ? $modelData['catalog_management'] : $this->catalogManagement;

                

                $this->catalogManagement = $this->validateCatalogManagement($value, $modelData);
            }

            /**
             * Execute all validators for the property catalogManagement
             */
            protected function validateCatalogManagement($value, array $modelData)
            {
                
                    

if ((!is_bool($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'catalog_management',
  1 => 'bool',
)));
}

                

                return $value;
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
                    

                    return $this->committedMetricsSupported;
                }
            

            
                /**
                 * Set the value of committed_metrics_supported.
                 *
                 * @param bool $committedMetricsSupported Seller has per-package snapshot infrastructure for the reporting contract. When true, the seller MUST populate `package.committed_metrics` on every `create_media_buy` response and MUST honor append-only mid-flight metric additions via `update_media_buy`. The unified `committed_metrics` array (per the metric-accountability design) covers both standard and vendor-defined metric entries, so a single flag is load-bearing. Buyers filtering on this flag are detecting 'this seller can stamp the reporting contract,' which closes the audit gap from PR #3510 where absence of `committed_metrics` was indistinguishable between 'didn't snapshot' and 'snapshot infrastructure not implemented.'
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setCommittedMetricsSupported(
                    bool $committedMetricsSupported
                ): static {
                    if ($this->committedMetricsSupported === $committedMetricsSupported) {
                        return $this;
                    }

                    $value = $modelData['committed_metrics_supported'] = $committedMetricsSupported;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateCommittedMetricsSupported($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->committedMetricsSupported = $value;
                    $this->_rawModelDataInput['committed_metrics_supported'] = $committedMetricsSupported;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property committedMetricsSupported
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processCommittedMetricsSupported(array $modelData): void
            {
                
                    if (!array_key_exists('committed_metrics_supported', $modelData) && $this->committedMetricsSupported === null) {
                        return;
                    }
                

                $value = array_key_exists('committed_metrics_supported', $modelData) ? $modelData['committed_metrics_supported'] : $this->committedMetricsSupported;

                

                $this->committedMetricsSupported = $this->validateCommittedMetricsSupported($value, $modelData);
            }

            /**
             * Execute all validators for the property committedMetricsSupported
             */
            protected function validateCommittedMetricsSupported($value, array $modelData)
            {
                
                    

if ((!is_bool($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'committed_metrics_supported',
  1 => 'bool',
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
    

    
        
            if (array_key_exists('inline_creative_management', $modelData) &&
                $modelData['inline_creative_management'] !== $this->inlineCreativeManagement
            ) {
                

                $rollbackValues['inlineCreativeManagement'] = $this->inlineCreativeManagement;
                $this->processInlineCreativeManagement($modelData);
            }
        
    
        
            if (array_key_exists('property_list_filtering', $modelData) &&
                $modelData['property_list_filtering'] !== $this->propertyListFiltering
            ) {
                

                $rollbackValues['propertyListFiltering'] = $this->propertyListFiltering;
                $this->processPropertyListFiltering($modelData);
            }
        
    
        
            if (array_key_exists('catalog_management', $modelData) &&
                $modelData['catalog_management'] !== $this->catalogManagement
            ) {
                

                $rollbackValues['catalogManagement'] = $this->catalogManagement;
                $this->processCatalogManagement($modelData);
            }
        
    
        
            if (array_key_exists('committed_metrics_supported', $modelData) &&
                $modelData['committed_metrics_supported'] !== $this->committedMetricsSupported
            ) {
                

                $rollbackValues['committedMetricsSupported'] = $this->committedMetricsSupported;
                $this->processCommittedMetricsSupported($modelData);
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



}

// @codeCoverageIgnoreEnd
