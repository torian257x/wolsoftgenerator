<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;

    use AdCP\MediaBuy\Enums\GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001d5b392d89eb0397d01ef36b451045a72Action;


/**
 * Builder class for GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001
 */
class GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001Builder implements BuilderInterface
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
     * Set up a new instance of GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001 with fully validated properties
     */
    public function validate(): GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001($this->_rawModelDataInput);
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
             * Get the value of scope.
             *
             * Change scoped to the overall request — direction for the selection as a whole.
             *
             * @return string|null
             */
            public function getScope(): ?string
            {
                return $this->_rawModelDataInput['scope'] ?? null;
            }

            /**
             * Set the value of scope.
             *
             * @param string $scope Change scoped to the overall request — direction for the selection as a whole.
             *
             * {@link GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001::processScope}
             * 
             *
             * @return static
             */
            public function setScope(
                string $scope
            ): static {
                if (array_key_exists('scope', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['scope'] === $scope
                ) {
                    return $this;
                }

                $value = $modelData['scope'] = $scope;

                

                

                $this->_rawModelDataInput['scope'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of ask.
             *
             * What the buyer is asking for at the request level (e.g., 'more video options and less display', 'suggest how to combine these products').
             *
             * @return string|null
             */
            public function getAsk(): ?string
            {
                return $this->_rawModelDataInput['ask'] ?? null;
            }

            /**
             * Set the value of ask.
             *
             * @param string|null $ask What the buyer is asking for at the request level (e.g., 'more video options and less display', 'suggest how to combine these products').
             *
             * {@link GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001::processAsk}
             * 
             *
             * @return static
             */
            public function setAsk(
                ?string $ask
            ): static {
                if (array_key_exists('ask', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['ask'] === $ask
                ) {
                    return $this;
                }

                $value = $modelData['ask'] = $ask;

                

                

                $this->_rawModelDataInput['ask'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of product_id.
             *
             * Product ID from a previous get_products response.
             *
             * @return string|null
             */
            public function getProductId(): ?string
            {
                return $this->_rawModelDataInput['product_id'] ?? null;
            }

            /**
             * Set the value of product_id.
             *
             * @param string|null $productId Product ID from a previous get_products response.
             *
             * {@link GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001::processProductId}
             * 
             *
             * @return static
             */
            public function setProductId(
                ?string $productId
            ): static {
                if (array_key_exists('product_id', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['product_id'] === $productId
                ) {
                    return $this;
                }

                $value = $modelData['product_id'] = $productId;

                

                

                $this->_rawModelDataInput['product_id'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of action.
             *
             * 'include' (default): return this product with updated pricing and data. 'omit': exclude this product from the response. 'more_like_this': find additional products similar to this one (the original is also returned). Optional — when omitted, the seller treats the entry as action: 'include'.
             *
             * @return string|GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001d5b392d89eb0397d01ef36b451045a72Action|null
             */
            public function getAction(): string | GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001d5b392d89eb0397d01ef36b451045a72Action | null
            {
                return $this->_rawModelDataInput['action'] ?? null;
            }

            /**
             * Set the value of action.
             *
             * @param string|GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001d5b392d89eb0397d01ef36b451045a72Action|null $action 'include' (default): return this product with updated pricing and data. 'omit': exclude this product from the response. 'more_like_this': find additional products similar to this one (the original is also returned). Optional — when omitted, the seller treats the entry as action: 'include'.
             *
             * {@link GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001::processAction}
             * 
             *
             * @return static
             */
            public function setAction(
                string | GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001d5b392d89eb0397d01ef36b451045a72Action | null $action
            ): static {
                if (array_key_exists('action', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['action'] === $action
                ) {
                    return $this;
                }

                $value = $modelData['action'] = $action;

                

                

                $this->_rawModelDataInput['action'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of proposal_id.
             *
             * Proposal ID from a previous get_products response.
             *
             * @return string|null
             */
            public function getProposalId(): ?string
            {
                return $this->_rawModelDataInput['proposal_id'] ?? null;
            }

            /**
             * Set the value of proposal_id.
             *
             * @param string|null $proposalId Proposal ID from a previous get_products response.
             *
             * {@link GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001::processProposalId}
             * 
             *
             * @return static
             */
            public function setProposalId(
                ?string $proposalId
            ): static {
                if (array_key_exists('proposal_id', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['proposal_id'] === $proposalId
                ) {
                    return $this;
                }

                $value = $modelData['proposal_id'] = $proposalId;

                

                

                $this->_rawModelDataInput['proposal_id'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
