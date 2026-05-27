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
 * Class GetProductsResponse_GetProductsResponse_GetProductsResponse_ProductFormatDeclaratione556de20bba70224e833177ada701eeb1f14d3803cf866320ed7cc03ab5d30ef
 * @package AdCP\MediaBuy 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/products/items/properties/format_options/items/allOf/0/if')]

class GetProductsResponse_GetProductsResponse_GetProductsResponse_ProductFormatDeclaratione556de20bba70224e833177ada701eeb1f14d3803cf866320ed7cc03ab5d30ef implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/products/items/properties/format_options/items/allOf/0/if/properties/format_kind')]
        
            #[SchemaName('format_kind')]
        
            #[Required]
        
        /** @var string */
        protected $formatKind;
    
        
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
     * GetProductsResponse_GetProductsResponse_GetProductsResponse_ProductFormatDeclaratione556de20bba70224e833177ada701eeb1f14d3803cf866320ed7cc03ab5d30ef constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        

        
            
                $this->processFormatKind($rawModelDataInput);
            
        
            
        

        
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
                 * Get the value of format_kind.
                 *
                 *
                 * @return string
                 */
                public function getFormatKind(): string
                {
                    

                    return $this->formatKind;
                }
            

            
                /**
                 * Set the value of format_kind.
                 *
                 * @param string $formatKind
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setFormatKind(
                    string $formatKind
                ): static {
                    if ($this->formatKind === $formatKind) {
                        return $this;
                    }

                    $value = $modelData['format_kind'] = $formatKind;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateFormatKind($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->formatKind = $value;
                    $this->_rawModelDataInput['format_kind'] = $formatKind;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property formatKind
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processFormatKind(array $modelData): void
            {
                

                $value = array_key_exists('format_kind', $modelData) ? $modelData['format_kind'] : $this->formatKind;

                

                $this->formatKind = $this->validateFormatKind($value, $modelData);
            }

            /**
             * Execute all validators for the property formatKind
             */
            protected function validateFormatKind($value, array $modelData)
            {
                
                    

if (!array_key_exists('format_kind', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'format_kind',
)));
}

                
                    

if ($value !== 'custom') {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidConstException($value ?? null, ...array (
  0 => 'format_kind',
  1 => 'custom',
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

    

    
        
            if (array_key_exists('format_kind', $modelData) &&
                $modelData['format_kind'] !== $this->formatKind
            ) {
                

                $rollbackValues['formatKind'] = $this->formatKind;
                $this->processFormatKind($modelData);
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
