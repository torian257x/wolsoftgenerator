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
 * Class GetMediaBuysResponse_GetMediaBuysResponse_FrequencyCap7a3c0f76eb3a45d5b524c2bdc27d8326
 * @package AdCP\MediaBuy 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/frequency_cap/anyOf/2')]

class GetMediaBuysResponse_GetMediaBuysResponse_FrequencyCap7a3c0f76eb3a45d5b524c2bdc27d8326 implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/frequency_cap/anyOf/2/properties/max_impressions')]
        
            #[SchemaName('max_impressions')]
        
            #[Required]
        
        /** @var mixed */
        protected $maxImpressions;
    
        
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
     * GetMediaBuysResponse_GetMediaBuysResponse_FrequencyCap7a3c0f76eb3a45d5b524c2bdc27d8326 constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        

        
            
                $this->processMaxImpressions($rawModelDataInput);
            
        
            
        

        
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
                 * Get the value of max_impressions.
                 *
                 *
                 * @return mixed
                 */
                public function getMaxImpressions(): mixed
                {
                    

                    return $this->maxImpressions;
                }
            

            
                /**
                 * Set the value of max_impressions.
                 *
                 * @param mixed $maxImpressions
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setMaxImpressions(
                    mixed $maxImpressions
                ): static {
                    if ($this->maxImpressions === $maxImpressions) {
                        return $this;
                    }

                    $value = $modelData['max_impressions'] = $maxImpressions;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateMaxImpressions($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->maxImpressions = $value;
                    $this->_rawModelDataInput['max_impressions'] = $maxImpressions;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property maxImpressions
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processMaxImpressions(array $modelData): void
            {
                

                $value = array_key_exists('max_impressions', $modelData) ? $modelData['max_impressions'] : $this->maxImpressions;

                

                $this->maxImpressions = $this->validateMaxImpressions($value, $modelData);
            }

            /**
             * Execute all validators for the property maxImpressions
             */
            protected function validateMaxImpressions($value, array $modelData)
            {
                
                    

if (!array_key_exists('max_impressions', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'max_impressions',
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

    

    
        
            if (array_key_exists('max_impressions', $modelData) &&
                $modelData['max_impressions'] !== $this->maxImpressions
            ) {
                

                $rollbackValues['maxImpressions'] = $this->maxImpressions;
                $this->processMaxImpressions($modelData);
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
