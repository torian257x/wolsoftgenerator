<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use UnitEnum;

    use AdCP\MediaBuy\Enums\DigitalSourceType;

    use AdCP\MediaBuy\Enums\GetMediaBuysRequest_ProvenanceHuman_Oversight;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

    use AdCP\MediaBuy\Enums\GetMediaBuysRequest_Declared_By13c986791ce55365e13a7cd5ff90f7dcRole;

    use AdCP\MediaBuy\Enums\EmbeddedProvenanceMethod;

    use AdCP\MediaBuy\Enums\WatermarkMediaType;

    use AdCP\MediaBuy\Enums\C2PAWatermarkAction;

    use AdCP\MediaBuy\Enums\DisclosurePersistence;

    use AdCP\MediaBuy\Enums\DisclosurePosition;

    use AdCP\MediaBuy\Enums\GetMediaBuysRequest_ItemOfArrayVerificationab0379bc9ff851960f9f645c9916029eResult;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetMediaBuysRequest_Provenance
 * @package AdCP\MediaBuy 
 *
 * Provenance metadata for this asset, overrides manifest-level provenance
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/account/oneOf/1/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance')]

class GetMediaBuysRequest_Provenance implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/account/oneOf/1/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/digital_source_type')]
        
            #[SchemaName('digital_source_type')]
        
        /** @var DigitalSourceType|null IPTC-aligned classification of AI involvement in producing this content */
        protected $digitalSourceType;
    
        
            #[JsonPointer('/properties/account/oneOf/1/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/ai_tool')]
        
            #[SchemaName('ai_tool')]
        
        /** @var GetMediaBuysRequest_Ai_Tool866c3fd929909158c718664e57db4355|null AI system used to generate or modify this content. Aligns with IPTC 2025.1 AI metadata fields and C2PA claim_generator. */
        protected $aiTool;
    
        
            #[JsonPointer('/properties/account/oneOf/1/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/human_oversight')]
        
            #[SchemaName('human_oversight')]
        
        /** @var GetMediaBuysRequest_ProvenanceHuman_Oversight|null Level of human involvement in the AI-assisted creation process. Independent of `disclosure.required` — the protocol does not derive disclosure obligations from oversight level. Some regulations include carve-outs for human-edited or human-directed AI output, but those carve-outs have factual prerequisites the schema cannot evaluate. Asserting `edited` or `directed` does not by itself justify `disclosure.required: false`. */
        protected $humanOversight;
    
        
            #[JsonPointer('/properties/account/oneOf/1/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/declared_by')]
        
            #[SchemaName('declared_by')]
        
        /** @var GetMediaBuysRequest_Declared_By13c986791ce55365e13a7cd5ff90f7dc|null Party declaring this provenance. Identifies who attached the provenance claim, enabling receiving parties to assess trust. */
        protected $declaredBy;
    
        
            #[JsonPointer('/properties/account/oneOf/1/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/declared_at')]
        
            #[SchemaName('declared_at')]
        
        /** @var string|null When this provenance claim was made (ISO 8601). Distinct from created_time, which records when the content itself was produced. A provenance claim may be attached well after content creation, for example when retroactively declaring AI involvement for regulatory compliance. */
        protected $declaredAt;
    
        
            #[JsonPointer('/properties/account/oneOf/1/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/created_time')]
        
            #[SchemaName('created_time')]
        
        /** @var string|null When this content was created or generated (ISO 8601) */
        protected $createdTime;
    
        
            #[JsonPointer('/properties/account/oneOf/1/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/c2pa')]
        
            #[SchemaName('c2pa')]
        
        /** @var GetMediaBuysRequest_C2pad8913cd7eeded75f689622ab440bcdb7|null C2PA sidecar manifest reference. Links to a detached cryptographic provenance manifest for this content. Note: file-level C2PA bindings break when ad servers transcode, resize, or re-encode assets. For pipelines with intermediaries, consider embedded_provenance as the primary provenance mechanism. */
        protected $c2pa;
    
        
            #[JsonPointer('/properties/account/oneOf/1/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/embedded_provenance')]
        
            #[SchemaName('embedded_provenance')]
        
        /** @var GetMediaBuysRequest_ItemOfArrayEmbedded_Provenancef0558b6fefdff71fa71ee63224471765[]|null Provenance metadata embedded within the content stream. Each entry declares one embedding layer: structured provenance data carried inside the content itself, as distinct from sidecar references (c2pa.manifest_url). Embedded provenance survives operations that break sidecar and file-level bindings: ad-server transcoding, CMS ingestion, copy-paste, reformatting, and CDN re-encoding. For ad-tech pipelines where content passes through multiple intermediaries, embedded provenance is the reliable path for provenance that persists from declaration through delivery. This is a declaration by the embedding party. The receiving party (the seller) is the verifier-of-record: it confirms the claim by calling a governance agent it trusts (typically one published in `creative_policy.accepted_verifiers`). */
        protected $embeddedProvenance;
    
        
            #[JsonPointer('/properties/account/oneOf/1/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/watermarks')]
        
            #[SchemaName('watermarks')]
        
        /** @var GetMediaBuysRequest_ItemOfArrayWatermarks254d53f57a5c6e0b76076f9e8940ee56[]|null Content watermarks applied to this asset. Each entry declares one watermarking layer: a content modification that encodes an identifier or fingerprint within the asset. Watermarks differ from embedded provenance: a watermark encodes an identifier (who generated it, who owns it), while embedded provenance carries or references a structured provenance record (the full chain of custody). A single asset may carry both. Aligns with C2PA action taxonomy: c2pa.watermarked.bound (watermark linked to a C2PA manifest) and c2pa.watermarked.unbound (watermark independent of any manifest). This is a declaration by the watermarking party. The receiving party (the seller) is the verifier-of-record: it confirms the claim by calling a governance agent it trusts (typically one published in `creative_policy.accepted_verifiers`). */
        protected $watermarks;
    
        
            #[JsonPointer('/properties/account/oneOf/1/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/disclosure')]
        
            #[SchemaName('disclosure')]
        
        /** @var GetMediaBuysRequest_Disclosure0b892187b12d721c20d573c7ec349c30|null Regulatory disclosure requirements for this content. Indicates whether AI disclosure is required and under which jurisdictions. */
        protected $disclosure;
    
        
            #[JsonPointer('/properties/account/oneOf/1/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/verification')]
        
            #[SchemaName('verification')]
        
        /** @var GetMediaBuysRequest_ItemOfArrayVerificationab0379bc9ff851960f9f645c9916029e[]|null Third-party verification or detection results for this content. Multiple services may independently evaluate the same content. Provenance is a claim — verification results attached by the declaring party are supplementary. The enforcing party (e.g., seller/publisher) should run its own verification via get_creative_features or calibrate_content. */
        protected $verification;
    
        
            #[JsonPointer('/properties/account/oneOf/1/properties/brand/properties/brand_kit_override/properties/logo/properties/provenance/properties/ext')]
        
            #[SchemaName('ext')]
        
        /** @var GetMediaBuysRequest_ExtensionObject|null Extension object for platform-specific, vendor-namespaced parameters. Extensions are always optional and must be namespaced under a vendor/platform key (e.g., ext.gam, ext.roku). Used for custom capabilities, partner-specific configuration, and features being proposed for standardization. */
        protected $ext;
    
        
            #[Internal]
        
        /** @var array Collect all additional properties provided to the schema */
        private $_additionalProperties = array (
);
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  0 => 'digital_source_type',
  1 => 'ai_tool',
  2 => 'human_oversight',
  3 => 'declared_by',
  4 => 'declared_at',
  5 => 'created_time',
  6 => 'c2pa',
  7 => 'embedded_provenance',
  8 => 'watermarks',
  9 => 'disclosure',
  10 => 'verification',
  11 => 'ext',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetMediaBuysRequest_Provenance constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processDigitalSourceType($rawModelDataInput);
            
        
            
                $this->processAiTool($rawModelDataInput);
            
        
            
                $this->processHumanOversight($rawModelDataInput);
            
        
            
                $this->processDeclaredBy($rawModelDataInput);
            
        
            
                $this->processDeclaredAt($rawModelDataInput);
            
        
            
                $this->processCreatedTime($rawModelDataInput);
            
        
            
                $this->processC2pa($rawModelDataInput);
            
        
            
                $this->processEmbeddedProvenance($rawModelDataInput);
            
        
            
                $this->processWatermarks($rawModelDataInput);
            
        
            
                $this->processDisclosure($rawModelDataInput);
            
        
            
                $this->processVerification($rawModelDataInput);
            
        
            
                $this->processExt($rawModelDataInput);
            
        
            
        
            
        

        
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
   'digital_source_type',
   'ai_tool',
   'human_oversight',
   'declared_by',
   'declared_at',
   'created_time',
   'c2pa',
   'embedded_provenance',
   'watermarks',
   'disclosure',
   'verification',
   'ext',
)) as $propertyKey) {
        

        $this->_additionalProperties[$propertyKey] = $value[$propertyKey];
    }

    return false;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidAdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetMediaBuysRequest_Provenance',
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
                 * Get the value of digital_source_type.
                 *
                 * IPTC-aligned classification of AI involvement in producing this content
                 *
                 * @return DigitalSourceType|null
                 */
                public function getDigitalSourceType(): ?DigitalSourceType
                {
                    

                    return $this->digitalSourceType;
                }
            

            
                /**
                 * Set the value of digital_source_type.
                 *
                 * @param string|DigitalSourceType|null $digitalSourceType IPTC-aligned classification of AI involvement in producing this content
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setDigitalSourceType(
                    string | DigitalSourceType | null $digitalSourceType
                ): static {
                    if ($this->digitalSourceType === $digitalSourceType) {
                        return $this;
                    }

                    $value = $modelData['digital_source_type'] = $digitalSourceType;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateDigitalSourceType($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->digitalSourceType = $value;
                    $this->_rawModelDataInput['digital_source_type'] = $digitalSourceType;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property digitalSourceType
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processDigitalSourceType(array $modelData): void
            {
                
                    if (!array_key_exists('digital_source_type', $modelData) && $this->digitalSourceType === null) {
                        return;
                    }
                

                $value = array_key_exists('digital_source_type', $modelData) ? $modelData['digital_source_type'] : $this->digitalSourceType;

                

                $this->digitalSourceType = $this->validateDigitalSourceType($value, $modelData);
            }

            /**
             * Execute all validators for the property digitalSourceType
             */
            protected function validateDigitalSourceType($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof DigitalSourceType)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'digital_source_type',
  1 => 'DigitalSourceType',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'digital_source_type',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'digital_capture',
   'digital_creation',
   'trained_algorithmic_media',
   'composite_with_trained_algorithmic_media',
   'algorithmic_media',
   'composite_capture',
   'composite_synthetic',
   'human_edits',
   'data_driven_media',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'digital_source_type',
  1 => 
  array (
    0 => 'digital_capture',
    1 => 'digital_creation',
    2 => 'trained_algorithmic_media',
    3 => 'composite_with_trained_algorithmic_media',
    4 => 'algorithmic_media',
    5 => 'composite_capture',
    6 => 'composite_synthetic',
    7 => 'human_edits',
    8 => 'data_driven_media',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\DigitalSourceType',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'digital_source_type',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'digital_source_type',
  1 => 'php_model_generator_enum',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of ai_tool.
                 *
                 * AI system used to generate or modify this content. Aligns with IPTC 2025.1 AI metadata fields and C2PA claim_generator.
                 *
                 * @return GetMediaBuysRequest_Ai_Tool866c3fd929909158c718664e57db4355|null
                 */
                public function getAiTool(): ?GetMediaBuysRequest_Ai_Tool866c3fd929909158c718664e57db4355
                {
                    

                    return $this->aiTool;
                }
            

            
                /**
                 * Set the value of ai_tool.
                 *
                 * @param GetMediaBuysRequest_Ai_Tool866c3fd929909158c718664e57db4355 $aiTool AI system used to generate or modify this content. Aligns with IPTC 2025.1 AI metadata fields and C2PA claim_generator.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setAiTool(
                    GetMediaBuysRequest_Ai_Tool866c3fd929909158c718664e57db4355 $aiTool
                ): static {
                    if ($this->aiTool === $aiTool) {
                        return $this;
                    }

                    $value = $modelData['ai_tool'] = $aiTool;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateAiTool($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->aiTool = $value;
                    $this->_rawModelDataInput['ai_tool'] = $aiTool;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property aiTool
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processAiTool(array $modelData): void
            {
                
                    if (!array_key_exists('ai_tool', $modelData) && $this->aiTool === null) {
                        return;
                    }
                

                $value = array_key_exists('ai_tool', $modelData) ? $modelData['ai_tool'] : $this->aiTool;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysRequest_Ai_Tool866c3fd929909158c718664e57db4355($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'ai_tool',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->aiTool = $this->validateAiTool($value, $modelData);
            }

            /**
             * Execute all validators for the property aiTool
             */
            protected function validateAiTool($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'ai_tool',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysRequest_Ai_Tool866c3fd929909158c718664e57db4355)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'ai_tool',
  1 => 'GetMediaBuysRequest_Ai_Tool866c3fd929909158c718664e57db4355',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of human_oversight.
                 *
                 * Level of human involvement in the AI-assisted creation process. Independent of `disclosure.required` — the protocol does not derive disclosure obligations from oversight level. Some regulations include carve-outs for human-edited or human-directed AI output, but those carve-outs have factual prerequisites the schema cannot evaluate. Asserting `edited` or `directed` does not by itself justify `disclosure.required: false`.
                 *
                 * @return GetMediaBuysRequest_ProvenanceHuman_Oversight|null
                 */
                public function getHumanOversight(): ?GetMediaBuysRequest_ProvenanceHuman_Oversight
                {
                    

                    return $this->humanOversight;
                }
            

            
                /**
                 * Set the value of human_oversight.
                 *
                 * @param string|GetMediaBuysRequest_ProvenanceHuman_Oversight|null $humanOversight Level of human involvement in the AI-assisted creation process. Independent of `disclosure.required` — the protocol does not derive disclosure obligations from oversight level. Some regulations include carve-outs for human-edited or human-directed AI output, but those carve-outs have factual prerequisites the schema cannot evaluate. Asserting `edited` or `directed` does not by itself justify `disclosure.required: false`.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setHumanOversight(
                    string | GetMediaBuysRequest_ProvenanceHuman_Oversight | null $humanOversight
                ): static {
                    if ($this->humanOversight === $humanOversight) {
                        return $this;
                    }

                    $value = $modelData['human_oversight'] = $humanOversight;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateHumanOversight($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->humanOversight = $value;
                    $this->_rawModelDataInput['human_oversight'] = $humanOversight;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property humanOversight
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processHumanOversight(array $modelData): void
            {
                
                    if (!array_key_exists('human_oversight', $modelData) && $this->humanOversight === null) {
                        return;
                    }
                

                $value = array_key_exists('human_oversight', $modelData) ? $modelData['human_oversight'] : $this->humanOversight;

                

                $this->humanOversight = $this->validateHumanOversight($value, $modelData);
            }

            /**
             * Execute all validators for the property humanOversight
             */
            protected function validateHumanOversight($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof GetMediaBuysRequest_ProvenanceHuman_Oversight)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'human_oversight',
  1 => 'GetMediaBuysRequest_ProvenanceHuman_Oversight',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'human_oversight',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'none',
   'prompt_only',
   'selected',
   'edited',
   'directed',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'human_oversight',
  1 => 
  array (
    0 => 'none',
    1 => 'prompt_only',
    2 => 'selected',
    3 => 'edited',
    4 => 'directed',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\GetMediaBuysRequest_ProvenanceHuman_Oversight',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'human_oversight',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'human_oversight',
  1 => 'php_model_generator_enum',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of declared_by.
                 *
                 * Party declaring this provenance. Identifies who attached the provenance claim, enabling receiving parties to assess trust.
                 *
                 * @return GetMediaBuysRequest_Declared_By13c986791ce55365e13a7cd5ff90f7dc|null
                 */
                public function getDeclaredBy(): ?GetMediaBuysRequest_Declared_By13c986791ce55365e13a7cd5ff90f7dc
                {
                    

                    return $this->declaredBy;
                }
            

            
                /**
                 * Set the value of declared_by.
                 *
                 * @param GetMediaBuysRequest_Declared_By13c986791ce55365e13a7cd5ff90f7dc $declaredBy Party declaring this provenance. Identifies who attached the provenance claim, enabling receiving parties to assess trust.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setDeclaredBy(
                    GetMediaBuysRequest_Declared_By13c986791ce55365e13a7cd5ff90f7dc $declaredBy
                ): static {
                    if ($this->declaredBy === $declaredBy) {
                        return $this;
                    }

                    $value = $modelData['declared_by'] = $declaredBy;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateDeclaredBy($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->declaredBy = $value;
                    $this->_rawModelDataInput['declared_by'] = $declaredBy;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property declaredBy
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processDeclaredBy(array $modelData): void
            {
                
                    if (!array_key_exists('declared_by', $modelData) && $this->declaredBy === null) {
                        return;
                    }
                

                $value = array_key_exists('declared_by', $modelData) ? $modelData['declared_by'] : $this->declaredBy;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysRequest_Declared_By13c986791ce55365e13a7cd5ff90f7dc($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'declared_by',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->declaredBy = $this->validateDeclaredBy($value, $modelData);
            }

            /**
             * Execute all validators for the property declaredBy
             */
            protected function validateDeclaredBy($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'declared_by',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysRequest_Declared_By13c986791ce55365e13a7cd5ff90f7dc)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'declared_by',
  1 => 'GetMediaBuysRequest_Declared_By13c986791ce55365e13a7cd5ff90f7dc',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of declared_at.
                 *
                 * When this provenance claim was made (ISO 8601). Distinct from created_time, which records when the content itself was produced. A provenance claim may be attached well after content creation, for example when retroactively declaring AI involvement for regulatory compliance.
                 *
                 * @return string|null
                 */
                public function getDeclaredAt(): ?string
                {
                    

                    return $this->declaredAt;
                }
            

            
                /**
                 * Set the value of declared_at.
                 *
                 * @param string $declaredAt When this provenance claim was made (ISO 8601). Distinct from created_time, which records when the content itself was produced. A provenance claim may be attached well after content creation, for example when retroactively declaring AI involvement for regulatory compliance.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setDeclaredAt(
                    string $declaredAt
                ): static {
                    if ($this->declaredAt === $declaredAt) {
                        return $this;
                    }

                    $value = $modelData['declared_at'] = $declaredAt;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateDeclaredAt($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->declaredAt = $value;
                    $this->_rawModelDataInput['declared_at'] = $declaredAt;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property declaredAt
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processDeclaredAt(array $modelData): void
            {
                
                    if (!array_key_exists('declared_at', $modelData) && $this->declaredAt === null) {
                        return;
                    }
                

                $value = array_key_exists('declared_at', $modelData) ? $modelData['declared_at'] : $this->declaredAt;

                

                $this->declaredAt = $this->validateDeclaredAt($value, $modelData);
            }

            /**
             * Execute all validators for the property declaredAt
             */
            protected function validateDeclaredAt($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'declared_at',
  1 => 'string',
)));
}

                
                    

if (!\PHPModelGenerator\Format\FormatValidatorFromRegEx::validate($value, '/^\\d{4}-\\d{2}-\\d{2}[Tt]\\d{2}:\\d{2}:\\d{2}(\\.\\d+)?([Zz]|[+\\-]\\d{2}:\\d{2})$/')) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\FormatException($value ?? null, ...array (
  0 => 'declared_at',
  1 => 'date-time',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of created_time.
                 *
                 * When this content was created or generated (ISO 8601)
                 *
                 * @return string|null
                 */
                public function getCreatedTime(): ?string
                {
                    

                    return $this->createdTime;
                }
            

            
                /**
                 * Set the value of created_time.
                 *
                 * @param string $createdTime When this content was created or generated (ISO 8601)
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setCreatedTime(
                    string $createdTime
                ): static {
                    if ($this->createdTime === $createdTime) {
                        return $this;
                    }

                    $value = $modelData['created_time'] = $createdTime;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateCreatedTime($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->createdTime = $value;
                    $this->_rawModelDataInput['created_time'] = $createdTime;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property createdTime
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processCreatedTime(array $modelData): void
            {
                
                    if (!array_key_exists('created_time', $modelData) && $this->createdTime === null) {
                        return;
                    }
                

                $value = array_key_exists('created_time', $modelData) ? $modelData['created_time'] : $this->createdTime;

                

                $this->createdTime = $this->validateCreatedTime($value, $modelData);
            }

            /**
             * Execute all validators for the property createdTime
             */
            protected function validateCreatedTime($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'created_time',
  1 => 'string',
)));
}

                
                    

if (!\PHPModelGenerator\Format\FormatValidatorFromRegEx::validate($value, '/^\\d{4}-\\d{2}-\\d{2}[Tt]\\d{2}:\\d{2}:\\d{2}(\\.\\d+)?([Zz]|[+\\-]\\d{2}:\\d{2})$/')) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\FormatException($value ?? null, ...array (
  0 => 'created_time',
  1 => 'date-time',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of c2pa.
                 *
                 * C2PA sidecar manifest reference. Links to a detached cryptographic provenance manifest for this content. Note: file-level C2PA bindings break when ad servers transcode, resize, or re-encode assets. For pipelines with intermediaries, consider embedded_provenance as the primary provenance mechanism.
                 *
                 * @return GetMediaBuysRequest_C2pad8913cd7eeded75f689622ab440bcdb7|null
                 */
                public function getC2pa(): ?GetMediaBuysRequest_C2pad8913cd7eeded75f689622ab440bcdb7
                {
                    

                    return $this->c2pa;
                }
            

            
                /**
                 * Set the value of c2pa.
                 *
                 * @param GetMediaBuysRequest_C2pad8913cd7eeded75f689622ab440bcdb7 $c2pa C2PA sidecar manifest reference. Links to a detached cryptographic provenance manifest for this content. Note: file-level C2PA bindings break when ad servers transcode, resize, or re-encode assets. For pipelines with intermediaries, consider embedded_provenance as the primary provenance mechanism.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setC2pa(
                    GetMediaBuysRequest_C2pad8913cd7eeded75f689622ab440bcdb7 $c2pa
                ): static {
                    if ($this->c2pa === $c2pa) {
                        return $this;
                    }

                    $value = $modelData['c2pa'] = $c2pa;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateC2pa($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->c2pa = $value;
                    $this->_rawModelDataInput['c2pa'] = $c2pa;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property c2pa
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processC2pa(array $modelData): void
            {
                
                    if (!array_key_exists('c2pa', $modelData) && $this->c2pa === null) {
                        return;
                    }
                

                $value = array_key_exists('c2pa', $modelData) ? $modelData['c2pa'] : $this->c2pa;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysRequest_C2pad8913cd7eeded75f689622ab440bcdb7($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'c2pa',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->c2pa = $this->validateC2pa($value, $modelData);
            }

            /**
             * Execute all validators for the property c2pa
             */
            protected function validateC2pa($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'c2pa',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysRequest_C2pad8913cd7eeded75f689622ab440bcdb7)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'c2pa',
  1 => 'GetMediaBuysRequest_C2pad8913cd7eeded75f689622ab440bcdb7',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of embedded_provenance.
                 *
                 * Provenance metadata embedded within the content stream. Each entry declares one embedding layer: structured provenance data carried inside the content itself, as distinct from sidecar references (c2pa.manifest_url). Embedded provenance survives operations that break sidecar and file-level bindings: ad-server transcoding, CMS ingestion, copy-paste, reformatting, and CDN re-encoding. For ad-tech pipelines where content passes through multiple intermediaries, embedded provenance is the reliable path for provenance that persists from declaration through delivery. This is a declaration by the embedding party. The receiving party (the seller) is the verifier-of-record: it confirms the claim by calling a governance agent it trusts (typically one published in `creative_policy.accepted_verifiers`).
                 *
                 * @return GetMediaBuysRequest_ItemOfArrayEmbedded_Provenancef0558b6fefdff71fa71ee63224471765[]|null
                 */
                public function getEmbeddedProvenance(): ?array
                {
                    

                    return $this->embeddedProvenance;
                }
            

            
                /**
                 * Set the value of embedded_provenance.
                 *
                 * @param GetMediaBuysRequest_ItemOfArrayEmbedded_Provenancef0558b6fefdff71fa71ee63224471765[] $embeddedProvenance Provenance metadata embedded within the content stream. Each entry declares one embedding layer: structured provenance data carried inside the content itself, as distinct from sidecar references (c2pa.manifest_url). Embedded provenance survives operations that break sidecar and file-level bindings: ad-server transcoding, CMS ingestion, copy-paste, reformatting, and CDN re-encoding. For ad-tech pipelines where content passes through multiple intermediaries, embedded provenance is the reliable path for provenance that persists from declaration through delivery. This is a declaration by the embedding party. The receiving party (the seller) is the verifier-of-record: it confirms the claim by calling a governance agent it trusts (typically one published in `creative_policy.accepted_verifiers`).
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setEmbeddedProvenance(
                    array $embeddedProvenance
                ): static {
                    if ($this->embeddedProvenance === $embeddedProvenance) {
                        return $this;
                    }

                    $value = $modelData['embedded_provenance'] = $embeddedProvenance;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateEmbeddedProvenance($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->embeddedProvenance = $value;
                    $this->_rawModelDataInput['embedded_provenance'] = $embeddedProvenance;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property embeddedProvenance
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processEmbeddedProvenance(array $modelData): void
            {
                
                    if (!array_key_exists('embedded_provenance', $modelData) && $this->embeddedProvenance === null) {
                        return;
                    }
                

                $value = array_key_exists('embedded_provenance', $modelData) ? $modelData['embedded_provenance'] : $this->embeddedProvenance;

                

                $this->embeddedProvenance = $this->validateEmbeddedProvenance($value, $modelData);
            }

            /**
             * Execute all validators for the property embeddedProvenance
             */
            protected function validateEmbeddedProvenance($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'embedded_provenance',
  1 => 'array',
)));
}

                
                    $this->validateEmbeddedProvenance_ArrayItem_382acfa35deb9603022a8b7b386e4a3c($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'embedded_provenance',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of watermarks.
                 *
                 * Content watermarks applied to this asset. Each entry declares one watermarking layer: a content modification that encodes an identifier or fingerprint within the asset. Watermarks differ from embedded provenance: a watermark encodes an identifier (who generated it, who owns it), while embedded provenance carries or references a structured provenance record (the full chain of custody). A single asset may carry both. Aligns with C2PA action taxonomy: c2pa.watermarked.bound (watermark linked to a C2PA manifest) and c2pa.watermarked.unbound (watermark independent of any manifest). This is a declaration by the watermarking party. The receiving party (the seller) is the verifier-of-record: it confirms the claim by calling a governance agent it trusts (typically one published in `creative_policy.accepted_verifiers`).
                 *
                 * @return GetMediaBuysRequest_ItemOfArrayWatermarks254d53f57a5c6e0b76076f9e8940ee56[]|null
                 */
                public function getWatermarks(): ?array
                {
                    

                    return $this->watermarks;
                }
            

            
                /**
                 * Set the value of watermarks.
                 *
                 * @param GetMediaBuysRequest_ItemOfArrayWatermarks254d53f57a5c6e0b76076f9e8940ee56[] $watermarks Content watermarks applied to this asset. Each entry declares one watermarking layer: a content modification that encodes an identifier or fingerprint within the asset. Watermarks differ from embedded provenance: a watermark encodes an identifier (who generated it, who owns it), while embedded provenance carries or references a structured provenance record (the full chain of custody). A single asset may carry both. Aligns with C2PA action taxonomy: c2pa.watermarked.bound (watermark linked to a C2PA manifest) and c2pa.watermarked.unbound (watermark independent of any manifest). This is a declaration by the watermarking party. The receiving party (the seller) is the verifier-of-record: it confirms the claim by calling a governance agent it trusts (typically one published in `creative_policy.accepted_verifiers`).
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setWatermarks(
                    array $watermarks
                ): static {
                    if ($this->watermarks === $watermarks) {
                        return $this;
                    }

                    $value = $modelData['watermarks'] = $watermarks;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateWatermarks($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->watermarks = $value;
                    $this->_rawModelDataInput['watermarks'] = $watermarks;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property watermarks
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processWatermarks(array $modelData): void
            {
                
                    if (!array_key_exists('watermarks', $modelData) && $this->watermarks === null) {
                        return;
                    }
                

                $value = array_key_exists('watermarks', $modelData) ? $modelData['watermarks'] : $this->watermarks;

                

                $this->watermarks = $this->validateWatermarks($value, $modelData);
            }

            /**
             * Execute all validators for the property watermarks
             */
            protected function validateWatermarks($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'watermarks',
  1 => 'array',
)));
}

                
                    $this->validateWatermarks_ArrayItem_9243fa7be3ab904a7fd7b4e3afeeb645($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'watermarks',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of disclosure.
                 *
                 * Regulatory disclosure requirements for this content. Indicates whether AI disclosure is required and under which jurisdictions.
                 *
                 * @return GetMediaBuysRequest_Disclosure0b892187b12d721c20d573c7ec349c30|null
                 */
                public function getDisclosure(): ?GetMediaBuysRequest_Disclosure0b892187b12d721c20d573c7ec349c30
                {
                    

                    return $this->disclosure;
                }
            

            
                /**
                 * Set the value of disclosure.
                 *
                 * @param GetMediaBuysRequest_Disclosure0b892187b12d721c20d573c7ec349c30 $disclosure Regulatory disclosure requirements for this content. Indicates whether AI disclosure is required and under which jurisdictions.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setDisclosure(
                    GetMediaBuysRequest_Disclosure0b892187b12d721c20d573c7ec349c30 $disclosure
                ): static {
                    if ($this->disclosure === $disclosure) {
                        return $this;
                    }

                    $value = $modelData['disclosure'] = $disclosure;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateDisclosure($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->disclosure = $value;
                    $this->_rawModelDataInput['disclosure'] = $disclosure;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property disclosure
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processDisclosure(array $modelData): void
            {
                
                    if (!array_key_exists('disclosure', $modelData) && $this->disclosure === null) {
                        return;
                    }
                

                $value = array_key_exists('disclosure', $modelData) ? $modelData['disclosure'] : $this->disclosure;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysRequest_Disclosure0b892187b12d721c20d573c7ec349c30($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'disclosure',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->disclosure = $this->validateDisclosure($value, $modelData);
            }

            /**
             * Execute all validators for the property disclosure
             */
            protected function validateDisclosure($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'disclosure',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysRequest_Disclosure0b892187b12d721c20d573c7ec349c30)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'disclosure',
  1 => 'GetMediaBuysRequest_Disclosure0b892187b12d721c20d573c7ec349c30',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of verification.
                 *
                 * Third-party verification or detection results for this content. Multiple services may independently evaluate the same content. Provenance is a claim — verification results attached by the declaring party are supplementary. The enforcing party (e.g., seller/publisher) should run its own verification via get_creative_features or calibrate_content.
                 *
                 * @return GetMediaBuysRequest_ItemOfArrayVerificationab0379bc9ff851960f9f645c9916029e[]|null
                 */
                public function getVerification(): ?array
                {
                    

                    return $this->verification;
                }
            

            
                /**
                 * Set the value of verification.
                 *
                 * @param GetMediaBuysRequest_ItemOfArrayVerificationab0379bc9ff851960f9f645c9916029e[] $verification Third-party verification or detection results for this content. Multiple services may independently evaluate the same content. Provenance is a claim — verification results attached by the declaring party are supplementary. The enforcing party (e.g., seller/publisher) should run its own verification via get_creative_features or calibrate_content.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setVerification(
                    array $verification
                ): static {
                    if ($this->verification === $verification) {
                        return $this;
                    }

                    $value = $modelData['verification'] = $verification;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateVerification($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->verification = $value;
                    $this->_rawModelDataInput['verification'] = $verification;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property verification
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processVerification(array $modelData): void
            {
                
                    if (!array_key_exists('verification', $modelData) && $this->verification === null) {
                        return;
                    }
                

                $value = array_key_exists('verification', $modelData) ? $modelData['verification'] : $this->verification;

                

                $this->verification = $this->validateVerification($value, $modelData);
            }

            /**
             * Execute all validators for the property verification
             */
            protected function validateVerification($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'verification',
  1 => 'array',
)));
}

                
                    $this->validateVerification_ArrayItem_27e77f091250497a6ea1c127c4ad29ed($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'verification',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of ext.
                 *
                 * Extension object for platform-specific, vendor-namespaced parameters. Extensions are always optional and must be namespaced under a vendor/platform key (e.g., ext.gam, ext.roku). Used for custom capabilities, partner-specific configuration, and features being proposed for standardization.
                 *
                 * @return GetMediaBuysRequest_ExtensionObject|null
                 */
                public function getExt(): ?GetMediaBuysRequest_ExtensionObject
                {
                    

                    return $this->ext;
                }
            

            
                /**
                 * Set the value of ext.
                 *
                 * @param GetMediaBuysRequest_ExtensionObject $ext Extension object for platform-specific, vendor-namespaced parameters. Extensions are always optional and must be namespaced under a vendor/platform key (e.g., ext.gam, ext.roku). Used for custom capabilities, partner-specific configuration, and features being proposed for standardization.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setExt(
                    GetMediaBuysRequest_ExtensionObject $ext
                ): static {
                    if ($this->ext === $ext) {
                        return $this;
                    }

                    $value = $modelData['ext'] = $ext;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateExt($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->ext = $value;
                    $this->_rawModelDataInput['ext'] = $ext;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property ext
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processExt(array $modelData): void
            {
                
                    if (!array_key_exists('ext', $modelData) && $this->ext === null) {
                        return;
                    }
                

                $value = array_key_exists('ext', $modelData) ? $modelData['ext'] : $this->ext;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysRequest_ExtensionObject($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'ext',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->ext = $this->validateExt($value, $modelData);
            }

            /**
             * Execute all validators for the property ext
             */
            protected function validateExt($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'ext',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysRequest_ExtensionObject)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'ext',
  1 => 'GetMediaBuysRequest_ExtensionObject',
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
    

    
        
            if (array_key_exists('digital_source_type', $modelData) &&
                $modelData['digital_source_type'] !== $this->digitalSourceType
            ) {
                

                $rollbackValues['digitalSourceType'] = $this->digitalSourceType;
                $this->processDigitalSourceType($modelData);
            }
        
    
        
            if (array_key_exists('ai_tool', $modelData) &&
                $modelData['ai_tool'] !== $this->aiTool
            ) {
                

                $rollbackValues['aiTool'] = $this->aiTool;
                $this->processAiTool($modelData);
            }
        
    
        
            if (array_key_exists('human_oversight', $modelData) &&
                $modelData['human_oversight'] !== $this->humanOversight
            ) {
                

                $rollbackValues['humanOversight'] = $this->humanOversight;
                $this->processHumanOversight($modelData);
            }
        
    
        
            if (array_key_exists('declared_by', $modelData) &&
                $modelData['declared_by'] !== $this->declaredBy
            ) {
                

                $rollbackValues['declaredBy'] = $this->declaredBy;
                $this->processDeclaredBy($modelData);
            }
        
    
        
            if (array_key_exists('declared_at', $modelData) &&
                $modelData['declared_at'] !== $this->declaredAt
            ) {
                

                $rollbackValues['declaredAt'] = $this->declaredAt;
                $this->processDeclaredAt($modelData);
            }
        
    
        
            if (array_key_exists('created_time', $modelData) &&
                $modelData['created_time'] !== $this->createdTime
            ) {
                

                $rollbackValues['createdTime'] = $this->createdTime;
                $this->processCreatedTime($modelData);
            }
        
    
        
            if (array_key_exists('c2pa', $modelData) &&
                $modelData['c2pa'] !== $this->c2pa
            ) {
                

                $rollbackValues['c2pa'] = $this->c2pa;
                $this->processC2pa($modelData);
            }
        
    
        
            if (array_key_exists('embedded_provenance', $modelData) &&
                $modelData['embedded_provenance'] !== $this->embeddedProvenance
            ) {
                

                $rollbackValues['embeddedProvenance'] = $this->embeddedProvenance;
                $this->processEmbeddedProvenance($modelData);
            }
        
    
        
            if (array_key_exists('watermarks', $modelData) &&
                $modelData['watermarks'] !== $this->watermarks
            ) {
                

                $rollbackValues['watermarks'] = $this->watermarks;
                $this->processWatermarks($modelData);
            }
        
    
        
            if (array_key_exists('disclosure', $modelData) &&
                $modelData['disclosure'] !== $this->disclosure
            ) {
                

                $rollbackValues['disclosure'] = $this->disclosure;
                $this->processDisclosure($modelData);
            }
        
    
        
            if (array_key_exists('verification', $modelData) &&
                $modelData['verification'] !== $this->verification
            ) {
                

                $rollbackValues['verification'] = $this->verification;
                $this->processVerification($modelData);
            }
        
    
        
            if (array_key_exists('ext', $modelData) &&
                $modelData['ext'] !== $this->ext
            ) {
                

                $rollbackValues['ext'] = $this->ext;
                $this->processExt($modelData);
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
 * serialize the property digitalSourceType
 */
protected function serializeDigitalSourceType()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->digitalSourceType, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\DigitalSourceType',
));
}


/**
 * serialize the property humanOversight
 */
protected function serializeHumanOversight()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->humanOversight, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\GetMediaBuysRequest_ProvenanceHuman_Oversight',
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


private function validateEmbeddedProvenance_ArrayItem_382acfa35deb9603022a8b7b386e4a3c(&$value, $modelData): void {
                    $invalidItems_4e389e26262df81b92166743b0ffb4d1 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_4e389e26262df81b92166743b0ffb4d1, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysRequest_ItemOfArrayEmbedded_Provenancef0558b6fefdff71fa71ee63224471765($value) : $value;
    } catch (\Exception $instantiationException) {
        
            
                foreach($instantiationException->getErrors() as $nestedValidationError) {
                    $this->_errorRegistry->addError($nestedValidationError);
                }
            
        

        
            return $instantiationException;
        
    }
})($value)
;

            
                

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array embedded_provenance',
  1 => 'object',
)));
}

            
                

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysRequest_ItemOfArrayEmbedded_Provenancef0558b6fefdff71fa71ee63224471765)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'item of array embedded_provenance',
  1 => 'GetMediaBuysRequest_ItemOfArrayEmbedded_Provenancef0558b6fefdff71fa71ee63224471765',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_4e389e26262df81b92166743b0ffb4d1[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_4e389e26262df81b92166743b0ffb4d1[$index])
                ? $invalidItems_4e389e26262df81b92166743b0ffb4d1[$index][] = $e
                : $invalidItems_4e389e26262df81b92166743b0ffb4d1[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_4e389e26262df81b92166743b0ffb4d1);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'embedded_provenance',
  1 => $invalidItems_4e389e26262df81b92166743b0ffb4d1,
)));
                    }
                }

private function validateWatermarks_ArrayItem_9243fa7be3ab904a7fd7b4e3afeeb645(&$value, $modelData): void {
                    $invalidItems_0d0611a7059dad548cf7b64a7f344f75 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_0d0611a7059dad548cf7b64a7f344f75, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysRequest_ItemOfArrayWatermarks254d53f57a5c6e0b76076f9e8940ee56($value) : $value;
    } catch (\Exception $instantiationException) {
        
            
                foreach($instantiationException->getErrors() as $nestedValidationError) {
                    $this->_errorRegistry->addError($nestedValidationError);
                }
            
        

        
            return $instantiationException;
        
    }
})($value)
;

            
                

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array watermarks',
  1 => 'object',
)));
}

            
                

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysRequest_ItemOfArrayWatermarks254d53f57a5c6e0b76076f9e8940ee56)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'item of array watermarks',
  1 => 'GetMediaBuysRequest_ItemOfArrayWatermarks254d53f57a5c6e0b76076f9e8940ee56',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_0d0611a7059dad548cf7b64a7f344f75[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_0d0611a7059dad548cf7b64a7f344f75[$index])
                ? $invalidItems_0d0611a7059dad548cf7b64a7f344f75[$index][] = $e
                : $invalidItems_0d0611a7059dad548cf7b64a7f344f75[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_0d0611a7059dad548cf7b64a7f344f75);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'watermarks',
  1 => $invalidItems_0d0611a7059dad548cf7b64a7f344f75,
)));
                    }
                }

private function validateVerification_ArrayItem_27e77f091250497a6ea1c127c4ad29ed(&$value, $modelData): void {
                    $invalidItems_516d3faa4bd6eb609f4568dff46741be = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_516d3faa4bd6eb609f4568dff46741be, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysRequest_ItemOfArrayVerificationab0379bc9ff851960f9f645c9916029e($value) : $value;
    } catch (\Exception $instantiationException) {
        
            
                foreach($instantiationException->getErrors() as $nestedValidationError) {
                    $this->_errorRegistry->addError($nestedValidationError);
                }
            
        

        
            return $instantiationException;
        
    }
})($value)
;

            
                

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array verification',
  1 => 'object',
)));
}

            
                

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysRequest_ItemOfArrayVerificationab0379bc9ff851960f9f645c9916029e)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'item of array verification',
  1 => 'GetMediaBuysRequest_ItemOfArrayVerificationab0379bc9ff851960f9f645c9916029e',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_516d3faa4bd6eb609f4568dff46741be[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_516d3faa4bd6eb609f4568dff46741be[$index])
                ? $invalidItems_516d3faa4bd6eb609f4568dff46741be[$index][] = $e
                : $invalidItems_516d3faa4bd6eb609f4568dff46741be[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_516d3faa4bd6eb609f4568dff46741be);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'verification',
  1 => $invalidItems_516d3faa4bd6eb609f4568dff46741be,
)));
                    }
                }


}

// @codeCoverageIgnoreEnd
