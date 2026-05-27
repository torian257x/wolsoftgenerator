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
 * Class GetProductsResponse_GetProductsResponse_GetProductsResponse_ItemOfArrayPublisher_Properties356f954b5f22f2cf551a8fa9ab8cc127dc6e656ecaff6f5672cab18055a60228e5df19e5d3b624c74a2c4a83269a40ed
 * @package AdCP\MediaBuy 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/products/items/properties/publisher_properties/items/allOf/0/oneOf/0/allOf/1/anyOf/1')]

class GetProductsResponse_GetProductsResponse_GetProductsResponse_ItemOfArrayPublisher_Properties356f954b5f22f2cf551a8fa9ab8cc127dc6e656ecaff6f5672cab18055a60228e5df19e5d3b624c74a2c4a83269a40ed implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/products/items/properties/publisher_properties/items/allOf/0/oneOf/0/allOf/1/anyOf/1/properties/publisher_domains')]
        
            #[SchemaName('publisher_domains')]
        
            #[Required]
        
        /** @var mixed */
        protected $publisherDomains;
    
        
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
     * GetProductsResponse_GetProductsResponse_GetProductsResponse_ItemOfArrayPublisher_Properties356f954b5f22f2cf551a8fa9ab8cc127dc6e656ecaff6f5672cab18055a60228e5df19e5d3b624c74a2c4a83269a40ed constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        

        
            
                $this->processPublisherDomains($rawModelDataInput);
            
        
            
        

        
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
                 * Get the value of publisher_domains.
                 *
                 *
                 * @return mixed
                 */
                public function getPublisherDomains(): mixed
                {
                    

                    return $this->publisherDomains;
                }
            

            
                /**
                 * Set the value of publisher_domains.
                 *
                 * @param mixed $publisherDomains
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setPublisherDomains(
                    mixed $publisherDomains
                ): static {
                    if ($this->publisherDomains === $publisherDomains) {
                        return $this;
                    }

                    $value = $modelData['publisher_domains'] = $publisherDomains;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validatePublisherDomains($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->publisherDomains = $value;
                    $this->_rawModelDataInput['publisher_domains'] = $publisherDomains;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property publisherDomains
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processPublisherDomains(array $modelData): void
            {
                

                $value = array_key_exists('publisher_domains', $modelData) ? $modelData['publisher_domains'] : $this->publisherDomains;

                

                $this->publisherDomains = $this->validatePublisherDomains($value, $modelData);
            }

            /**
             * Execute all validators for the property publisherDomains
             */
            protected function validatePublisherDomains($value, array $modelData)
            {
                
                    

if (!array_key_exists('publisher_domains', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'publisher_domains',
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

    

    
        
            if (array_key_exists('publisher_domains', $modelData) &&
                $modelData['publisher_domains'] !== $this->publisherDomains
            ) {
                

                $rollbackValues['publisherDomains'] = $this->publisherDomains;
                $this->processPublisherDomains($modelData);
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
