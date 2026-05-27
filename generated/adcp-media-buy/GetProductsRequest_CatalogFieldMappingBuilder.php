<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;

    use AdCP\MediaBuy\Enums\GetProductsRequest_CatalogFieldMappingTransform;


/**
 * Builder class for GetProductsRequest_CatalogFieldMapping
 */
class GetProductsRequest_CatalogFieldMappingBuilder implements BuilderInterface
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
     * Set up a new instance of GetProductsRequest_CatalogFieldMapping with fully validated properties
     */
    public function validate(): GetProductsRequest_CatalogFieldMapping
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetProductsRequest_CatalogFieldMapping($this->_rawModelDataInput);
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
             * Get the value of feed_field.
             *
             * Field name in the external feed record. Omit when injecting a static literal value (use the value property instead).
             *
             * @return string|null
             */
            public function getFeedField(): ?string
            {
                return $this->_rawModelDataInput['feed_field'] ?? null;
            }

            /**
             * Set the value of feed_field.
             *
             * @param string $feedField Field name in the external feed record. Omit when injecting a static literal value (use the value property instead).
             *
             * {@link GetProductsRequest_CatalogFieldMapping::processFeedField}
             * 
             *
             * @return static
             */
            public function setFeedField(
                string $feedField
            ): static {
                if (array_key_exists('feed_field', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['feed_field'] === $feedField
                ) {
                    return $this;
                }

                $value = $modelData['feed_field'] = $feedField;

                

                

                $this->_rawModelDataInput['feed_field'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['catalog_field'] ?? null;
            }

            /**
             * Set the value of catalog_field.
             *
             * @param string $catalogField Target field on the catalog item schema, using dot notation for nested fields (e.g., 'name', 'price.amount', 'location.city'). Mutually exclusive with asset_group_id.
             *
             * {@link GetProductsRequest_CatalogFieldMapping::processCatalogField}
             * 
             *
             * @return static
             */
            public function setCatalogField(
                string $catalogField
            ): static {
                if (array_key_exists('catalog_field', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['catalog_field'] === $catalogField
                ) {
                    return $this;
                }

                $value = $modelData['catalog_field'] = $catalogField;

                

                

                $this->_rawModelDataInput['catalog_field'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['asset_group_id'] ?? null;
            }

            /**
             * Set the value of asset_group_id.
             *
             * @param string $assetGroupId Places the feed field value (a URL) into a typed asset pool on the catalog item's assets array. The value is wrapped as an image or video asset in a group with this ID. Use standard group IDs: 'images_landscape', 'images_vertical', 'images_square', 'logo', 'video'. Mutually exclusive with catalog_field.
             *
             * {@link GetProductsRequest_CatalogFieldMapping::processAssetGroupId}
             * 
             *
             * @return static
             */
            public function setAssetGroupId(
                string $assetGroupId
            ): static {
                if (array_key_exists('asset_group_id', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['asset_group_id'] === $assetGroupId
                ) {
                    return $this;
                }

                $value = $modelData['asset_group_id'] = $assetGroupId;

                

                

                $this->_rawModelDataInput['asset_group_id'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['value'] ?? null;
            }

            /**
             * Set the value of value.
             *
             * @param mixed $value Static literal value to inject into catalog_field for every item, regardless of what the feed contains. Mutually exclusive with feed_field. Useful for fields the feed omits (e.g., currency when price is always USD, or a constant category value).
             *
             * {@link GetProductsRequest_CatalogFieldMapping::processValue}
             * 
             *
             * @return static
             */
            public function setValue(
                mixed $value
            ): static {
                if (array_key_exists('value', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['value'] === $value
                ) {
                    return $this;
                }

                $value = $modelData['value'] = $value;

                

                

                $this->_rawModelDataInput['value'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of transform.
             *
             * Named transform to apply to the feed field value before writing to the catalog schema. See transform-specific parameters (format, timezone, by, separator).
             *
             * @return string|GetProductsRequest_CatalogFieldMappingTransform|null
             */
            public function getTransform(): string | GetProductsRequest_CatalogFieldMappingTransform | null
            {
                return $this->_rawModelDataInput['transform'] ?? null;
            }

            /**
             * Set the value of transform.
             *
             * @param string|GetProductsRequest_CatalogFieldMappingTransform|null $transform Named transform to apply to the feed field value before writing to the catalog schema. See transform-specific parameters (format, timezone, by, separator).
             *
             * {@link GetProductsRequest_CatalogFieldMapping::processTransform}
             * 
             *
             * @return static
             */
            public function setTransform(
                string | GetProductsRequest_CatalogFieldMappingTransform | null $transform
            ): static {
                if (array_key_exists('transform', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['transform'] === $transform
                ) {
                    return $this;
                }

                $value = $modelData['transform'] = $transform;

                

                

                $this->_rawModelDataInput['transform'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['format'] ?? null;
            }

            /**
             * Set the value of format.
             *
             * @param string $format For transform 'date': the input date format string (e.g., 'YYYYMMDD', 'MM/DD/YYYY', 'DD-MM-YYYY'). Output is always ISO 8601 (e.g., '2025-03-01'). Uses Unicode date pattern tokens.
             *
             * {@link GetProductsRequest_CatalogFieldMapping::processFormat}
             * 
             *
             * @return static
             */
            public function setFormat(
                string $format
            ): static {
                if (array_key_exists('format', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['format'] === $format
                ) {
                    return $this;
                }

                $value = $modelData['format'] = $format;

                

                

                $this->_rawModelDataInput['format'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['timezone'] ?? null;
            }

            /**
             * Set the value of timezone.
             *
             * @param string $timezone For transform 'date': the timezone of the input value. IANA timezone identifier (e.g., 'UTC', 'America/New_York', 'Europe/Amsterdam'). Defaults to UTC when omitted.
             *
             * {@link GetProductsRequest_CatalogFieldMapping::processTimezone}
             * 
             *
             * @return static
             */
            public function setTimezone(
                string $timezone
            ): static {
                if (array_key_exists('timezone', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['timezone'] === $timezone
                ) {
                    return $this;
                }

                $value = $modelData['timezone'] = $timezone;

                

                

                $this->_rawModelDataInput['timezone'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['by'] ?? null;
            }

            /**
             * Set the value of by.
             *
             * @param float $by For transform 'divide': the divisor to apply (e.g., 100 to convert integer cents to decimal dollars).
             *
             * {@link GetProductsRequest_CatalogFieldMapping::processBy}
             * 
             *
             * @return static
             */
            public function setBy(
                float $by
            ): static {
                if (array_key_exists('by', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['by'] === $by
                ) {
                    return $this;
                }

                $value = $modelData['by'] = $by;

                

                

                $this->_rawModelDataInput['by'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of separator.
             *
             * For transform 'split': the separator character or string to split on. Defaults to ','.
             *
             * @return string|null
             */
            public function getSeparator(): ?string
            {
                return $this->_rawModelDataInput['separator'] ?? null;
            }

            /**
             * Set the value of separator.
             *
             * @param string $separator For transform 'split': the separator character or string to split on. Defaults to ','.
             *
             * {@link GetProductsRequest_CatalogFieldMapping::processSeparator}
             * 
             *
             * @return static
             */
            public function setSeparator(
                string $separator
            ): static {
                if (array_key_exists('separator', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['separator'] === $separator
                ) {
                    return $this;
                }

                $value = $modelData['separator'] = $separator;

                

                

                $this->_rawModelDataInput['separator'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['default'] ?? null;
            }

            /**
             * Set the value of default.
             *
             * @param mixed $default Fallback value to use when feed_field is absent, null, or empty. Applied after any transform would have been applied. Allows optional feed fields to have a guaranteed baseline value.
             *
             * {@link GetProductsRequest_CatalogFieldMapping::processDefault}
             * 
             *
             * @return static
             */
            public function setDefault(
                mixed $default
            ): static {
                if (array_key_exists('default', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['default'] === $default
                ) {
                    return $this;
                }

                $value = $modelData['default'] = $default;

                

                

                $this->_rawModelDataInput['default'] = $value;

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
             * {@link GetProductsRequest_CatalogFieldMapping::processExt}
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
        
    
}

// @codeCoverageIgnoreEnd
