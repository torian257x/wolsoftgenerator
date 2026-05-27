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
 * Class GetMediaBuysResponse_Address0a7b3632e3bb5fc1c86c7e16697775ea
 * @package AdCP\MediaBuy 
 *
 * Postal address for invoicing and legal correspondence
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/media_buys/items/properties/account/properties/billing_entity/properties/address')]

class GetMediaBuysResponse_Address0a7b3632e3bb5fc1c86c7e16697775ea implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/billing_entity/properties/address/properties/street')]
        
            #[SchemaName('street')]
        
            #[Required]
        
        /** @var string Street address including building number */
        protected $street;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/billing_entity/properties/address/properties/city')]
        
            #[SchemaName('city')]
        
            #[Required]
        
        /** @var string */
        protected $city;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/billing_entity/properties/address/properties/postal_code')]
        
            #[SchemaName('postal_code')]
        
            #[Required]
        
        /** @var string */
        protected $postalCode;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/billing_entity/properties/address/properties/region')]
        
            #[SchemaName('region')]
        
        /** @var string|null State, province, or region */
        protected $region;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/billing_entity/properties/address/properties/country')]
        
            #[SchemaName('country')]
        
            #[Required]
        
        /** @var string ISO 3166-1 alpha-2 country code */
        protected $country;
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  3 => 'region',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetMediaBuysResponse_Address0a7b3632e3bb5fc1c86c7e16697775ea constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processStreet($rawModelDataInput);
            
        
            
                $this->processCity($rawModelDataInput);
            
        
            
                $this->processPostalCode($rawModelDataInput);
            
        
            
                $this->processRegion($rawModelDataInput);
            
        
            
                $this->processCountry($rawModelDataInput);
            
        
            
        

        
            if (count($this->_errorRegistry->getErrors())) {
                throw $this->_errorRegistry;
            }
        

        $this->_rawModelDataInput = $rawModelDataInput;

        
    }

    
        protected function executeBaseValidators(array &$modelData): void
        {
            $value = &$modelData;

            
                

if ($additionalProperties =  (static function () use ($modelData): array {
    $additionalProperties = array_diff(array_keys($modelData), array (
   'street',
   'city',
   'postal_code',
   'region',
   'country',
));

    

    return $additionalProperties;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse_Address0a7b3632e3bb5fc1c86c7e16697775ea',
  1 => $additionalProperties,
)));
}

            

            
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
                 * Get the value of street.
                 *
                 * Street address including building number
                 *
                 * @return string
                 */
                public function getStreet(): string
                {
                    

                    return $this->street;
                }
            

            
                /**
                 * Set the value of street.
                 *
                 * @param string $street Street address including building number
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setStreet(
                    string $street
                ): static {
                    if ($this->street === $street) {
                        return $this;
                    }

                    $value = $modelData['street'] = $street;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateStreet($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->street = $value;
                    $this->_rawModelDataInput['street'] = $street;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property street
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processStreet(array $modelData): void
            {
                

                $value = array_key_exists('street', $modelData) ? $modelData['street'] : $this->street;

                

                $this->street = $this->validateStreet($value, $modelData);
            }

            /**
             * Execute all validators for the property street
             */
            protected function validateStreet($value, array $modelData)
            {
                
                    

if (!array_key_exists('street', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'street',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'street',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && mb_strlen($value) > 200) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\MaxLengthException($value ?? null, ...array (
  0 => 'street',
  1 => 200,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of city.
                 *
                 *
                 * @return string
                 */
                public function getCity(): string
                {
                    

                    return $this->city;
                }
            

            
                /**
                 * Set the value of city.
                 *
                 * @param string $city
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setCity(
                    string $city
                ): static {
                    if ($this->city === $city) {
                        return $this;
                    }

                    $value = $modelData['city'] = $city;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateCity($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->city = $value;
                    $this->_rawModelDataInput['city'] = $city;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property city
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processCity(array $modelData): void
            {
                

                $value = array_key_exists('city', $modelData) ? $modelData['city'] : $this->city;

                

                $this->city = $this->validateCity($value, $modelData);
            }

            /**
             * Execute all validators for the property city
             */
            protected function validateCity($value, array $modelData)
            {
                
                    

if (!array_key_exists('city', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'city',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'city',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && mb_strlen($value) > 100) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\MaxLengthException($value ?? null, ...array (
  0 => 'city',
  1 => 100,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of postal_code.
                 *
                 *
                 * @return string
                 */
                public function getPostalCode(): string
                {
                    

                    return $this->postalCode;
                }
            

            
                /**
                 * Set the value of postal_code.
                 *
                 * @param string $postalCode
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setPostalCode(
                    string $postalCode
                ): static {
                    if ($this->postalCode === $postalCode) {
                        return $this;
                    }

                    $value = $modelData['postal_code'] = $postalCode;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validatePostalCode($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->postalCode = $value;
                    $this->_rawModelDataInput['postal_code'] = $postalCode;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property postalCode
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processPostalCode(array $modelData): void
            {
                

                $value = array_key_exists('postal_code', $modelData) ? $modelData['postal_code'] : $this->postalCode;

                

                $this->postalCode = $this->validatePostalCode($value, $modelData);
            }

            /**
             * Execute all validators for the property postalCode
             */
            protected function validatePostalCode($value, array $modelData)
            {
                
                    

if (!array_key_exists('postal_code', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'postal_code',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'postal_code',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && mb_strlen($value) > 20) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\MaxLengthException($value ?? null, ...array (
  0 => 'postal_code',
  1 => 20,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of region.
                 *
                 * State, province, or region
                 *
                 * @return string|null
                 */
                public function getRegion(): ?string
                {
                    

                    return $this->region;
                }
            

            
                /**
                 * Set the value of region.
                 *
                 * @param string $region State, province, or region
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setRegion(
                    string $region
                ): static {
                    if ($this->region === $region) {
                        return $this;
                    }

                    $value = $modelData['region'] = $region;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateRegion($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->region = $value;
                    $this->_rawModelDataInput['region'] = $region;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property region
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processRegion(array $modelData): void
            {
                
                    if (!array_key_exists('region', $modelData) && $this->region === null) {
                        return;
                    }
                

                $value = array_key_exists('region', $modelData) ? $modelData['region'] : $this->region;

                

                $this->region = $this->validateRegion($value, $modelData);
            }

            /**
             * Execute all validators for the property region
             */
            protected function validateRegion($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'region',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && mb_strlen($value) > 100) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\MaxLengthException($value ?? null, ...array (
  0 => 'region',
  1 => 100,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of country.
                 *
                 * ISO 3166-1 alpha-2 country code
                 *
                 * @return string
                 */
                public function getCountry(): string
                {
                    

                    return $this->country;
                }
            

            
                /**
                 * Set the value of country.
                 *
                 * @param string $country ISO 3166-1 alpha-2 country code
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setCountry(
                    string $country
                ): static {
                    if ($this->country === $country) {
                        return $this;
                    }

                    $value = $modelData['country'] = $country;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateCountry($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->country = $value;
                    $this->_rawModelDataInput['country'] = $country;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property country
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processCountry(array $modelData): void
            {
                

                $value = array_key_exists('country', $modelData) ? $modelData['country'] : $this->country;

                

                $this->country = $this->validateCountry($value, $modelData);
            }

            /**
             * Execute all validators for the property country
             */
            protected function validateCountry($value, array $modelData)
            {
                
                    

if (!array_key_exists('country', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'country',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'country',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && !preg_match(base64_decode('L15bQS1aXXsyfSQv'), $value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\PatternException($value ?? null, ...array (
  0 => 'country',
  1 => '^[A-Z]{2}$',
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

    
        $this->executeBaseValidators($modelData);
    

    
        
            if (array_key_exists('street', $modelData) &&
                $modelData['street'] !== $this->street
            ) {
                

                $rollbackValues['street'] = $this->street;
                $this->processStreet($modelData);
            }
        
    
        
            if (array_key_exists('city', $modelData) &&
                $modelData['city'] !== $this->city
            ) {
                

                $rollbackValues['city'] = $this->city;
                $this->processCity($modelData);
            }
        
    
        
            if (array_key_exists('postal_code', $modelData) &&
                $modelData['postal_code'] !== $this->postalCode
            ) {
                

                $rollbackValues['postalCode'] = $this->postalCode;
                $this->processPostalCode($modelData);
            }
        
    
        
            if (array_key_exists('region', $modelData) &&
                $modelData['region'] !== $this->region
            ) {
                

                $rollbackValues['region'] = $this->region;
                $this->processRegion($modelData);
            }
        
    
        
            if (array_key_exists('country', $modelData) &&
                $modelData['country'] !== $this->country
            ) {
                

                $rollbackValues['country'] = $this->country;
                $this->processCountry($modelData);
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
