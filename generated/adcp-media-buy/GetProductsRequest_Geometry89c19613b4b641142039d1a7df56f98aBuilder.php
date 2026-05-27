<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;

    use AdCP\MediaBuy\Enums\GetProductsRequest_Geometry89c19613b4b641142039d1a7df56f98aType;


/**
 * Builder class for GetProductsRequest_Geometry89c19613b4b641142039d1a7df56f98a
 */
class GetProductsRequest_Geometry89c19613b4b641142039d1a7df56f98aBuilder implements BuilderInterface
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
     * Set up a new instance of GetProductsRequest_Geometry89c19613b4b641142039d1a7df56f98a with fully validated properties
     */
    public function validate(): GetProductsRequest_Geometry89c19613b4b641142039d1a7df56f98a
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetProductsRequest_Geometry89c19613b4b641142039d1a7df56f98a($this->_rawModelDataInput);
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
             * GeoJSON geometry type
             *
             * @return string|GetProductsRequest_Geometry89c19613b4b641142039d1a7df56f98aType|null
             */
            public function getType(): string | GetProductsRequest_Geometry89c19613b4b641142039d1a7df56f98aType | null
            {
                return $this->_rawModelDataInput['type'] ?? null;
            }

            /**
             * Set the value of type.
             *
             * @param string|GetProductsRequest_Geometry89c19613b4b641142039d1a7df56f98aType $type GeoJSON geometry type
             *
             * {@link GetProductsRequest_Geometry89c19613b4b641142039d1a7df56f98a::processType}
             * 
             *
             * @return static
             */
            public function setType(
                string | GetProductsRequest_Geometry89c19613b4b641142039d1a7df56f98aType $type
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
             * GeoJSON coordinates array
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
             * @param array $coordinates GeoJSON coordinates array
             *
             * {@link GetProductsRequest_Geometry89c19613b4b641142039d1a7df56f98a::processCoordinates}
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
