<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use UnitEnum;

    use AdCP\MediaBuy\Enums\EmbeddedProvenanceMethod;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Required;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetMediaBuysResponse_ItemOfArrayEmbedded_Provenancef0558b6fefdff71fa71ee63224471765
 * @package AdCP\MediaBuy 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/media_buys/items/properties/account/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/embedded_provenance/items')]

class GetMediaBuysResponse_ItemOfArrayEmbedded_Provenancef0558b6fefdff71fa71ee63224471765 implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/embedded_provenance/items/properties/method')]
        
            #[SchemaName('method')]
        
            #[Required]
        
        /** @var EmbeddedProvenanceMethod How provenance data is carried within the content */
        protected $method;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/embedded_provenance/items/properties/standard')]
        
            #[SchemaName('standard')]
        
        /** @var string|null Standard the embedding conforms to, if any (e.g., 'c2pa' for C2PA Section A.7 text manifest embedding) */
        protected $standard;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/embedded_provenance/items/properties/provider')]
        
            #[SchemaName('provider')]
        
            #[Required]
        
        /** @var string Organization that performed the embedding (e.g., 'Encypher', 'Digimarc'). Display label and audit context — not a wire identifier. */
        protected $provider;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/embedded_provenance/items/properties/verify_agent')]
        
            #[SchemaName('verify_agent')]
        
        /** @var GetMediaBuysResponse_Verify_Agent11ee1aca01d22040a3e2f23ff22c68b5|null Buyer's representation that this embedding can be verified by a governance agent on the seller's `creative_policy.accepted_verifiers` list. The `agent_url` MUST match (canonicalized) one of the seller's published `accepted_verifiers[].agent_url` entries; sellers reject `sync_creatives` submissions whose `verify_agent.agent_url` is off-list with `PROVENANCE_VERIFIER_NOT_ACCEPTED`. This is buyer-supplied evidence, not buyer-driven routing — the seller is the verifier-of-record and the seller controls which agent it actually calls (the seller MAY use a different on-list agent if it determines this is more appropriate; the seller does not call buyer-asserted endpoints outside its allowlist). MAY be omitted for self-verifiable embeddings (e.g., a C2PA text manifest with a public key the seller already trusts). */
        protected $verifyAgent;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/embedded_provenance/items/properties/embedded_at')]
        
            #[SchemaName('embedded_at')]
        
        /** @var string|null When the provenance data was embedded (ISO 8601) */
        protected $embeddedAt;
    
        
            #[Internal]
        
        /** @var array Collect all additional properties provided to the schema */
        private $_additionalProperties = array (
);
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  1 => 'standard',
  3 => 'verify_agent',
  4 => 'embedded_at',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetMediaBuysResponse_ItemOfArrayEmbedded_Provenancef0558b6fefdff71fa71ee63224471765 constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processMethod($rawModelDataInput);
            
        
            
                $this->processStandard($rawModelDataInput);
            
        
            
                $this->processProvider($rawModelDataInput);
            
        
            
                $this->processVerifyAgent($rawModelDataInput);
            
        
            
                $this->processEmbeddedAt($rawModelDataInput);
            
        
            
        
            
        

        
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
   'method',
   'standard',
   'provider',
   'verify_agent',
   'embedded_at',
)) as $propertyKey) {
        

        $this->_additionalProperties[$propertyKey] = $value[$propertyKey];
    }

    return false;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidAdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse_ItemOfArrayEmbedded_Provenancef0558b6fefdff71fa71ee63224471765',
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
                 * Get the value of method.
                 *
                 * How provenance data is carried within the content
                 *
                 * @return EmbeddedProvenanceMethod
                 */
                public function getMethod(): EmbeddedProvenanceMethod
                {
                    

                    return $this->method;
                }
            

            
                /**
                 * Set the value of method.
                 *
                 * @param string|EmbeddedProvenanceMethod $method How provenance data is carried within the content
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setMethod(
                    string | EmbeddedProvenanceMethod $method
                ): static {
                    if ($this->method === $method) {
                        return $this;
                    }

                    $value = $modelData['method'] = $method;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateMethod($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->method = $value;
                    $this->_rawModelDataInput['method'] = $method;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property method
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processMethod(array $modelData): void
            {
                

                $value = array_key_exists('method', $modelData) ? $modelData['method'] : $this->method;

                

                $this->method = $this->validateMethod($value, $modelData);
            }

            /**
             * Execute all validators for the property method
             */
            protected function validateMethod($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof EmbeddedProvenanceMethod)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'method',
  1 => 'EmbeddedProvenanceMethod',
)));
}

                
                    

if (!array_key_exists('method', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'method',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'method',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'manifest_wrapper',
   'provenance_markers',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'method',
  1 => 
  array (
    0 => 'manifest_wrapper',
    1 => 'provenance_markers',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\EmbeddedProvenanceMethod',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'method',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'method',
  1 => 'php_model_generator_enum',
)));
}

                

                return $value;
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
                    

                    return $this->standard;
                }
            

            
                /**
                 * Set the value of standard.
                 *
                 * @param string $standard Standard the embedding conforms to, if any (e.g., 'c2pa' for C2PA Section A.7 text manifest embedding)
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setStandard(
                    string $standard
                ): static {
                    if ($this->standard === $standard) {
                        return $this;
                    }

                    $value = $modelData['standard'] = $standard;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateStandard($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->standard = $value;
                    $this->_rawModelDataInput['standard'] = $standard;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property standard
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processStandard(array $modelData): void
            {
                
                    if (!array_key_exists('standard', $modelData) && $this->standard === null) {
                        return;
                    }
                

                $value = array_key_exists('standard', $modelData) ? $modelData['standard'] : $this->standard;

                

                $this->standard = $this->validateStandard($value, $modelData);
            }

            /**
             * Execute all validators for the property standard
             */
            protected function validateStandard($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'standard',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of provider.
                 *
                 * Organization that performed the embedding (e.g., 'Encypher', 'Digimarc'). Display label and audit context — not a wire identifier.
                 *
                 * @return string
                 */
                public function getProvider(): string
                {
                    

                    return $this->provider;
                }
            

            
                /**
                 * Set the value of provider.
                 *
                 * @param string $provider Organization that performed the embedding (e.g., 'Encypher', 'Digimarc'). Display label and audit context — not a wire identifier.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setProvider(
                    string $provider
                ): static {
                    if ($this->provider === $provider) {
                        return $this;
                    }

                    $value = $modelData['provider'] = $provider;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateProvider($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->provider = $value;
                    $this->_rawModelDataInput['provider'] = $provider;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property provider
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processProvider(array $modelData): void
            {
                

                $value = array_key_exists('provider', $modelData) ? $modelData['provider'] : $this->provider;

                

                $this->provider = $this->validateProvider($value, $modelData);
            }

            /**
             * Execute all validators for the property provider
             */
            protected function validateProvider($value, array $modelData)
            {
                
                    

if (!array_key_exists('provider', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'provider',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'provider',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of verify_agent.
                 *
                 * Buyer's representation that this embedding can be verified by a governance agent on the seller's `creative_policy.accepted_verifiers` list. The `agent_url` MUST match (canonicalized) one of the seller's published `accepted_verifiers[].agent_url` entries; sellers reject `sync_creatives` submissions whose `verify_agent.agent_url` is off-list with `PROVENANCE_VERIFIER_NOT_ACCEPTED`. This is buyer-supplied evidence, not buyer-driven routing — the seller is the verifier-of-record and the seller controls which agent it actually calls (the seller MAY use a different on-list agent if it determines this is more appropriate; the seller does not call buyer-asserted endpoints outside its allowlist). MAY be omitted for self-verifiable embeddings (e.g., a C2PA text manifest with a public key the seller already trusts).
                 *
                 * @return GetMediaBuysResponse_Verify_Agent11ee1aca01d22040a3e2f23ff22c68b5|null
                 */
                public function getVerifyAgent(): ?GetMediaBuysResponse_Verify_Agent11ee1aca01d22040a3e2f23ff22c68b5
                {
                    

                    return $this->verifyAgent;
                }
            

            
                /**
                 * Set the value of verify_agent.
                 *
                 * @param GetMediaBuysResponse_Verify_Agent11ee1aca01d22040a3e2f23ff22c68b5 $verifyAgent Buyer's representation that this embedding can be verified by a governance agent on the seller's `creative_policy.accepted_verifiers` list. The `agent_url` MUST match (canonicalized) one of the seller's published `accepted_verifiers[].agent_url` entries; sellers reject `sync_creatives` submissions whose `verify_agent.agent_url` is off-list with `PROVENANCE_VERIFIER_NOT_ACCEPTED`. This is buyer-supplied evidence, not buyer-driven routing — the seller is the verifier-of-record and the seller controls which agent it actually calls (the seller MAY use a different on-list agent if it determines this is more appropriate; the seller does not call buyer-asserted endpoints outside its allowlist). MAY be omitted for self-verifiable embeddings (e.g., a C2PA text manifest with a public key the seller already trusts).
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setVerifyAgent(
                    GetMediaBuysResponse_Verify_Agent11ee1aca01d22040a3e2f23ff22c68b5 $verifyAgent
                ): static {
                    if ($this->verifyAgent === $verifyAgent) {
                        return $this;
                    }

                    $value = $modelData['verify_agent'] = $verifyAgent;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateVerifyAgent($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->verifyAgent = $value;
                    $this->_rawModelDataInput['verify_agent'] = $verifyAgent;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property verifyAgent
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processVerifyAgent(array $modelData): void
            {
                
                    if (!array_key_exists('verify_agent', $modelData) && $this->verifyAgent === null) {
                        return;
                    }
                

                $value = array_key_exists('verify_agent', $modelData) ? $modelData['verify_agent'] : $this->verifyAgent;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_Verify_Agent11ee1aca01d22040a3e2f23ff22c68b5($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'verify_agent',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->verifyAgent = $this->validateVerifyAgent($value, $modelData);
            }

            /**
             * Execute all validators for the property verifyAgent
             */
            protected function validateVerifyAgent($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'verify_agent',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_Verify_Agent11ee1aca01d22040a3e2f23ff22c68b5)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'verify_agent',
  1 => 'GetMediaBuysResponse_Verify_Agent11ee1aca01d22040a3e2f23ff22c68b5',
)));
}

                

                return $value;
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
                    

                    return $this->embeddedAt;
                }
            

            
                /**
                 * Set the value of embedded_at.
                 *
                 * @param string $embeddedAt When the provenance data was embedded (ISO 8601)
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setEmbeddedAt(
                    string $embeddedAt
                ): static {
                    if ($this->embeddedAt === $embeddedAt) {
                        return $this;
                    }

                    $value = $modelData['embedded_at'] = $embeddedAt;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateEmbeddedAt($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->embeddedAt = $value;
                    $this->_rawModelDataInput['embedded_at'] = $embeddedAt;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property embeddedAt
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processEmbeddedAt(array $modelData): void
            {
                
                    if (!array_key_exists('embedded_at', $modelData) && $this->embeddedAt === null) {
                        return;
                    }
                

                $value = array_key_exists('embedded_at', $modelData) ? $modelData['embedded_at'] : $this->embeddedAt;

                

                $this->embeddedAt = $this->validateEmbeddedAt($value, $modelData);
            }

            /**
             * Execute all validators for the property embeddedAt
             */
            protected function validateEmbeddedAt($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'embedded_at',
  1 => 'string',
)));
}

                
                    

if (!\PHPModelGenerator\Format\FormatValidatorFromRegEx::validate($value, '/^\\d{4}-\\d{2}-\\d{2}[Tt]\\d{2}:\\d{2}:\\d{2}(\\.\\d+)?([Zz]|[+\\-]\\d{2}:\\d{2})$/')) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\FormatException($value ?? null, ...array (
  0 => 'embedded_at',
  1 => 'date-time',
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
    

    
        
            if (array_key_exists('method', $modelData) &&
                $modelData['method'] !== $this->method
            ) {
                

                $rollbackValues['method'] = $this->method;
                $this->processMethod($modelData);
            }
        
    
        
            if (array_key_exists('standard', $modelData) &&
                $modelData['standard'] !== $this->standard
            ) {
                

                $rollbackValues['standard'] = $this->standard;
                $this->processStandard($modelData);
            }
        
    
        
            if (array_key_exists('provider', $modelData) &&
                $modelData['provider'] !== $this->provider
            ) {
                

                $rollbackValues['provider'] = $this->provider;
                $this->processProvider($modelData);
            }
        
    
        
            if (array_key_exists('verify_agent', $modelData) &&
                $modelData['verify_agent'] !== $this->verifyAgent
            ) {
                

                $rollbackValues['verifyAgent'] = $this->verifyAgent;
                $this->processVerifyAgent($modelData);
            }
        
    
        
            if (array_key_exists('embedded_at', $modelData) &&
                $modelData['embedded_at'] !== $this->embeddedAt
            ) {
                

                $rollbackValues['embeddedAt'] = $this->embeddedAt;
                $this->processEmbeddedAt($modelData);
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
 * serialize the property method
 */
protected function serializeMethod()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->method, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\EmbeddedProvenanceMethod',
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
