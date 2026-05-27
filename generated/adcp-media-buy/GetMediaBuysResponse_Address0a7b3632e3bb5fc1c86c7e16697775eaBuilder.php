<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Builder class for GetMediaBuysResponse_Address0a7b3632e3bb5fc1c86c7e16697775ea
 */
class GetMediaBuysResponse_Address0a7b3632e3bb5fc1c86c7e16697775eaBuilder implements BuilderInterface
{
    /** @var array */
    protected $_rawModelDataInput = [];

    
        /** @var ErrorRegistryException */
        protected $_errorRegistry;
    

    public function __construct(array $rawModelDataInput = [])
    {
        $this->_rawModelDataInput = $rawModelDataInput;

        
            $this->_errorRegistry = new ErrorRegistryException();
        
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
     * Set up a new instance of GetMediaBuysResponse_Address0a7b3632e3bb5fc1c86c7e16697775ea with fully validated properties
     */
    public function validate(): GetMediaBuysResponse_Address0a7b3632e3bb5fc1c86c7e16697775ea
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysResponse_Address0a7b3632e3bb5fc1c86c7e16697775ea($this->_rawModelDataInput);
    }

    // PHPs builtin array_walk_recursive doesn't handle newly inserted arrays which we need to visit
    private function _array_walk_recursive_real(array &$array, callable $callback): void
    {
        foreach ($array as &$value) {
            $callback($value);

            if (is_array($value)) {
                $this->_array_walk_recursive_real($value, $callback);
            }
        }
    }

    
        
            /**
             * Get the value of street.
             *
             * Street address including building number
             *
             * @return string|null
             */
            public function getStreet(): ?string
            {
                return $this->_rawModelDataInput['street'] ?? null;
            }

            /**
             * Set the value of street.
             *
             * @param string $street Street address including building number
             *
             * {@link GetMediaBuysResponse_Address0a7b3632e3bb5fc1c86c7e16697775ea::processStreet}
             * 
             *
             * @return static
             */
            public function setStreet(
                string $street
            ): static {
                if (array_key_exists('street', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['street'] === $street
                ) {
                    return $this;
                }

                $value = $modelData['street'] = $street;

                

                

                $this->_rawModelDataInput['street'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of city.
             *
             * 
             *
             * @return string|null
             */
            public function getCity(): ?string
            {
                return $this->_rawModelDataInput['city'] ?? null;
            }

            /**
             * Set the value of city.
             *
             * @param string $city
             *
             * {@link GetMediaBuysResponse_Address0a7b3632e3bb5fc1c86c7e16697775ea::processCity}
             * 
             *
             * @return static
             */
            public function setCity(
                string $city
            ): static {
                if (array_key_exists('city', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['city'] === $city
                ) {
                    return $this;
                }

                $value = $modelData['city'] = $city;

                

                

                $this->_rawModelDataInput['city'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of postal_code.
             *
             * 
             *
             * @return string|null
             */
            public function getPostalCode(): ?string
            {
                return $this->_rawModelDataInput['postal_code'] ?? null;
            }

            /**
             * Set the value of postal_code.
             *
             * @param string $postalCode
             *
             * {@link GetMediaBuysResponse_Address0a7b3632e3bb5fc1c86c7e16697775ea::processPostalCode}
             * 
             *
             * @return static
             */
            public function setPostalCode(
                string $postalCode
            ): static {
                if (array_key_exists('postal_code', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['postal_code'] === $postalCode
                ) {
                    return $this;
                }

                $value = $modelData['postal_code'] = $postalCode;

                

                

                $this->_rawModelDataInput['postal_code'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['region'] ?? null;
            }

            /**
             * Set the value of region.
             *
             * @param string $region State, province, or region
             *
             * {@link GetMediaBuysResponse_Address0a7b3632e3bb5fc1c86c7e16697775ea::processRegion}
             * 
             *
             * @return static
             */
            public function setRegion(
                string $region
            ): static {
                if (array_key_exists('region', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['region'] === $region
                ) {
                    return $this;
                }

                $value = $modelData['region'] = $region;

                

                

                $this->_rawModelDataInput['region'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of country.
             *
             * ISO 3166-1 alpha-2 country code
             *
             * @return string|null
             */
            public function getCountry(): ?string
            {
                return $this->_rawModelDataInput['country'] ?? null;
            }

            /**
             * Set the value of country.
             *
             * @param string $country ISO 3166-1 alpha-2 country code
             *
             * {@link GetMediaBuysResponse_Address0a7b3632e3bb5fc1c86c7e16697775ea::processCountry}
             * 
             *
             * @return static
             */
            public function setCountry(
                string $country
            ): static {
                if (array_key_exists('country', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['country'] === $country
                ) {
                    return $this;
                }

                $value = $modelData['country'] = $country;

                

                

                $this->_rawModelDataInput['country'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
