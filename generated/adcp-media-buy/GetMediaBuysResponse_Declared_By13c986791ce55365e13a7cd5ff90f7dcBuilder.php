<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_Declared_By13c986791ce55365e13a7cd5ff90f7dcRole;


/**
 * Builder class for GetMediaBuysResponse_Declared_By13c986791ce55365e13a7cd5ff90f7dc
 */
class GetMediaBuysResponse_Declared_By13c986791ce55365e13a7cd5ff90f7dcBuilder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuysResponse_Declared_By13c986791ce55365e13a7cd5ff90f7dc with fully validated properties
     */
    public function validate(): GetMediaBuysResponse_Declared_By13c986791ce55365e13a7cd5ff90f7dc
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysResponse_Declared_By13c986791ce55365e13a7cd5ff90f7dc($this->_rawModelDataInput);
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
             * URL of the agent or service that declared this provenance
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
             * @param string $agentUrl URL of the agent or service that declared this provenance
             *
             * {@link GetMediaBuysResponse_Declared_By13c986791ce55365e13a7cd5ff90f7dc::processAgentUrl}
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
             * Get the value of role.
             *
             * Role of the declaring party in the supply chain
             *
             * @return string|GetMediaBuysResponse_Declared_By13c986791ce55365e13a7cd5ff90f7dcRole|null
             */
            public function getRole(): string | GetMediaBuysResponse_Declared_By13c986791ce55365e13a7cd5ff90f7dcRole | null
            {
                return $this->_rawModelDataInput['role'] ?? null;
            }

            /**
             * Set the value of role.
             *
             * @param string|GetMediaBuysResponse_Declared_By13c986791ce55365e13a7cd5ff90f7dcRole $role Role of the declaring party in the supply chain
             *
             * {@link GetMediaBuysResponse_Declared_By13c986791ce55365e13a7cd5ff90f7dc::processRole}
             * 
             *
             * @return static
             */
            public function setRole(
                string | GetMediaBuysResponse_Declared_By13c986791ce55365e13a7cd5ff90f7dcRole $role
            ): static {
                if (array_key_exists('role', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['role'] === $role
                ) {
                    return $this;
                }

                $value = $modelData['role'] = $role;

                

                

                $this->_rawModelDataInput['role'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
