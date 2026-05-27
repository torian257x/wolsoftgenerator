<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Builder class for GetMediaBuysResponse_Banke8908433f3ff603c931cb623bb3be765
 */
class GetMediaBuysResponse_Banke8908433f3ff603c931cb623bb3be765Builder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuysResponse_Banke8908433f3ff603c931cb623bb3be765 with fully validated properties
     */
    public function validate(): GetMediaBuysResponse_Banke8908433f3ff603c931cb623bb3be765
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysResponse_Banke8908433f3ff603c931cb623bb3be765($this->_rawModelDataInput);
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
             * Get the value of account_holder.
             *
             * Name on the bank account
             *
             * @return string|null
             */
            public function getAccountHolder(): ?string
            {
                return $this->_rawModelDataInput['account_holder'] ?? null;
            }

            /**
             * Set the value of account_holder.
             *
             * @param string $accountHolder Name on the bank account
             *
             * {@link GetMediaBuysResponse_Banke8908433f3ff603c931cb623bb3be765::processAccountHolder}
             * 
             *
             * @return static
             */
            public function setAccountHolder(
                string $accountHolder
            ): static {
                if (array_key_exists('account_holder', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['account_holder'] === $accountHolder
                ) {
                    return $this;
                }

                $value = $modelData['account_holder'] = $accountHolder;

                

                

                $this->_rawModelDataInput['account_holder'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of iban.
             *
             * International Bank Account Number (SEPA markets)
             *
             * @return string|null
             */
            public function getIban(): ?string
            {
                return $this->_rawModelDataInput['iban'] ?? null;
            }

            /**
             * Set the value of iban.
             *
             * @param string $iban International Bank Account Number (SEPA markets)
             *
             * {@link GetMediaBuysResponse_Banke8908433f3ff603c931cb623bb3be765::processIban}
             * 
             *
             * @return static
             */
            public function setIban(
                string $iban
            ): static {
                if (array_key_exists('iban', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['iban'] === $iban
                ) {
                    return $this;
                }

                $value = $modelData['iban'] = $iban;

                

                

                $this->_rawModelDataInput['iban'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of bic.
             *
             * Bank Identifier Code / SWIFT code (SEPA markets)
             *
             * @return string|null
             */
            public function getBic(): ?string
            {
                return $this->_rawModelDataInput['bic'] ?? null;
            }

            /**
             * Set the value of bic.
             *
             * @param string $bic Bank Identifier Code / SWIFT code (SEPA markets)
             *
             * {@link GetMediaBuysResponse_Banke8908433f3ff603c931cb623bb3be765::processBic}
             * 
             *
             * @return static
             */
            public function setBic(
                string $bic
            ): static {
                if (array_key_exists('bic', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['bic'] === $bic
                ) {
                    return $this;
                }

                $value = $modelData['bic'] = $bic;

                

                

                $this->_rawModelDataInput['bic'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of routing_number.
             *
             * Bank routing number for non-SEPA markets (e.g., US ABA routing number, Canadian transit/institution number)
             *
             * @return string|null
             */
            public function getRoutingNumber(): ?string
            {
                return $this->_rawModelDataInput['routing_number'] ?? null;
            }

            /**
             * Set the value of routing_number.
             *
             * @param string $routingNumber Bank routing number for non-SEPA markets (e.g., US ABA routing number, Canadian transit/institution number)
             *
             * {@link GetMediaBuysResponse_Banke8908433f3ff603c931cb623bb3be765::processRoutingNumber}
             * 
             *
             * @return static
             */
            public function setRoutingNumber(
                string $routingNumber
            ): static {
                if (array_key_exists('routing_number', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['routing_number'] === $routingNumber
                ) {
                    return $this;
                }

                $value = $modelData['routing_number'] = $routingNumber;

                

                

                $this->_rawModelDataInput['routing_number'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of account_number.
             *
             * Bank account number for non-SEPA markets
             *
             * @return string|null
             */
            public function getAccountNumber(): ?string
            {
                return $this->_rawModelDataInput['account_number'] ?? null;
            }

            /**
             * Set the value of account_number.
             *
             * @param string $accountNumber Bank account number for non-SEPA markets
             *
             * {@link GetMediaBuysResponse_Banke8908433f3ff603c931cb623bb3be765::processAccountNumber}
             * 
             *
             * @return static
             */
            public function setAccountNumber(
                string $accountNumber
            ): static {
                if (array_key_exists('account_number', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['account_number'] === $accountNumber
                ) {
                    return $this;
                }

                $value = $modelData['account_number'] = $accountNumber;

                

                

                $this->_rawModelDataInput['account_number'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
