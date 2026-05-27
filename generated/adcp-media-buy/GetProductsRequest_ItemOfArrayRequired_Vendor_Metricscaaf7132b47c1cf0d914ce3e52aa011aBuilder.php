<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Builder class for GetProductsRequest_ItemOfArrayRequired_Vendor_Metricscaaf7132b47c1cf0d914ce3e52aa011a
 */
class GetProductsRequest_ItemOfArrayRequired_Vendor_Metricscaaf7132b47c1cf0d914ce3e52aa011aBuilder implements BuilderInterface
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
     * Set up a new instance of GetProductsRequest_ItemOfArrayRequired_Vendor_Metricscaaf7132b47c1cf0d914ce3e52aa011a with fully validated properties
     */
    public function validate(): GetProductsRequest_ItemOfArrayRequired_Vendor_Metricscaaf7132b47c1cf0d914ce3e52aa011a
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetProductsRequest_ItemOfArrayRequired_Vendor_Metricscaaf7132b47c1cf0d914ce3e52aa011a($this->_rawModelDataInput);
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
             * Get the value of vendor.
             *
             * Pin to a specific vendor. Optional — omit to match any vendor offering this `metric_id`.
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
             * @param GetProductsRequest_BrandReference|GetProductsRequest_BrandReferenceBuilder|array $vendor Pin to a specific vendor. Optional — omit to match any vendor offering this `metric_id`.
             *
             * {@link GetProductsRequest_ItemOfArrayRequired_Vendor_Metricscaaf7132b47c1cf0d914ce3e52aa011a::processVendor}
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
        
    
        
            /**
             * Get the value of metric_id.
             *
             * Pin to an exact metric identifier within a vendor's vocabulary. Optional — omit to match any metric from the pinned vendor. Cross-vendor identifier matching only works after vendors converge on identifiers (typically post-standardization).
             *
             * @return string|null
             */
            public function getMetricId(): ?string
            {
                return $this->_rawModelDataInput['metric_id'] ?? null;
            }

            /**
             * Set the value of metric_id.
             *
             * @param string $metricId Pin to an exact metric identifier within a vendor's vocabulary. Optional — omit to match any metric from the pinned vendor. Cross-vendor identifier matching only works after vendors converge on identifiers (typically post-standardization).
             *
             * {@link GetProductsRequest_ItemOfArrayRequired_Vendor_Metricscaaf7132b47c1cf0d914ce3e52aa011a::processMetricId}
             * 
             *
             * @return static
             */
            public function setMetricId(
                string $metricId
            ): static {
                if (array_key_exists('metric_id', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['metric_id'] === $metricId
                ) {
                    return $this;
                }

                $value = $modelData['metric_id'] = $metricId;

                

                

                $this->_rawModelDataInput['metric_id'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
