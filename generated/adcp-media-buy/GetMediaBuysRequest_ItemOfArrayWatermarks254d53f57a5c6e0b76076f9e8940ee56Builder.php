<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;

    use AdCP\MediaBuy\Enums\WatermarkMediaType;

    use AdCP\MediaBuy\Enums\C2PAWatermarkAction;


/**
 * Builder class for GetMediaBuysRequest_ItemOfArrayWatermarks254d53f57a5c6e0b76076f9e8940ee56
 */
class GetMediaBuysRequest_ItemOfArrayWatermarks254d53f57a5c6e0b76076f9e8940ee56Builder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuysRequest_ItemOfArrayWatermarks254d53f57a5c6e0b76076f9e8940ee56 with fully validated properties
     */
    public function validate(): GetMediaBuysRequest_ItemOfArrayWatermarks254d53f57a5c6e0b76076f9e8940ee56
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysRequest_ItemOfArrayWatermarks254d53f57a5c6e0b76076f9e8940ee56($this->_rawModelDataInput);
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
             * Get the value of media_type.
             *
             * Media category of the watermarked content
             *
             * @return string|WatermarkMediaType|null
             */
            public function getMediaType(): string | WatermarkMediaType | null
            {
                return $this->_rawModelDataInput['media_type'] ?? null;
            }

            /**
             * Set the value of media_type.
             *
             * @param string|WatermarkMediaType $mediaType Media category of the watermarked content
             *
             * {@link GetMediaBuysRequest_ItemOfArrayWatermarks254d53f57a5c6e0b76076f9e8940ee56::processMediaType}
             * 
             *
             * @return static
             */
            public function setMediaType(
                string | WatermarkMediaType $mediaType
            ): static {
                if (array_key_exists('media_type', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['media_type'] === $mediaType
                ) {
                    return $this;
                }

                $value = $modelData['media_type'] = $mediaType;

                

                

                $this->_rawModelDataInput['media_type'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of provider.
             *
             * Organization that applied the watermark (e.g., 'Imatag', 'Steg.AI', 'Encypher'). Display label and audit context — not a wire identifier.
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
             * @param string $provider Organization that applied the watermark (e.g., 'Imatag', 'Steg.AI', 'Encypher'). Display label and audit context — not a wire identifier.
             *
             * {@link GetMediaBuysRequest_ItemOfArrayWatermarks254d53f57a5c6e0b76076f9e8940ee56::processProvider}
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
             * Buyer's representation that this watermark can be detected by a governance agent on the seller's `creative_policy.accepted_verifiers` list. The `agent_url` MUST match (canonicalized) one of the seller's published `accepted_verifiers[].agent_url` entries; sellers reject `sync_creatives` submissions whose `verify_agent.agent_url` is off-list with `PROVENANCE_VERIFIER_NOT_ACCEPTED`. This is buyer-supplied evidence, not buyer-driven routing — the seller is the verifier-of-record and the seller controls which agent it actually calls (the seller MAY use a different on-list agent if it determines this is more appropriate; the seller does not call buyer-asserted endpoints outside its allowlist).
             *
             * @return GetMediaBuysRequest_Verify_Agentbcc150a81b5d33f22392dcef014818e1|GetMediaBuysRequest_Verify_Agentbcc150a81b5d33f22392dcef014818e1Builder|array|null
             */
            public function getVerifyAgent(): mixed
            {
                return $this->_rawModelDataInput['verify_agent'] ?? null;
            }

            /**
             * Set the value of verify_agent.
             *
             * @param GetMediaBuysRequest_Verify_Agentbcc150a81b5d33f22392dcef014818e1|GetMediaBuysRequest_Verify_Agentbcc150a81b5d33f22392dcef014818e1Builder|array $verifyAgent Buyer's representation that this watermark can be detected by a governance agent on the seller's `creative_policy.accepted_verifiers` list. The `agent_url` MUST match (canonicalized) one of the seller's published `accepted_verifiers[].agent_url` entries; sellers reject `sync_creatives` submissions whose `verify_agent.agent_url` is off-list with `PROVENANCE_VERIFIER_NOT_ACCEPTED`. This is buyer-supplied evidence, not buyer-driven routing — the seller is the verifier-of-record and the seller controls which agent it actually calls (the seller MAY use a different on-list agent if it determines this is more appropriate; the seller does not call buyer-asserted endpoints outside its allowlist).
             *
             * {@link GetMediaBuysRequest_ItemOfArrayWatermarks254d53f57a5c6e0b76076f9e8940ee56::processVerifyAgent}
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
             * Get the value of c2pa_action.
             *
             * C2PA action classification for this watermark
             *
             * @return string|C2PAWatermarkAction|null
             */
            public function getC2paAction(): string | C2PAWatermarkAction | null
            {
                return $this->_rawModelDataInput['c2pa_action'] ?? null;
            }

            /**
             * Set the value of c2pa_action.
             *
             * @param string|C2PAWatermarkAction|null $c2paAction C2PA action classification for this watermark
             *
             * {@link GetMediaBuysRequest_ItemOfArrayWatermarks254d53f57a5c6e0b76076f9e8940ee56::processC2paAction}
             * 
             *
             * @return static
             */
            public function setC2paAction(
                string | C2PAWatermarkAction | null $c2paAction
            ): static {
                if (array_key_exists('c2pa_action', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['c2pa_action'] === $c2paAction
                ) {
                    return $this;
                }

                $value = $modelData['c2pa_action'] = $c2paAction;

                

                

                $this->_rawModelDataInput['c2pa_action'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of embedded_at.
             *
             * When the watermark was applied (ISO 8601)
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
             * @param string $embeddedAt When the watermark was applied (ISO 8601)
             *
             * {@link GetMediaBuysRequest_ItemOfArrayWatermarks254d53f57a5c6e0b76076f9e8940ee56::processEmbeddedAt}
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
