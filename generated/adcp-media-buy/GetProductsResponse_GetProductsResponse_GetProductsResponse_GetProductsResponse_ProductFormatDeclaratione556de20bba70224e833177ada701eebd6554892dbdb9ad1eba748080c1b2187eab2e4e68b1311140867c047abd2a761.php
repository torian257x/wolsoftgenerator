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
 * Class GetProductsResponse_GetProductsResponse_GetProductsResponse_GetProductsResponse_ProductFormatDeclaratione556de20bba70224e833177ada701eebd6554892dbdb9ad1eba748080c1b2187eab2e4e68b1311140867c047abd2a761
 * @package AdCP\MediaBuy 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/products/items/properties/format_options/items/allOf/0/then/anyOf/1')]

class GetProductsResponse_GetProductsResponse_GetProductsResponse_GetProductsResponse_ProductFormatDeclaratione556de20bba70224e833177ada701eebd6554892dbdb9ad1eba748080c1b2187eab2e4e68b1311140867c047abd2a761 implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/products/items/properties/format_options/items/allOf/0/then/anyOf/1/properties/v1_format_ref')]
        
            #[SchemaName('v1_format_ref')]
        
            #[Required]
        
        /** @var mixed */
        protected $v1FormatRef;
    
        
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
     * GetProductsResponse_GetProductsResponse_GetProductsResponse_GetProductsResponse_ProductFormatDeclaratione556de20bba70224e833177ada701eebd6554892dbdb9ad1eba748080c1b2187eab2e4e68b1311140867c047abd2a761 constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        

        
            
                $this->processV1FormatRef($rawModelDataInput);
            
        
            
        

        
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
                 * Get the value of v1_format_ref.
                 *
                 *
                 * @return mixed
                 */
                public function getV1FormatRef(): mixed
                {
                    

                    return $this->v1FormatRef;
                }
            

            
                /**
                 * Set the value of v1_format_ref.
                 *
                 * @param mixed $v1FormatRef
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setV1FormatRef(
                    mixed $v1FormatRef
                ): static {
                    if ($this->v1FormatRef === $v1FormatRef) {
                        return $this;
                    }

                    $value = $modelData['v1_format_ref'] = $v1FormatRef;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateV1FormatRef($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->v1FormatRef = $value;
                    $this->_rawModelDataInput['v1_format_ref'] = $v1FormatRef;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property v1FormatRef
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processV1FormatRef(array $modelData): void
            {
                

                $value = array_key_exists('v1_format_ref', $modelData) ? $modelData['v1_format_ref'] : $this->v1FormatRef;

                

                $this->v1FormatRef = $this->validateV1FormatRef($value, $modelData);
            }

            /**
             * Execute all validators for the property v1FormatRef
             */
            protected function validateV1FormatRef($value, array $modelData)
            {
                
                    

if (!array_key_exists('v1_format_ref', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'v1_format_ref',
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

    

    
        
            if (array_key_exists('v1_format_ref', $modelData) &&
                $modelData['v1_format_ref'] !== $this->v1FormatRef
            ) {
                

                $rollbackValues['v1FormatRef'] = $this->v1FormatRef;
                $this->processV1FormatRef($modelData);
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
