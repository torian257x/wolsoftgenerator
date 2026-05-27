<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Builder class for GetProductsRequest_AccountReference
 */
class GetProductsRequest_AccountReferenceBuilder implements BuilderInterface
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
     * Set up a new instance of GetProductsRequest_AccountReference with fully validated properties
     */
    public function validate(): GetProductsRequest_AccountReference
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetProductsRequest_AccountReference($this->_rawModelDataInput);
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
             * @param string|null $accountId Seller-assigned account identifier (from sync_accounts or list_accounts)
             *
             * {@link GetProductsRequest_AccountReference::processAccountId}
             * 
             *
             * @return static
             */
            public function setAccountId(
                ?string $accountId
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
        
    
        
            /**
             * Get the value of brand.
             *
             * Brand reference identifying the advertiser
             *
             * @return GetProductsRequest_BrandReference|GetProductsRequest_BrandReferenceBuilder|array|null
             */
            public function getBrand(): mixed
            {
                return $this->_rawModelDataInput['brand'] ?? null;
            }

            /**
             * Set the value of brand.
             *
             * @param GetProductsRequest_BrandReference|GetProductsRequest_BrandReferenceBuilder|array $brand Brand reference identifying the advertiser
             *
             * {@link GetProductsRequest_AccountReference::processBrand}
             * 
             *
             * @return static
             */
            public function setBrand(
                mixed $brand
            ): static {
                if (array_key_exists('brand', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['brand'] === $brand
                ) {
                    return $this;
                }

                $value = $modelData['brand'] = $brand;

                

                

                $this->_rawModelDataInput['brand'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of operator.
             *
             * Domain of the entity operating on the brand's behalf. When the brand operates directly, this is the brand's domain.
             *
             * @return string|null
             */
            public function getOperator(): ?string
            {
                return $this->_rawModelDataInput['operator'] ?? null;
            }

            /**
             * Set the value of operator.
             *
             * @param string|null $operator Domain of the entity operating on the brand's behalf. When the brand operates directly, this is the brand's domain.
             *
             * {@link GetProductsRequest_AccountReference::processOperator}
             * 
             *
             * @return static
             */
            public function setOperator(
                ?string $operator
            ): static {
                if (array_key_exists('operator', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['operator'] === $operator
                ) {
                    return $this;
                }

                $value = $modelData['operator'] = $operator;

                

                

                $this->_rawModelDataInput['operator'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of sandbox.
             *
             * When true, references the sandbox account for this brand/operator pair. Defaults to false (production account).
             *
             * @return bool|null
             */
            public function getSandbox(): ?bool
            {
                return $this->_rawModelDataInput['sandbox'] ?? null;
            }

            /**
             * Set the value of sandbox.
             *
             * @param bool|null $sandbox When true, references the sandbox account for this brand/operator pair. Defaults to false (production account).
             *
             * {@link GetProductsRequest_AccountReference::processSandbox}
             * 
             *
             * @return static
             */
            public function setSandbox(
                ?bool $sandbox
            ): static {
                if (array_key_exists('sandbox', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['sandbox'] === $sandbox
                ) {
                    return $this;
                }

                $value = $modelData['sandbox'] = $sandbox;

                

                

                $this->_rawModelDataInput['sandbox'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
