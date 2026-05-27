<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Builder class for GetProductsRequest_Budget_Range9a5faf71cc0e8f31ae0cf0b4eca9f2ea
 */
class GetProductsRequest_Budget_Range9a5faf71cc0e8f31ae0cf0b4eca9f2eaBuilder implements BuilderInterface
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
     * Set up a new instance of GetProductsRequest_Budget_Range9a5faf71cc0e8f31ae0cf0b4eca9f2ea with fully validated properties
     */
    public function validate(): GetProductsRequest_Budget_Range9a5faf71cc0e8f31ae0cf0b4eca9f2ea
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetProductsRequest_Budget_Range9a5faf71cc0e8f31ae0cf0b4eca9f2ea($this->_rawModelDataInput);
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
             * Get the value of min.
             *
             * Minimum budget amount
             *
             * @return float|null
             */
            public function getMin(): ?float
            {
                return $this->_rawModelDataInput['min'] ?? null;
            }

            /**
             * Set the value of min.
             *
             * @param float $min Minimum budget amount
             *
             * {@link GetProductsRequest_Budget_Range9a5faf71cc0e8f31ae0cf0b4eca9f2ea::processMin}
             * 
             *
             * @return static
             */
            public function setMin(
                float $min
            ): static {
                if (array_key_exists('min', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['min'] === $min
                ) {
                    return $this;
                }

                $value = $modelData['min'] = $min;

                

                

                $this->_rawModelDataInput['min'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of max.
             *
             * Maximum budget amount
             *
             * @return float|null
             */
            public function getMax(): ?float
            {
                return $this->_rawModelDataInput['max'] ?? null;
            }

            /**
             * Set the value of max.
             *
             * @param float $max Maximum budget amount
             *
             * {@link GetProductsRequest_Budget_Range9a5faf71cc0e8f31ae0cf0b4eca9f2ea::processMax}
             * 
             *
             * @return static
             */
            public function setMax(
                float $max
            ): static {
                if (array_key_exists('max', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['max'] === $max
                ) {
                    return $this;
                }

                $value = $modelData['max'] = $max;

                

                

                $this->_rawModelDataInput['max'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of currency.
             *
             * ISO 4217 currency code (e.g., 'USD', 'EUR', 'GBP')
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
             * @param string $currency ISO 4217 currency code (e.g., 'USD', 'EUR', 'GBP')
             *
             * {@link GetProductsRequest_Budget_Range9a5faf71cc0e8f31ae0cf0b4eca9f2ea::processCurrency}
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
        
    
}

// @codeCoverageIgnoreEnd
