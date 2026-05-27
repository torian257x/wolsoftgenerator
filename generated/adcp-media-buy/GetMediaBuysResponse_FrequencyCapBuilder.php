<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;

    use AdCP\MediaBuy\Enums\ReachUnit;


/**
 * Builder class for GetMediaBuysResponse_FrequencyCap
 */
class GetMediaBuysResponse_FrequencyCapBuilder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuysResponse_FrequencyCap with fully validated properties
     */
    public function validate(): GetMediaBuysResponse_FrequencyCap
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysResponse_FrequencyCap($this->_rawModelDataInput);
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
             * Get the value of suppress.
             *
             * Cooldown period between consecutive exposures to the same entity. Prevents back-to-back ad delivery (e.g. {"interval": 60, "unit": "minutes"} for a 1-hour cooldown). Preferred over suppress_minutes.
             *
             * @return GetMediaBuysResponse_Duration|GetMediaBuysResponse_DurationBuilder|array|null
             */
            public function getSuppress(): mixed
            {
                return $this->_rawModelDataInput['suppress'] ?? null;
            }

            /**
             * Set the value of suppress.
             *
             * @param GetMediaBuysResponse_Duration|GetMediaBuysResponse_DurationBuilder|array $suppress Cooldown period between consecutive exposures to the same entity. Prevents back-to-back ad delivery (e.g. {"interval": 60, "unit": "minutes"} for a 1-hour cooldown). Preferred over suppress_minutes.
             *
             * {@link GetMediaBuysResponse_FrequencyCap::processSuppress}
             * 
             *
             * @return static
             */
            public function setSuppress(
                mixed $suppress
            ): static {
                if (array_key_exists('suppress', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['suppress'] === $suppress
                ) {
                    return $this;
                }

                $value = $modelData['suppress'] = $suppress;

                

                

                $this->_rawModelDataInput['suppress'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of suppress_minutes.
             *
             * Deprecated — use suppress instead. Cooldown period in minutes between consecutive exposures to the same entity (e.g. 60 for a 1-hour cooldown).
             *
             * @return float|null
             */
            public function getSuppressMinutes(): ?float
            {
                return $this->_rawModelDataInput['suppress_minutes'] ?? null;
            }

            /**
             * Set the value of suppress_minutes.
             *
             * @param float $suppressMinutes Deprecated — use suppress instead. Cooldown period in minutes between consecutive exposures to the same entity (e.g. 60 for a 1-hour cooldown).
             *
             * {@link GetMediaBuysResponse_FrequencyCap::processSuppressMinutes}
             * 
             *
             * @return static
             */
            public function setSuppressMinutes(
                float $suppressMinutes
            ): static {
                if (array_key_exists('suppress_minutes', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['suppress_minutes'] === $suppressMinutes
                ) {
                    return $this;
                }

                $value = $modelData['suppress_minutes'] = $suppressMinutes;

                

                

                $this->_rawModelDataInput['suppress_minutes'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of max_impressions.
             *
             * Maximum number of impressions per entity per window. For duration windows, implementations typically use a rolling window; 'campaign' applies a fixed cap across the full flight.
             *
             * @return int|null
             */
            public function getMaxImpressions(): ?int
            {
                return $this->_rawModelDataInput['max_impressions'] ?? null;
            }

            /**
             * Set the value of max_impressions.
             *
             * @param int $maxImpressions Maximum number of impressions per entity per window. For duration windows, implementations typically use a rolling window; 'campaign' applies a fixed cap across the full flight.
             *
             * {@link GetMediaBuysResponse_FrequencyCap::processMaxImpressions}
             * 
             *
             * @return static
             */
            public function setMaxImpressions(
                int $maxImpressions
            ): static {
                if (array_key_exists('max_impressions', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['max_impressions'] === $maxImpressions
                ) {
                    return $this;
                }

                $value = $modelData['max_impressions'] = $maxImpressions;

                

                

                $this->_rawModelDataInput['max_impressions'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of per.
             *
             * Entity granularity for impression counting. Required when max_impressions is set.
             *
             * @return string|ReachUnit|null
             */
            public function getPer(): string | ReachUnit | null
            {
                return $this->_rawModelDataInput['per'] ?? null;
            }

            /**
             * Set the value of per.
             *
             * @param string|ReachUnit|null $per Entity granularity for impression counting. Required when max_impressions is set.
             *
             * {@link GetMediaBuysResponse_FrequencyCap::processPer}
             * 
             *
             * @return static
             */
            public function setPer(
                string | ReachUnit | null $per
            ): static {
                if (array_key_exists('per', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['per'] === $per
                ) {
                    return $this;
                }

                $value = $modelData['per'] = $per;

                

                

                $this->_rawModelDataInput['per'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of window.
             *
             * Time window for the max_impressions cap (e.g. {"interval": 7, "unit": "days"} or {"interval": 1, "unit": "campaign"} for the full flight). Required when max_impressions is set.
             *
             * @return GetMediaBuysResponse_Duration|GetMediaBuysResponse_DurationBuilder|array|null
             */
            public function getWindow(): mixed
            {
                return $this->_rawModelDataInput['window'] ?? null;
            }

            /**
             * Set the value of window.
             *
             * @param GetMediaBuysResponse_Duration|GetMediaBuysResponse_DurationBuilder|array $window Time window for the max_impressions cap (e.g. {"interval": 7, "unit": "days"} or {"interval": 1, "unit": "campaign"} for the full flight). Required when max_impressions is set.
             *
             * {@link GetMediaBuysResponse_FrequencyCap::processWindow}
             * 
             *
             * @return static
             */
            public function setWindow(
                mixed $window
            ): static {
                if (array_key_exists('window', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['window'] === $window
                ) {
                    return $this;
                }

                $value = $modelData['window'] = $window;

                

                

                $this->_rawModelDataInput['window'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
