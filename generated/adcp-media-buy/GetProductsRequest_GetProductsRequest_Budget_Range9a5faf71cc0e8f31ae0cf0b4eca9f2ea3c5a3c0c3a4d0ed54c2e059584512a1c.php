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
 * Class GetProductsRequest_GetProductsRequest_Budget_Range9a5faf71cc0e8f31ae0cf0b4eca9f2ea3c5a3c0c3a4d0ed54c2e059584512a1c
 * @package AdCP\MediaBuy 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/filters/properties/budget_range/anyOf/0')]

class GetProductsRequest_GetProductsRequest_Budget_Range9a5faf71cc0e8f31ae0cf0b4eca9f2ea3c5a3c0c3a4d0ed54c2e059584512a1c implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/filters/properties/budget_range/anyOf/0/properties/min')]
        
            #[SchemaName('min')]
        
            #[Required]
        
        /** @var mixed */
        protected $min;
    
        
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
     * GetProductsRequest_GetProductsRequest_Budget_Range9a5faf71cc0e8f31ae0cf0b4eca9f2ea3c5a3c0c3a4d0ed54c2e059584512a1c constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        

        
            
                $this->processMin($rawModelDataInput);
            
        
            
        

        
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
                 * Get the value of min.
                 *
                 *
                 * @return mixed
                 */
                public function getMin(): mixed
                {
                    

                    return $this->min;
                }
            

            
                /**
                 * Set the value of min.
                 *
                 * @param mixed $min
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setMin(
                    mixed $min
                ): static {
                    if ($this->min === $min) {
                        return $this;
                    }

                    $value = $modelData['min'] = $min;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateMin($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->min = $value;
                    $this->_rawModelDataInput['min'] = $min;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property min
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processMin(array $modelData): void
            {
                

                $value = array_key_exists('min', $modelData) ? $modelData['min'] : $this->min;

                

                $this->min = $this->validateMin($value, $modelData);
            }

            /**
             * Execute all validators for the property min
             */
            protected function validateMin($value, array $modelData)
            {
                
                    

if (!array_key_exists('min', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'min',
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

    

    
        
            if (array_key_exists('min', $modelData) &&
                $modelData['min'] !== $this->min
            ) {
                

                $rollbackValues['min'] = $this->min;
                $this->processMin($modelData);
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
