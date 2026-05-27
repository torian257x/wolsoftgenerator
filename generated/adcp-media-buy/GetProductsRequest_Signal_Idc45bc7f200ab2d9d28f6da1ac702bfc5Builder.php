<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Builder class for GetProductsRequest_Signal_Idc45bc7f200ab2d9d28f6da1ac702bfc5
 */
class GetProductsRequest_Signal_Idc45bc7f200ab2d9d28f6da1ac702bfc5Builder implements BuilderInterface
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
     * Set up a new instance of GetProductsRequest_Signal_Idc45bc7f200ab2d9d28f6da1ac702bfc5 with fully validated properties
     */
    public function validate(): GetProductsRequest_Signal_Idc45bc7f200ab2d9d28f6da1ac702bfc5
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetProductsRequest_Signal_Idc45bc7f200ab2d9d28f6da1ac702bfc5($this->_rawModelDataInput);
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
             * Get the value of source.
             *
             * Discriminator indicating this signal is native to the agent (not from a data provider catalog)
             *
             * @return string|null
             */
            public function getSource(): ?string
            {
                return $this->_rawModelDataInput['source'] ?? null;
            }

            /**
             * Set the value of source.
             *
             * @param string $source Discriminator indicating this signal is native to the agent (not from a data provider catalog)
             *
             * {@link GetProductsRequest_Signal_Idc45bc7f200ab2d9d28f6da1ac702bfc5::processSource}
             * 
             *
             * @return static
             */
            public function setSource(
                string $source
            ): static {
                if (array_key_exists('source', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['source'] === $source
                ) {
                    return $this;
                }

                $value = $modelData['source'] = $source;

                

                

                $this->_rawModelDataInput['source'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of agent_url.
             *
             * URL of the signals agent that provides this signal (e.g., 'https://liveramp.com/.well-known/adcp/signals')
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
             * @param string $agentUrl URL of the signals agent that provides this signal (e.g., 'https://liveramp.com/.well-known/adcp/signals')
             *
             * {@link GetProductsRequest_Signal_Idc45bc7f200ab2d9d28f6da1ac702bfc5::processAgentUrl}
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
             * Get the value of id.
             *
             * Signal identifier within the agent's signal set (e.g., 'custom_auto_intenders')
             *
             * @return string|null
             */
            public function getId(): ?string
            {
                return $this->_rawModelDataInput['id'] ?? null;
            }

            /**
             * Set the value of id.
             *
             * @param string $id Signal identifier within the agent's signal set (e.g., 'custom_auto_intenders')
             *
             * {@link GetProductsRequest_Signal_Idc45bc7f200ab2d9d28f6da1ac702bfc5::processId}
             * 
             *
             * @return static
             */
            public function setId(
                string $id
            ): static {
                if (array_key_exists('id', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['id'] === $id
                ) {
                    return $this;
                }

                $value = $modelData['id'] = $id;

                

                

                $this->_rawModelDataInput['id'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
