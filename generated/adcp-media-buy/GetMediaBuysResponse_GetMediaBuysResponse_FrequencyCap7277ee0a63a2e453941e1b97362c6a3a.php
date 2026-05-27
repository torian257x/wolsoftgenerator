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
 * Class GetMediaBuysResponse_GetMediaBuysResponse_FrequencyCap7277ee0a63a2e453941e1b97362c6a3a
 * @package AdCP\MediaBuy 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/frequency_cap/anyOf/1')]

class GetMediaBuysResponse_GetMediaBuysResponse_FrequencyCap7277ee0a63a2e453941e1b97362c6a3a implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/frequency_cap/anyOf/1/properties/suppress_minutes')]
        
            #[SchemaName('suppress_minutes')]
        
            #[Required]
        
        /** @var mixed */
        protected $suppressMinutes;
    
        
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
     * GetMediaBuysResponse_GetMediaBuysResponse_FrequencyCap7277ee0a63a2e453941e1b97362c6a3a constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        

        
            
                $this->processSuppressMinutes($rawModelDataInput);
            
        
            
        

        
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
                 * Get the value of suppress_minutes.
                 *
                 *
                 * @return mixed
                 */
                public function getSuppressMinutes(): mixed
                {
                    

                    return $this->suppressMinutes;
                }
            

            
                /**
                 * Set the value of suppress_minutes.
                 *
                 * @param mixed $suppressMinutes
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setSuppressMinutes(
                    mixed $suppressMinutes
                ): static {
                    if ($this->suppressMinutes === $suppressMinutes) {
                        return $this;
                    }

                    $value = $modelData['suppress_minutes'] = $suppressMinutes;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateSuppressMinutes($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->suppressMinutes = $value;
                    $this->_rawModelDataInput['suppress_minutes'] = $suppressMinutes;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property suppressMinutes
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processSuppressMinutes(array $modelData): void
            {
                

                $value = array_key_exists('suppress_minutes', $modelData) ? $modelData['suppress_minutes'] : $this->suppressMinutes;

                

                $this->suppressMinutes = $this->validateSuppressMinutes($value, $modelData);
            }

            /**
             * Execute all validators for the property suppressMinutes
             */
            protected function validateSuppressMinutes($value, array $modelData)
            {
                
                    

if (!array_key_exists('suppress_minutes', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'suppress_minutes',
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

    

    
        
            if (array_key_exists('suppress_minutes', $modelData) &&
                $modelData['suppress_minutes'] !== $this->suppressMinutes
            ) {
                

                $rollbackValues['suppressMinutes'] = $this->suppressMinutes;
                $this->processSuppressMinutes($modelData);
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
