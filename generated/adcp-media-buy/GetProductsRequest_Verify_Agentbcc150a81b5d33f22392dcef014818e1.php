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
 * Class GetProductsRequest_Verify_Agentbcc150a81b5d33f22392dcef014818e1
 * @package AdCP\MediaBuy 
 *
 * Buyer's representation that this watermark can be detected by a governance agent on the seller's `creative_policy.accepted_verifiers` list. The `agent_url` MUST match (canonicalized) one of the seller's published `accepted_verifiers[].agent_url` entries; sellers reject `sync_creatives` submissions whose `verify_agent.agent_url` is off-list with `PROVENANCE_VERIFIER_NOT_ACCEPTED`. This is buyer-supplied evidence, not buyer-driven routing — the seller is the verifier-of-record and the seller controls which agent it actually calls (the seller MAY use a different on-list agent if it determines this is more appropriate; the seller does not call buyer-asserted endpoints outside its allowlist).
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/watermarks/items/properties/verify_agent')]

class GetProductsRequest_Verify_Agentbcc150a81b5d33f22392dcef014818e1 implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/watermarks/items/properties/verify_agent/properties/agent_url')]
        
            #[SchemaName('agent_url')]
        
            #[Required]
        
        /** @var string URL of the governance agent the buyer represents was used to apply/detect this watermark. MUST use the `https://` scheme and MUST appear in the seller's `creative_policy.accepted_verifiers[].agent_url` list (canonicalized per /docs/reference/url-canonicalization: lowercase scheme and host, strip default port, normalize path dot-segments). Sellers MUST NOT call this URL until the canonicalized match is confirmed. */
        protected $agentUrl;
    
        
            #[JsonPointer('/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/watermarks/items/properties/verify_agent/properties/feature_id')]
        
            #[SchemaName('feature_id')]
        
        /** @var string|null Optional `feature_id` the buyer represents the seller should request via `get_creative_features` (e.g., `imatag.watermark_detected`). SHOULD match the `feature_id` declared on the matching `accepted_verifiers[]` entry, or be omitted to defer the selector to the seller. When the seller's entry pins a `feature_id`, that value wins; when neither side pins, the seller selects from the agent's `governance.creative_features` catalog. */
        protected $featureId;
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  1 => 'feature_id',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetProductsRequest_Verify_Agentbcc150a81b5d33f22392dcef014818e1 constructor.
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
            
        
            
                $this->processFeatureId($rawModelDataInput);
            
        
            
        

        
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
   'feature_id',
));

    

    return $additionalProperties;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetProductsRequest_Verify_Agentbcc150a81b5d33f22392dcef014818e1',
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
                 * URL of the governance agent the buyer represents was used to apply/detect this watermark. MUST use the `https://` scheme and MUST appear in the seller's `creative_policy.accepted_verifiers[].agent_url` list (canonicalized per /docs/reference/url-canonicalization: lowercase scheme and host, strip default port, normalize path dot-segments). Sellers MUST NOT call this URL until the canonicalized match is confirmed.
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
                 * @param string $agentUrl URL of the governance agent the buyer represents was used to apply/detect this watermark. MUST use the `https://` scheme and MUST appear in the seller's `creative_policy.accepted_verifiers[].agent_url` list (canonicalized per /docs/reference/url-canonicalization: lowercase scheme and host, strip default port, normalize path dot-segments). Sellers MUST NOT call this URL until the canonicalized match is confirmed.
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

                
                    

if (is_string($value) && !preg_match(base64_decode('L15odHRwczpcL1wvLw=='), $value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\PatternException($value ?? null, ...array (
  0 => 'agent_url',
  1 => '^https://',
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
                 * Get the value of feature_id.
                 *
                 * Optional `feature_id` the buyer represents the seller should request via `get_creative_features` (e.g., `imatag.watermark_detected`). SHOULD match the `feature_id` declared on the matching `accepted_verifiers[]` entry, or be omitted to defer the selector to the seller. When the seller's entry pins a `feature_id`, that value wins; when neither side pins, the seller selects from the agent's `governance.creative_features` catalog.
                 *
                 * @return string|null
                 */
                public function getFeatureId(): ?string
                {
                    

                    return $this->featureId;
                }
            

            
                /**
                 * Set the value of feature_id.
                 *
                 * @param string $featureId Optional `feature_id` the buyer represents the seller should request via `get_creative_features` (e.g., `imatag.watermark_detected`). SHOULD match the `feature_id` declared on the matching `accepted_verifiers[]` entry, or be omitted to defer the selector to the seller. When the seller's entry pins a `feature_id`, that value wins; when neither side pins, the seller selects from the agent's `governance.creative_features` catalog.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setFeatureId(
                    string $featureId
                ): static {
                    if ($this->featureId === $featureId) {
                        return $this;
                    }

                    $value = $modelData['feature_id'] = $featureId;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateFeatureId($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->featureId = $value;
                    $this->_rawModelDataInput['feature_id'] = $featureId;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property featureId
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processFeatureId(array $modelData): void
            {
                
                    if (!array_key_exists('feature_id', $modelData) && $this->featureId === null) {
                        return;
                    }
                

                $value = array_key_exists('feature_id', $modelData) ? $modelData['feature_id'] : $this->featureId;

                

                $this->featureId = $this->validateFeatureId($value, $modelData);
            }

            /**
             * Execute all validators for the property featureId
             */
            protected function validateFeatureId($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'feature_id',
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
        
    
        
            if (array_key_exists('feature_id', $modelData) &&
                $modelData['feature_id'] !== $this->featureId
            ) {
                

                $rollbackValues['featureId'] = $this->featureId;
                $this->processFeatureId($modelData);
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
