<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

    use UnitEnum;

    use AdCP\MediaBuy\Enums\DigitalSourceType;

    use AdCP\MediaBuy\Enums\GetProductsRequest_ProvenanceHuman_Oversight;

    use AdCP\MediaBuy\Enums\GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001d5b392d89eb0397d01ef36b451045a72Action;

    use AdCP\MediaBuy\Enums\GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001966d960c0a8231c9cf148f923aed05adAction;

    use AdCP\MediaBuy\Enums\GetProductsRequest_Declared_By13c986791ce55365e13a7cd5ff90f7dcRole;

    use AdCP\MediaBuy\Enums\EmbeddedProvenanceMethod;

    use AdCP\MediaBuy\Enums\WatermarkMediaType;

    use AdCP\MediaBuy\Enums\C2PAWatermarkAction;

    use AdCP\MediaBuy\Enums\GetProductsRequest_ItemOfArrayVerificationab0379bc9ff851960f9f645c9916029eResult;

    use AdCP\MediaBuy\Enums\DisclosurePersistence;

    use AdCP\MediaBuy\Enums\DisclosurePosition;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Required;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetProductsRequest_ImageAsset
 * @package AdCP\MediaBuy 
 *
 * Override logo asset.
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/brand/properties/brand_kit_override/properties/logo')]

class GetProductsRequest_ImageAsset implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/brand/properties/brand_kit_override/properties/logo/properties/asset_type')]
        
            #[SchemaName('asset_type')]
        
            #[Required]
        
        /** @var string Discriminator identifying this as an image asset. See /schemas/creative/asset-types for the registry. */
        protected $assetType;
    
        
            #[JsonPointer('/properties/brand/properties/brand_kit_override/properties/logo/properties/url')]
        
            #[SchemaName('url')]
        
            #[Required]
        
        /** @var string URL to the image asset */
        protected $url;
    
        
            #[JsonPointer('/properties/brand/properties/brand_kit_override/properties/logo/properties/width')]
        
            #[SchemaName('width')]
        
            #[Required]
        
        /** @var int Width in pixels */
        protected $width;
    
        
            #[JsonPointer('/properties/brand/properties/brand_kit_override/properties/logo/properties/height')]
        
            #[SchemaName('height')]
        
            #[Required]
        
        /** @var int Height in pixels */
        protected $height;
    
        
            #[JsonPointer('/properties/brand/properties/brand_kit_override/properties/logo/properties/format')]
        
            #[SchemaName('format')]
        
        /** @var string|null Image file format (jpg, png, gif, webp, etc.) */
        protected $format;
    
        
            #[JsonPointer('/properties/brand/properties/brand_kit_override/properties/logo/properties/alt_text')]
        
            #[SchemaName('alt_text')]
        
        /** @var string|null Alternative text for accessibility */
        protected $altText;
    
        
            #[JsonPointer('/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance')]
        
            #[SchemaName('provenance')]
        
        /** @var GetProductsRequest_Provenance|null Provenance metadata for this asset, overrides manifest-level provenance */
        protected $provenance;
    
        
            #[Internal]
        
        /** @var array Collect all additional properties provided to the schema */
        private $_additionalProperties = array (
);
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  4 => 'format',
  5 => 'alt_text',
  6 => 'provenance',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetProductsRequest_ImageAsset constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processAssetType($rawModelDataInput);
            
        
            
                $this->processUrl($rawModelDataInput);
            
        
            
                $this->processWidth($rawModelDataInput);
            
        
            
                $this->processHeight($rawModelDataInput);
            
        
            
                $this->processFormat($rawModelDataInput);
            
        
            
                $this->processAltText($rawModelDataInput);
            
        
            
                $this->processProvenance($rawModelDataInput);
            
        
            
        
            
        

        
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
   'asset_type',
   'url',
   'width',
   'height',
   'format',
   'alt_text',
   'provenance',
)) as $propertyKey) {
        

        $this->_additionalProperties[$propertyKey] = $value[$propertyKey];
    }

    return false;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidAdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetProductsRequest_ImageAsset',
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
                 * Get the value of asset_type.
                 *
                 * Discriminator identifying this as an image asset. See /schemas/creative/asset-types for the registry.
                 *
                 * @return string
                 */
                public function getAssetType(): string
                {
                    

                    return $this->assetType;
                }
            

            
                /**
                 * Set the value of asset_type.
                 *
                 * @param string $assetType Discriminator identifying this as an image asset. See /schemas/creative/asset-types for the registry.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setAssetType(
                    string $assetType
                ): static {
                    if ($this->assetType === $assetType) {
                        return $this;
                    }

                    $value = $modelData['asset_type'] = $assetType;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateAssetType($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->assetType = $value;
                    $this->_rawModelDataInput['asset_type'] = $assetType;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property assetType
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processAssetType(array $modelData): void
            {
                

                $value = array_key_exists('asset_type', $modelData) ? $modelData['asset_type'] : $this->assetType;

                

                $this->assetType = $this->validateAssetType($value, $modelData);
            }

            /**
             * Execute all validators for the property assetType
             */
            protected function validateAssetType($value, array $modelData)
            {
                
                    

if (!array_key_exists('asset_type', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'asset_type',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'asset_type',
  1 => 'string',
)));
}

                
                    

if ($value !== 'image') {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidConstException($value ?? null, ...array (
  0 => 'asset_type',
  1 => 'image',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of url.
                 *
                 * URL to the image asset
                 *
                 * @return string
                 */
                public function getUrl(): string
                {
                    

                    return $this->url;
                }
            

            
                /**
                 * Set the value of url.
                 *
                 * @param string $url URL to the image asset
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setUrl(
                    string $url
                ): static {
                    if ($this->url === $url) {
                        return $this;
                    }

                    $value = $modelData['url'] = $url;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateUrl($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->url = $value;
                    $this->_rawModelDataInput['url'] = $url;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property url
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processUrl(array $modelData): void
            {
                

                $value = array_key_exists('url', $modelData) ? $modelData['url'] : $this->url;

                

                $this->url = $this->validateUrl($value, $modelData);
            }

            /**
             * Execute all validators for the property url
             */
            protected function validateUrl($value, array $modelData)
            {
                
                    

if (!array_key_exists('url', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'url',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'url',
  1 => 'string',
)));
}

                
                    

if (!\PHPModelGenerator\Format\UriFormatValidator::validate($value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\FormatException($value ?? null, ...array (
  0 => 'url',
  1 => 'uri',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of width.
                 *
                 * Width in pixels
                 *
                 * @return int
                 */
                public function getWidth(): int
                {
                    

                    return $this->width;
                }
            

            
                /**
                 * Set the value of width.
                 *
                 * @param int $width Width in pixels
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setWidth(
                    int $width
                ): static {
                    if ($this->width === $width) {
                        return $this;
                    }

                    $value = $modelData['width'] = $width;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateWidth($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->width = $value;
                    $this->_rawModelDataInput['width'] = $width;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property width
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processWidth(array $modelData): void
            {
                

                $value = array_key_exists('width', $modelData) ? $modelData['width'] : $this->width;

                

                $this->width = $this->validateWidth($value, $modelData);
            }

            /**
             * Execute all validators for the property width
             */
            protected function validateWidth($value, array $modelData)
            {
                
                    

if (!array_key_exists('width', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'width',
)));
}

                
                    

if ((!is_int($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'width',
  1 => 'int',
)));
}

                
                    

if (is_int($value) && $value < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'width',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of height.
                 *
                 * Height in pixels
                 *
                 * @return int
                 */
                public function getHeight(): int
                {
                    

                    return $this->height;
                }
            

            
                /**
                 * Set the value of height.
                 *
                 * @param int $height Height in pixels
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setHeight(
                    int $height
                ): static {
                    if ($this->height === $height) {
                        return $this;
                    }

                    $value = $modelData['height'] = $height;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateHeight($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->height = $value;
                    $this->_rawModelDataInput['height'] = $height;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property height
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processHeight(array $modelData): void
            {
                

                $value = array_key_exists('height', $modelData) ? $modelData['height'] : $this->height;

                

                $this->height = $this->validateHeight($value, $modelData);
            }

            /**
             * Execute all validators for the property height
             */
            protected function validateHeight($value, array $modelData)
            {
                
                    

if (!array_key_exists('height', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'height',
)));
}

                
                    

if ((!is_int($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'height',
  1 => 'int',
)));
}

                
                    

if (is_int($value) && $value < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'height',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of format.
                 *
                 * Image file format (jpg, png, gif, webp, etc.)
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
                 * @param string $format Image file format (jpg, png, gif, webp, etc.)
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
                 * Get the value of alt_text.
                 *
                 * Alternative text for accessibility
                 *
                 * @return string|null
                 */
                public function getAltText(): ?string
                {
                    

                    return $this->altText;
                }
            

            
                /**
                 * Set the value of alt_text.
                 *
                 * @param string $altText Alternative text for accessibility
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setAltText(
                    string $altText
                ): static {
                    if ($this->altText === $altText) {
                        return $this;
                    }

                    $value = $modelData['alt_text'] = $altText;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateAltText($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->altText = $value;
                    $this->_rawModelDataInput['alt_text'] = $altText;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property altText
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processAltText(array $modelData): void
            {
                
                    if (!array_key_exists('alt_text', $modelData) && $this->altText === null) {
                        return;
                    }
                

                $value = array_key_exists('alt_text', $modelData) ? $modelData['alt_text'] : $this->altText;

                

                $this->altText = $this->validateAltText($value, $modelData);
            }

            /**
             * Execute all validators for the property altText
             */
            protected function validateAltText($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'alt_text',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of provenance.
                 *
                 * Provenance metadata for this asset, overrides manifest-level provenance
                 *
                 * @return GetProductsRequest_Provenance|null
                 */
                public function getProvenance(): ?GetProductsRequest_Provenance
                {
                    

                    return $this->provenance;
                }
            

            
                /**
                 * Set the value of provenance.
                 *
                 * @param GetProductsRequest_Provenance $provenance Provenance metadata for this asset, overrides manifest-level provenance
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setProvenance(
                    GetProductsRequest_Provenance $provenance
                ): static {
                    if ($this->provenance === $provenance) {
                        return $this;
                    }

                    $value = $modelData['provenance'] = $provenance;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateProvenance($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->provenance = $value;
                    $this->_rawModelDataInput['provenance'] = $provenance;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property provenance
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processProvenance(array $modelData): void
            {
                
                    if (!array_key_exists('provenance', $modelData) && $this->provenance === null) {
                        return;
                    }
                

                $value = array_key_exists('provenance', $modelData) ? $modelData['provenance'] : $this->provenance;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetProductsRequest_Provenance($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'provenance',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->provenance = $this->validateProvenance($value, $modelData);
            }

            /**
             * Execute all validators for the property provenance
             */
            protected function validateProvenance($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'provenance',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsRequest_Provenance)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'provenance',
  1 => 'GetProductsRequest_Provenance',
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
    

    
        
            if (array_key_exists('asset_type', $modelData) &&
                $modelData['asset_type'] !== $this->assetType
            ) {
                

                $rollbackValues['assetType'] = $this->assetType;
                $this->processAssetType($modelData);
            }
        
    
        
            if (array_key_exists('url', $modelData) &&
                $modelData['url'] !== $this->url
            ) {
                

                $rollbackValues['url'] = $this->url;
                $this->processUrl($modelData);
            }
        
    
        
            if (array_key_exists('width', $modelData) &&
                $modelData['width'] !== $this->width
            ) {
                

                $rollbackValues['width'] = $this->width;
                $this->processWidth($modelData);
            }
        
    
        
            if (array_key_exists('height', $modelData) &&
                $modelData['height'] !== $this->height
            ) {
                

                $rollbackValues['height'] = $this->height;
                $this->processHeight($modelData);
            }
        
    
        
            if (array_key_exists('format', $modelData) &&
                $modelData['format'] !== $this->format
            ) {
                

                $rollbackValues['format'] = $this->format;
                $this->processFormat($modelData);
            }
        
    
        
            if (array_key_exists('alt_text', $modelData) &&
                $modelData['alt_text'] !== $this->altText
            ) {
                

                $rollbackValues['altText'] = $this->altText;
                $this->processAltText($modelData);
            }
        
    
        
            if (array_key_exists('provenance', $modelData) &&
                $modelData['provenance'] !== $this->provenance
            ) {
                

                $rollbackValues['provenance'] = $this->provenance;
                $this->processProvenance($modelData);
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
