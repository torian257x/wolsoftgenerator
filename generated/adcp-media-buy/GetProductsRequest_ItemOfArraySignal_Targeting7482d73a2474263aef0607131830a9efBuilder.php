<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Builder class for GetProductsRequest_ItemOfArraySignal_Targeting7482d73a2474263aef0607131830a9ef
 */
class GetProductsRequest_ItemOfArraySignal_Targeting7482d73a2474263aef0607131830a9efBuilder implements BuilderInterface
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
     * Set up a new instance of GetProductsRequest_ItemOfArraySignal_Targeting7482d73a2474263aef0607131830a9ef with fully validated properties
     */
    public function validate(): GetProductsRequest_ItemOfArraySignal_Targeting7482d73a2474263aef0607131830a9ef
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetProductsRequest_ItemOfArraySignal_Targeting7482d73a2474263aef0607131830a9ef($this->_rawModelDataInput);
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
             * {@link GetProductsRequest_ItemOfArraySignal_Targeting7482d73a2474263aef0607131830a9ef::processSignalId}
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
             * Discriminator for binary signals
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
             * @param string $valueType Discriminator for binary signals
             *
             * {@link GetProductsRequest_ItemOfArraySignal_Targeting7482d73a2474263aef0607131830a9ef::processValueType}
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
             * Get the value of value.
             *
             * Whether to include (true) or exclude (false) users matching this signal
             *
             * @return bool|null
             */
            public function getValue(): ?bool
            {
                return $this->_rawModelDataInput['value'] ?? null;
            }

            /**
             * Set the value of value.
             *
             * @param bool $value Whether to include (true) or exclude (false) users matching this signal
             *
             * {@link GetProductsRequest_ItemOfArraySignal_Targeting7482d73a2474263aef0607131830a9ef::processValue}
             * 
             *
             * @return static
             */
            public function setValue(
                bool $value
            ): static {
                if (array_key_exists('value', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['value'] === $value
                ) {
                    return $this;
                }

                $value = $modelData['value'] = $value;

                

                

                $this->_rawModelDataInput['value'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
