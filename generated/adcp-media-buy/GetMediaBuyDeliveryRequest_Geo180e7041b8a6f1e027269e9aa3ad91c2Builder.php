<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;

    use AdCP\MediaBuy\Enums\GeographicTargetingLevel;

    use AdCP\MediaBuy\Enums\MetroAreaSystem;

    use AdCP\MediaBuy\Enums\PostalCodeSystem;

    use AdCP\MediaBuy\Enums\SortMetric;


/**
 * Builder class for GetMediaBuyDeliveryRequest_Geo180e7041b8a6f1e027269e9aa3ad91c2
 */
class GetMediaBuyDeliveryRequest_Geo180e7041b8a6f1e027269e9aa3ad91c2Builder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuyDeliveryRequest_Geo180e7041b8a6f1e027269e9aa3ad91c2 with fully validated properties
     */
    public function validate(): GetMediaBuyDeliveryRequest_Geo180e7041b8a6f1e027269e9aa3ad91c2
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuyDeliveryRequest_Geo180e7041b8a6f1e027269e9aa3ad91c2($this->_rawModelDataInput);
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
             * Get the value of geo_level.
             *
             * Geographic granularity level for the breakdown
             *
             * @return string|GeographicTargetingLevel|null
             */
            public function getGeoLevel(): string | GeographicTargetingLevel | null
            {
                return $this->_rawModelDataInput['geo_level'] ?? null;
            }

            /**
             * Set the value of geo_level.
             *
             * @param string|GeographicTargetingLevel $geoLevel Geographic granularity level for the breakdown
             *
             * {@link GetMediaBuyDeliveryRequest_Geo180e7041b8a6f1e027269e9aa3ad91c2::processGeoLevel}
             * 
             *
             * @return static
             */
            public function setGeoLevel(
                string | GeographicTargetingLevel $geoLevel
            ): static {
                if (array_key_exists('geo_level', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['geo_level'] === $geoLevel
                ) {
                    return $this;
                }

                $value = $modelData['geo_level'] = $geoLevel;

                

                

                $this->_rawModelDataInput['geo_level'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of system.
             *
             * Classification system for metro or postal_area levels (e.g., 'nielsen_dma', 'us_zip'). Required when geo_level is 'metro' or 'postal_area'.
             *
             * @return string|MetroAreaSystem|PostalCodeSystem|null
             */
            public function getSystem(): string | MetroAreaSystem | PostalCodeSystem | null
            {
                return $this->_rawModelDataInput['system'] ?? null;
            }

            /**
             * Set the value of system.
             *
             * @param string|MetroAreaSystem|PostalCodeSystem|null $system Classification system for metro or postal_area levels (e.g., 'nielsen_dma', 'us_zip'). Required when geo_level is 'metro' or 'postal_area'.
             *
             * {@link GetMediaBuyDeliveryRequest_Geo180e7041b8a6f1e027269e9aa3ad91c2::processSystem}
             * 
             *
             * @return static
             */
            public function setSystem(
                string | MetroAreaSystem | PostalCodeSystem | null $system
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
        
    
        
            /**
             * Get the value of limit.
             *
             * Maximum number of geo entries to return. Defaults to 25. When truncated, by_geo_truncated is true in the response.
             *
             * @return int|null
             */
            public function getLimit(): ?int
            {
                return $this->_rawModelDataInput['limit'] ?? null;
            }

            /**
             * Set the value of limit.
             *
             * @param int $limit Maximum number of geo entries to return. Defaults to 25. When truncated, by_geo_truncated is true in the response.
             *
             * {@link GetMediaBuyDeliveryRequest_Geo180e7041b8a6f1e027269e9aa3ad91c2::processLimit}
             * 
             *
             * @return static
             */
            public function setLimit(
                int $limit
            ): static {
                if (array_key_exists('limit', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['limit'] === $limit
                ) {
                    return $this;
                }

                $value = $modelData['limit'] = $limit;

                

                

                $this->_rawModelDataInput['limit'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of sort_by.
             *
             * Metric to sort breakdown rows by (descending). Falls back to 'spend' if the seller does not report the requested metric.
             *
             * @return string|SortMetric|null
             */
            public function getSortBy(): string | SortMetric | UnitEnum | null
            {
                return $this->_rawModelDataInput['sort_by'] ?? null;
            }

            /**
             * Set the value of sort_by.
             *
             * @param string|SortMetric|null $sortBy Metric to sort breakdown rows by (descending). Falls back to 'spend' if the seller does not report the requested metric.
             *
             * {@link GetMediaBuyDeliveryRequest_Geo180e7041b8a6f1e027269e9aa3ad91c2::processSortBy}
             * 
             *
             * @return static
             */
            public function setSortBy(
                string | SortMetric | UnitEnum | null $sortBy
            ): static {
                if (array_key_exists('sort_by', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['sort_by'] === $sortBy
                ) {
                    return $this;
                }

                $value = $modelData['sort_by'] = $sortBy;

                

                

                $this->_rawModelDataInput['sort_by'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
