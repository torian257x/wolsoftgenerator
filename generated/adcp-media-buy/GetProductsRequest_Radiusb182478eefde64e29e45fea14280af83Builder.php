<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;

    use AdCP\MediaBuy\Enums\DistanceUnit;


/**
 * Builder class for GetProductsRequest_Radiusb182478eefde64e29e45fea14280af83
 */
class GetProductsRequest_Radiusb182478eefde64e29e45fea14280af83Builder implements BuilderInterface
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
     * Set up a new instance of GetProductsRequest_Radiusb182478eefde64e29e45fea14280af83 with fully validated properties
     */
    public function validate(): GetProductsRequest_Radiusb182478eefde64e29e45fea14280af83
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetProductsRequest_Radiusb182478eefde64e29e45fea14280af83($this->_rawModelDataInput);
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
             * Get the value of value.
             *
             * Radius distance
             *
             * @return float|null
             */
            public function getValue(): ?float
            {
                return $this->_rawModelDataInput['value'] ?? null;
            }

            /**
             * Set the value of value.
             *
             * @param float $value Radius distance
             *
             * {@link GetProductsRequest_Radiusb182478eefde64e29e45fea14280af83::processValue}
             * 
             *
             * @return static
             */
            public function setValue(
                float $value
            ): static {
                if (array_key_exists('value', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['value'] === $value
                ) {
                    return $this;
                }

                $value = $modelData['value'] = $value;

                

                

                $this->_rawModelDataInput['value'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of unit.
             *
             * Distance unit
             *
             * @return string|DistanceUnit|null
             */
            public function getUnit(): string | DistanceUnit | null
            {
                return $this->_rawModelDataInput['unit'] ?? null;
            }

            /**
             * Set the value of unit.
             *
             * @param string|DistanceUnit $unit Distance unit
             *
             * {@link GetProductsRequest_Radiusb182478eefde64e29e45fea14280af83::processUnit}
             * 
             *
             * @return static
             */
            public function setUnit(
                string | DistanceUnit $unit
            ): static {
                if (array_key_exists('unit', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['unit'] === $unit
                ) {
                    return $this;
                }

                $value = $modelData['unit'] = $unit;

                

                

                $this->_rawModelDataInput['unit'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
