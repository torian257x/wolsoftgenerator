<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use UnitEnum;

    use AdCP\MediaBuy\Enums\WatermarkMediaType;

    use AdCP\MediaBuy\Enums\C2PAWatermarkAction;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Required;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetMediaBuyDeliveryRequest_ItemOfArrayWatermarks254d53f57a5c6e0b76076f9e8940ee56
 * @package AdCP\MediaBuy 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/account/oneOf/1/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/watermarks/items')]

class GetMediaBuyDeliveryRequest_ItemOfArrayWatermarks254d53f57a5c6e0b76076f9e8940ee56 implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/account/oneOf/1/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/watermarks/items/properties/media_type')]
        
            #[SchemaName('media_type')]
        
            #[Required]
        
        /** @var WatermarkMediaType Media category of the watermarked content */
        protected $mediaType;
    
        
            #[JsonPointer('/properties/account/oneOf/1/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/watermarks/items/properties/provider')]
        
            #[SchemaName('provider')]
        
            #[Required]
        
        /** @var string Organization that applied the watermark (e.g., 'Imatag', 'Steg.AI', 'Encypher'). Display label and audit context — not a wire identifier. */
        protected $provider;
    
        
            #[JsonPointer('/properties/account/oneOf/1/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/watermarks/items/properties/verify_agent')]
        
            #[SchemaName('verify_agent')]
        
        /** @var GetMediaBuyDeliveryRequest_Verify_Agentbcc150a81b5d33f22392dcef014818e1|null Buyer's representation that this watermark can be detected by a governance agent on the seller's `creative_policy.accepted_verifiers` list. The `agent_url` MUST match (canonicalized) one of the seller's published `accepted_verifiers[].agent_url` entries; sellers reject `sync_creatives` submissions whose `verify_agent.agent_url` is off-list with `PROVENANCE_VERIFIER_NOT_ACCEPTED`. This is buyer-supplied evidence, not buyer-driven routing — the seller is the verifier-of-record and the seller controls which agent it actually calls (the seller MAY use a different on-list agent if it determines this is more appropriate; the seller does not call buyer-asserted endpoints outside its allowlist). */
        protected $verifyAgent;
    
        
            #[JsonPointer('/properties/account/oneOf/1/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/watermarks/items/properties/c2pa_action')]
        
            #[SchemaName('c2pa_action')]
        
        /** @var C2PAWatermarkAction|null C2PA action classification for this watermark */
        protected $c2paAction;
    
        
            #[JsonPointer('/properties/account/oneOf/1/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/watermarks/items/properties/embedded_at')]
        
            #[SchemaName('embedded_at')]
        
        /** @var string|null When the watermark was applied (ISO 8601) */
        protected $embeddedAt;
    
        
            #[Internal]
        
        /** @var array Collect all additional properties provided to the schema */
        private $_additionalProperties = array (
);
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  2 => 'verify_agent',
  3 => 'c2pa_action',
  4 => 'embedded_at',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetMediaBuyDeliveryRequest_ItemOfArrayWatermarks254d53f57a5c6e0b76076f9e8940ee56 constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processMediaType($rawModelDataInput);
            
        
            
                $this->processProvider($rawModelDataInput);
            
        
            
                $this->processVerifyAgent($rawModelDataInput);
            
        
            
                $this->processC2paAction($rawModelDataInput);
            
        
            
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
   'media_type',
   'provider',
   'verify_agent',
   'c2pa_action',
   'embedded_at',
)) as $propertyKey) {
        

        $this->_additionalProperties[$propertyKey] = $value[$propertyKey];
    }

    return false;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidAdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetMediaBuyDeliveryRequest_ItemOfArrayWatermarks254d53f57a5c6e0b76076f9e8940ee56',
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
                 * Get the value of media_type.
                 *
                 * Media category of the watermarked content
                 *
                 * @return WatermarkMediaType
                 */
                public function getMediaType(): WatermarkMediaType
                {
                    

                    return $this->mediaType;
                }
            

            
                /**
                 * Set the value of media_type.
                 *
                 * @param string|WatermarkMediaType $mediaType Media category of the watermarked content
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setMediaType(
                    string | WatermarkMediaType $mediaType
                ): static {
                    if ($this->mediaType === $mediaType) {
                        return $this;
                    }

                    $value = $modelData['media_type'] = $mediaType;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateMediaType($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->mediaType = $value;
                    $this->_rawModelDataInput['media_type'] = $mediaType;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property mediaType
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processMediaType(array $modelData): void
            {
                

                $value = array_key_exists('media_type', $modelData) ? $modelData['media_type'] : $this->mediaType;

                

                $this->mediaType = $this->validateMediaType($value, $modelData);
            }

            /**
             * Execute all validators for the property mediaType
             */
            protected function validateMediaType($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof WatermarkMediaType)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'media_type',
  1 => 'WatermarkMediaType',
)));
}

                
                    

if (!array_key_exists('media_type', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'media_type',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'media_type',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'audio',
   'image',
   'video',
   'text',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'media_type',
  1 => 
  array (
    0 => 'audio',
    1 => 'image',
    2 => 'video',
    3 => 'text',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\WatermarkMediaType',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'media_type',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'media_type',
  1 => 'php_model_generator_enum',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of provider.
                 *
                 * Organization that applied the watermark (e.g., 'Imatag', 'Steg.AI', 'Encypher'). Display label and audit context — not a wire identifier.
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
                 * @param string $provider Organization that applied the watermark (e.g., 'Imatag', 'Steg.AI', 'Encypher'). Display label and audit context — not a wire identifier.
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
                 * Buyer's representation that this watermark can be detected by a governance agent on the seller's `creative_policy.accepted_verifiers` list. The `agent_url` MUST match (canonicalized) one of the seller's published `accepted_verifiers[].agent_url` entries; sellers reject `sync_creatives` submissions whose `verify_agent.agent_url` is off-list with `PROVENANCE_VERIFIER_NOT_ACCEPTED`. This is buyer-supplied evidence, not buyer-driven routing — the seller is the verifier-of-record and the seller controls which agent it actually calls (the seller MAY use a different on-list agent if it determines this is more appropriate; the seller does not call buyer-asserted endpoints outside its allowlist).
                 *
                 * @return GetMediaBuyDeliveryRequest_Verify_Agentbcc150a81b5d33f22392dcef014818e1|null
                 */
                public function getVerifyAgent(): ?GetMediaBuyDeliveryRequest_Verify_Agentbcc150a81b5d33f22392dcef014818e1
                {
                    

                    return $this->verifyAgent;
                }
            

            
                /**
                 * Set the value of verify_agent.
                 *
                 * @param GetMediaBuyDeliveryRequest_Verify_Agentbcc150a81b5d33f22392dcef014818e1 $verifyAgent Buyer's representation that this watermark can be detected by a governance agent on the seller's `creative_policy.accepted_verifiers` list. The `agent_url` MUST match (canonicalized) one of the seller's published `accepted_verifiers[].agent_url` entries; sellers reject `sync_creatives` submissions whose `verify_agent.agent_url` is off-list with `PROVENANCE_VERIFIER_NOT_ACCEPTED`. This is buyer-supplied evidence, not buyer-driven routing — the seller is the verifier-of-record and the seller controls which agent it actually calls (the seller MAY use a different on-list agent if it determines this is more appropriate; the seller does not call buyer-asserted endpoints outside its allowlist).
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setVerifyAgent(
                    GetMediaBuyDeliveryRequest_Verify_Agentbcc150a81b5d33f22392dcef014818e1 $verifyAgent
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
        return is_array($value) ? new GetMediaBuyDeliveryRequest_Verify_Agentbcc150a81b5d33f22392dcef014818e1($value) : $value;
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

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuyDeliveryRequest_Verify_Agentbcc150a81b5d33f22392dcef014818e1)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'verify_agent',
  1 => 'GetMediaBuyDeliveryRequest_Verify_Agentbcc150a81b5d33f22392dcef014818e1',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of c2pa_action.
                 *
                 * C2PA action classification for this watermark
                 *
                 * @return C2PAWatermarkAction|null
                 */
                public function getC2paAction(): ?C2PAWatermarkAction
                {
                    

                    return $this->c2paAction;
                }
            

            
                /**
                 * Set the value of c2pa_action.
                 *
                 * @param string|C2PAWatermarkAction|null $c2paAction C2PA action classification for this watermark
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setC2paAction(
                    string | C2PAWatermarkAction | null $c2paAction
                ): static {
                    if ($this->c2paAction === $c2paAction) {
                        return $this;
                    }

                    $value = $modelData['c2pa_action'] = $c2paAction;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateC2paAction($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->c2paAction = $value;
                    $this->_rawModelDataInput['c2pa_action'] = $c2paAction;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property c2paAction
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processC2paAction(array $modelData): void
            {
                
                    if (!array_key_exists('c2pa_action', $modelData) && $this->c2paAction === null) {
                        return;
                    }
                

                $value = array_key_exists('c2pa_action', $modelData) ? $modelData['c2pa_action'] : $this->c2paAction;

                

                $this->c2paAction = $this->validateC2paAction($value, $modelData);
            }

            /**
             * Execute all validators for the property c2paAction
             */
            protected function validateC2paAction($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof C2PAWatermarkAction)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'c2pa_action',
  1 => 'C2PAWatermarkAction',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'c2pa_action',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'c2pa.watermarked.bound',
   'c2pa.watermarked.unbound',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'c2pa_action',
  1 => 
  array (
    0 => 'c2pa.watermarked.bound',
    1 => 'c2pa.watermarked.unbound',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\C2PAWatermarkAction',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'c2pa_action',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'c2pa_action',
  1 => 'php_model_generator_enum',
)));
}

                

                return $value;
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
                    

                    return $this->embeddedAt;
                }
            

            
                /**
                 * Set the value of embedded_at.
                 *
                 * @param string $embeddedAt When the watermark was applied (ISO 8601)
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
    

    
        
            if (array_key_exists('media_type', $modelData) &&
                $modelData['media_type'] !== $this->mediaType
            ) {
                

                $rollbackValues['mediaType'] = $this->mediaType;
                $this->processMediaType($modelData);
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
        
    
        
            if (array_key_exists('c2pa_action', $modelData) &&
                $modelData['c2pa_action'] !== $this->c2paAction
            ) {
                

                $rollbackValues['c2paAction'] = $this->c2paAction;
                $this->processC2paAction($modelData);
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
 * serialize the property mediaType
 */
protected function serializeMediaType()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->mediaType, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\WatermarkMediaType',
));
}


/**
 * serialize the property c2paAction
 */
protected function serializeC2paAction()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->c2paAction, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\C2PAWatermarkAction',
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
