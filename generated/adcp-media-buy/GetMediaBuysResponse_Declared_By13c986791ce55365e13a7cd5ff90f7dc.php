<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use UnitEnum;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_Declared_By13c986791ce55365e13a7cd5ff90f7dcRole;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Required;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetMediaBuysResponse_Declared_By13c986791ce55365e13a7cd5ff90f7dc
 * @package AdCP\MediaBuy 
 *
 * Party declaring this provenance. Identifies who attached the provenance claim, enabling receiving parties to assess trust.
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/media_buys/items/properties/account/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/declared_by')]

class GetMediaBuysResponse_Declared_By13c986791ce55365e13a7cd5ff90f7dc implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/declared_by/properties/agent_url')]
        
            #[SchemaName('agent_url')]
        
        /** @var string|null URL of the agent or service that declared this provenance */
        protected $agentUrl;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/declared_by/properties/role')]
        
            #[SchemaName('role')]
        
            #[Required]
        
        /** @var GetMediaBuysResponse_Declared_By13c986791ce55365e13a7cd5ff90f7dcRole Role of the declaring party in the supply chain */
        protected $role;
    
        
            #[Internal]
        
        /** @var array Collect all additional properties provided to the schema */
        private $_additionalProperties = array (
);
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  0 => 'agent_url',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetMediaBuysResponse_Declared_By13c986791ce55365e13a7cd5ff90f7dc constructor.
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
            
        
            
                $this->processRole($rawModelDataInput);
            
        
            
        
            
        

        
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
   'role',
)) as $propertyKey) {
        

        $this->_additionalProperties[$propertyKey] = $value[$propertyKey];
    }

    return false;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidAdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse_Declared_By13c986791ce55365e13a7cd5ff90f7dc',
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
                 * URL of the agent or service that declared this provenance
                 *
                 * @return string|null
                 */
                public function getAgentUrl(): ?string
                {
                    

                    return $this->agentUrl;
                }
            

            
                /**
                 * Set the value of agent_url.
                 *
                 * @param string $agentUrl URL of the agent or service that declared this provenance
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
                
                    if (!array_key_exists('agent_url', $modelData) && $this->agentUrl === null) {
                        return;
                    }
                

                $value = array_key_exists('agent_url', $modelData) ? $modelData['agent_url'] : $this->agentUrl;

                

                $this->agentUrl = $this->validateAgentUrl($value, $modelData);
            }

            /**
             * Execute all validators for the property agentUrl
             */
            protected function validateAgentUrl($value, array $modelData)
            {
                
                    

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
                 * Get the value of role.
                 *
                 * Role of the declaring party in the supply chain
                 *
                 * @return GetMediaBuysResponse_Declared_By13c986791ce55365e13a7cd5ff90f7dcRole
                 */
                public function getRole(): GetMediaBuysResponse_Declared_By13c986791ce55365e13a7cd5ff90f7dcRole
                {
                    

                    return $this->role;
                }
            

            
                /**
                 * Set the value of role.
                 *
                 * @param string|GetMediaBuysResponse_Declared_By13c986791ce55365e13a7cd5ff90f7dcRole $role Role of the declaring party in the supply chain
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setRole(
                    string | GetMediaBuysResponse_Declared_By13c986791ce55365e13a7cd5ff90f7dcRole $role
                ): static {
                    if ($this->role === $role) {
                        return $this;
                    }

                    $value = $modelData['role'] = $role;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateRole($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->role = $value;
                    $this->_rawModelDataInput['role'] = $role;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property role
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processRole(array $modelData): void
            {
                

                $value = array_key_exists('role', $modelData) ? $modelData['role'] : $this->role;

                

                $this->role = $this->validateRole($value, $modelData);
            }

            /**
             * Execute all validators for the property role
             */
            protected function validateRole($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof GetMediaBuysResponse_Declared_By13c986791ce55365e13a7cd5ff90f7dcRole)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'role',
  1 => 'GetMediaBuysResponse_Declared_By13c986791ce55365e13a7cd5ff90f7dcRole',
)));
}

                
                    

if (!array_key_exists('role', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'role',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'role',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'creator',
   'advertiser',
   'agency',
   'platform',
   'tool',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'role',
  1 => 
  array (
    0 => 'creator',
    1 => 'advertiser',
    2 => 'agency',
    3 => 'platform',
    4 => 'tool',
  ),
)));
}

                
                    
$transformationFailed = false;
if (!($value instanceof UnitEnum) && 
(
    
    (function (&$value) use (&$transformationFailed): bool {
        // make sure exceptions from the filter are caught and added to the error handling
        try {
            $value = \PHPModelGenerator\Filter\Enum::filter($value, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\GetMediaBuysResponse_Declared_By13c986791ce55365e13a7cd5ff90f7dcRole',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'role',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'role',
  1 => 'php_model_generator_enum',
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
        
    
        
            if (array_key_exists('role', $modelData) &&
                $modelData['role'] !== $this->role
            ) {
                

                $rollbackValues['role'] = $this->role;
                $this->processRole($modelData);
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


/**
 * serialize the property role
 */
protected function serializeRole()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->role, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\GetMediaBuysResponse_Declared_By13c986791ce55365e13a7cd5ff90f7dcRole',
));
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
