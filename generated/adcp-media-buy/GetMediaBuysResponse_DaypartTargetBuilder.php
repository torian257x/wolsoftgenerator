<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;

    use AdCP\MediaBuy\Enums\DayOfWeek;


/**
 * Builder class for GetMediaBuysResponse_DaypartTarget
 */
class GetMediaBuysResponse_DaypartTargetBuilder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuysResponse_DaypartTarget with fully validated properties
     */
    public function validate(): GetMediaBuysResponse_DaypartTarget
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysResponse_DaypartTarget($this->_rawModelDataInput);
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
             * Get the value of days.
             *
             * Days of week this window applies to. Use multiple days for compact targeting (e.g., monday-friday in one object).
             *
             * @return string[]|DayOfWeek[]|null
             */
            public function getDays(): array | DayOfWeek | null
            {
                return $this->_rawModelDataInput['days'] ?? null;
            }

            /**
             * Set the value of days.
             *
             * @param string[]|DayOfWeek[] $days Days of week this window applies to. Use multiple days for compact targeting (e.g., monday-friday in one object).
             *
             * {@link GetMediaBuysResponse_DaypartTarget::processDays}
             * 
             *
             * @return static
             */
            public function setDays(
                array | DayOfWeek $days
            ): static {
                if (array_key_exists('days', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['days'] === $days
                ) {
                    return $this;
                }

                $value = $modelData['days'] = $days;

                

                

                $this->_rawModelDataInput['days'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of start_hour.
             *
             * Start hour (inclusive), 0-23 in 24-hour format. 0 = midnight, 6 = 6:00am, 18 = 6:00pm.
             *
             * @return int|null
             */
            public function getStartHour(): ?int
            {
                return $this->_rawModelDataInput['start_hour'] ?? null;
            }

            /**
             * Set the value of start_hour.
             *
             * @param int $startHour Start hour (inclusive), 0-23 in 24-hour format. 0 = midnight, 6 = 6:00am, 18 = 6:00pm.
             *
             * {@link GetMediaBuysResponse_DaypartTarget::processStartHour}
             * 
             *
             * @return static
             */
            public function setStartHour(
                int $startHour
            ): static {
                if (array_key_exists('start_hour', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['start_hour'] === $startHour
                ) {
                    return $this;
                }

                $value = $modelData['start_hour'] = $startHour;

                

                

                $this->_rawModelDataInput['start_hour'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of end_hour.
             *
             * End hour (exclusive), 1-24 in 24-hour format. 10 = 10:00am, 24 = midnight. Must be greater than start_hour.
             *
             * @return int|null
             */
            public function getEndHour(): ?int
            {
                return $this->_rawModelDataInput['end_hour'] ?? null;
            }

            /**
             * Set the value of end_hour.
             *
             * @param int $endHour End hour (exclusive), 1-24 in 24-hour format. 10 = 10:00am, 24 = midnight. Must be greater than start_hour.
             *
             * {@link GetMediaBuysResponse_DaypartTarget::processEndHour}
             * 
             *
             * @return static
             */
            public function setEndHour(
                int $endHour
            ): static {
                if (array_key_exists('end_hour', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['end_hour'] === $endHour
                ) {
                    return $this;
                }

                $value = $modelData['end_hour'] = $endHour;

                

                

                $this->_rawModelDataInput['end_hour'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of label.
             *
             * Optional human-readable name for this time window (e.g., 'Morning Drive', 'Prime Time')
             *
             * @return string|null
             */
            public function getLabel(): ?string
            {
                return $this->_rawModelDataInput['label'] ?? null;
            }

            /**
             * Set the value of label.
             *
             * @param string $label Optional human-readable name for this time window (e.g., 'Morning Drive', 'Prime Time')
             *
             * {@link GetMediaBuysResponse_DaypartTarget::processLabel}
             * 
             *
             * @return static
             */
            public function setLabel(
                string $label
            ): static {
                if (array_key_exists('label', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['label'] === $label
                ) {
                    return $this;
                }

                $value = $modelData['label'] = $label;

                

                

                $this->_rawModelDataInput['label'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
