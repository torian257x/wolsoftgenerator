<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_Geometryd672d0526b0b5b3b9be11e6e707345f0Type;


/**
 * Builder class for GetMediaBuysResponse_Geometryd672d0526b0b5b3b9be11e6e707345f0
 */
class GetMediaBuysResponse_Geometryd672d0526b0b5b3b9be11e6e707345f0Builder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuysResponse_Geometryd672d0526b0b5b3b9be11e6e707345f0 with fully validated properties
     */
    public function validate(): GetMediaBuysResponse_Geometryd672d0526b0b5b3b9be11e6e707345f0
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysResponse_Geometryd672d0526b0b5b3b9be11e6e707345f0($this->_rawModelDataInput);
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
             * Get the value of type.
             *
             * GeoJSON geometry type.
             *
             * @return string|GetMediaBuysResponse_Geometryd672d0526b0b5b3b9be11e6e707345f0Type|null
             */
            public function getType(): string | GetMediaBuysResponse_Geometryd672d0526b0b5b3b9be11e6e707345f0Type | null
            {
                return $this->_rawModelDataInput['type'] ?? null;
            }

            /**
             * Set the value of type.
             *
             * @param string|GetMediaBuysResponse_Geometryd672d0526b0b5b3b9be11e6e707345f0Type $type GeoJSON geometry type.
             *
             * {@link GetMediaBuysResponse_Geometryd672d0526b0b5b3b9be11e6e707345f0::processType}
             * 
             *
             * @return static
             */
            public function setType(
                string | GetMediaBuysResponse_Geometryd672d0526b0b5b3b9be11e6e707345f0Type $type
            ): static {
                if (array_key_exists('type', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['type'] === $type
                ) {
                    return $this;
                }

                $value = $modelData['type'] = $type;

                

                

                $this->_rawModelDataInput['type'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of coordinates.
             *
             * GeoJSON coordinates array. For Polygon: array of linear rings. For MultiPolygon: array of polygons.
             *
             * @return array|null
             */
            public function getCoordinates(): ?array
            {
                return $this->_rawModelDataInput['coordinates'] ?? null;
            }

            /**
             * Set the value of coordinates.
             *
             * @param array $coordinates GeoJSON coordinates array. For Polygon: array of linear rings. For MultiPolygon: array of polygons.
             *
             * {@link GetMediaBuysResponse_Geometryd672d0526b0b5b3b9be11e6e707345f0::processCoordinates}
             * 
             *
             * @return static
             */
            public function setCoordinates(
                array $coordinates
            ): static {
                if (array_key_exists('coordinates', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['coordinates'] === $coordinates
                ) {
                    return $this;
                }

                $value = $modelData['coordinates'] = $coordinates;

                

                

                $this->_rawModelDataInput['coordinates'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
