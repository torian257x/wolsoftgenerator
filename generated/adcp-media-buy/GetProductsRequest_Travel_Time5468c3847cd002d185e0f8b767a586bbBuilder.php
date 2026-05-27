<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;

    use AdCP\MediaBuy\Enums\TravelTimeUnit;


/**
 * Builder class for GetProductsRequest_Travel_Time5468c3847cd002d185e0f8b767a586bb
 */
class GetProductsRequest_Travel_Time5468c3847cd002d185e0f8b767a586bbBuilder implements BuilderInterface
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
     * Set up a new instance of GetProductsRequest_Travel_Time5468c3847cd002d185e0f8b767a586bb with fully validated properties
     */
    public function validate(): GetProductsRequest_Travel_Time5468c3847cd002d185e0f8b767a586bb
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetProductsRequest_Travel_Time5468c3847cd002d185e0f8b767a586bb($this->_rawModelDataInput);
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
             * Travel time limit
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
             * @param float $value Travel time limit
             *
             * {@link GetProductsRequest_Travel_Time5468c3847cd002d185e0f8b767a586bb::processValue}
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
             * Time unit for isochrone (travel-time catchment) calculations.
             *
             * @return string|TravelTimeUnit|null
             */
            public function getUnit(): string | TravelTimeUnit | null
            {
                return $this->_rawModelDataInput['unit'] ?? null;
            }

            /**
             * Set the value of unit.
             *
             * @param string|TravelTimeUnit $unit Time unit for isochrone (travel-time catchment) calculations.
             *
             * {@link GetProductsRequest_Travel_Time5468c3847cd002d185e0f8b767a586bb::processUnit}
             * 
             *
             * @return static
             */
            public function setUnit(
                string | TravelTimeUnit $unit
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
