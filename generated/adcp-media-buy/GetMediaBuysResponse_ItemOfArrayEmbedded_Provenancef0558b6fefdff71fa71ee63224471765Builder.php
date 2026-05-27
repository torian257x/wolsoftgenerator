<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;

    use AdCP\MediaBuy\Enums\EmbeddedProvenanceMethod;


/**
 * Builder class for GetMediaBuysResponse_ItemOfArrayEmbedded_Provenancef0558b6fefdff71fa71ee63224471765
 */
class GetMediaBuysResponse_ItemOfArrayEmbedded_Provenancef0558b6fefdff71fa71ee63224471765Builder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuysResponse_ItemOfArrayEmbedded_Provenancef0558b6fefdff71fa71ee63224471765 with fully validated properties
     */
    public function validate(): GetMediaBuysResponse_ItemOfArrayEmbedded_Provenancef0558b6fefdff71fa71ee63224471765
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysResponse_ItemOfArrayEmbedded_Provenancef0558b6fefdff71fa71ee63224471765($this->_rawModelDataInput);
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
             * Get the value of method.
             *
             * How provenance data is carried within the content
             *
             * @return string|EmbeddedProvenanceMethod|null
             */
            public function getMethod(): string | EmbeddedProvenanceMethod | null
            {
                return $this->_rawModelDataInput['method'] ?? null;
            }

            /**
             * Set the value of method.
             *
             * @param string|EmbeddedProvenanceMethod $method How provenance data is carried within the content
             *
             * {@link GetMediaBuysResponse_ItemOfArrayEmbedded_Provenancef0558b6fefdff71fa71ee63224471765::processMethod}
             * 
             *
             * @return static
             */
            public function setMethod(
                string | EmbeddedProvenanceMethod $method
            ): static {
                if (array_key_exists('method', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['method'] === $method
                ) {
                    return $this;
                }

                $value = $modelData['method'] = $method;

                

                

                $this->_rawModelDataInput['method'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of standard.
             *
             * Standard the embedding conforms to, if any (e.g., 'c2pa' for C2PA Section A.7 text manifest embedding)
             *
             * @return string|null
             */
            public function getStandard(): ?string
            {
                return $this->_rawModelDataInput['standard'] ?? null;
            }

            /**
             * Set the value of standard.
             *
             * @param string $standard Standard the embedding conforms to, if any (e.g., 'c2pa' for C2PA Section A.7 text manifest embedding)
             *
             * {@link GetMediaBuysResponse_ItemOfArrayEmbedded_Provenancef0558b6fefdff71fa71ee63224471765::processStandard}
             * 
             *
             * @return static
             */
            public function setStandard(
                string $standard
            ): static {
                if (array_key_exists('standard', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['standard'] === $standard
                ) {
                    return $this;
                }

                $value = $modelData['standard'] = $standard;

                

                

                $this->_rawModelDataInput['standard'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of provider.
             *
             * Organization that performed the embedding (e.g., 'Encypher', 'Digimarc'). Display label and audit context — not a wire identifier.
             *
             * @return string|null
             */
            public function getProvider(): ?string
            {
                return $this->_rawModelDataInput['provider'] ?? null;
            }

            /**
             * Set the value of provider.
             *
             * @param string $provider Organization that performed the embedding (e.g., 'Encypher', 'Digimarc'). Display label and audit context — not a wire identifier.
             *
             * {@link GetMediaBuysResponse_ItemOfArrayEmbedded_Provenancef0558b6fefdff71fa71ee63224471765::processProvider}
             * 
             *
             * @return static
             */
            public function setProvider(
                string $provider
            ): static {
                if (array_key_exists('provider', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['provider'] === $provider
                ) {
                    return $this;
                }

                $value = $modelData['provider'] = $provider;

                

                

                $this->_rawModelDataInput['provider'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of verify_agent.
             *
             * Buyer's representation that this embedding can be verified by a governance agent on the seller's `creative_policy.accepted_verifiers` list. The `agent_url` MUST match (canonicalized) one of the seller's published `accepted_verifiers[].agent_url` entries; sellers reject `sync_creatives` submissions whose `verify_agent.agent_url` is off-list with `PROVENANCE_VERIFIER_NOT_ACCEPTED`. This is buyer-supplied evidence, not buyer-driven routing — the seller is the verifier-of-record and the seller controls which agent it actually calls (the seller MAY use a different on-list agent if it determines this is more appropriate; the seller does not call buyer-asserted endpoints outside its allowlist). MAY be omitted for self-verifiable embeddings (e.g., a C2PA text manifest with a public key the seller already trusts).
             *
             * @return GetMediaBuysResponse_Verify_Agent11ee1aca01d22040a3e2f23ff22c68b5|GetMediaBuysResponse_Verify_Agent11ee1aca01d22040a3e2f23ff22c68b5Builder|array|null
             */
            public function getVerifyAgent(): mixed
            {
                return $this->_rawModelDataInput['verify_agent'] ?? null;
            }

            /**
             * Set the value of verify_agent.
             *
             * @param GetMediaBuysResponse_Verify_Agent11ee1aca01d22040a3e2f23ff22c68b5|GetMediaBuysResponse_Verify_Agent11ee1aca01d22040a3e2f23ff22c68b5Builder|array $verifyAgent Buyer's representation that this embedding can be verified by a governance agent on the seller's `creative_policy.accepted_verifiers` list. The `agent_url` MUST match (canonicalized) one of the seller's published `accepted_verifiers[].agent_url` entries; sellers reject `sync_creatives` submissions whose `verify_agent.agent_url` is off-list with `PROVENANCE_VERIFIER_NOT_ACCEPTED`. This is buyer-supplied evidence, not buyer-driven routing — the seller is the verifier-of-record and the seller controls which agent it actually calls (the seller MAY use a different on-list agent if it determines this is more appropriate; the seller does not call buyer-asserted endpoints outside its allowlist). MAY be omitted for self-verifiable embeddings (e.g., a C2PA text manifest with a public key the seller already trusts).
             *
             * {@link GetMediaBuysResponse_ItemOfArrayEmbedded_Provenancef0558b6fefdff71fa71ee63224471765::processVerifyAgent}
             * 
             *
             * @return static
             */
            public function setVerifyAgent(
                mixed $verifyAgent
            ): static {
                if (array_key_exists('verify_agent', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['verify_agent'] === $verifyAgent
                ) {
                    return $this;
                }

                $value = $modelData['verify_agent'] = $verifyAgent;

                

                

                $this->_rawModelDataInput['verify_agent'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of embedded_at.
             *
             * When the provenance data was embedded (ISO 8601)
             *
             * @return string|null
             */
            public function getEmbeddedAt(): ?string
            {
                return $this->_rawModelDataInput['embedded_at'] ?? null;
            }

            /**
             * Set the value of embedded_at.
             *
             * @param string $embeddedAt When the provenance data was embedded (ISO 8601)
             *
             * {@link GetMediaBuysResponse_ItemOfArrayEmbedded_Provenancef0558b6fefdff71fa71ee63224471765::processEmbeddedAt}
             * 
             *
             * @return static
             */
            public function setEmbeddedAt(
                string $embeddedAt
            ): static {
                if (array_key_exists('embedded_at', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['embedded_at'] === $embeddedAt
                ) {
                    return $this;
                }

                $value = $modelData['embedded_at'] = $embeddedAt;

                

                

                $this->_rawModelDataInput['embedded_at'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
