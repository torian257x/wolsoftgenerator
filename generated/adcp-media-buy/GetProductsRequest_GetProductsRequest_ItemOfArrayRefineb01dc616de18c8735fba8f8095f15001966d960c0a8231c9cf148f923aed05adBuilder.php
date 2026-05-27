<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;

    use AdCP\MediaBuy\Enums\GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001966d960c0a8231c9cf148f923aed05adAction;


/**
 * Builder class for GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001966d960c0a8231c9cf148f923aed05ad
 */
class GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001966d960c0a8231c9cf148f923aed05adBuilder implements BuilderInterface
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
     * Set up a new instance of GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001966d960c0a8231c9cf148f923aed05ad with fully validated properties
     */
    public function validate(): GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001966d960c0a8231c9cf148f923aed05ad
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001966d960c0a8231c9cf148f923aed05ad($this->_rawModelDataInput);
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
             * Change scoped to a specific proposal.
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
             * @param string $scope Change scoped to a specific proposal.
             *
             * {@link GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001966d960c0a8231c9cf148f923aed05ad::processScope}
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
             * @param string $proposalId Proposal ID from a previous get_products response.
             *
             * {@link GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001966d960c0a8231c9cf148f923aed05ad::processProposalId}
             * 
             *
             * @return static
             */
            public function setProposalId(
                string $proposalId
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
        
    
        
            /**
             * Get the value of action.
             *
             * 'include' (default): return this proposal with updated allocations and pricing. 'omit': exclude this proposal from the response. 'finalize': request firm pricing and inventory hold — transitions a draft proposal to committed with an expires_at hold window. May trigger seller-side approval (HITL). The buyer should not set a time_budget for finalize requests — they represent a commitment to wait for the result. Optional — when omitted, the seller treats the entry as action: 'include'.

Finalize is exclusive within the parent `refine[]` array: see the array-level description for the finalize-exclusivity rule (mixing finalize with non-finalize entries is rejected) and multi-finalize atomicity contract.
             *
             * @return string|GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001966d960c0a8231c9cf148f923aed05adAction|null
             */
            public function getAction(): string | GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001966d960c0a8231c9cf148f923aed05adAction | null
            {
                return $this->_rawModelDataInput['action'] ?? null;
            }

            /**
             * Set the value of action.
             *
             * @param string|GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001966d960c0a8231c9cf148f923aed05adAction|null $action 'include' (default): return this proposal with updated allocations and pricing. 'omit': exclude this proposal from the response. 'finalize': request firm pricing and inventory hold — transitions a draft proposal to committed with an expires_at hold window. May trigger seller-side approval (HITL). The buyer should not set a time_budget for finalize requests — they represent a commitment to wait for the result. Optional — when omitted, the seller treats the entry as action: 'include'.

Finalize is exclusive within the parent `refine[]` array: see the array-level description for the finalize-exclusivity rule (mixing finalize with non-finalize entries is rejected) and multi-finalize atomicity contract.
             *
             * {@link GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001966d960c0a8231c9cf148f923aed05ad::processAction}
             * 
             *
             * @return static
             */
            public function setAction(
                string | GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001966d960c0a8231c9cf148f923aed05adAction | null $action
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
             * Get the value of ask.
             *
             * What the buyer is asking for on this proposal (e.g., 'shift more budget toward video', 'reduce total by 10%'). Ignored when action is 'omit'.
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
             * @param string $ask What the buyer is asking for on this proposal (e.g., 'shift more budget toward video', 'reduce total by 10%'). Ignored when action is 'omit'.
             *
             * {@link GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001966d960c0a8231c9cf148f923aed05ad::processAsk}
             * 
             *
             * @return static
             */
            public function setAsk(
                string $ask
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
        
    
}

// @codeCoverageIgnoreEnd
