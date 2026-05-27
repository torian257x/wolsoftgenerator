<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Builder class for GetProductsRequest_GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db1d52d88f0d009813f8b6db3574d377d6
 */
class GetProductsRequest_GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db1d52d88f0d009813f8b6db3574d377d6Builder implements BuilderInterface
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
     * Set up a new instance of GetProductsRequest_GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db1d52d88f0d009813f8b6db3574d377d6 with fully validated properties
     */
    public function validate(): GetProductsRequest_GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db1d52d88f0d009813f8b6db3574d377d6
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetProductsRequest_GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db1d52d88f0d009813f8b6db3574d377d6($this->_rawModelDataInput);
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
             * {@link GetProductsRequest_GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db1d52d88f0d009813f8b6db3574d377d6::processLat}
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
             * {@link GetProductsRequest_GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db1d52d88f0d009813f8b6db3574d377d6::processLng}
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
             * Get the value of radius.
             *
             * 
             *
             * @return mixed
             */
            public function getRadius(): mixed
            {
                return $this->_rawModelDataInput['radius'] ?? null;
            }

            /**
             * Set the value of radius.
             *
             * @param mixed $radius
             *
             * {@link GetProductsRequest_GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db1d52d88f0d009813f8b6db3574d377d6::processRadius}
             * 
             *
             * @return static
             */
            public function setRadius(
                mixed $radius
            ): static {
                if (array_key_exists('radius', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['radius'] === $radius
                ) {
                    return $this;
                }

                $value = $modelData['radius'] = $radius;

                

                

                $this->_rawModelDataInput['radius'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
