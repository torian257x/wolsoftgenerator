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
 * Class GetProductsRequest_ItemOfArrayProviders1aae21f2a2f4e7d1b18a4961346ec6bf
 * @package AdCP\MediaBuy 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/filters/properties/trusted_match/properties/providers/items')]

class GetProductsRequest_ItemOfArrayProviders1aae21f2a2f4e7d1b18a4961346ec6bf implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/filters/properties/trusted_match/properties/providers/items/properties/agent_url')]
        
            #[SchemaName('agent_url')]
        
            #[Required]
        
        /** @var string Provider's agent URL from the registry. */
        protected $agentUrl;
    
        
            #[JsonPointer('/properties/filters/properties/trusted_match/properties/providers/items/properties/context_match')]
        
            #[SchemaName('context_match')]
        
        /** @var bool|null When true, require this provider to support context match. */
        protected $contextMatch;
    
        
            #[JsonPointer('/properties/filters/properties/trusted_match/properties/providers/items/properties/identity_match')]
        
            #[SchemaName('identity_match')]
        
        /** @var bool|null When true, require this provider to support identity match. */
        protected $identityMatch;
    
        
            #[Internal]
        
        /** @var array Collect all additional properties provided to the schema */
        private $_additionalProperties = array (
);
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  1 => 'context_match',
  2 => 'identity_match',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetProductsRequest_ItemOfArrayProviders1aae21f2a2f4e7d1b18a4961346ec6bf constructor.
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
            
        
            
                $this->processContextMatch($rawModelDataInput);
            
        
            
                $this->processIdentityMatch($rawModelDataInput);
            
        
            
        
            
        

        
            if (count($this->_errorRegistry->getErrors())) {
                throw $this->_errorRegistry;
            }
        

        $this->_rawModelDataInput = $rawModelDataInput;

        
    }

    
        protected function executeBaseValidators(array &$modelData): void
        {
            $value = &$modelData;

            
                

if ((function () use ($value) {
    foreach (array_diff(array_keys($value), array (
   'agent_url',
   'context_match',
   'identity_match',
)) as $propertyKey) {
        

        $this->_additionalProperties[$propertyKey] = $value[$propertyKey];
    }

    return false;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidAdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetProductsRequest_ItemOfArrayProviders1aae21f2a2f4e7d1b18a4961346ec6bf',
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
                 * Provider's agent URL from the registry.
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
                 * @param string $agentUrl Provider's agent URL from the registry.
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
                 * Get the value of context_match.
                 *
                 * When true, require this provider to support context match.
                 *
                 * @return bool|null
                 */
                public function getContextMatch(): ?bool
                {
                    

                    return $this->contextMatch;
                }
            

            
                /**
                 * Set the value of context_match.
                 *
                 * @param bool $contextMatch When true, require this provider to support context match.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setContextMatch(
                    bool $contextMatch
                ): static {
                    if ($this->contextMatch === $contextMatch) {
                        return $this;
                    }

                    $value = $modelData['context_match'] = $contextMatch;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateContextMatch($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->contextMatch = $value;
                    $this->_rawModelDataInput['context_match'] = $contextMatch;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property contextMatch
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processContextMatch(array $modelData): void
            {
                
                    if (!array_key_exists('context_match', $modelData) && $this->contextMatch === null) {
                        return;
                    }
                

                $value = array_key_exists('context_match', $modelData) ? $modelData['context_match'] : $this->contextMatch;

                

                $this->contextMatch = $this->validateContextMatch($value, $modelData);
            }

            /**
             * Execute all validators for the property contextMatch
             */
            protected function validateContextMatch($value, array $modelData)
            {
                
                    

if ((!is_bool($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'context_match',
  1 => 'bool',
)));
}

                

                return $value;
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
                    

                    return $this->identityMatch;
                }
            

            
                /**
                 * Set the value of identity_match.
                 *
                 * @param bool $identityMatch When true, require this provider to support identity match.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setIdentityMatch(
                    bool $identityMatch
                ): static {
                    if ($this->identityMatch === $identityMatch) {
                        return $this;
                    }

                    $value = $modelData['identity_match'] = $identityMatch;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateIdentityMatch($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->identityMatch = $value;
                    $this->_rawModelDataInput['identity_match'] = $identityMatch;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property identityMatch
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processIdentityMatch(array $modelData): void
            {
                
                    if (!array_key_exists('identity_match', $modelData) && $this->identityMatch === null) {
                        return;
                    }
                

                $value = array_key_exists('identity_match', $modelData) ? $modelData['identity_match'] : $this->identityMatch;

                

                $this->identityMatch = $this->validateIdentityMatch($value, $modelData);
            }

            /**
             * Execute all validators for the property identityMatch
             */
            protected function validateIdentityMatch($value, array $modelData)
            {
                
                    

if ((!is_bool($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'identity_match',
  1 => 'bool',
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
        
    
        
            if (array_key_exists('context_match', $modelData) &&
                $modelData['context_match'] !== $this->contextMatch
            ) {
                

                $rollbackValues['contextMatch'] = $this->contextMatch;
                $this->processContextMatch($modelData);
            }
        
    
        
            if (array_key_exists('identity_match', $modelData) &&
                $modelData['identity_match'] !== $this->identityMatch
            ) {
                

                $rollbackValues['identityMatch'] = $this->identityMatch;
                $this->processIdentityMatch($modelData);
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



    protected function resolveSerializationHook(array $data, int $depth, array $except): array
    {
        $data = array_merge($this->serializeAdditionalProperties($depth, $except), $data);

        return $data;
    }


protected function serializeAdditionalProperties(int $depth, array $except): array
{
    

    return $this->getSerializedValue(
        $this->_additionalProperties,
        $depth,
        $except
    );
}



}

// @codeCoverageIgnoreEnd
