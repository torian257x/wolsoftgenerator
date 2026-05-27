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
 * Class GetProductsRequest_GetProductsRequest_GetProductsRequest_CatalogFieldMapping1c7d71064e3e3b11f2301f7634885314cb7087ed95f9191ccf6cbcc321c31897
 * @package AdCP\MediaBuy 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/catalog/properties/feed_field_mappings/items/allOf/1/not/0')]

class GetProductsRequest_GetProductsRequest_GetProductsRequest_CatalogFieldMapping1c7d71064e3e3b11f2301f7634885314cb7087ed95f9191ccf6cbcc321c31897 implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/catalog/properties/feed_field_mappings/items/allOf/1/not/0/properties/catalog_field')]
        
            #[SchemaName('catalog_field')]
        
            #[Required]
        
        /** @var mixed */
        protected $catalogField;
    
        
            #[JsonPointer('/properties/catalog/properties/feed_field_mappings/items/allOf/1/not/0/properties/asset_group_id')]
        
            #[SchemaName('asset_group_id')]
        
            #[Required]
        
        /** @var mixed */
        protected $assetGroupId;
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetProductsRequest_GetProductsRequest_GetProductsRequest_CatalogFieldMapping1c7d71064e3e3b11f2301f7634885314cb7087ed95f9191ccf6cbcc321c31897 constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        

        
            
                $this->processCatalogField($rawModelDataInput);
            
        
            
                $this->processAssetGroupId($rawModelDataInput);
            
        
            
        

        
            if (count($this->_errorRegistry->getErrors())) {
                throw $this->_errorRegistry;
            }
        

        $this->_rawModelDataInput = $rawModelDataInput;

        
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
                 * Get the value of catalog_field.
                 *
                 *
                 * @return mixed
                 */
                public function getCatalogField(): mixed
                {
                    

                    return $this->catalogField;
                }
            

            
                /**
                 * Set the value of catalog_field.
                 *
                 * @param mixed $catalogField
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setCatalogField(
                    mixed $catalogField
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
                

                $value = array_key_exists('catalog_field', $modelData) ? $modelData['catalog_field'] : $this->catalogField;

                

                $this->catalogField = $this->validateCatalogField($value, $modelData);
            }

            /**
             * Execute all validators for the property catalogField
             */
            protected function validateCatalogField($value, array $modelData)
            {
                
                    

if (!array_key_exists('catalog_field', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'catalog_field',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of asset_group_id.
                 *
                 *
                 * @return mixed
                 */
                public function getAssetGroupId(): mixed
                {
                    

                    return $this->assetGroupId;
                }
            

            
                /**
                 * Set the value of asset_group_id.
                 *
                 * @param mixed $assetGroupId
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setAssetGroupId(
                    mixed $assetGroupId
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
                

                $value = array_key_exists('asset_group_id', $modelData) ? $modelData['asset_group_id'] : $this->assetGroupId;

                

                $this->assetGroupId = $this->validateAssetGroupId($value, $modelData);
            }

            /**
             * Execute all validators for the property assetGroupId
             */
            protected function validateAssetGroupId($value, array $modelData)
            {
                
                    

if (!array_key_exists('asset_group_id', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'asset_group_id',
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
        
    
        
    

    
        if (count($this->_errorRegistry->getErrors())) {
            foreach ($rollbackValues as $property => $value) {
                $this->{$property} = $value;
            }

            throw $this->_errorRegistry;
        }
    

    $this->_rawModelDataInput = array_merge($this->_rawModelDataInput, $modelData);

    
        
    
        
    
        
    

    return $this;
}





}

// @codeCoverageIgnoreEnd
