<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;

    use AdCP\MediaBuy\Enums\SortMetric;


/**
 * Builder class for GetMediaBuyDeliveryRequest_Audienceb74ab1a9578935027e487e0c94dde617
 */
class GetMediaBuyDeliveryRequest_Audienceb74ab1a9578935027e487e0c94dde617Builder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuyDeliveryRequest_Audienceb74ab1a9578935027e487e0c94dde617 with fully validated properties
     */
    public function validate(): GetMediaBuyDeliveryRequest_Audienceb74ab1a9578935027e487e0c94dde617
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuyDeliveryRequest_Audienceb74ab1a9578935027e487e0c94dde617($this->_rawModelDataInput);
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
             * Get the value of limit.
             *
             * Maximum number of entries to return. Defaults to 25.
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
             * @param int $limit Maximum number of entries to return. Defaults to 25.
             *
             * {@link GetMediaBuyDeliveryRequest_Audienceb74ab1a9578935027e487e0c94dde617::processLimit}
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
             * {@link GetMediaBuyDeliveryRequest_Audienceb74ab1a9578935027e487e0c94dde617::processSortBy}
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
