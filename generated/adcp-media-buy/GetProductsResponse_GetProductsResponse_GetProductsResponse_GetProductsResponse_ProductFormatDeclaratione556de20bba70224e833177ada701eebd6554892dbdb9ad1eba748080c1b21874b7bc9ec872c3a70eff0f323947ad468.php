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
 * Class GetProductsResponse_GetProductsResponse_GetProductsResponse_GetProductsResponse_ProductFormatDeclaratione556de20bba70224e833177ada701eebd6554892dbdb9ad1eba748080c1b21874b7bc9ec872c3a70eff0f323947ad468
 * @package AdCP\MediaBuy 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/products/items/properties/format_options/items/allOf/0/then/anyOf/0')]

class GetProductsResponse_GetProductsResponse_GetProductsResponse_GetProductsResponse_ProductFormatDeclaratione556de20bba70224e833177ada701eebd6554892dbdb9ad1eba748080c1b21874b7bc9ec872c3a70eff0f323947ad468 implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/products/items/properties/format_options/items/allOf/0/then/anyOf/0/properties/canonical_formats_only')]
        
            #[SchemaName('canonical_formats_only')]
        
            #[Required]
        
        /** @var bool */
        protected $canonicalFormatsOnly;
    
        
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
     * GetProductsResponse_GetProductsResponse_GetProductsResponse_GetProductsResponse_ProductFormatDeclaratione556de20bba70224e833177ada701eebd6554892dbdb9ad1eba748080c1b21874b7bc9ec872c3a70eff0f323947ad468 constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        

        
            
                $this->processCanonicalFormatsOnly($rawModelDataInput);
            
        
            
        

        
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
                 * Get the value of canonical_formats_only.
                 *
                 *
                 * @return bool
                 */
                public function getCanonicalFormatsOnly(): bool
                {
                    

                    return $this->canonicalFormatsOnly;
                }
            

            
                /**
                 * Set the value of canonical_formats_only.
                 *
                 * @param bool $canonicalFormatsOnly
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setCanonicalFormatsOnly(
                    bool $canonicalFormatsOnly
                ): static {
                    if ($this->canonicalFormatsOnly === $canonicalFormatsOnly) {
                        return $this;
                    }

                    $value = $modelData['canonical_formats_only'] = $canonicalFormatsOnly;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateCanonicalFormatsOnly($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->canonicalFormatsOnly = $value;
                    $this->_rawModelDataInput['canonical_formats_only'] = $canonicalFormatsOnly;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property canonicalFormatsOnly
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processCanonicalFormatsOnly(array $modelData): void
            {
                

                $value = array_key_exists('canonical_formats_only', $modelData) ? $modelData['canonical_formats_only'] : $this->canonicalFormatsOnly;

                

                $this->canonicalFormatsOnly = $this->validateCanonicalFormatsOnly($value, $modelData);
            }

            /**
             * Execute all validators for the property canonicalFormatsOnly
             */
            protected function validateCanonicalFormatsOnly($value, array $modelData)
            {
                
                    

if (!array_key_exists('canonical_formats_only', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'canonical_formats_only',
)));
}

                
                    

if ($value !== true) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidConstException($value ?? null, ...array (
  0 => 'canonical_formats_only',
  1 => true,
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

    

    
        
            if (array_key_exists('canonical_formats_only', $modelData) &&
                $modelData['canonical_formats_only'] !== $this->canonicalFormatsOnly
            ) {
                

                $rollbackValues['canonicalFormatsOnly'] = $this->canonicalFormatsOnly;
                $this->processCanonicalFormatsOnly($modelData);
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
