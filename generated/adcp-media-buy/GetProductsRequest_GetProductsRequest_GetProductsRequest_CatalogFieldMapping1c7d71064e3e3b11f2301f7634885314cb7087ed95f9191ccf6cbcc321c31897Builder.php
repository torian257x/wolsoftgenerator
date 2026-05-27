<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Builder class for GetProductsRequest_GetProductsRequest_GetProductsRequest_CatalogFieldMapping1c7d71064e3e3b11f2301f7634885314cb7087ed95f9191ccf6cbcc321c31897
 */
class GetProductsRequest_GetProductsRequest_GetProductsRequest_CatalogFieldMapping1c7d71064e3e3b11f2301f7634885314cb7087ed95f9191ccf6cbcc321c31897Builder implements BuilderInterface
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
     * Set up a new instance of GetProductsRequest_GetProductsRequest_GetProductsRequest_CatalogFieldMapping1c7d71064e3e3b11f2301f7634885314cb7087ed95f9191ccf6cbcc321c31897 with fully validated properties
     */
    public function validate(): GetProductsRequest_GetProductsRequest_GetProductsRequest_CatalogFieldMapping1c7d71064e3e3b11f2301f7634885314cb7087ed95f9191ccf6cbcc321c31897
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetProductsRequest_GetProductsRequest_GetProductsRequest_CatalogFieldMapping1c7d71064e3e3b11f2301f7634885314cb7087ed95f9191ccf6cbcc321c31897($this->_rawModelDataInput);
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
             * Get the value of catalog_field.
             *
             * 
             *
             * @return mixed
             */
            public function getCatalogField(): mixed
            {
                return $this->_rawModelDataInput['catalog_field'] ?? null;
            }

            /**
             * Set the value of catalog_field.
             *
             * @param mixed $catalogField
             *
             * {@link GetProductsRequest_GetProductsRequest_GetProductsRequest_CatalogFieldMapping1c7d71064e3e3b11f2301f7634885314cb7087ed95f9191ccf6cbcc321c31897::processCatalogField}
             * 
             *
             * @return static
             */
            public function setCatalogField(
                mixed $catalogField
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
             * 
             *
             * @return mixed
             */
            public function getAssetGroupId(): mixed
            {
                return $this->_rawModelDataInput['asset_group_id'] ?? null;
            }

            /**
             * Set the value of asset_group_id.
             *
             * @param mixed $assetGroupId
             *
             * {@link GetProductsRequest_GetProductsRequest_GetProductsRequest_CatalogFieldMapping1c7d71064e3e3b11f2301f7634885314cb7087ed95f9191ccf6cbcc321c31897::processAssetGroupId}
             * 
             *
             * @return static
             */
            public function setAssetGroupId(
                mixed $assetGroupId
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
        
    
}

// @codeCoverageIgnoreEnd
