<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Required;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetMediaBuysResponse_PropertyListReference
 * @package AdCP\MediaBuy 
 *
 * Reference to a property list for targeting specific properties within this product. The package runs on the intersection of the product's publisher_properties and this list. Sellers SHOULD return a validation error if the product has property_targeting_allowed: false.
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/property_list')]

class GetMediaBuysResponse_PropertyListReference implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/property_list/properties/agent_url')]
        
            #[SchemaName('agent_url')]
        
            #[Required]
        
        /** @var string URL of the agent managing the property list */
        protected $agentUrl;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/property_list/properties/list_id')]
        
            #[SchemaName('list_id')]
        
            #[Required]
        
        /** @var string Identifier for the property list within the agent */
        protected $listId;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/property_list/properties/auth_token')]
        
            #[SchemaName('auth_token')]
        
        /** @var string|null JWT or other authorization token for accessing the list. Optional if the list is public or caller has implicit access. */
        protected $authToken;
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  2 => 'auth_token',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetMediaBuysResponse_PropertyListReference constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processAgentUrl($rawModelDataInput);
            
        
            
                $this->processListId($rawModelDataInput);
            
        
            
                $this->processAuthToken($rawModelDataInput);
            
        
            
        

        
            if (count($this->_errorRegistry->getErrors())) {
                throw $this->_errorRegistry;
            }
        

        $this->_rawModelDataInput = $rawModelDataInput;

        
    }

    
        protected function executeBaseValidators(array &$modelData): void
        {
            $value = &$modelData;

            
                

if ($additionalProperties =  (static function () use ($modelData): array {
    $additionalProperties = array_diff(array_keys($modelData), array (
   'agent_url',
   'list_id',
   'auth_token',
));

    

    return $additionalProperties;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse_PropertyListReference',
  1 => $additionalProperties,
)));
}

            

            
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
                 * Get the value of agent_url.
                 *
                 * URL of the agent managing the property list
                 *
                 * @return string
                 */
                public function getAgentUrl(): string
                {
                    

                    return $this->agentUrl;
                }
            

            
                /**
                 * Set the value of agent_url.
                 *
                 * @param string $agentUrl URL of the agent managing the property list
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setAgentUrl(
                    string $agentUrl
                ): static {
                    if ($this->agentUrl === $agentUrl) {
                        return $this;
                    }

                    $value = $modelData['agent_url'] = $agentUrl;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateAgentUrl($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->agentUrl = $value;
                    $this->_rawModelDataInput['agent_url'] = $agentUrl;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property agentUrl
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processAgentUrl(array $modelData): void
            {
                

                $value = array_key_exists('agent_url', $modelData) ? $modelData['agent_url'] : $this->agentUrl;

                

                $this->agentUrl = $this->validateAgentUrl($value, $modelData);
            }

            /**
             * Execute all validators for the property agentUrl
             */
            protected function validateAgentUrl($value, array $modelData)
            {
                
                    

if (!array_key_exists('agent_url', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'agent_url',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'agent_url',
  1 => 'string',
)));
}

                
                    

if (!\PHPModelGenerator\Format\UriFormatValidator::validate($value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\FormatException($value ?? null, ...array (
  0 => 'agent_url',
  1 => 'uri',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of list_id.
                 *
                 * Identifier for the property list within the agent
                 *
                 * @return string
                 */
                public function getListId(): string
                {
                    

                    return $this->listId;
                }
            

            
                /**
                 * Set the value of list_id.
                 *
                 * @param string $listId Identifier for the property list within the agent
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setListId(
                    string $listId
                ): static {
                    if ($this->listId === $listId) {
                        return $this;
                    }

                    $value = $modelData['list_id'] = $listId;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateListId($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->listId = $value;
                    $this->_rawModelDataInput['list_id'] = $listId;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property listId
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processListId(array $modelData): void
            {
                

                $value = array_key_exists('list_id', $modelData) ? $modelData['list_id'] : $this->listId;

                

                $this->listId = $this->validateListId($value, $modelData);
            }

            /**
             * Execute all validators for the property listId
             */
            protected function validateListId($value, array $modelData)
            {
                
                    

if (!array_key_exists('list_id', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'list_id',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'list_id',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && mb_strlen($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\MinLengthException($value ?? null, ...array (
  0 => 'list_id',
  1 => 1,
)));
}

                

                return $value;
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
                    

                    return $this->authToken;
                }
            

            
                /**
                 * Set the value of auth_token.
                 *
                 * @param string $authToken JWT or other authorization token for accessing the list. Optional if the list is public or caller has implicit access.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setAuthToken(
                    string $authToken
                ): static {
                    if ($this->authToken === $authToken) {
                        return $this;
                    }

                    $value = $modelData['auth_token'] = $authToken;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateAuthToken($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->authToken = $value;
                    $this->_rawModelDataInput['auth_token'] = $authToken;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property authToken
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processAuthToken(array $modelData): void
            {
                
                    if (!array_key_exists('auth_token', $modelData) && $this->authToken === null) {
                        return;
                    }
                

                $value = array_key_exists('auth_token', $modelData) ? $modelData['auth_token'] : $this->authToken;

                

                $this->authToken = $this->validateAuthToken($value, $modelData);
            }

            /**
             * Execute all validators for the property authToken
             */
            protected function validateAuthToken($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'auth_token',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
    

    /**
 * Update the model with the provided data. If the update fails due to any violations an exception will be thrown and
 * no properties of the model will be updated.
 *
 * @param array $modelData May contain any subset of the models properties
 *
 * @return self
 *
 * @throws ErrorRegistryException
 */
public function populate(array $modelData): self
{
    $rollbackValues = [];

    
        $this->_errorRegistry = new ErrorRegistryException();
    

    foreach (['_additionalProperties', '_patternProperties'] as $property) {
        if (isset($this->{$property})) {
            $rollbackValues[$property] = $this->{$property};
        }
    }

    
        $this->executeBaseValidators($modelData);
    

    
        
            if (array_key_exists('agent_url', $modelData) &&
                $modelData['agent_url'] !== $this->agentUrl
            ) {
                

                $rollbackValues['agentUrl'] = $this->agentUrl;
                $this->processAgentUrl($modelData);
            }
        
    
        
            if (array_key_exists('list_id', $modelData) &&
                $modelData['list_id'] !== $this->listId
            ) {
                

                $rollbackValues['listId'] = $this->listId;
                $this->processListId($modelData);
            }
        
    
        
            if (array_key_exists('auth_token', $modelData) &&
                $modelData['auth_token'] !== $this->authToken
            ) {
                

                $rollbackValues['authToken'] = $this->authToken;
                $this->processAuthToken($modelData);
            }
        
    
        
    

    
        if (count($this->_errorRegistry->getErrors())) {
            foreach ($rollbackValues as $property => $value) {
                $this->{$property} = $value;
            }

            throw $this->_errorRegistry;
        }
    

    $this->_rawModelDataInput = array_merge($this->_rawModelDataInput, $modelData);

    
        
    
        
    
        
    
        
    

    return $this;
}





}

// @codeCoverageIgnoreEnd
