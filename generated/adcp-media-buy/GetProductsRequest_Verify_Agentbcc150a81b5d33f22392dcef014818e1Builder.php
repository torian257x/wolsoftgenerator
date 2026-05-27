<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Builder class for GetProductsRequest_Verify_Agentbcc150a81b5d33f22392dcef014818e1
 */
class GetProductsRequest_Verify_Agentbcc150a81b5d33f22392dcef014818e1Builder implements BuilderInterface
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
     * Set up a new instance of GetProductsRequest_Verify_Agentbcc150a81b5d33f22392dcef014818e1 with fully validated properties
     */
    public function validate(): GetProductsRequest_Verify_Agentbcc150a81b5d33f22392dcef014818e1
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetProductsRequest_Verify_Agentbcc150a81b5d33f22392dcef014818e1($this->_rawModelDataInput);
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
             * Get the value of agent_url.
             *
             * URL of the governance agent the buyer represents was used to apply/detect this watermark. MUST use the `https://` scheme and MUST appear in the seller's `creative_policy.accepted_verifiers[].agent_url` list (canonicalized per /docs/reference/url-canonicalization: lowercase scheme and host, strip default port, normalize path dot-segments). Sellers MUST NOT call this URL until the canonicalized match is confirmed.
             *
             * @return string|null
             */
            public function getAgentUrl(): ?string
            {
                return $this->_rawModelDataInput['agent_url'] ?? null;
            }

            /**
             * Set the value of agent_url.
             *
             * @param string $agentUrl URL of the governance agent the buyer represents was used to apply/detect this watermark. MUST use the `https://` scheme and MUST appear in the seller's `creative_policy.accepted_verifiers[].agent_url` list (canonicalized per /docs/reference/url-canonicalization: lowercase scheme and host, strip default port, normalize path dot-segments). Sellers MUST NOT call this URL until the canonicalized match is confirmed.
             *
             * {@link GetProductsRequest_Verify_Agentbcc150a81b5d33f22392dcef014818e1::processAgentUrl}
             * 
             *
             * @return static
             */
            public function setAgentUrl(
                string $agentUrl
            ): static {
                if (array_key_exists('agent_url', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['agent_url'] === $agentUrl
                ) {
                    return $this;
                }

                $value = $modelData['agent_url'] = $agentUrl;

                

                

                $this->_rawModelDataInput['agent_url'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of feature_id.
             *
             * Optional `feature_id` the buyer represents the seller should request via `get_creative_features` (e.g., `imatag.watermark_detected`). SHOULD match the `feature_id` declared on the matching `accepted_verifiers[]` entry, or be omitted to defer the selector to the seller. When the seller's entry pins a `feature_id`, that value wins; when neither side pins, the seller selects from the agent's `governance.creative_features` catalog.
             *
             * @return string|null
             */
            public function getFeatureId(): ?string
            {
                return $this->_rawModelDataInput['feature_id'] ?? null;
            }

            /**
             * Set the value of feature_id.
             *
             * @param string $featureId Optional `feature_id` the buyer represents the seller should request via `get_creative_features` (e.g., `imatag.watermark_detected`). SHOULD match the `feature_id` declared on the matching `accepted_verifiers[]` entry, or be omitted to defer the selector to the seller. When the seller's entry pins a `feature_id`, that value wins; when neither side pins, the seller selects from the agent's `governance.creative_features` catalog.
             *
             * {@link GetProductsRequest_Verify_Agentbcc150a81b5d33f22392dcef014818e1::processFeatureId}
             * 
             *
             * @return static
             */
            public function setFeatureId(
                string $featureId
            ): static {
                if (array_key_exists('feature_id', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['feature_id'] === $featureId
                ) {
                    return $this;
                }

                $value = $modelData['feature_id'] = $featureId;

                

                

                $this->_rawModelDataInput['feature_id'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
