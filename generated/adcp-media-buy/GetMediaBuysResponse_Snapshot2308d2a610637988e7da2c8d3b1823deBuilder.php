<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_Snapshot2308d2a610637988e7da2c8d3b1823deDelivery_Status;


/**
 * Builder class for GetMediaBuysResponse_Snapshot2308d2a610637988e7da2c8d3b1823de
 */
class GetMediaBuysResponse_Snapshot2308d2a610637988e7da2c8d3b1823deBuilder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuysResponse_Snapshot2308d2a610637988e7da2c8d3b1823de with fully validated properties
     */
    public function validate(): GetMediaBuysResponse_Snapshot2308d2a610637988e7da2c8d3b1823de
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysResponse_Snapshot2308d2a610637988e7da2c8d3b1823de($this->_rawModelDataInput);
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
             * Get the value of as_of.
             *
             * ISO 8601 timestamp when this snapshot was captured by the platform
             *
             * @return string|null
             */
            public function getAsOf(): ?string
            {
                return $this->_rawModelDataInput['as_of'] ?? null;
            }

            /**
             * Set the value of as_of.
             *
             * @param string $asOf ISO 8601 timestamp when this snapshot was captured by the platform
             *
             * {@link GetMediaBuysResponse_Snapshot2308d2a610637988e7da2c8d3b1823de::processAsOf}
             * 
             *
             * @return static
             */
            public function setAsOf(
                string $asOf
            ): static {
                if (array_key_exists('as_of', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['as_of'] === $asOf
                ) {
                    return $this;
                }

                $value = $modelData['as_of'] = $asOf;

                

                

                $this->_rawModelDataInput['as_of'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of staleness_seconds.
             *
             * Maximum age of this data in seconds. For example, 900 means the data may be up to 15 minutes old. Use this to interpret zero delivery: a value of 900 means zero impressions is likely real; a value of 14400 means reporting may still be catching up.
             *
             * @return int|null
             */
            public function getStalenessSeconds(): ?int
            {
                return $this->_rawModelDataInput['staleness_seconds'] ?? null;
            }

            /**
             * Set the value of staleness_seconds.
             *
             * @param int $stalenessSeconds Maximum age of this data in seconds. For example, 900 means the data may be up to 15 minutes old. Use this to interpret zero delivery: a value of 900 means zero impressions is likely real; a value of 14400 means reporting may still be catching up.
             *
             * {@link GetMediaBuysResponse_Snapshot2308d2a610637988e7da2c8d3b1823de::processStalenessSeconds}
             * 
             *
             * @return static
             */
            public function setStalenessSeconds(
                int $stalenessSeconds
            ): static {
                if (array_key_exists('staleness_seconds', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['staleness_seconds'] === $stalenessSeconds
                ) {
                    return $this;
                }

                $value = $modelData['staleness_seconds'] = $stalenessSeconds;

                

                

                $this->_rawModelDataInput['staleness_seconds'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of impressions.
             *
             * Total impressions delivered since package start
             *
             * @return float|null
             */
            public function getImpressions(): ?float
            {
                return $this->_rawModelDataInput['impressions'] ?? null;
            }

            /**
             * Set the value of impressions.
             *
             * @param float $impressions Total impressions delivered since package start
             *
             * {@link GetMediaBuysResponse_Snapshot2308d2a610637988e7da2c8d3b1823de::processImpressions}
             * 
             *
             * @return static
             */
            public function setImpressions(
                float $impressions
            ): static {
                if (array_key_exists('impressions', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['impressions'] === $impressions
                ) {
                    return $this;
                }

                $value = $modelData['impressions'] = $impressions;

                

                

                $this->_rawModelDataInput['impressions'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of spend.
             *
             * Total spend since package start, denominated in snapshot.currency when present, otherwise package.currency or media_buy.currency
             *
             * @return float|null
             */
            public function getSpend(): ?float
            {
                return $this->_rawModelDataInput['spend'] ?? null;
            }

            /**
             * Set the value of spend.
             *
             * @param float $spend Total spend since package start, denominated in snapshot.currency when present, otherwise package.currency or media_buy.currency
             *
             * {@link GetMediaBuysResponse_Snapshot2308d2a610637988e7da2c8d3b1823de::processSpend}
             * 
             *
             * @return static
             */
            public function setSpend(
                float $spend
            ): static {
                if (array_key_exists('spend', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['spend'] === $spend
                ) {
                    return $this;
                }

                $value = $modelData['spend'] = $spend;

                

                

                $this->_rawModelDataInput['spend'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of currency.
             *
             * ISO 4217 currency code for spend in this snapshot. Optional when unchanged from package.currency or media_buy.currency.
             *
             * @return string|null
             */
            public function getCurrency(): ?string
            {
                return $this->_rawModelDataInput['currency'] ?? null;
            }

            /**
             * Set the value of currency.
             *
             * @param string $currency ISO 4217 currency code for spend in this snapshot. Optional when unchanged from package.currency or media_buy.currency.
             *
             * {@link GetMediaBuysResponse_Snapshot2308d2a610637988e7da2c8d3b1823de::processCurrency}
             * 
             *
             * @return static
             */
            public function setCurrency(
                string $currency
            ): static {
                if (array_key_exists('currency', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['currency'] === $currency
                ) {
                    return $this;
                }

                $value = $modelData['currency'] = $currency;

                

                

                $this->_rawModelDataInput['currency'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of clicks.
             *
             * Total clicks since package start (when available)
             *
             * @return float|null
             */
            public function getClicks(): ?float
            {
                return $this->_rawModelDataInput['clicks'] ?? null;
            }

            /**
             * Set the value of clicks.
             *
             * @param float $clicks Total clicks since package start (when available)
             *
             * {@link GetMediaBuysResponse_Snapshot2308d2a610637988e7da2c8d3b1823de::processClicks}
             * 
             *
             * @return static
             */
            public function setClicks(
                float $clicks
            ): static {
                if (array_key_exists('clicks', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['clicks'] === $clicks
                ) {
                    return $this;
                }

                $value = $modelData['clicks'] = $clicks;

                

                

                $this->_rawModelDataInput['clicks'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of pacing_index.
             *
             * Current delivery pace relative to expected (1.0 = on track, <1.0 = behind, >1.0 = ahead). Absent when pacing cannot be determined.
             *
             * @return float|null
             */
            public function getPacingIndex(): ?float
            {
                return $this->_rawModelDataInput['pacing_index'] ?? null;
            }

            /**
             * Set the value of pacing_index.
             *
             * @param float $pacingIndex Current delivery pace relative to expected (1.0 = on track, <1.0 = behind, >1.0 = ahead). Absent when pacing cannot be determined.
             *
             * {@link GetMediaBuysResponse_Snapshot2308d2a610637988e7da2c8d3b1823de::processPacingIndex}
             * 
             *
             * @return static
             */
            public function setPacingIndex(
                float $pacingIndex
            ): static {
                if (array_key_exists('pacing_index', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['pacing_index'] === $pacingIndex
                ) {
                    return $this;
                }

                $value = $modelData['pacing_index'] = $pacingIndex;

                

                

                $this->_rawModelDataInput['pacing_index'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of delivery_status.
             *
             * Operational delivery state of this package. 'not_delivering' means the package is within its scheduled flight but has delivered zero impressions for at least one full staleness cycle — the signal for automated price adjustments or buyer alerts. Implementers must not return 'not_delivering' until at least staleness_seconds have elapsed since package activation.
             *
             * @return string|GetMediaBuysResponse_Snapshot2308d2a610637988e7da2c8d3b1823deDelivery_Status|null
             */
            public function getDeliveryStatus(): string | GetMediaBuysResponse_Snapshot2308d2a610637988e7da2c8d3b1823deDelivery_Status | null
            {
                return $this->_rawModelDataInput['delivery_status'] ?? null;
            }

            /**
             * Set the value of delivery_status.
             *
             * @param string|GetMediaBuysResponse_Snapshot2308d2a610637988e7da2c8d3b1823deDelivery_Status|null $deliveryStatus Operational delivery state of this package. 'not_delivering' means the package is within its scheduled flight but has delivered zero impressions for at least one full staleness cycle — the signal for automated price adjustments or buyer alerts. Implementers must not return 'not_delivering' until at least staleness_seconds have elapsed since package activation.
             *
             * {@link GetMediaBuysResponse_Snapshot2308d2a610637988e7da2c8d3b1823de::processDeliveryStatus}
             * 
             *
             * @return static
             */
            public function setDeliveryStatus(
                string | GetMediaBuysResponse_Snapshot2308d2a610637988e7da2c8d3b1823deDelivery_Status | null $deliveryStatus
            ): static {
                if (array_key_exists('delivery_status', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['delivery_status'] === $deliveryStatus
                ) {
                    return $this;
                }

                $value = $modelData['delivery_status'] = $deliveryStatus;

                

                

                $this->_rawModelDataInput['delivery_status'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of ext.
             *
             * Optional extension object for seller-specific snapshot fields.
             *
             * @return GetMediaBuysResponse_ExtensionObject|GetMediaBuysResponse_ExtensionObjectBuilder|array|null
             */
            public function getExt(): mixed
            {
                return $this->_rawModelDataInput['ext'] ?? null;
            }

            /**
             * Set the value of ext.
             *
             * @param GetMediaBuysResponse_ExtensionObject|GetMediaBuysResponse_ExtensionObjectBuilder|array $ext Optional extension object for seller-specific snapshot fields.
             *
             * {@link GetMediaBuysResponse_Snapshot2308d2a610637988e7da2c8d3b1823de::processExt}
             * 
             *
             * @return static
             */
            public function setExt(
                mixed $ext
            ): static {
                if (array_key_exists('ext', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['ext'] === $ext
                ) {
                    return $this;
                }

                $value = $modelData['ext'] = $ext;

                

                

                $this->_rawModelDataInput['ext'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
