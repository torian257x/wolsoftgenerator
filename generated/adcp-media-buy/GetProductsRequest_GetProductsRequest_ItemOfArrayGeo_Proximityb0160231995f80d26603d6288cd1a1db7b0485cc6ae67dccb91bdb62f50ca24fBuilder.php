<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Builder class for GetProductsRequest_GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db7b0485cc6ae67dccb91bdb62f50ca24f
 */
class GetProductsRequest_GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db7b0485cc6ae67dccb91bdb62f50ca24fBuilder implements BuilderInterface
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
     * Set up a new instance of GetProductsRequest_GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db7b0485cc6ae67dccb91bdb62f50ca24f with fully validated properties
     */
    public function validate(): GetProductsRequest_GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db7b0485cc6ae67dccb91bdb62f50ca24f
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetProductsRequest_GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db7b0485cc6ae67dccb91bdb62f50ca24f($this->_rawModelDataInput);
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
             * Get the value of lat.
             *
             * 
             *
             * @return mixed
             */
            public function getLat(): mixed
            {
                return $this->_rawModelDataInput['lat'] ?? null;
            }

            /**
             * Set the value of lat.
             *
             * @param mixed $lat
             *
             * {@link GetProductsRequest_GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db7b0485cc6ae67dccb91bdb62f50ca24f::processLat}
             * 
             *
             * @return static
             */
            public function setLat(
                mixed $lat
            ): static {
                if (array_key_exists('lat', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['lat'] === $lat
                ) {
                    return $this;
                }

                $value = $modelData['lat'] = $lat;

                

                

                $this->_rawModelDataInput['lat'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of lng.
             *
             * 
             *
             * @return mixed
             */
            public function getLng(): mixed
            {
                return $this->_rawModelDataInput['lng'] ?? null;
            }

            /**
             * Set the value of lng.
             *
             * @param mixed $lng
             *
             * {@link GetProductsRequest_GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db7b0485cc6ae67dccb91bdb62f50ca24f::processLng}
             * 
             *
             * @return static
             */
            public function setLng(
                mixed $lng
            ): static {
                if (array_key_exists('lng', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['lng'] === $lng
                ) {
                    return $this;
                }

                $value = $modelData['lng'] = $lng;

                

                

                $this->_rawModelDataInput['lng'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of travel_time.
             *
             * 
             *
             * @return mixed
             */
            public function getTravelTime(): mixed
            {
                return $this->_rawModelDataInput['travel_time'] ?? null;
            }

            /**
             * Set the value of travel_time.
             *
             * @param mixed $travelTime
             *
             * {@link GetProductsRequest_GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db7b0485cc6ae67dccb91bdb62f50ca24f::processTravelTime}
             * 
             *
             * @return static
             */
            public function setTravelTime(
                mixed $travelTime
            ): static {
                if (array_key_exists('travel_time', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['travel_time'] === $travelTime
                ) {
                    return $this;
                }

                $value = $modelData['travel_time'] = $travelTime;

                

                

                $this->_rawModelDataInput['travel_time'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of transport_mode.
             *
             * 
             *
             * @return mixed
             */
            public function getTransportMode(): mixed
            {
                return $this->_rawModelDataInput['transport_mode'] ?? null;
            }

            /**
             * Set the value of transport_mode.
             *
             * @param mixed $transportMode
             *
             * {@link GetProductsRequest_GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db7b0485cc6ae67dccb91bdb62f50ca24f::processTransportMode}
             * 
             *
             * @return static
             */
            public function setTransportMode(
                mixed $transportMode
            ): static {
                if (array_key_exists('transport_mode', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['transport_mode'] === $transportMode
                ) {
                    return $this;
                }

                $value = $modelData['transport_mode'] = $transportMode;

                

                

                $this->_rawModelDataInput['transport_mode'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
