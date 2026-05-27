<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;

    use AdCP\MediaBuy\Enums\GeographicTargetingLevel;


/**
 * Builder class for GetProductsRequest_ItemOfArrayRequired_Geo_Targeting1d13fc28bdab4c3b60f4d4efc2ceab0b
 */
class GetProductsRequest_ItemOfArrayRequired_Geo_Targeting1d13fc28bdab4c3b60f4d4efc2ceab0bBuilder implements BuilderInterface
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
     * Set up a new instance of GetProductsRequest_ItemOfArrayRequired_Geo_Targeting1d13fc28bdab4c3b60f4d4efc2ceab0b with fully validated properties
     */
    public function validate(): GetProductsRequest_ItemOfArrayRequired_Geo_Targeting1d13fc28bdab4c3b60f4d4efc2ceab0b
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetProductsRequest_ItemOfArrayRequired_Geo_Targeting1d13fc28bdab4c3b60f4d4efc2ceab0b($this->_rawModelDataInput);
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
             * Get the value of level.
             *
             * Geographic targeting level (country, region, metro, postal_area)
             *
             * @return string|GeographicTargetingLevel|null
             */
            public function getLevel(): string | GeographicTargetingLevel | null
            {
                return $this->_rawModelDataInput['level'] ?? null;
            }

            /**
             * Set the value of level.
             *
             * @param string|GeographicTargetingLevel $level Geographic targeting level (country, region, metro, postal_area)
             *
             * {@link GetProductsRequest_ItemOfArrayRequired_Geo_Targeting1d13fc28bdab4c3b60f4d4efc2ceab0b::processLevel}
             * 
             *
             * @return static
             */
            public function setLevel(
                string | GeographicTargetingLevel $level
            ): static {
                if (array_key_exists('level', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['level'] === $level
                ) {
                    return $this;
                }

                $value = $modelData['level'] = $level;

                

                

                $this->_rawModelDataInput['level'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of system.
             *
             * Classification system within the level. Required for metro (e.g., 'nielsen_dma') and postal_area (e.g., 'us_zip'). Not applicable for country/region which use ISO standards.
             *
             * @return string|null
             */
            public function getSystem(): ?string
            {
                return $this->_rawModelDataInput['system'] ?? null;
            }

            /**
             * Set the value of system.
             *
             * @param string $system Classification system within the level. Required for metro (e.g., 'nielsen_dma') and postal_area (e.g., 'us_zip'). Not applicable for country/region which use ISO standards.
             *
             * {@link GetProductsRequest_ItemOfArrayRequired_Geo_Targeting1d13fc28bdab4c3b60f4d4efc2ceab0b::processSystem}
             * 
             *
             * @return static
             */
            public function setSystem(
                string $system
            ): static {
                if (array_key_exists('system', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['system'] === $system
                ) {
                    return $this;
                }

                $value = $modelData['system'] = $system;

                

                

                $this->_rawModelDataInput['system'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
