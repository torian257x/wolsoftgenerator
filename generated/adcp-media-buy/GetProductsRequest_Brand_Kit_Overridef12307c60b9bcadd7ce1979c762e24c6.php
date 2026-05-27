<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

    use UnitEnum;

    use AdCP\MediaBuy\Enums\DigitalSourceType;

    use AdCP\MediaBuy\Enums\GetProductsRequest_ProvenanceHuman_Oversight;

    use AdCP\MediaBuy\Enums\GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001d5b392d89eb0397d01ef36b451045a72Action;

    use AdCP\MediaBuy\Enums\GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001966d960c0a8231c9cf148f923aed05adAction;

    use AdCP\MediaBuy\Enums\GetProductsRequest_Declared_By13c986791ce55365e13a7cd5ff90f7dcRole;

    use AdCP\MediaBuy\Enums\EmbeddedProvenanceMethod;

    use AdCP\MediaBuy\Enums\WatermarkMediaType;

    use AdCP\MediaBuy\Enums\C2PAWatermarkAction;

    use AdCP\MediaBuy\Enums\GetProductsRequest_ItemOfArrayVerificationab0379bc9ff851960f9f645c9916029eResult;

    use AdCP\MediaBuy\Enums\DisclosurePersistence;

    use AdCP\MediaBuy\Enums\DisclosurePosition;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetProductsRequest_Brand_Kit_Overridef12307c60b9bcadd7ce1979c762e24c6
 * @package AdCP\MediaBuy 
 *
 * Inline override for brand-kit fields normally resolved from `/.well-known/brand.json` on `domain` (logo, colors, voice, tagline). Use when brand.json is missing, stale, or inappropriate for this specific call — e.g., a campaign-scoped tagline, a co-branded creative, a freshly-rebranded color palette the brand.json hasn't shipped yet. Same inline-override pattern as `industries` and `data_subject_contestation` above: brand.json is canonical, the override is per-call. Adopters needing to override fields outside this subset (`voice_attributes`, `prohibited_terms`, etc.) MUST publish a different brand.json and reference it via a different `domain` — the inline override is intentionally narrow to a small high-traffic subset.

**Merge semantics (normative).** The merge is **field-level**, not whole-object replacement. Each field within `brand_kit_override` (`logo`, `colors`, `voice`, `tagline`) is evaluated independently — when a field is present on the override the override value applies; when a field is absent the brand.json value applies (or is absent if brand.json doesn't carry one either). For composite fields (`colors.primary`, `colors.secondary`, `colors.accent`), the merge is one level deeper: each color slot is evaluated independently — a producer can override `colors.primary` while still inheriting `colors.secondary` from brand.json. SDKs MUST NOT treat a present `brand_kit_override.colors` as wiping the brand.json `colors` block entirely; only the per-slot fields present in the override take precedence. Without this rule, a partial-override semantics would diverge across SDKs and produce inconsistent rendering for the same payload.
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/brand/properties/brand_kit_override')]

class GetProductsRequest_Brand_Kit_Overridef12307c60b9bcadd7ce1979c762e24c6 implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/brand/properties/brand_kit_override/properties/logo')]
        
            #[SchemaName('logo')]
        
        /** @var GetProductsRequest_ImageAsset|null Override logo asset. */
        protected $logo;
    
        
            #[JsonPointer('/properties/brand/properties/brand_kit_override/properties/colors')]
        
            #[SchemaName('colors')]
        
        /** @var GetProductsRequest_Colors58142eaea10c7af98af1bebfac793b60|null Override brand colors (hex strings). */
        protected $colors;
    
        
            #[JsonPointer('/properties/brand/properties/brand_kit_override/properties/voice')]
        
            #[SchemaName('voice')]
        
        /** @var string|null Override brand-voice description for surface-composed text/audio output. */
        protected $voice;
    
        
            #[JsonPointer('/properties/brand/properties/brand_kit_override/properties/tagline')]
        
            #[SchemaName('tagline')]
        
        /** @var string|null Override tagline. */
        protected $tagline;
    
        
            #[Internal]
        
        /** @var array Collect all additional properties provided to the schema */
        private $_additionalProperties = array (
);
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  0 => 'logo',
  1 => 'colors',
  2 => 'voice',
  3 => 'tagline',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetProductsRequest_Brand_Kit_Overridef12307c60b9bcadd7ce1979c762e24c6 constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processLogo($rawModelDataInput);
            
        
            
                $this->processColors($rawModelDataInput);
            
        
            
                $this->processVoice($rawModelDataInput);
            
        
            
                $this->processTagline($rawModelDataInput);
            
        
            
        
            
        

        
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
   'logo',
   'colors',
   'voice',
   'tagline',
)) as $propertyKey) {
        

        $this->_additionalProperties[$propertyKey] = $value[$propertyKey];
    }

    return false;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidAdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetProductsRequest_Brand_Kit_Overridef12307c60b9bcadd7ce1979c762e24c6',
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
                 * Get the value of logo.
                 *
                 * Override logo asset.
                 *
                 * @return GetProductsRequest_ImageAsset|null
                 */
                public function getLogo(): ?GetProductsRequest_ImageAsset
                {
                    

                    return $this->logo;
                }
            

            
                /**
                 * Set the value of logo.
                 *
                 * @param GetProductsRequest_ImageAsset $logo Override logo asset.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setLogo(
                    GetProductsRequest_ImageAsset $logo
                ): static {
                    if ($this->logo === $logo) {
                        return $this;
                    }

                    $value = $modelData['logo'] = $logo;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateLogo($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->logo = $value;
                    $this->_rawModelDataInput['logo'] = $logo;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property logo
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processLogo(array $modelData): void
            {
                
                    if (!array_key_exists('logo', $modelData) && $this->logo === null) {
                        return;
                    }
                

                $value = array_key_exists('logo', $modelData) ? $modelData['logo'] : $this->logo;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetProductsRequest_ImageAsset($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'logo',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->logo = $this->validateLogo($value, $modelData);
            }

            /**
             * Execute all validators for the property logo
             */
            protected function validateLogo($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'logo',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsRequest_ImageAsset)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'logo',
  1 => 'GetProductsRequest_ImageAsset',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of colors.
                 *
                 * Override brand colors (hex strings).
                 *
                 * @return GetProductsRequest_Colors58142eaea10c7af98af1bebfac793b60|null
                 */
                public function getColors(): ?GetProductsRequest_Colors58142eaea10c7af98af1bebfac793b60
                {
                    

                    return $this->colors;
                }
            

            
                /**
                 * Set the value of colors.
                 *
                 * @param GetProductsRequest_Colors58142eaea10c7af98af1bebfac793b60 $colors Override brand colors (hex strings).
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setColors(
                    GetProductsRequest_Colors58142eaea10c7af98af1bebfac793b60 $colors
                ): static {
                    if ($this->colors === $colors) {
                        return $this;
                    }

                    $value = $modelData['colors'] = $colors;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateColors($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->colors = $value;
                    $this->_rawModelDataInput['colors'] = $colors;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property colors
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processColors(array $modelData): void
            {
                
                    if (!array_key_exists('colors', $modelData) && $this->colors === null) {
                        return;
                    }
                

                $value = array_key_exists('colors', $modelData) ? $modelData['colors'] : $this->colors;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetProductsRequest_Colors58142eaea10c7af98af1bebfac793b60($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'colors',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->colors = $this->validateColors($value, $modelData);
            }

            /**
             * Execute all validators for the property colors
             */
            protected function validateColors($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'colors',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsRequest_Colors58142eaea10c7af98af1bebfac793b60)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'colors',
  1 => 'GetProductsRequest_Colors58142eaea10c7af98af1bebfac793b60',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of voice.
                 *
                 * Override brand-voice description for surface-composed text/audio output.
                 *
                 * @return string|null
                 */
                public function getVoice(): ?string
                {
                    

                    return $this->voice;
                }
            

            
                /**
                 * Set the value of voice.
                 *
                 * @param string $voice Override brand-voice description for surface-composed text/audio output.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setVoice(
                    string $voice
                ): static {
                    if ($this->voice === $voice) {
                        return $this;
                    }

                    $value = $modelData['voice'] = $voice;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateVoice($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->voice = $value;
                    $this->_rawModelDataInput['voice'] = $voice;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property voice
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processVoice(array $modelData): void
            {
                
                    if (!array_key_exists('voice', $modelData) && $this->voice === null) {
                        return;
                    }
                

                $value = array_key_exists('voice', $modelData) ? $modelData['voice'] : $this->voice;

                

                $this->voice = $this->validateVoice($value, $modelData);
            }

            /**
             * Execute all validators for the property voice
             */
            protected function validateVoice($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'voice',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of tagline.
                 *
                 * Override tagline.
                 *
                 * @return string|null
                 */
                public function getTagline(): ?string
                {
                    

                    return $this->tagline;
                }
            

            
                /**
                 * Set the value of tagline.
                 *
                 * @param string $tagline Override tagline.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setTagline(
                    string $tagline
                ): static {
                    if ($this->tagline === $tagline) {
                        return $this;
                    }

                    $value = $modelData['tagline'] = $tagline;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateTagline($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->tagline = $value;
                    $this->_rawModelDataInput['tagline'] = $tagline;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property tagline
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processTagline(array $modelData): void
            {
                
                    if (!array_key_exists('tagline', $modelData) && $this->tagline === null) {
                        return;
                    }
                

                $value = array_key_exists('tagline', $modelData) ? $modelData['tagline'] : $this->tagline;

                

                $this->tagline = $this->validateTagline($value, $modelData);
            }

            /**
             * Execute all validators for the property tagline
             */
            protected function validateTagline($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'tagline',
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
    

    
        
            if (array_key_exists('logo', $modelData) &&
                $modelData['logo'] !== $this->logo
            ) {
                

                $rollbackValues['logo'] = $this->logo;
                $this->processLogo($modelData);
            }
        
    
        
            if (array_key_exists('colors', $modelData) &&
                $modelData['colors'] !== $this->colors
            ) {
                

                $rollbackValues['colors'] = $this->colors;
                $this->processColors($modelData);
            }
        
    
        
            if (array_key_exists('voice', $modelData) &&
                $modelData['voice'] !== $this->voice
            ) {
                

                $rollbackValues['voice'] = $this->voice;
                $this->processVoice($modelData);
            }
        
    
        
            if (array_key_exists('tagline', $modelData) &&
                $modelData['tagline'] !== $this->tagline
            ) {
                

                $rollbackValues['tagline'] = $this->tagline;
                $this->processTagline($modelData);
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
