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

    use PHPModelGenerator\Attributes\Required;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetProductsRequest_BrandReference
 * @package AdCP\MediaBuy 
 *
 * Brand reference for product discovery context. Resolved to full brand identity at execution time.
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/brand')]

class GetProductsRequest_BrandReference implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/brand/properties/domain')]
        
            #[SchemaName('domain')]
        
            #[Required]
        
        /** @var string Domain where /.well-known/brand.json is hosted, or the brand's operating domain */
        protected $domain;
    
        
            #[JsonPointer('/properties/brand/properties/brand_id')]
        
            #[SchemaName('brand_id')]
        
        /** @var string|null Brand identifier within the house portfolio. Optional for single-brand domains. */
        protected $brandId;
    
        
            #[JsonPointer('/properties/brand/properties/industries')]
        
            #[SchemaName('industries')]
        
        /** @var string[]|null Inline override for the brand's industries. Useful when the caller cannot modify the brand's canonical brand.json but needs to declare industries for governance (e.g., Annex III vertical detection). brand.json remains the canonical source; when omitted here, governance agents SHOULD resolve from brand.json. */
        protected $industries;
    
        
            #[JsonPointer('/properties/brand/properties/data_subject_contestation')]
        
            #[SchemaName('data_subject_contestation')]
        
        /** @var GetProductsRequest_Data_Subject_Contestation6ce85a378238546858b122363ebca078|null Inline override for the brand's contestation contact point. Useful when the operator does not control brand.json but needs to discharge Art 22(3) for this plan. brand.json is canonical; when omitted, governance agents resolve brand → house → missing. */
        protected $dataSubjectContestation;
    
        
            #[JsonPointer('/properties/brand/properties/brand_kit_override')]
        
            #[SchemaName('brand_kit_override')]
        
        /** @var GetProductsRequest_Brand_Kit_Overridef12307c60b9bcadd7ce1979c762e24c6|null Inline override for brand-kit fields normally resolved from `/.well-known/brand.json` on `domain` (logo, colors, voice, tagline). Use when brand.json is missing, stale, or inappropriate for this specific call — e.g., a campaign-scoped tagline, a co-branded creative, a freshly-rebranded color palette the brand.json hasn't shipped yet. Same inline-override pattern as `industries` and `data_subject_contestation` above: brand.json is canonical, the override is per-call. Adopters needing to override fields outside this subset (`voice_attributes`, `prohibited_terms`, etc.) MUST publish a different brand.json and reference it via a different `domain` — the inline override is intentionally narrow to a small high-traffic subset.

**Merge semantics (normative).** The merge is **field-level**, not whole-object replacement. Each field within `brand_kit_override` (`logo`, `colors`, `voice`, `tagline`) is evaluated independently — when a field is present on the override the override value applies; when a field is absent the brand.json value applies (or is absent if brand.json doesn't carry one either). For composite fields (`colors.primary`, `colors.secondary`, `colors.accent`), the merge is one level deeper: each color slot is evaluated independently — a producer can override `colors.primary` while still inheriting `colors.secondary` from brand.json. SDKs MUST NOT treat a present `brand_kit_override.colors` as wiping the brand.json `colors` block entirely; only the per-slot fields present in the override take precedence. Without this rule, a partial-override semantics would diverge across SDKs and produce inconsistent rendering for the same payload. */
        protected $brandKitOverride;
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  1 => 'brand_id',
  2 => 'industries',
  3 => 'data_subject_contestation',
  4 => 'brand_kit_override',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetProductsRequest_BrandReference constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processDomain($rawModelDataInput);
            
        
            
                $this->processBrandId($rawModelDataInput);
            
        
            
                $this->processIndustries($rawModelDataInput);
            
        
            
                $this->processDataSubjectContestation($rawModelDataInput);
            
        
            
                $this->processBrandKitOverride($rawModelDataInput);
            
        
            
        

        
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
   'domain',
   'brand_id',
   'industries',
   'data_subject_contestation',
   'brand_kit_override',
));

    

    return $additionalProperties;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetProductsRequest_BrandReference',
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
                 * Get the value of domain.
                 *
                 * Domain where /.well-known/brand.json is hosted, or the brand's operating domain
                 *
                 * @return string
                 */
                public function getDomain(): string
                {
                    

                    return $this->domain;
                }
            

            
                /**
                 * Set the value of domain.
                 *
                 * @param string $domain Domain where /.well-known/brand.json is hosted, or the brand's operating domain
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setDomain(
                    string $domain
                ): static {
                    if ($this->domain === $domain) {
                        return $this;
                    }

                    $value = $modelData['domain'] = $domain;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateDomain($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->domain = $value;
                    $this->_rawModelDataInput['domain'] = $domain;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property domain
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processDomain(array $modelData): void
            {
                

                $value = array_key_exists('domain', $modelData) ? $modelData['domain'] : $this->domain;

                

                $this->domain = $this->validateDomain($value, $modelData);
            }

            /**
             * Execute all validators for the property domain
             */
            protected function validateDomain($value, array $modelData)
            {
                
                    

if (!array_key_exists('domain', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'domain',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'domain',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && !preg_match(base64_decode('L15bYS16MC05XShbYS16MC05LV0qW2EtejAtOV0pPyhcLlthLXowLTldKFthLXowLTktXSpbYS16MC05XSk/KSokLw=='), $value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\PatternException($value ?? null, ...array (
  0 => 'domain',
  1 => '^[a-z0-9]([a-z0-9-]*[a-z0-9])?(\\.[a-z0-9]([a-z0-9-]*[a-z0-9])?)*$',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of brand_id.
                 *
                 * Brand identifier within the house portfolio. Optional for single-brand domains.
                 * @example tide
                 * @example cheerios
                 * @example air_jordan
                 * @example nike
                 * @example pampers
                 *
                 * @return string|null
                 */
                public function getBrandId(): ?string
                {
                    

                    return $this->brandId;
                }
            

            
                /**
                 * Set the value of brand_id.
                 *
                 * @param string $brandId Brand identifier within the house portfolio. Optional for single-brand domains.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setBrandId(
                    string $brandId
                ): static {
                    if ($this->brandId === $brandId) {
                        return $this;
                    }

                    $value = $modelData['brand_id'] = $brandId;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateBrandId($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->brandId = $value;
                    $this->_rawModelDataInput['brand_id'] = $brandId;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property brandId
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processBrandId(array $modelData): void
            {
                
                    if (!array_key_exists('brand_id', $modelData) && $this->brandId === null) {
                        return;
                    }
                

                $value = array_key_exists('brand_id', $modelData) ? $modelData['brand_id'] : $this->brandId;

                

                $this->brandId = $this->validateBrandId($value, $modelData);
            }

            /**
             * Execute all validators for the property brandId
             */
            protected function validateBrandId($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'brand_id',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && !preg_match(base64_decode('L15bYS16MC05X10rJC8='), $value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\PatternException($value ?? null, ...array (
  0 => 'brand_id',
  1 => '^[a-z0-9_]+$',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of industries.
                 *
                 * Inline override for the brand's industries. Useful when the caller cannot modify the brand's canonical brand.json but needs to declare industries for governance (e.g., Annex III vertical detection). brand.json remains the canonical source; when omitted here, governance agents SHOULD resolve from brand.json.
                 *
                 * @return string[]|null
                 */
                public function getIndustries(): ?array
                {
                    

                    return $this->industries;
                }
            

            
                /**
                 * Set the value of industries.
                 *
                 * @param string[] $industries Inline override for the brand's industries. Useful when the caller cannot modify the brand's canonical brand.json but needs to declare industries for governance (e.g., Annex III vertical detection). brand.json remains the canonical source; when omitted here, governance agents SHOULD resolve from brand.json.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setIndustries(
                    array $industries
                ): static {
                    if ($this->industries === $industries) {
                        return $this;
                    }

                    $value = $modelData['industries'] = $industries;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateIndustries($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->industries = $value;
                    $this->_rawModelDataInput['industries'] = $industries;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property industries
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processIndustries(array $modelData): void
            {
                
                    if (!array_key_exists('industries', $modelData) && $this->industries === null) {
                        return;
                    }
                

                $value = array_key_exists('industries', $modelData) ? $modelData['industries'] : $this->industries;

                

                $this->industries = $this->validateIndustries($value, $modelData);
            }

            /**
             * Execute all validators for the property industries
             */
            protected function validateIndustries($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'industries',
  1 => 'array',
)));
}

                
                    $this->validateIndustries_ArrayItem_b9a27679acff5e92959a95b2580a0a37($value, $modelData);
                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of data_subject_contestation.
                 *
                 * Inline override for the brand's contestation contact point. Useful when the operator does not control brand.json but needs to discharge Art 22(3) for this plan. brand.json is canonical; when omitted, governance agents resolve brand → house → missing.
                 *
                 * @return GetProductsRequest_Data_Subject_Contestation6ce85a378238546858b122363ebca078|null
                 */
                public function getDataSubjectContestation(): ?GetProductsRequest_Data_Subject_Contestation6ce85a378238546858b122363ebca078
                {
                    

                    return $this->dataSubjectContestation;
                }
            

            
                /**
                 * Set the value of data_subject_contestation.
                 *
                 * @param GetProductsRequest_Data_Subject_Contestation6ce85a378238546858b122363ebca078 $dataSubjectContestation Inline override for the brand's contestation contact point. Useful when the operator does not control brand.json but needs to discharge Art 22(3) for this plan. brand.json is canonical; when omitted, governance agents resolve brand → house → missing.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setDataSubjectContestation(
                    GetProductsRequest_Data_Subject_Contestation6ce85a378238546858b122363ebca078 $dataSubjectContestation
                ): static {
                    if ($this->dataSubjectContestation === $dataSubjectContestation) {
                        return $this;
                    }

                    $value = $modelData['data_subject_contestation'] = $dataSubjectContestation;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateDataSubjectContestation($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->dataSubjectContestation = $value;
                    $this->_rawModelDataInput['data_subject_contestation'] = $dataSubjectContestation;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property dataSubjectContestation
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processDataSubjectContestation(array $modelData): void
            {
                
                    if (!array_key_exists('data_subject_contestation', $modelData) && $this->dataSubjectContestation === null) {
                        return;
                    }
                

                $value = array_key_exists('data_subject_contestation', $modelData) ? $modelData['data_subject_contestation'] : $this->dataSubjectContestation;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetProductsRequest_Data_Subject_Contestation6ce85a378238546858b122363ebca078($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'data_subject_contestation',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->dataSubjectContestation = $this->validateDataSubjectContestation($value, $modelData);
            }

            /**
             * Execute all validators for the property dataSubjectContestation
             */
            protected function validateDataSubjectContestation($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'data_subject_contestation',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsRequest_Data_Subject_Contestation6ce85a378238546858b122363ebca078)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'data_subject_contestation',
  1 => 'GetProductsRequest_Data_Subject_Contestation6ce85a378238546858b122363ebca078',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of brand_kit_override.
                 *
                 * Inline override for brand-kit fields normally resolved from `/.well-known/brand.json` on `domain` (logo, colors, voice, tagline). Use when brand.json is missing, stale, or inappropriate for this specific call — e.g., a campaign-scoped tagline, a co-branded creative, a freshly-rebranded color palette the brand.json hasn't shipped yet. Same inline-override pattern as `industries` and `data_subject_contestation` above: brand.json is canonical, the override is per-call. Adopters needing to override fields outside this subset (`voice_attributes`, `prohibited_terms`, etc.) MUST publish a different brand.json and reference it via a different `domain` — the inline override is intentionally narrow to a small high-traffic subset.

**Merge semantics (normative).** The merge is **field-level**, not whole-object replacement. Each field within `brand_kit_override` (`logo`, `colors`, `voice`, `tagline`) is evaluated independently — when a field is present on the override the override value applies; when a field is absent the brand.json value applies (or is absent if brand.json doesn't carry one either). For composite fields (`colors.primary`, `colors.secondary`, `colors.accent`), the merge is one level deeper: each color slot is evaluated independently — a producer can override `colors.primary` while still inheriting `colors.secondary` from brand.json. SDKs MUST NOT treat a present `brand_kit_override.colors` as wiping the brand.json `colors` block entirely; only the per-slot fields present in the override take precedence. Without this rule, a partial-override semantics would diverge across SDKs and produce inconsistent rendering for the same payload.
                 *
                 * @return GetProductsRequest_Brand_Kit_Overridef12307c60b9bcadd7ce1979c762e24c6|null
                 */
                public function getBrandKitOverride(): ?GetProductsRequest_Brand_Kit_Overridef12307c60b9bcadd7ce1979c762e24c6
                {
                    

                    return $this->brandKitOverride;
                }
            

            
                /**
                 * Set the value of brand_kit_override.
                 *
                 * @param GetProductsRequest_Brand_Kit_Overridef12307c60b9bcadd7ce1979c762e24c6 $brandKitOverride Inline override for brand-kit fields normally resolved from `/.well-known/brand.json` on `domain` (logo, colors, voice, tagline). Use when brand.json is missing, stale, or inappropriate for this specific call — e.g., a campaign-scoped tagline, a co-branded creative, a freshly-rebranded color palette the brand.json hasn't shipped yet. Same inline-override pattern as `industries` and `data_subject_contestation` above: brand.json is canonical, the override is per-call. Adopters needing to override fields outside this subset (`voice_attributes`, `prohibited_terms`, etc.) MUST publish a different brand.json and reference it via a different `domain` — the inline override is intentionally narrow to a small high-traffic subset.

**Merge semantics (normative).** The merge is **field-level**, not whole-object replacement. Each field within `brand_kit_override` (`logo`, `colors`, `voice`, `tagline`) is evaluated independently — when a field is present on the override the override value applies; when a field is absent the brand.json value applies (or is absent if brand.json doesn't carry one either). For composite fields (`colors.primary`, `colors.secondary`, `colors.accent`), the merge is one level deeper: each color slot is evaluated independently — a producer can override `colors.primary` while still inheriting `colors.secondary` from brand.json. SDKs MUST NOT treat a present `brand_kit_override.colors` as wiping the brand.json `colors` block entirely; only the per-slot fields present in the override take precedence. Without this rule, a partial-override semantics would diverge across SDKs and produce inconsistent rendering for the same payload.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setBrandKitOverride(
                    GetProductsRequest_Brand_Kit_Overridef12307c60b9bcadd7ce1979c762e24c6 $brandKitOverride
                ): static {
                    if ($this->brandKitOverride === $brandKitOverride) {
                        return $this;
                    }

                    $value = $modelData['brand_kit_override'] = $brandKitOverride;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateBrandKitOverride($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->brandKitOverride = $value;
                    $this->_rawModelDataInput['brand_kit_override'] = $brandKitOverride;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property brandKitOverride
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processBrandKitOverride(array $modelData): void
            {
                
                    if (!array_key_exists('brand_kit_override', $modelData) && $this->brandKitOverride === null) {
                        return;
                    }
                

                $value = array_key_exists('brand_kit_override', $modelData) ? $modelData['brand_kit_override'] : $this->brandKitOverride;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetProductsRequest_Brand_Kit_Overridef12307c60b9bcadd7ce1979c762e24c6($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'brand_kit_override',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->brandKitOverride = $this->validateBrandKitOverride($value, $modelData);
            }

            /**
             * Execute all validators for the property brandKitOverride
             */
            protected function validateBrandKitOverride($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'brand_kit_override',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsRequest_Brand_Kit_Overridef12307c60b9bcadd7ce1979c762e24c6)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'brand_kit_override',
  1 => 'GetProductsRequest_Brand_Kit_Overridef12307c60b9bcadd7ce1979c762e24c6',
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
    

    
        
            if (array_key_exists('domain', $modelData) &&
                $modelData['domain'] !== $this->domain
            ) {
                

                $rollbackValues['domain'] = $this->domain;
                $this->processDomain($modelData);
            }
        
    
        
            if (array_key_exists('brand_id', $modelData) &&
                $modelData['brand_id'] !== $this->brandId
            ) {
                

                $rollbackValues['brandId'] = $this->brandId;
                $this->processBrandId($modelData);
            }
        
    
        
            if (array_key_exists('industries', $modelData) &&
                $modelData['industries'] !== $this->industries
            ) {
                

                $rollbackValues['industries'] = $this->industries;
                $this->processIndustries($modelData);
            }
        
    
        
            if (array_key_exists('data_subject_contestation', $modelData) &&
                $modelData['data_subject_contestation'] !== $this->dataSubjectContestation
            ) {
                

                $rollbackValues['dataSubjectContestation'] = $this->dataSubjectContestation;
                $this->processDataSubjectContestation($modelData);
            }
        
    
        
            if (array_key_exists('brand_kit_override', $modelData) &&
                $modelData['brand_kit_override'] !== $this->brandKitOverride
            ) {
                

                $rollbackValues['brandKitOverride'] = $this->brandKitOverride;
                $this->processBrandKitOverride($modelData);
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




private function validateIndustries_ArrayItem_b9a27679acff5e92959a95b2580a0a37(&$value, $modelData): void {
                    $invalidItems_514d943a4a291820d09dbcf582df056e = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_514d943a4a291820d09dbcf582df056e, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            

            
                

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array industries',
  1 => 'string',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_514d943a4a291820d09dbcf582df056e[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_514d943a4a291820d09dbcf582df056e[$index])
                ? $invalidItems_514d943a4a291820d09dbcf582df056e[$index][] = $e
                : $invalidItems_514d943a4a291820d09dbcf582df056e[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_514d943a4a291820d09dbcf582df056e);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'industries',
  1 => $invalidItems_514d943a4a291820d09dbcf582df056e,
)));
                    }
                }


}

// @codeCoverageIgnoreEnd
