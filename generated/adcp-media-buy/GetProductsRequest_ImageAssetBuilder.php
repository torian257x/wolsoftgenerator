<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Builder class for GetProductsRequest_ImageAsset
 */
class GetProductsRequest_ImageAssetBuilder implements BuilderInterface
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
     * Set up a new instance of GetProductsRequest_ImageAsset with fully validated properties
     */
    public function validate(): GetProductsRequest_ImageAsset
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetProductsRequest_ImageAsset($this->_rawModelDataInput);
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
             * Get the value of asset_type.
             *
             * Discriminator identifying this as an image asset. See /schemas/creative/asset-types for the registry.
             *
             * @return string|null
             */
            public function getAssetType(): ?string
            {
                return $this->_rawModelDataInput['asset_type'] ?? null;
            }

            /**
             * Set the value of asset_type.
             *
             * @param string $assetType Discriminator identifying this as an image asset. See /schemas/creative/asset-types for the registry.
             *
             * {@link GetProductsRequest_ImageAsset::processAssetType}
             * 
             *
             * @return static
             */
            public function setAssetType(
                string $assetType
            ): static {
                if (array_key_exists('asset_type', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['asset_type'] === $assetType
                ) {
                    return $this;
                }

                $value = $modelData['asset_type'] = $assetType;

                

                

                $this->_rawModelDataInput['asset_type'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of url.
             *
             * URL to the image asset
             *
             * @return string|null
             */
            public function getUrl(): ?string
            {
                return $this->_rawModelDataInput['url'] ?? null;
            }

            /**
             * Set the value of url.
             *
             * @param string $url URL to the image asset
             *
             * {@link GetProductsRequest_ImageAsset::processUrl}
             * 
             *
             * @return static
             */
            public function setUrl(
                string $url
            ): static {
                if (array_key_exists('url', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['url'] === $url
                ) {
                    return $this;
                }

                $value = $modelData['url'] = $url;

                

                

                $this->_rawModelDataInput['url'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of width.
             *
             * Width in pixels
             *
             * @return int|null
             */
            public function getWidth(): ?int
            {
                return $this->_rawModelDataInput['width'] ?? null;
            }

            /**
             * Set the value of width.
             *
             * @param int $width Width in pixels
             *
             * {@link GetProductsRequest_ImageAsset::processWidth}
             * 
             *
             * @return static
             */
            public function setWidth(
                int $width
            ): static {
                if (array_key_exists('width', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['width'] === $width
                ) {
                    return $this;
                }

                $value = $modelData['width'] = $width;

                

                

                $this->_rawModelDataInput['width'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of height.
             *
             * Height in pixels
             *
             * @return int|null
             */
            public function getHeight(): ?int
            {
                return $this->_rawModelDataInput['height'] ?? null;
            }

            /**
             * Set the value of height.
             *
             * @param int $height Height in pixels
             *
             * {@link GetProductsRequest_ImageAsset::processHeight}
             * 
             *
             * @return static
             */
            public function setHeight(
                int $height
            ): static {
                if (array_key_exists('height', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['height'] === $height
                ) {
                    return $this;
                }

                $value = $modelData['height'] = $height;

                

                

                $this->_rawModelDataInput['height'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['format'] ?? null;
            }

            /**
             * Set the value of format.
             *
             * @param string $format Image file format (jpg, png, gif, webp, etc.)
             *
             * {@link GetProductsRequest_ImageAsset::processFormat}
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
             * Get the value of alt_text.
             *
             * Alternative text for accessibility
             *
             * @return string|null
             */
            public function getAltText(): ?string
            {
                return $this->_rawModelDataInput['alt_text'] ?? null;
            }

            /**
             * Set the value of alt_text.
             *
             * @param string $altText Alternative text for accessibility
             *
             * {@link GetProductsRequest_ImageAsset::processAltText}
             * 
             *
             * @return static
             */
            public function setAltText(
                string $altText
            ): static {
                if (array_key_exists('alt_text', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['alt_text'] === $altText
                ) {
                    return $this;
                }

                $value = $modelData['alt_text'] = $altText;

                

                

                $this->_rawModelDataInput['alt_text'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of provenance.
             *
             * Provenance metadata for this asset, overrides manifest-level provenance
             *
             * @return GetProductsRequest_Provenance|GetProductsRequest_ProvenanceBuilder|array|null
             */
            public function getProvenance(): mixed
            {
                return $this->_rawModelDataInput['provenance'] ?? null;
            }

            /**
             * Set the value of provenance.
             *
             * @param GetProductsRequest_Provenance|GetProductsRequest_ProvenanceBuilder|array $provenance Provenance metadata for this asset, overrides manifest-level provenance
             *
             * {@link GetProductsRequest_ImageAsset::processProvenance}
             * 
             *
             * @return static
             */
            public function setProvenance(
                mixed $provenance
            ): static {
                if (array_key_exists('provenance', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['provenance'] === $provenance
                ) {
                    return $this;
                }

                $value = $modelData['provenance'] = $provenance;

                

                

                $this->_rawModelDataInput['provenance'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
