<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Builder class for GetProductsRequest_GetProductsRequest_ItemOfArrayRequired_Vendor_Metricscaaf7132b47c1cf0d914ce3e52aa011a1c5daa98b1f418b6d325b9b59f3bf3e8
 */
class GetProductsRequest_GetProductsRequest_ItemOfArrayRequired_Vendor_Metricscaaf7132b47c1cf0d914ce3e52aa011a1c5daa98b1f418b6d325b9b59f3bf3e8Builder implements BuilderInterface
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
     * Set up a new instance of GetProductsRequest_GetProductsRequest_ItemOfArrayRequired_Vendor_Metricscaaf7132b47c1cf0d914ce3e52aa011a1c5daa98b1f418b6d325b9b59f3bf3e8 with fully validated properties
     */
    public function validate(): GetProductsRequest_GetProductsRequest_ItemOfArrayRequired_Vendor_Metricscaaf7132b47c1cf0d914ce3e52aa011a1c5daa98b1f418b6d325b9b59f3bf3e8
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetProductsRequest_GetProductsRequest_ItemOfArrayRequired_Vendor_Metricscaaf7132b47c1cf0d914ce3e52aa011a1c5daa98b1f418b6d325b9b59f3bf3e8($this->_rawModelDataInput);
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
             * Get the value of metric_id.
             *
             * 
             *
             * @return mixed
             */
            public function getMetricId(): mixed
            {
                return $this->_rawModelDataInput['metric_id'] ?? null;
            }

            /**
             * Set the value of metric_id.
             *
             * @param mixed $metricId
             *
             * {@link GetProductsRequest_GetProductsRequest_ItemOfArrayRequired_Vendor_Metricscaaf7132b47c1cf0d914ce3e52aa011a1c5daa98b1f418b6d325b9b59f3bf3e8::processMetricId}
             * 
             *
             * @return static
             */
            public function setMetricId(
                mixed $metricId
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
