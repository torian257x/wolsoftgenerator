<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Builder class for GetProductsRequest_ItemOfArrayProviders1aae21f2a2f4e7d1b18a4961346ec6bf
 */
class GetProductsRequest_ItemOfArrayProviders1aae21f2a2f4e7d1b18a4961346ec6bfBuilder implements BuilderInterface
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
     * Set up a new instance of GetProductsRequest_ItemOfArrayProviders1aae21f2a2f4e7d1b18a4961346ec6bf with fully validated properties
     */
    public function validate(): GetProductsRequest_ItemOfArrayProviders1aae21f2a2f4e7d1b18a4961346ec6bf
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetProductsRequest_ItemOfArrayProviders1aae21f2a2f4e7d1b18a4961346ec6bf($this->_rawModelDataInput);
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
             * Provider's agent URL from the registry.
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
             * @param string $agentUrl Provider's agent URL from the registry.
             *
             * {@link GetProductsRequest_ItemOfArrayProviders1aae21f2a2f4e7d1b18a4961346ec6bf::processAgentUrl}
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
             * Get the value of context_match.
             *
             * When true, require this provider to support context match.
             *
             * @return bool|null
             */
            public function getContextMatch(): ?bool
            {
                return $this->_rawModelDataInput['context_match'] ?? null;
            }

            /**
             * Set the value of context_match.
             *
             * @param bool $contextMatch When true, require this provider to support context match.
             *
             * {@link GetProductsRequest_ItemOfArrayProviders1aae21f2a2f4e7d1b18a4961346ec6bf::processContextMatch}
             * 
             *
             * @return static
             */
            public function setContextMatch(
                bool $contextMatch
            ): static {
                if (array_key_exists('context_match', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['context_match'] === $contextMatch
                ) {
                    return $this;
                }

                $value = $modelData['context_match'] = $contextMatch;

                

                

                $this->_rawModelDataInput['context_match'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of identity_match.
             *
             * When true, require this provider to support identity match.
             *
             * @return bool|null
             */
            public function getIdentityMatch(): ?bool
            {
                return $this->_rawModelDataInput['identity_match'] ?? null;
            }

            /**
             * Set the value of identity_match.
             *
             * @param bool $identityMatch When true, require this provider to support identity match.
             *
             * {@link GetProductsRequest_ItemOfArrayProviders1aae21f2a2f4e7d1b18a4961346ec6bf::processIdentityMatch}
             * 
             *
             * @return static
             */
            public function setIdentityMatch(
                bool $identityMatch
            ): static {
                if (array_key_exists('identity_match', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['identity_match'] === $identityMatch
                ) {
                    return $this;
                }

                $value = $modelData['identity_match'] = $identityMatch;

                

                

                $this->_rawModelDataInput['identity_match'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
