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
 * Class GetProductsRequest_GetProductsRequest_Budget_Range9a5faf71cc0e8f31ae0cf0b4eca9f2ea82baf901b7cd78e9727f7514fc8227b9
 * @package AdCP\MediaBuy 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/filters/properties/budget_range/anyOf/1')]

class GetProductsRequest_GetProductsRequest_Budget_Range9a5faf71cc0e8f31ae0cf0b4eca9f2ea82baf901b7cd78e9727f7514fc8227b9 implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/filters/properties/budget_range/anyOf/1/properties/max')]
        
            #[SchemaName('max')]
        
            #[Required]
        
        /** @var mixed */
        protected $max;
    
        
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
     * GetProductsRequest_GetProductsRequest_Budget_Range9a5faf71cc0e8f31ae0cf0b4eca9f2ea82baf901b7cd78e9727f7514fc8227b9 constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        

        
            
                $this->processMax($rawModelDataInput);
            
        
            
        

        
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
                 * Get the value of max.
                 *
                 *
                 * @return mixed
                 */
                public function getMax(): mixed
                {
                    

                    return $this->max;
                }
            

            
                /**
                 * Set the value of max.
                 *
                 * @param mixed $max
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setMax(
                    mixed $max
                ): static {
                    if ($this->max === $max) {
                        return $this;
                    }

                    $value = $modelData['max'] = $max;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateMax($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->max = $value;
                    $this->_rawModelDataInput['max'] = $max;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property max
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processMax(array $modelData): void
            {
                

                $value = array_key_exists('max', $modelData) ? $modelData['max'] : $this->max;

                

                $this->max = $this->validateMax($value, $modelData);
            }

            /**
             * Execute all validators for the property max
             */
            protected function validateMax($value, array $modelData)
            {
                
                    

if (!array_key_exists('max', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'max',
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

    

    
        
            if (array_key_exists('max', $modelData) &&
                $modelData['max'] !== $this->max
            ) {
                

                $rollbackValues['max'] = $this->max;
                $this->processMax($modelData);
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
