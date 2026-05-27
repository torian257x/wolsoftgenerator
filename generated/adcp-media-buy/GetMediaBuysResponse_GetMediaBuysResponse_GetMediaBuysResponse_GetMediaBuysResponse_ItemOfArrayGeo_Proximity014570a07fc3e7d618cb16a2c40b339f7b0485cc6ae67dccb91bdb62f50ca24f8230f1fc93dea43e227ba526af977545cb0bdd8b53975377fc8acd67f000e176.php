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
 * Class GetMediaBuysResponse_GetMediaBuysResponse_GetMediaBuysResponse_GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339f7b0485cc6ae67dccb91bdb62f50ca24f8230f1fc93dea43e227ba526af977545cb0bdd8b53975377fc8acd67f000e176
 * @package AdCP\MediaBuy 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/geo_proximity/items/oneOf/0/not/0/anyOf/0')]

class GetMediaBuysResponse_GetMediaBuysResponse_GetMediaBuysResponse_GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339f7b0485cc6ae67dccb91bdb62f50ca24f8230f1fc93dea43e227ba526af977545cb0bdd8b53975377fc8acd67f000e176 implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/geo_proximity/items/oneOf/0/not/0/anyOf/0/properties/radius')]
        
            #[SchemaName('radius')]
        
            #[Required]
        
        /** @var mixed */
        protected $radius;
    
        
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
     * GetMediaBuysResponse_GetMediaBuysResponse_GetMediaBuysResponse_GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339f7b0485cc6ae67dccb91bdb62f50ca24f8230f1fc93dea43e227ba526af977545cb0bdd8b53975377fc8acd67f000e176 constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        

        
            
                $this->processRadius($rawModelDataInput);
            
        
            
        

        
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
                 * Get the value of radius.
                 *
                 *
                 * @return mixed
                 */
                public function getRadius(): mixed
                {
                    

                    return $this->radius;
                }
            

            
                /**
                 * Set the value of radius.
                 *
                 * @param mixed $radius
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setRadius(
                    mixed $radius
                ): static {
                    if ($this->radius === $radius) {
                        return $this;
                    }

                    $value = $modelData['radius'] = $radius;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateRadius($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->radius = $value;
                    $this->_rawModelDataInput['radius'] = $radius;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property radius
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processRadius(array $modelData): void
            {
                

                $value = array_key_exists('radius', $modelData) ? $modelData['radius'] : $this->radius;

                

                $this->radius = $this->validateRadius($value, $modelData);
            }

            /**
             * Execute all validators for the property radius
             */
            protected function validateRadius($value, array $modelData)
            {
                
                    

if (!array_key_exists('radius', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'radius',
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

    

    
        
            if (array_key_exists('radius', $modelData) &&
                $modelData['radius'] !== $this->radius
            ) {
                

                $rollbackValues['radius'] = $this->radius;
                $this->processRadius($modelData);
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
