<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use UnitEnum;

    use AdCP\MediaBuy\Enums\GetProductsRequest_CatalogFieldMappingTransform;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetProductsRequest_CatalogFieldMapping
 * @package AdCP\MediaBuy 
 *
 * Declares how a field in an external feed maps to the AdCP catalog item schema. Used in sync_catalogs feed_field_mappings to normalize non-AdCP feeds (Google Merchant Center, LinkedIn Jobs XML, hotel XML, etc.) to the standard catalog item schema without requiring the buyer to preprocess every feed. Multiple mappings can assemble a nested object via dot notation (e.g., separate mappings for price.amount and price.currency).
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/catalog/properties/feed_field_mappings/items')]

class GetProductsRequest_CatalogFieldMapping implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/catalog/properties/feed_field_mappings/items/properties/feed_field')]
        
            #[SchemaName('feed_field')]
        
        /** @var string|null Field name in the external feed record. Omit when injecting a static literal value (use the value property instead). */
        protected $feedField;
    
        
            #[JsonPointer('/properties/catalog/properties/feed_field_mappings/items/properties/catalog_field')]
        
            #[SchemaName('catalog_field')]
        
        /** @var string|null Target field on the catalog item schema, using dot notation for nested fields (e.g., 'name', 'price.amount', 'location.city'). Mutually exclusive with asset_group_id. */
        protected $catalogField;
    
        
            #[JsonPointer('/properties/catalog/properties/feed_field_mappings/items/properties/asset_group_id')]
        
            #[SchemaName('asset_group_id')]
        
        /** @var string|null Places the feed field value (a URL) into a typed asset pool on the catalog item's assets array. The value is wrapped as an image or video asset in a group with this ID. Use standard group IDs: 'images_landscape', 'images_vertical', 'images_square', 'logo', 'video'. Mutually exclusive with catalog_field. */
        protected $assetGroupId;
    
        
            #[JsonPointer('/properties/catalog/properties/feed_field_mappings/items/properties/value')]
        
            #[SchemaName('value')]
        
        /** @var mixed Static literal value to inject into catalog_field for every item, regardless of what the feed contains. Mutually exclusive with feed_field. Useful for fields the feed omits (e.g., currency when price is always USD, or a constant category value). */
        protected $value;
    
        
            #[JsonPointer('/properties/catalog/properties/feed_field_mappings/items/properties/transform')]
        
            #[SchemaName('transform')]
        
        /** @var GetProductsRequest_CatalogFieldMappingTransform|null Named transform to apply to the feed field value before writing to the catalog schema. See transform-specific parameters (format, timezone, by, separator). */
        protected $transform;
    
        
            #[JsonPointer('/properties/catalog/properties/feed_field_mappings/items/properties/format')]
        
            #[SchemaName('format')]
        
        /** @var string|null For transform 'date': the input date format string (e.g., 'YYYYMMDD', 'MM/DD/YYYY', 'DD-MM-YYYY'). Output is always ISO 8601 (e.g., '2025-03-01'). Uses Unicode date pattern tokens. */
        protected $format;
    
        
            #[JsonPointer('/properties/catalog/properties/feed_field_mappings/items/properties/timezone')]
        
            #[SchemaName('timezone')]
        
        /** @var string|null For transform 'date': the timezone of the input value. IANA timezone identifier (e.g., 'UTC', 'America/New_York', 'Europe/Amsterdam'). Defaults to UTC when omitted. */
        protected $timezone;
    
        
            #[JsonPointer('/properties/catalog/properties/feed_field_mappings/items/properties/by')]
        
            #[SchemaName('by')]
        
        /** @var float|null For transform 'divide': the divisor to apply (e.g., 100 to convert integer cents to decimal dollars). */
        protected $by;
    
        
            #[JsonPointer('/properties/catalog/properties/feed_field_mappings/items/properties/separator')]
        
            #[SchemaName('separator')]
        
        /** @var string For transform 'split': the separator character or string to split on. Defaults to ','. */
        protected $separator = ',';
    
        
            #[JsonPointer('/properties/catalog/properties/feed_field_mappings/items/properties/default')]
        
            #[SchemaName('default')]
        
        /** @var mixed Fallback value to use when feed_field is absent, null, or empty. Applied after any transform would have been applied. Allows optional feed fields to have a guaranteed baseline value. */
        protected $default;
    
        
            #[JsonPointer('/properties/catalog/properties/feed_field_mappings/items/properties/ext')]
        
            #[SchemaName('ext')]
        
        /** @var GetProductsRequest_ExtensionObject|null Extension object for platform-specific, vendor-namespaced parameters. Extensions are always optional and must be namespaced under a vendor/platform key (e.g., ext.gam, ext.roku). Used for custom capabilities, partner-specific configuration, and features being proposed for standardization. */
        protected $ext;
    
        
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
  0 => 'feed_field',
  1 => 'catalog_field',
  2 => 'asset_group_id',
  3 => 'value',
  4 => 'transform',
  5 => 'format',
  6 => 'timezone',
  7 => 'by',
  9 => 'default',
  10 => 'ext',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetProductsRequest_CatalogFieldMapping constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processFeedField($rawModelDataInput);
            
        
            
                $this->processCatalogField($rawModelDataInput);
            
        
            
                $this->processAssetGroupId($rawModelDataInput);
            
        
            
                $this->processValue($rawModelDataInput);
            
        
            
                $this->processTransform($rawModelDataInput);
            
        
            
                $this->processFormat($rawModelDataInput);
            
        
            
                $this->processTimezone($rawModelDataInput);
            
        
            
                $this->processBy($rawModelDataInput);
            
        
            
                $this->processSeparator($rawModelDataInput);
            
        
            
                $this->processDefault($rawModelDataInput);
            
        
            
                $this->processExt($rawModelDataInput);
            
        
            
        
            
        
            
        

        
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
   'feed_field',
   'catalog_field',
   'asset_group_id',
   'value',
   'transform',
   'format',
   'timezone',
   'by',
   'separator',
   'default',
   'ext',
)) as $propertyKey) {
        

        $this->_additionalProperties[$propertyKey] = $value[$propertyKey];
    }

    return false;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidAdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetProductsRequest_CatalogFieldMapping',
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
                 * Get the value of feed_field.
                 *
                 * Field name in the external feed record. Omit when injecting a static literal value (use the value property instead).
                 *
                 * @return string|null
                 */
                public function getFeedField(): ?string
                {
                    

                    return $this->feedField;
                }
            

            
                /**
                 * Set the value of feed_field.
                 *
                 * @param string $feedField Field name in the external feed record. Omit when injecting a static literal value (use the value property instead).
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setFeedField(
                    string $feedField
                ): static {
                    if ($this->feedField === $feedField) {
                        return $this;
                    }

                    $value = $modelData['feed_field'] = $feedField;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validateFeedField($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->feedField = $value;
                    $this->_rawModelDataInput['feed_field'] = $feedField;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property feedField
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processFeedField(array $modelData): void
            {
                
                    if (!array_key_exists('feed_field', $modelData) && $this->feedField === null) {
                        return;
                    }
                

                $value = array_key_exists('feed_field', $modelData) ? $modelData['feed_field'] : $this->feedField;

                

                $this->feedField = $this->validateFeedField($value, $modelData);
            }

            /**
             * Execute all validators for the property feedField
             */
            protected function validateFeedField($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'feed_field',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of catalog_field.
                 *
                 * Target field on the catalog item schema, using dot notation for nested fields (e.g., 'name', 'price.amount', 'location.city'). Mutually exclusive with asset_group_id.
                 *
                 * @return string|null
                 */
                public function getCatalogField(): ?string
                {
                    

                    return $this->catalogField;
                }
            

            
                /**
                 * Set the value of catalog_field.
                 *
                 * @param string $catalogField Target field on the catalog item schema, using dot notation for nested fields (e.g., 'name', 'price.amount', 'location.city'). Mutually exclusive with asset_group_id.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setCatalogField(
                    string $catalogField
                ): static {
                    if ($this->catalogField === $catalogField) {
                        return $this;
                    }

                    $value = $modelData['catalog_field'] = $catalogField;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validateCatalogField($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->catalogField = $value;
                    $this->_rawModelDataInput['catalog_field'] = $catalogField;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property catalogField
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processCatalogField(array $modelData): void
            {
                
                    if (!array_key_exists('catalog_field', $modelData) && $this->catalogField === null) {
                        return;
                    }
                

                $value = array_key_exists('catalog_field', $modelData) ? $modelData['catalog_field'] : $this->catalogField;

                

                $this->catalogField = $this->validateCatalogField($value, $modelData);
            }

            /**
             * Execute all validators for the property catalogField
             */
            protected function validateCatalogField($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'catalog_field',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of asset_group_id.
                 *
                 * Places the feed field value (a URL) into a typed asset pool on the catalog item's assets array. The value is wrapped as an image or video asset in a group with this ID. Use standard group IDs: 'images_landscape', 'images_vertical', 'images_square', 'logo', 'video'. Mutually exclusive with catalog_field.
                 *
                 * @return string|null
                 */
                public function getAssetGroupId(): ?string
                {
                    

                    return $this->assetGroupId;
                }
            

            
                /**
                 * Set the value of asset_group_id.
                 *
                 * @param string $assetGroupId Places the feed field value (a URL) into a typed asset pool on the catalog item's assets array. The value is wrapped as an image or video asset in a group with this ID. Use standard group IDs: 'images_landscape', 'images_vertical', 'images_square', 'logo', 'video'. Mutually exclusive with catalog_field.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setAssetGroupId(
                    string $assetGroupId
                ): static {
                    if ($this->assetGroupId === $assetGroupId) {
                        return $this;
                    }

                    $value = $modelData['asset_group_id'] = $assetGroupId;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validateAssetGroupId($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->assetGroupId = $value;
                    $this->_rawModelDataInput['asset_group_id'] = $assetGroupId;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property assetGroupId
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processAssetGroupId(array $modelData): void
            {
                
                    if (!array_key_exists('asset_group_id', $modelData) && $this->assetGroupId === null) {
                        return;
                    }
                

                $value = array_key_exists('asset_group_id', $modelData) ? $modelData['asset_group_id'] : $this->assetGroupId;

                

                $this->assetGroupId = $this->validateAssetGroupId($value, $modelData);
            }

            /**
             * Execute all validators for the property assetGroupId
             */
            protected function validateAssetGroupId($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'asset_group_id',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of value.
                 *
                 * Static literal value to inject into catalog_field for every item, regardless of what the feed contains. Mutually exclusive with feed_field. Useful for fields the feed omits (e.g., currency when price is always USD, or a constant category value).
                 *
                 * @return mixed
                 */
                public function getValue(): mixed
                {
                    

                    return $this->value;
                }
            

            
                /**
                 * Set the value of value.
                 *
                 * @param mixed $value Static literal value to inject into catalog_field for every item, regardless of what the feed contains. Mutually exclusive with feed_field. Useful for fields the feed omits (e.g., currency when price is always USD, or a constant category value).
                 *
                 * 
                 *
                 * @return static
                 */
                public function setValue(
                    mixed $value
                ): static {
                    if ($this->value === $value) {
                        return $this;
                    }

                    $value = $modelData['value'] = $value;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validateValue($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->value = $value;
                    $this->_rawModelDataInput['value'] = $value;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property value
             *
             * @param array $modelData
             *
             * 
             */
            protected function processValue(array $modelData): void
            {
                
                    if (!array_key_exists('value', $modelData) && $this->value === null) {
                        return;
                    }
                

                $value = array_key_exists('value', $modelData) ? $modelData['value'] : $this->value;

                

                $this->value = $this->validateValue($value, $modelData);
            }

            /**
             * Execute all validators for the property value
             */
            protected function validateValue($value, array $modelData)
            {
                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of transform.
                 *
                 * Named transform to apply to the feed field value before writing to the catalog schema. See transform-specific parameters (format, timezone, by, separator).
                 *
                 * @return GetProductsRequest_CatalogFieldMappingTransform|null
                 */
                public function getTransform(): ?GetProductsRequest_CatalogFieldMappingTransform
                {
                    

                    return $this->transform;
                }
            

            
                /**
                 * Set the value of transform.
                 *
                 * @param string|GetProductsRequest_CatalogFieldMappingTransform|null $transform Named transform to apply to the feed field value before writing to the catalog schema. See transform-specific parameters (format, timezone, by, separator).
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setTransform(
                    string | GetProductsRequest_CatalogFieldMappingTransform | null $transform
                ): static {
                    if ($this->transform === $transform) {
                        return $this;
                    }

                    $value = $modelData['transform'] = $transform;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validateTransform($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->transform = $value;
                    $this->_rawModelDataInput['transform'] = $transform;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property transform
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processTransform(array $modelData): void
            {
                
                    if (!array_key_exists('transform', $modelData) && $this->transform === null) {
                        return;
                    }
                

                $value = array_key_exists('transform', $modelData) ? $modelData['transform'] : $this->transform;

                

                $this->transform = $this->validateTransform($value, $modelData);
            }

            /**
             * Execute all validators for the property transform
             */
            protected function validateTransform($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof GetProductsRequest_CatalogFieldMappingTransform)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'transform',
  1 => 'GetProductsRequest_CatalogFieldMappingTransform',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'transform',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'date',
   'divide',
   'boolean',
   'split',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'transform',
  1 => 
  array (
    0 => 'date',
    1 => 'divide',
    2 => 'boolean',
    3 => 'split',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\GetProductsRequest_CatalogFieldMappingTransform',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'transform',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'transform',
  1 => 'php_model_generator_enum',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of format.
                 *
                 * For transform 'date': the input date format string (e.g., 'YYYYMMDD', 'MM/DD/YYYY', 'DD-MM-YYYY'). Output is always ISO 8601 (e.g., '2025-03-01'). Uses Unicode date pattern tokens.
                 *
                 * @return string|null
                 */
                public function getFormat(): ?string
                {
                    

                    return $this->format;
                }
            

            
                /**
                 * Set the value of format.
                 *
                 * @param string $format For transform 'date': the input date format string (e.g., 'YYYYMMDD', 'MM/DD/YYYY', 'DD-MM-YYYY'). Output is always ISO 8601 (e.g., '2025-03-01'). Uses Unicode date pattern tokens.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setFormat(
                    string $format
                ): static {
                    if ($this->format === $format) {
                        return $this;
                    }

                    $value = $modelData['format'] = $format;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validateFormat($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->format = $value;
                    $this->_rawModelDataInput['format'] = $format;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property format
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processFormat(array $modelData): void
            {
                
                    if (!array_key_exists('format', $modelData) && $this->format === null) {
                        return;
                    }
                

                $value = array_key_exists('format', $modelData) ? $modelData['format'] : $this->format;

                

                $this->format = $this->validateFormat($value, $modelData);
            }

            /**
             * Execute all validators for the property format
             */
            protected function validateFormat($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'format',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of timezone.
                 *
                 * For transform 'date': the timezone of the input value. IANA timezone identifier (e.g., 'UTC', 'America/New_York', 'Europe/Amsterdam'). Defaults to UTC when omitted.
                 *
                 * @return string|null
                 */
                public function getTimezone(): ?string
                {
                    

                    return $this->timezone;
                }
            

            
                /**
                 * Set the value of timezone.
                 *
                 * @param string $timezone For transform 'date': the timezone of the input value. IANA timezone identifier (e.g., 'UTC', 'America/New_York', 'Europe/Amsterdam'). Defaults to UTC when omitted.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setTimezone(
                    string $timezone
                ): static {
                    if ($this->timezone === $timezone) {
                        return $this;
                    }

                    $value = $modelData['timezone'] = $timezone;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validateTimezone($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->timezone = $value;
                    $this->_rawModelDataInput['timezone'] = $timezone;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property timezone
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processTimezone(array $modelData): void
            {
                
                    if (!array_key_exists('timezone', $modelData) && $this->timezone === null) {
                        return;
                    }
                

                $value = array_key_exists('timezone', $modelData) ? $modelData['timezone'] : $this->timezone;

                

                $this->timezone = $this->validateTimezone($value, $modelData);
            }

            /**
             * Execute all validators for the property timezone
             */
            protected function validateTimezone($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'timezone',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of by.
                 *
                 * For transform 'divide': the divisor to apply (e.g., 100 to convert integer cents to decimal dollars).
                 *
                 * @return float|null
                 */
                public function getBy(): ?float
                {
                    

                    return $this->by;
                }
            

            
                /**
                 * Set the value of by.
                 *
                 * @param float $by For transform 'divide': the divisor to apply (e.g., 100 to convert integer cents to decimal dollars).
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setBy(
                    float $by
                ): static {
                    if ($this->by === $by) {
                        return $this;
                    }

                    $value = $modelData['by'] = $by;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validateBy($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->by = $value;
                    $this->_rawModelDataInput['by'] = $by;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property by
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processBy(array $modelData): void
            {
                
                    if (!array_key_exists('by', $modelData) && $this->by === null) {
                        return;
                    }
                

                $value = array_key_exists('by', $modelData) ? $modelData['by'] : $this->by;

                $value = is_int($value) ? (float) $value : $value;

                $this->by = $this->validateBy($value, $modelData);
            }

            /**
             * Execute all validators for the property by
             */
            protected function validateBy($value, array $modelData)
            {
                
                    

if ((!is_float($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'by',
  1 => 'float',
)));
}

                
                    

if (is_float($value) && $value <= 0) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\ExclusiveMinimumException($value ?? null, ...array (
  0 => 'by',
  1 => 0,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of separator.
                 *
                 * For transform 'split': the separator character or string to split on. Defaults to ','.
                 *
                 * @return string
                 */
                public function getSeparator(): string
                {
                    

                    return $this->separator;
                }
            

            
                /**
                 * Set the value of separator.
                 *
                 * @param string $separator For transform 'split': the separator character or string to split on. Defaults to ','.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setSeparator(
                    string $separator
                ): static {
                    if ($this->separator === $separator) {
                        return $this;
                    }

                    $value = $modelData['separator'] = $separator;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validateSeparator($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->separator = $value;
                    $this->_rawModelDataInput['separator'] = $separator;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property separator
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processSeparator(array $modelData): void
            {
                
                    if (!array_key_exists('separator', $modelData) && $this->separator === null) {
                        return;
                    }
                

                $value = array_key_exists('separator', $modelData) ? $modelData['separator'] : $this->separator;

                

                $this->separator = $this->validateSeparator($value, $modelData);
            }

            /**
             * Execute all validators for the property separator
             */
            protected function validateSeparator($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'separator',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of default.
                 *
                 * Fallback value to use when feed_field is absent, null, or empty. Applied after any transform would have been applied. Allows optional feed fields to have a guaranteed baseline value.
                 *
                 * @return mixed
                 */
                public function getDefault(): mixed
                {
                    

                    return $this->default;
                }
            

            
                /**
                 * Set the value of default.
                 *
                 * @param mixed $default Fallback value to use when feed_field is absent, null, or empty. Applied after any transform would have been applied. Allows optional feed fields to have a guaranteed baseline value.
                 *
                 * 
                 *
                 * @return static
                 */
                public function setDefault(
                    mixed $default
                ): static {
                    if ($this->default === $default) {
                        return $this;
                    }

                    $value = $modelData['default'] = $default;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validateDefault($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->default = $value;
                    $this->_rawModelDataInput['default'] = $default;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property default
             *
             * @param array $modelData
             *
             * 
             */
            protected function processDefault(array $modelData): void
            {
                
                    if (!array_key_exists('default', $modelData) && $this->default === null) {
                        return;
                    }
                

                $value = array_key_exists('default', $modelData) ? $modelData['default'] : $this->default;

                

                $this->default = $this->validateDefault($value, $modelData);
            }

            /**
             * Execute all validators for the property default
             */
            protected function validateDefault($value, array $modelData)
            {
                

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
    $succeededCompositionElements = 2;
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
        return is_array($value) ? new GetProductsRequest_GetProductsRequest_CatalogFieldMapping51ede3601b6c46f62e4e317755080c80($value) : $value;
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
  0 => 'GetProductsRequest_CatalogFieldMapping',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsRequest_GetProductsRequest_CatalogFieldMapping51ede3601b6c46f62e4e317755080c80)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'GetProductsRequest_CatalogFieldMapping',
  1 => 'GetProductsRequest_GetProductsRequest_CatalogFieldMapping51ede3601b6c46f62e4e317755080c80',
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
                    $modifiedValues = array_merge($modifiedValues, $this->_getModifiedValues_d38e9($originalModelData, $value));
                }
            
                
            }
            
        } catch (\Exception $e) {
            

            $succeededCompositionElements--;
        }

        $value = $originalModelData;
        $validatorComponentIndex++;
    
        try {
            
                // check if the state of the validator is already known.
                // If none of the properties affected by the validator are changed the validator must not be re-evaluated
                if (isset($validatorIndex) &&
                    isset($this->_propertyValidationState[$validatorIndex][$validatorComponentIndex]) &&
                    !array_intersect(
                        array_keys($modifiedModelData),
                        [
                            
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
        return is_array($value) ? new GetProductsRequest_GetProductsRequest_CatalogFieldMapping1c7d71064e3e3b11f2301f7634885314($value) : $value;
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
  0 => 'GetProductsRequest_CatalogFieldMapping',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsRequest_GetProductsRequest_CatalogFieldMapping1c7d71064e3e3b11f2301f7634885314)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'GetProductsRequest_CatalogFieldMapping',
  1 => 'GetProductsRequest_GetProductsRequest_CatalogFieldMapping1c7d71064e3e3b11f2301f7634885314',
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
                    $modifiedValues = array_merge($modifiedValues, $this->_getModifiedValues_d38e9($originalModelData, $value));
                }
            
                
            }
            
        } catch (\Exception $e) {
            

            $succeededCompositionElements--;
        }

        $value = $originalModelData;
        $validatorComponentIndex++;
    

    
        $value = $proposedValue;
    

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    $result = !($succeededCompositionElements === 2);

    
        if ($result) {
            $this->_propertyValidationState = $originalPropertyValidationState;
        }
    

    return $result;
})($value)
) {
        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\ComposedValue\AllOfException($value ?? null, ...array (
  0 => 'GetProductsRequest_CatalogFieldMapping',
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
    

    
        
            if (array_key_exists('feed_field', $modelData) &&
                $modelData['feed_field'] !== $this->feedField
            ) {
                



                $rollbackValues['feedField'] = $this->feedField;
                $this->processFeedField($modelData);
            }
        
    
        
            if (array_key_exists('catalog_field', $modelData) &&
                $modelData['catalog_field'] !== $this->catalogField
            ) {
                



                $rollbackValues['catalogField'] = $this->catalogField;
                $this->processCatalogField($modelData);
            }
        
    
        
            if (array_key_exists('asset_group_id', $modelData) &&
                $modelData['asset_group_id'] !== $this->assetGroupId
            ) {
                



                $rollbackValues['assetGroupId'] = $this->assetGroupId;
                $this->processAssetGroupId($modelData);
            }
        
    
        
            if (array_key_exists('value', $modelData) &&
                $modelData['value'] !== $this->value
            ) {
                



                $rollbackValues['value'] = $this->value;
                $this->processValue($modelData);
            }
        
    
        
            if (array_key_exists('transform', $modelData) &&
                $modelData['transform'] !== $this->transform
            ) {
                



                $rollbackValues['transform'] = $this->transform;
                $this->processTransform($modelData);
            }
        
    
        
            if (array_key_exists('format', $modelData) &&
                $modelData['format'] !== $this->format
            ) {
                



                $rollbackValues['format'] = $this->format;
                $this->processFormat($modelData);
            }
        
    
        
            if (array_key_exists('timezone', $modelData) &&
                $modelData['timezone'] !== $this->timezone
            ) {
                



                $rollbackValues['timezone'] = $this->timezone;
                $this->processTimezone($modelData);
            }
        
    
        
            if (array_key_exists('by', $modelData) &&
                $modelData['by'] !== $this->by
            ) {
                



                $rollbackValues['by'] = $this->by;
                $this->processBy($modelData);
            }
        
    
        
            if (array_key_exists('separator', $modelData) &&
                $modelData['separator'] !== $this->separator
            ) {
                



                $rollbackValues['separator'] = $this->separator;
                $this->processSeparator($modelData);
            }
        
    
        
            if (array_key_exists('default', $modelData) &&
                $modelData['default'] !== $this->default
            ) {
                



                $rollbackValues['default'] = $this->default;
                $this->processDefault($modelData);
            }
        
    
        
            if (array_key_exists('ext', $modelData) &&
                $modelData['ext'] !== $this->ext
            ) {
                



                $rollbackValues['ext'] = $this->ext;
                $this->processExt($modelData);
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
 * serialize the property transform
 */
protected function serializeTransform()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->transform, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\GetProductsRequest_CatalogFieldMappingTransform',
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



                        private function _getModifiedValues_d38e9(array $originalModelData, object $nestedCompositionObject): array {
                            $modifiedValues = [];
                            $defaultValueMap = array (
  0 => 'propertyValidationState',
  1 => 'skipNotProvidedPropertiesMap',
  2 => 'propertyValidationState',
  3 => 'skipNotProvidedPropertiesMap',
);
    
                            foreach (array (
  'propertyValidationState' => 'get_propertyValidationState',
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
