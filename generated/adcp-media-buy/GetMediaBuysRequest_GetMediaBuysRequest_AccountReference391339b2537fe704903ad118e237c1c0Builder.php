<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Builder class for GetMediaBuysRequest_GetMediaBuysRequest_AccountReference391339b2537fe704903ad118e237c1c0
 */
class GetMediaBuysRequest_GetMediaBuysRequest_AccountReference391339b2537fe704903ad118e237c1c0Builder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuysRequest_GetMediaBuysRequest_AccountReference391339b2537fe704903ad118e237c1c0 with fully validated properties
     */
    public function validate(): GetMediaBuysRequest_GetMediaBuysRequest_AccountReference391339b2537fe704903ad118e237c1c0
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysRequest_GetMediaBuysRequest_AccountReference391339b2537fe704903ad118e237c1c0($this->_rawModelDataInput);
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
             * Get the value of account_id.
             *
             * Seller-assigned account identifier (from sync_accounts or list_accounts)
             *
             * @return string|null
             */
            public function getAccountId(): ?string
            {
                return $this->_rawModelDataInput['account_id'] ?? null;
            }

            /**
             * Set the value of account_id.
             *
             * @param string $accountId Seller-assigned account identifier (from sync_accounts or list_accounts)
             *
             * {@link GetMediaBuysRequest_GetMediaBuysRequest_AccountReference391339b2537fe704903ad118e237c1c0::processAccountId}
             * 
             *
             * @return static
             */
            public function setAccountId(
                string $accountId
            ): static {
                if (array_key_exists('account_id', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['account_id'] === $accountId
                ) {
                    return $this;
                }

                $value = $modelData['account_id'] = $accountId;

                

                

                $this->_rawModelDataInput['account_id'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
