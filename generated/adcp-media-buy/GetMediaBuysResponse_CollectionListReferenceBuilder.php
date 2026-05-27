<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Builder class for GetMediaBuysResponse_CollectionListReference
 */
class GetMediaBuysResponse_CollectionListReferenceBuilder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuysResponse_CollectionListReference with fully validated properties
     */
    public function validate(): GetMediaBuysResponse_CollectionListReference
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysResponse_CollectionListReference($this->_rawModelDataInput);
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
             * URL of the agent managing the collection list
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
             * @param string $agentUrl URL of the agent managing the collection list
             *
             * {@link GetMediaBuysResponse_CollectionListReference::processAgentUrl}
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
             * Get the value of list_id.
             *
             * Identifier for the collection list within the agent
             *
             * @return string|null
             */
            public function getListId(): ?string
            {
                return $this->_rawModelDataInput['list_id'] ?? null;
            }

            /**
             * Set the value of list_id.
             *
             * @param string $listId Identifier for the collection list within the agent
             *
             * {@link GetMediaBuysResponse_CollectionListReference::processListId}
             * 
             *
             * @return static
             */
            public function setListId(
                string $listId
            ): static {
                if (array_key_exists('list_id', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['list_id'] === $listId
                ) {
                    return $this;
                }

                $value = $modelData['list_id'] = $listId;

                

                

                $this->_rawModelDataInput['list_id'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of auth_token.
             *
             * JWT or other authorization token for accessing the list. Optional if the list is public or caller has implicit access.
             *
             * @return string|null
             */
            public function getAuthToken(): ?string
            {
                return $this->_rawModelDataInput['auth_token'] ?? null;
            }

            /**
             * Set the value of auth_token.
             *
             * @param string $authToken JWT or other authorization token for accessing the list. Optional if the list is public or caller has implicit access.
             *
             * {@link GetMediaBuysResponse_CollectionListReference::processAuthToken}
             * 
             *
             * @return static
             */
            public function setAuthToken(
                string $authToken
            ): static {
                if (array_key_exists('auth_token', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['auth_token'] === $authToken
                ) {
                    return $this;
                }

                $value = $modelData['auth_token'] = $authToken;

                

                

                $this->_rawModelDataInput['auth_token'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
