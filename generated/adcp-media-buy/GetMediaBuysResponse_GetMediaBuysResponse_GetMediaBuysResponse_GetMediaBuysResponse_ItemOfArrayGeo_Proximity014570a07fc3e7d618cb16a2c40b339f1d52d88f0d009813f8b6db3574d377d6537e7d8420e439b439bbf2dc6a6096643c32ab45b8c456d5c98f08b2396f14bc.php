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
 * Class GetMediaBuysResponse_GetMediaBuysResponse_GetMediaBuysResponse_GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339f1d52d88f0d009813f8b6db3574d377d6537e7d8420e439b439bbf2dc6a6096643c32ab45b8c456d5c98f08b2396f14bc
 * @package AdCP\MediaBuy 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/geo_proximity/items/oneOf/1/not/0/anyOf/0')]

class GetMediaBuysResponse_GetMediaBuysResponse_GetMediaBuysResponse_GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339f1d52d88f0d009813f8b6db3574d377d6537e7d8420e439b439bbf2dc6a6096643c32ab45b8c456d5c98f08b2396f14bc implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/geo_proximity/items/oneOf/1/not/0/anyOf/0/properties/travel_time')]
        
            #[SchemaName('travel_time')]
        
            #[Required]
        
        /** @var mixed */
        protected $travelTime;
    
        
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
     * GetMediaBuysResponse_GetMediaBuysResponse_GetMediaBuysResponse_GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339f1d52d88f0d009813f8b6db3574d377d6537e7d8420e439b439bbf2dc6a6096643c32ab45b8c456d5c98f08b2396f14bc constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        

        
            
                $this->processTravelTime($rawModelDataInput);
            
        
            
        

        
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
                 * Get the value of travel_time.
                 *
                 *
                 * @return mixed
                 */
                public function getTravelTime(): mixed
                {
                    

                    return $this->travelTime;
                }
            

            
                /**
                 * Set the value of travel_time.
                 *
                 * @param mixed $travelTime
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setTravelTime(
                    mixed $travelTime
                ): static {
                    if ($this->travelTime === $travelTime) {
                        return $this;
                    }

                    $value = $modelData['travel_time'] = $travelTime;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateTravelTime($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->travelTime = $value;
                    $this->_rawModelDataInput['travel_time'] = $travelTime;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property travelTime
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processTravelTime(array $modelData): void
            {
                

                $value = array_key_exists('travel_time', $modelData) ? $modelData['travel_time'] : $this->travelTime;

                

                $this->travelTime = $this->validateTravelTime($value, $modelData);
            }

            /**
             * Execute all validators for the property travelTime
             */
            protected function validateTravelTime($value, array $modelData)
            {
                
                    

if (!array_key_exists('travel_time', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'travel_time',
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

    

    
        
            if (array_key_exists('travel_time', $modelData) &&
                $modelData['travel_time'] !== $this->travelTime
            ) {
                

                $rollbackValues['travelTime'] = $this->travelTime;
                $this->processTravelTime($modelData);
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
