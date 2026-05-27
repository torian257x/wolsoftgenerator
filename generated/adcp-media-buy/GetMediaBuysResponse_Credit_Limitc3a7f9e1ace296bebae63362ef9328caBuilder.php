<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Builder class for GetMediaBuysResponse_Credit_Limitc3a7f9e1ace296bebae63362ef9328ca
 */
class GetMediaBuysResponse_Credit_Limitc3a7f9e1ace296bebae63362ef9328caBuilder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuysResponse_Credit_Limitc3a7f9e1ace296bebae63362ef9328ca with fully validated properties
     */
    public function validate(): GetMediaBuysResponse_Credit_Limitc3a7f9e1ace296bebae63362ef9328ca
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysResponse_Credit_Limitc3a7f9e1ace296bebae63362ef9328ca($this->_rawModelDataInput);
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
             * Get the value of amount.
             *
             * 
             *
             * @return float|null
             */
            public function getAmount(): ?float
            {
                return $this->_rawModelDataInput['amount'] ?? null;
            }

            /**
             * Set the value of amount.
             *
             * @param float $amount
             *
             * {@link GetMediaBuysResponse_Credit_Limitc3a7f9e1ace296bebae63362ef9328ca::processAmount}
             * 
             *
             * @return static
             */
            public function setAmount(
                float $amount
            ): static {
                if (array_key_exists('amount', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['amount'] === $amount
                ) {
                    return $this;
                }

                $value = $modelData['amount'] = $amount;

                

                

                $this->_rawModelDataInput['amount'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of currency.
             *
             * 
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
             * @param string $currency
             *
             * {@link GetMediaBuysResponse_Credit_Limitc3a7f9e1ace296bebae63362ef9328ca::processCurrency}
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
