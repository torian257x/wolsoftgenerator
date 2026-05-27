<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_DurationUnit;


/**
 * Builder class for GetMediaBuysResponse_Duration
 */
class GetMediaBuysResponse_DurationBuilder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuysResponse_Duration with fully validated properties
     */
    public function validate(): GetMediaBuysResponse_Duration
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysResponse_Duration($this->_rawModelDataInput);
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
             * Get the value of interval.
             *
             * Number of time units. Must be 1 when unit is 'campaign'.
             *
             * @return int|null
             */
            public function getInterval(): ?int
            {
                return $this->_rawModelDataInput['interval'] ?? null;
            }

            /**
             * Set the value of interval.
             *
             * @param int $interval Number of time units. Must be 1 when unit is 'campaign'.
             *
             * {@link GetMediaBuysResponse_Duration::processInterval}
             * 
             *
             * @return static
             */
            public function setInterval(
                int $interval
            ): static {
                if (array_key_exists('interval', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['interval'] === $interval
                ) {
                    return $this;
                }

                $value = $modelData['interval'] = $interval;

                

                

                $this->_rawModelDataInput['interval'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of unit.
             *
             * Time unit. 'seconds' for sub-minute precision. 'campaign' spans the full campaign flight.
             *
             * @return string|GetMediaBuysResponse_DurationUnit|null
             */
            public function getUnit(): string | GetMediaBuysResponse_DurationUnit | null
            {
                return $this->_rawModelDataInput['unit'] ?? null;
            }

            /**
             * Set the value of unit.
             *
             * @param string|GetMediaBuysResponse_DurationUnit $unit Time unit. 'seconds' for sub-minute precision. 'campaign' spans the full campaign flight.
             *
             * {@link GetMediaBuysResponse_Duration::processUnit}
             * 
             *
             * @return static
             */
            public function setUnit(
                string | GetMediaBuysResponse_DurationUnit $unit
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
