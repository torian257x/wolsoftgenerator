<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;

    use AdCP\MediaBuy\Enums\PerformanceStandardMetric;

    use AdCP\MediaBuy\Enums\ViewabilityStandard;


/**
 * Builder class for GetProductsRequest_PerformanceStandard
 */
class GetProductsRequest_PerformanceStandardBuilder implements BuilderInterface
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
     * Set up a new instance of GetProductsRequest_PerformanceStandard with fully validated properties
     */
    public function validate(): GetProductsRequest_PerformanceStandard
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetProductsRequest_PerformanceStandard($this->_rawModelDataInput);
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
             * Get the value of metric.
             *
             * The performance metric this standard applies to.
             *
             * @return string|PerformanceStandardMetric|null
             */
            public function getMetric(): string | PerformanceStandardMetric | null
            {
                return $this->_rawModelDataInput['metric'] ?? null;
            }

            /**
             * Set the value of metric.
             *
             * @param string|PerformanceStandardMetric $metric The performance metric this standard applies to.
             *
             * {@link GetProductsRequest_PerformanceStandard::processMetric}
             * 
             *
             * @return static
             */
            public function setMetric(
                string | PerformanceStandardMetric $metric
            ): static {
                if (array_key_exists('metric', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['metric'] === $metric
                ) {
                    return $this;
                }

                $value = $modelData['metric'] = $metric;

                

                

                $this->_rawModelDataInput['metric'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of threshold.
             *
             * Rate threshold as a decimal (e.g., 0.70 for 70%). Whether this is a floor or ceiling depends on the metric: for viewability, completion_rate, brand_safety, attention_score the actual rate must be >= threshold; for ivt the actual rate must be <= threshold.
             *
             * @return float|null
             */
            public function getThreshold(): ?float
            {
                return $this->_rawModelDataInput['threshold'] ?? null;
            }

            /**
             * Set the value of threshold.
             *
             * @param float $threshold Rate threshold as a decimal (e.g., 0.70 for 70%). Whether this is a floor or ceiling depends on the metric: for viewability, completion_rate, brand_safety, attention_score the actual rate must be >= threshold; for ivt the actual rate must be <= threshold.
             *
             * {@link GetProductsRequest_PerformanceStandard::processThreshold}
             * 
             *
             * @return static
             */
            public function setThreshold(
                float $threshold
            ): static {
                if (array_key_exists('threshold', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['threshold'] === $threshold
                ) {
                    return $this;
                }

                $value = $modelData['threshold'] = $threshold;

                

                

                $this->_rawModelDataInput['threshold'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of standard.
             *
             * Measurement standard. Required when metric is 'viewability' (MRC and GroupM define materially different thresholds). Omit for other metrics.
             *
             * @return string|ViewabilityStandard|null
             */
            public function getStandard(): string | ViewabilityStandard | null
            {
                return $this->_rawModelDataInput['standard'] ?? null;
            }

            /**
             * Set the value of standard.
             *
             * @param string|ViewabilityStandard|null $standard Measurement standard. Required when metric is 'viewability' (MRC and GroupM define materially different thresholds). Omit for other metrics.
             *
             * {@link GetProductsRequest_PerformanceStandard::processStandard}
             * 
             *
             * @return static
             */
            public function setStandard(
                string | ViewabilityStandard | null $standard
            ): static {
                if (array_key_exists('standard', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['standard'] === $standard
                ) {
                    return $this;
                }

                $value = $modelData['standard'] = $standard;

                

                

                $this->_rawModelDataInput['standard'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of vendor.
             *
             * Vendor measuring this metric (e.g., { domain: 'doubleverify.com' }). The vendor's brand.json agents array (type: 'measurement') is the discovery point for their measurement agent. When specified on a confirmed package, creatives MUST include tracker_script or tracker_pixel assets from this vendor.
             *
             * @return GetProductsRequest_BrandReference|GetProductsRequest_BrandReferenceBuilder|array|null
             */
            public function getVendor(): mixed
            {
                return $this->_rawModelDataInput['vendor'] ?? null;
            }

            /**
             * Set the value of vendor.
             *
             * @param GetProductsRequest_BrandReference|GetProductsRequest_BrandReferenceBuilder|array $vendor Vendor measuring this metric (e.g., { domain: 'doubleverify.com' }). The vendor's brand.json agents array (type: 'measurement') is the discovery point for their measurement agent. When specified on a confirmed package, creatives MUST include tracker_script or tracker_pixel assets from this vendor.
             *
             * {@link GetProductsRequest_PerformanceStandard::processVendor}
             * 
             *
             * @return static
             */
            public function setVendor(
                mixed $vendor
            ): static {
                if (array_key_exists('vendor', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['vendor'] === $vendor
                ) {
                    return $this;
                }

                $value = $modelData['vendor'] = $vendor;

                

                

                $this->_rawModelDataInput['vendor'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
