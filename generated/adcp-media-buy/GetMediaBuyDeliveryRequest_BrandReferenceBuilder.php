<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Builder class for GetMediaBuyDeliveryRequest_BrandReference
 */
class GetMediaBuyDeliveryRequest_BrandReferenceBuilder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuyDeliveryRequest_BrandReference with fully validated properties
     */
    public function validate(): GetMediaBuyDeliveryRequest_BrandReference
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuyDeliveryRequest_BrandReference($this->_rawModelDataInput);
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
             * Get the value of domain.
             *
             * Domain where /.well-known/brand.json is hosted, or the brand's operating domain
             *
             * @return string|null
             */
            public function getDomain(): ?string
            {
                return $this->_rawModelDataInput['domain'] ?? null;
            }

            /**
             * Set the value of domain.
             *
             * @param string $domain Domain where /.well-known/brand.json is hosted, or the brand's operating domain
             *
             * {@link GetMediaBuyDeliveryRequest_BrandReference::processDomain}
             * 
             *
             * @return static
             */
            public function setDomain(
                string $domain
            ): static {
                if (array_key_exists('domain', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['domain'] === $domain
                ) {
                    return $this;
                }

                $value = $modelData['domain'] = $domain;

                

                

                $this->_rawModelDataInput['domain'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of brand_id.
             *
             * Brand identifier within the house portfolio. Optional for single-brand domains.
             *
             * @return string|null
             */
            public function getBrandId(): ?string
            {
                return $this->_rawModelDataInput['brand_id'] ?? null;
            }

            /**
             * Set the value of brand_id.
             *
             * @param string $brandId Brand identifier within the house portfolio. Optional for single-brand domains.
             *
             * {@link GetMediaBuyDeliveryRequest_BrandReference::processBrandId}
             * 
             *
             * @return static
             */
            public function setBrandId(
                string $brandId
            ): static {
                if (array_key_exists('brand_id', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['brand_id'] === $brandId
                ) {
                    return $this;
                }

                $value = $modelData['brand_id'] = $brandId;

                

                

                $this->_rawModelDataInput['brand_id'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['industries'] ?? null;
            }

            /**
             * Set the value of industries.
             *
             * @param string[] $industries Inline override for the brand's industries. Useful when the caller cannot modify the brand's canonical brand.json but needs to declare industries for governance (e.g., Annex III vertical detection). brand.json remains the canonical source; when omitted here, governance agents SHOULD resolve from brand.json.
             *
             * {@link GetMediaBuyDeliveryRequest_BrandReference::processIndustries}
             * 
             *
             * @return static
             */
            public function setIndustries(
                array $industries
            ): static {
                if (array_key_exists('industries', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['industries'] === $industries
                ) {
                    return $this;
                }

                $value = $modelData['industries'] = $industries;

                

                

                $this->_rawModelDataInput['industries'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of data_subject_contestation.
             *
             * Inline override for the brand's contestation contact point. Useful when the operator does not control brand.json but needs to discharge Art 22(3) for this plan. brand.json is canonical; when omitted, governance agents resolve brand → house → missing.
             *
             * @return GetMediaBuyDeliveryRequest_Data_Subject_Contestation6ce85a378238546858b122363ebca078|GetMediaBuyDeliveryRequest_Data_Subject_Contestation6ce85a378238546858b122363ebca078Builder|array|null
             */
            public function getDataSubjectContestation(): mixed
            {
                return $this->_rawModelDataInput['data_subject_contestation'] ?? null;
            }

            /**
             * Set the value of data_subject_contestation.
             *
             * @param GetMediaBuyDeliveryRequest_Data_Subject_Contestation6ce85a378238546858b122363ebca078|GetMediaBuyDeliveryRequest_Data_Subject_Contestation6ce85a378238546858b122363ebca078Builder|array $dataSubjectContestation Inline override for the brand's contestation contact point. Useful when the operator does not control brand.json but needs to discharge Art 22(3) for this plan. brand.json is canonical; when omitted, governance agents resolve brand → house → missing.
             *
             * {@link GetMediaBuyDeliveryRequest_BrandReference::processDataSubjectContestation}
             * 
             *
             * @return static
             */
            public function setDataSubjectContestation(
                mixed $dataSubjectContestation
            ): static {
                if (array_key_exists('data_subject_contestation', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['data_subject_contestation'] === $dataSubjectContestation
                ) {
                    return $this;
                }

                $value = $modelData['data_subject_contestation'] = $dataSubjectContestation;

                

                

                $this->_rawModelDataInput['data_subject_contestation'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of brand_kit_override.
             *
             * Inline override for brand-kit fields normally resolved from `/.well-known/brand.json` on `domain` (logo, colors, voice, tagline). Use when brand.json is missing, stale, or inappropriate for this specific call — e.g., a campaign-scoped tagline, a co-branded creative, a freshly-rebranded color palette the brand.json hasn't shipped yet. Same inline-override pattern as `industries` and `data_subject_contestation` above: brand.json is canonical, the override is per-call. Adopters needing to override fields outside this subset (`voice_attributes`, `prohibited_terms`, etc.) MUST publish a different brand.json and reference it via a different `domain` — the inline override is intentionally narrow to a small high-traffic subset.

**Merge semantics (normative).** The merge is **field-level**, not whole-object replacement. Each field within `brand_kit_override` (`logo`, `colors`, `voice`, `tagline`) is evaluated independently — when a field is present on the override the override value applies; when a field is absent the brand.json value applies (or is absent if brand.json doesn't carry one either). For composite fields (`colors.primary`, `colors.secondary`, `colors.accent`), the merge is one level deeper: each color slot is evaluated independently — a producer can override `colors.primary` while still inheriting `colors.secondary` from brand.json. SDKs MUST NOT treat a present `brand_kit_override.colors` as wiping the brand.json `colors` block entirely; only the per-slot fields present in the override take precedence. Without this rule, a partial-override semantics would diverge across SDKs and produce inconsistent rendering for the same payload.
             *
             * @return GetMediaBuyDeliveryRequest_Brand_Kit_Overridecb3f88e49db9b91749c51c9cd1b3e4d4|GetMediaBuyDeliveryRequest_Brand_Kit_Overridecb3f88e49db9b91749c51c9cd1b3e4d4Builder|array|null
             */
            public function getBrandKitOverride(): mixed
            {
                return $this->_rawModelDataInput['brand_kit_override'] ?? null;
            }

            /**
             * Set the value of brand_kit_override.
             *
             * @param GetMediaBuyDeliveryRequest_Brand_Kit_Overridecb3f88e49db9b91749c51c9cd1b3e4d4|GetMediaBuyDeliveryRequest_Brand_Kit_Overridecb3f88e49db9b91749c51c9cd1b3e4d4Builder|array $brandKitOverride Inline override for brand-kit fields normally resolved from `/.well-known/brand.json` on `domain` (logo, colors, voice, tagline). Use when brand.json is missing, stale, or inappropriate for this specific call — e.g., a campaign-scoped tagline, a co-branded creative, a freshly-rebranded color palette the brand.json hasn't shipped yet. Same inline-override pattern as `industries` and `data_subject_contestation` above: brand.json is canonical, the override is per-call. Adopters needing to override fields outside this subset (`voice_attributes`, `prohibited_terms`, etc.) MUST publish a different brand.json and reference it via a different `domain` — the inline override is intentionally narrow to a small high-traffic subset.

**Merge semantics (normative).** The merge is **field-level**, not whole-object replacement. Each field within `brand_kit_override` (`logo`, `colors`, `voice`, `tagline`) is evaluated independently — when a field is present on the override the override value applies; when a field is absent the brand.json value applies (or is absent if brand.json doesn't carry one either). For composite fields (`colors.primary`, `colors.secondary`, `colors.accent`), the merge is one level deeper: each color slot is evaluated independently — a producer can override `colors.primary` while still inheriting `colors.secondary` from brand.json. SDKs MUST NOT treat a present `brand_kit_override.colors` as wiping the brand.json `colors` block entirely; only the per-slot fields present in the override take precedence. Without this rule, a partial-override semantics would diverge across SDKs and produce inconsistent rendering for the same payload.
             *
             * {@link GetMediaBuyDeliveryRequest_BrandReference::processBrandKitOverride}
             * 
             *
             * @return static
             */
            public function setBrandKitOverride(
                mixed $brandKitOverride
            ): static {
                if (array_key_exists('brand_kit_override', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['brand_kit_override'] === $brandKitOverride
                ) {
                    return $this;
                }

                $value = $modelData['brand_kit_override'] = $brandKitOverride;

                

                

                $this->_rawModelDataInput['brand_kit_override'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
