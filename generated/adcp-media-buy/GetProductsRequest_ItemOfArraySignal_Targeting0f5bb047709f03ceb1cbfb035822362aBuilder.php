<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Builder class for GetProductsRequest_ItemOfArraySignal_Targeting0f5bb047709f03ceb1cbfb035822362a
 */
class GetProductsRequest_ItemOfArraySignal_Targeting0f5bb047709f03ceb1cbfb035822362aBuilder implements BuilderInterface
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
     * Set up a new instance of GetProductsRequest_ItemOfArraySignal_Targeting0f5bb047709f03ceb1cbfb035822362a with fully validated properties
     */
    public function validate(): GetProductsRequest_ItemOfArraySignal_Targeting0f5bb047709f03ceb1cbfb035822362a
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetProductsRequest_ItemOfArraySignal_Targeting0f5bb047709f03ceb1cbfb035822362a($this->_rawModelDataInput);
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
             * Get the value of signal_id.
             *
             * The signal to target
             *
             * @return GetProductsRequest_Signal_Idc051d99d9bca014b860d0fddcd4e1653|GetProductsRequest_Signal_Idc45bc7f200ab2d9d28f6da1ac702bfc5|GetProductsRequest_Signal_Idc051d99d9bca014b860d0fddcd4e1653Builder|array|GetProductsRequest_Signal_Idc45bc7f200ab2d9d28f6da1ac702bfc5Builder|null
             */
            public function getSignalId(): mixed
            {
                return $this->_rawModelDataInput['signal_id'] ?? null;
            }

            /**
             * Set the value of signal_id.
             *
             * @param GetProductsRequest_Signal_Idc051d99d9bca014b860d0fddcd4e1653|GetProductsRequest_Signal_Idc45bc7f200ab2d9d28f6da1ac702bfc5|GetProductsRequest_Signal_Idc051d99d9bca014b860d0fddcd4e1653Builder|array|GetProductsRequest_Signal_Idc45bc7f200ab2d9d28f6da1ac702bfc5Builder $signalId The signal to target
             *
             * {@link GetProductsRequest_ItemOfArraySignal_Targeting0f5bb047709f03ceb1cbfb035822362a::processSignalId}
             * 
             *
             * @return static
             */
            public function setSignalId(
                mixed $signalId
            ): static {
                if (array_key_exists('signal_id', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['signal_id'] === $signalId
                ) {
                    return $this;
                }

                $value = $modelData['signal_id'] = $signalId;

                

                

                $this->_rawModelDataInput['signal_id'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of value_type.
             *
             * Discriminator for numeric signals
             *
             * @return string|null
             */
            public function getValueType(): ?string
            {
                return $this->_rawModelDataInput['value_type'] ?? null;
            }

            /**
             * Set the value of value_type.
             *
             * @param string $valueType Discriminator for numeric signals
             *
             * {@link GetProductsRequest_ItemOfArraySignal_Targeting0f5bb047709f03ceb1cbfb035822362a::processValueType}
             * 
             *
             * @return static
             */
            public function setValueType(
                string $valueType
            ): static {
                if (array_key_exists('value_type', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['value_type'] === $valueType
                ) {
                    return $this;
                }

                $value = $modelData['value_type'] = $valueType;

                

                

                $this->_rawModelDataInput['value_type'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of min_value.
             *
             * Minimum value (inclusive). Omit for no minimum. Must be <= max_value when both are provided. Should be >= signal's range.min if defined.
             *
             * @return float|null
             */
            public function getMinValue(): ?float
            {
                return $this->_rawModelDataInput['min_value'] ?? null;
            }

            /**
             * Set the value of min_value.
             *
             * @param float $minValue Minimum value (inclusive). Omit for no minimum. Must be <= max_value when both are provided. Should be >= signal's range.min if defined.
             *
             * {@link GetProductsRequest_ItemOfArraySignal_Targeting0f5bb047709f03ceb1cbfb035822362a::processMinValue}
             * 
             *
             * @return static
             */
            public function setMinValue(
                float $minValue
            ): static {
                if (array_key_exists('min_value', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['min_value'] === $minValue
                ) {
                    return $this;
                }

                $value = $modelData['min_value'] = $minValue;

                

                

                $this->_rawModelDataInput['min_value'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of max_value.
             *
             * Maximum value (inclusive). Omit for no maximum. Must be >= min_value when both are provided. Should be <= signal's range.max if defined.
             *
             * @return float|null
             */
            public function getMaxValue(): ?float
            {
                return $this->_rawModelDataInput['max_value'] ?? null;
            }

            /**
             * Set the value of max_value.
             *
             * @param float $maxValue Maximum value (inclusive). Omit for no maximum. Must be >= min_value when both are provided. Should be <= signal's range.max if defined.
             *
             * {@link GetProductsRequest_ItemOfArraySignal_Targeting0f5bb047709f03ceb1cbfb035822362a::processMaxValue}
             * 
             *
             * @return static
             */
            public function setMaxValue(
                float $maxValue
            ): static {
                if (array_key_exists('max_value', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['max_value'] === $maxValue
                ) {
                    return $this;
                }

                $value = $modelData['max_value'] = $maxValue;

                

                

                $this->_rawModelDataInput['max_value'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
