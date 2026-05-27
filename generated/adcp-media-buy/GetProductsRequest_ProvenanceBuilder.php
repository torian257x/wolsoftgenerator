<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;

    use AdCP\MediaBuy\Enums\DigitalSourceType;

    use AdCP\MediaBuy\Enums\GetProductsRequest_ProvenanceHuman_Oversight;


/**
 * Builder class for GetProductsRequest_Provenance
 */
class GetProductsRequest_ProvenanceBuilder implements BuilderInterface
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
     * Set up a new instance of GetProductsRequest_Provenance with fully validated properties
     */
    public function validate(): GetProductsRequest_Provenance
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetProductsRequest_Provenance($this->_rawModelDataInput);
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
             * Get the value of digital_source_type.
             *
             * IPTC-aligned classification of AI involvement in producing this content
             *
             * @return string|DigitalSourceType|null
             */
            public function getDigitalSourceType(): string | DigitalSourceType | null
            {
                return $this->_rawModelDataInput['digital_source_type'] ?? null;
            }

            /**
             * Set the value of digital_source_type.
             *
             * @param string|DigitalSourceType|null $digitalSourceType IPTC-aligned classification of AI involvement in producing this content
             *
             * {@link GetProductsRequest_Provenance::processDigitalSourceType}
             * 
             *
             * @return static
             */
            public function setDigitalSourceType(
                string | DigitalSourceType | null $digitalSourceType
            ): static {
                if (array_key_exists('digital_source_type', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['digital_source_type'] === $digitalSourceType
                ) {
                    return $this;
                }

                $value = $modelData['digital_source_type'] = $digitalSourceType;

                

                

                $this->_rawModelDataInput['digital_source_type'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of ai_tool.
             *
             * AI system used to generate or modify this content. Aligns with IPTC 2025.1 AI metadata fields and C2PA claim_generator.
             *
             * @return GetProductsRequest_Ai_Tool866c3fd929909158c718664e57db4355|GetProductsRequest_Ai_Tool866c3fd929909158c718664e57db4355Builder|array|null
             */
            public function getAiTool(): mixed
            {
                return $this->_rawModelDataInput['ai_tool'] ?? null;
            }

            /**
             * Set the value of ai_tool.
             *
             * @param GetProductsRequest_Ai_Tool866c3fd929909158c718664e57db4355|GetProductsRequest_Ai_Tool866c3fd929909158c718664e57db4355Builder|array $aiTool AI system used to generate or modify this content. Aligns with IPTC 2025.1 AI metadata fields and C2PA claim_generator.
             *
             * {@link GetProductsRequest_Provenance::processAiTool}
             * 
             *
             * @return static
             */
            public function setAiTool(
                mixed $aiTool
            ): static {
                if (array_key_exists('ai_tool', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['ai_tool'] === $aiTool
                ) {
                    return $this;
                }

                $value = $modelData['ai_tool'] = $aiTool;

                

                

                $this->_rawModelDataInput['ai_tool'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of human_oversight.
             *
             * Level of human involvement in the AI-assisted creation process. Independent of `disclosure.required` — the protocol does not derive disclosure obligations from oversight level. Some regulations include carve-outs for human-edited or human-directed AI output, but those carve-outs have factual prerequisites the schema cannot evaluate. Asserting `edited` or `directed` does not by itself justify `disclosure.required: false`.
             *
             * @return string|GetProductsRequest_ProvenanceHuman_Oversight|null
             */
            public function getHumanOversight(): string | GetProductsRequest_ProvenanceHuman_Oversight | null
            {
                return $this->_rawModelDataInput['human_oversight'] ?? null;
            }

            /**
             * Set the value of human_oversight.
             *
             * @param string|GetProductsRequest_ProvenanceHuman_Oversight|null $humanOversight Level of human involvement in the AI-assisted creation process. Independent of `disclosure.required` — the protocol does not derive disclosure obligations from oversight level. Some regulations include carve-outs for human-edited or human-directed AI output, but those carve-outs have factual prerequisites the schema cannot evaluate. Asserting `edited` or `directed` does not by itself justify `disclosure.required: false`.
             *
             * {@link GetProductsRequest_Provenance::processHumanOversight}
             * 
             *
             * @return static
             */
            public function setHumanOversight(
                string | GetProductsRequest_ProvenanceHuman_Oversight | null $humanOversight
            ): static {
                if (array_key_exists('human_oversight', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['human_oversight'] === $humanOversight
                ) {
                    return $this;
                }

                $value = $modelData['human_oversight'] = $humanOversight;

                

                

                $this->_rawModelDataInput['human_oversight'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of declared_by.
             *
             * Party declaring this provenance. Identifies who attached the provenance claim, enabling receiving parties to assess trust.
             *
             * @return GetProductsRequest_Declared_By13c986791ce55365e13a7cd5ff90f7dc|GetProductsRequest_Declared_By13c986791ce55365e13a7cd5ff90f7dcBuilder|array|null
             */
            public function getDeclaredBy(): mixed
            {
                return $this->_rawModelDataInput['declared_by'] ?? null;
            }

            /**
             * Set the value of declared_by.
             *
             * @param GetProductsRequest_Declared_By13c986791ce55365e13a7cd5ff90f7dc|GetProductsRequest_Declared_By13c986791ce55365e13a7cd5ff90f7dcBuilder|array $declaredBy Party declaring this provenance. Identifies who attached the provenance claim, enabling receiving parties to assess trust.
             *
             * {@link GetProductsRequest_Provenance::processDeclaredBy}
             * 
             *
             * @return static
             */
            public function setDeclaredBy(
                mixed $declaredBy
            ): static {
                if (array_key_exists('declared_by', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['declared_by'] === $declaredBy
                ) {
                    return $this;
                }

                $value = $modelData['declared_by'] = $declaredBy;

                

                

                $this->_rawModelDataInput['declared_by'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['declared_at'] ?? null;
            }

            /**
             * Set the value of declared_at.
             *
             * @param string $declaredAt When this provenance claim was made (ISO 8601). Distinct from created_time, which records when the content itself was produced. A provenance claim may be attached well after content creation, for example when retroactively declaring AI involvement for regulatory compliance.
             *
             * {@link GetProductsRequest_Provenance::processDeclaredAt}
             * 
             *
             * @return static
             */
            public function setDeclaredAt(
                string $declaredAt
            ): static {
                if (array_key_exists('declared_at', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['declared_at'] === $declaredAt
                ) {
                    return $this;
                }

                $value = $modelData['declared_at'] = $declaredAt;

                

                

                $this->_rawModelDataInput['declared_at'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['created_time'] ?? null;
            }

            /**
             * Set the value of created_time.
             *
             * @param string $createdTime When this content was created or generated (ISO 8601)
             *
             * {@link GetProductsRequest_Provenance::processCreatedTime}
             * 
             *
             * @return static
             */
            public function setCreatedTime(
                string $createdTime
            ): static {
                if (array_key_exists('created_time', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['created_time'] === $createdTime
                ) {
                    return $this;
                }

                $value = $modelData['created_time'] = $createdTime;

                

                

                $this->_rawModelDataInput['created_time'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of c2pa.
             *
             * C2PA sidecar manifest reference. Links to a detached cryptographic provenance manifest for this content. Note: file-level C2PA bindings break when ad servers transcode, resize, or re-encode assets. For pipelines with intermediaries, consider embedded_provenance as the primary provenance mechanism.
             *
             * @return GetProductsRequest_C2pad8913cd7eeded75f689622ab440bcdb7|GetProductsRequest_C2pad8913cd7eeded75f689622ab440bcdb7Builder|array|null
             */
            public function getC2pa(): mixed
            {
                return $this->_rawModelDataInput['c2pa'] ?? null;
            }

            /**
             * Set the value of c2pa.
             *
             * @param GetProductsRequest_C2pad8913cd7eeded75f689622ab440bcdb7|GetProductsRequest_C2pad8913cd7eeded75f689622ab440bcdb7Builder|array $c2pa C2PA sidecar manifest reference. Links to a detached cryptographic provenance manifest for this content. Note: file-level C2PA bindings break when ad servers transcode, resize, or re-encode assets. For pipelines with intermediaries, consider embedded_provenance as the primary provenance mechanism.
             *
             * {@link GetProductsRequest_Provenance::processC2pa}
             * 
             *
             * @return static
             */
            public function setC2pa(
                mixed $c2pa
            ): static {
                if (array_key_exists('c2pa', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['c2pa'] === $c2pa
                ) {
                    return $this;
                }

                $value = $modelData['c2pa'] = $c2pa;

                

                

                $this->_rawModelDataInput['c2pa'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of embedded_provenance.
             *
             * Provenance metadata embedded within the content stream. Each entry declares one embedding layer: structured provenance data carried inside the content itself, as distinct from sidecar references (c2pa.manifest_url). Embedded provenance survives operations that break sidecar and file-level bindings: ad-server transcoding, CMS ingestion, copy-paste, reformatting, and CDN re-encoding. For ad-tech pipelines where content passes through multiple intermediaries, embedded provenance is the reliable path for provenance that persists from declaration through delivery. This is a declaration by the embedding party. The receiving party (the seller) is the verifier-of-record: it confirms the claim by calling a governance agent it trusts (typically one published in `creative_policy.accepted_verifiers`).
             *
             * @return GetProductsRequest_ItemOfArrayEmbedded_Provenanceaee6af7d3cac08c369a87561f1ad14f2[]|GetProductsRequest_ItemOfArrayEmbedded_Provenanceaee6af7d3cac08c369a87561f1ad14f2Builder[]|array|null
             */
            public function getEmbeddedProvenance(): mixed
            {
                return $this->_rawModelDataInput['embedded_provenance'] ?? null;
            }

            /**
             * Set the value of embedded_provenance.
             *
             * @param GetProductsRequest_ItemOfArrayEmbedded_Provenanceaee6af7d3cac08c369a87561f1ad14f2[]|GetProductsRequest_ItemOfArrayEmbedded_Provenanceaee6af7d3cac08c369a87561f1ad14f2Builder[]|array $embeddedProvenance Provenance metadata embedded within the content stream. Each entry declares one embedding layer: structured provenance data carried inside the content itself, as distinct from sidecar references (c2pa.manifest_url). Embedded provenance survives operations that break sidecar and file-level bindings: ad-server transcoding, CMS ingestion, copy-paste, reformatting, and CDN re-encoding. For ad-tech pipelines where content passes through multiple intermediaries, embedded provenance is the reliable path for provenance that persists from declaration through delivery. This is a declaration by the embedding party. The receiving party (the seller) is the verifier-of-record: it confirms the claim by calling a governance agent it trusts (typically one published in `creative_policy.accepted_verifiers`).
             *
             * {@link GetProductsRequest_Provenance::processEmbeddedProvenance}
             * 
             *
             * @return static
             */
            public function setEmbeddedProvenance(
                mixed $embeddedProvenance
            ): static {
                if (array_key_exists('embedded_provenance', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['embedded_provenance'] === $embeddedProvenance
                ) {
                    return $this;
                }

                $value = $modelData['embedded_provenance'] = $embeddedProvenance;

                

                

                $this->_rawModelDataInput['embedded_provenance'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of watermarks.
             *
             * Content watermarks applied to this asset. Each entry declares one watermarking layer: a content modification that encodes an identifier or fingerprint within the asset. Watermarks differ from embedded provenance: a watermark encodes an identifier (who generated it, who owns it), while embedded provenance carries or references a structured provenance record (the full chain of custody). A single asset may carry both. Aligns with C2PA action taxonomy: c2pa.watermarked.bound (watermark linked to a C2PA manifest) and c2pa.watermarked.unbound (watermark independent of any manifest). This is a declaration by the watermarking party. The receiving party (the seller) is the verifier-of-record: it confirms the claim by calling a governance agent it trusts (typically one published in `creative_policy.accepted_verifiers`).
             *
             * @return GetProductsRequest_ItemOfArrayWatermarkse7d5643c5baeff447be3b3636506849c[]|GetProductsRequest_ItemOfArrayWatermarkse7d5643c5baeff447be3b3636506849cBuilder[]|array|null
             */
            public function getWatermarks(): mixed
            {
                return $this->_rawModelDataInput['watermarks'] ?? null;
            }

            /**
             * Set the value of watermarks.
             *
             * @param GetProductsRequest_ItemOfArrayWatermarkse7d5643c5baeff447be3b3636506849c[]|GetProductsRequest_ItemOfArrayWatermarkse7d5643c5baeff447be3b3636506849cBuilder[]|array $watermarks Content watermarks applied to this asset. Each entry declares one watermarking layer: a content modification that encodes an identifier or fingerprint within the asset. Watermarks differ from embedded provenance: a watermark encodes an identifier (who generated it, who owns it), while embedded provenance carries or references a structured provenance record (the full chain of custody). A single asset may carry both. Aligns with C2PA action taxonomy: c2pa.watermarked.bound (watermark linked to a C2PA manifest) and c2pa.watermarked.unbound (watermark independent of any manifest). This is a declaration by the watermarking party. The receiving party (the seller) is the verifier-of-record: it confirms the claim by calling a governance agent it trusts (typically one published in `creative_policy.accepted_verifiers`).
             *
             * {@link GetProductsRequest_Provenance::processWatermarks}
             * 
             *
             * @return static
             */
            public function setWatermarks(
                mixed $watermarks
            ): static {
                if (array_key_exists('watermarks', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['watermarks'] === $watermarks
                ) {
                    return $this;
                }

                $value = $modelData['watermarks'] = $watermarks;

                

                

                $this->_rawModelDataInput['watermarks'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of disclosure.
             *
             * Regulatory disclosure requirements for this content. Indicates whether AI disclosure is required and under which jurisdictions.
             *
             * @return GetProductsRequest_Disclosure857d3ff40c0b635f01f4dd6c336d9982|GetProductsRequest_Disclosure857d3ff40c0b635f01f4dd6c336d9982Builder|array|null
             */
            public function getDisclosure(): mixed
            {
                return $this->_rawModelDataInput['disclosure'] ?? null;
            }

            /**
             * Set the value of disclosure.
             *
             * @param GetProductsRequest_Disclosure857d3ff40c0b635f01f4dd6c336d9982|GetProductsRequest_Disclosure857d3ff40c0b635f01f4dd6c336d9982Builder|array $disclosure Regulatory disclosure requirements for this content. Indicates whether AI disclosure is required and under which jurisdictions.
             *
             * {@link GetProductsRequest_Provenance::processDisclosure}
             * 
             *
             * @return static
             */
            public function setDisclosure(
                mixed $disclosure
            ): static {
                if (array_key_exists('disclosure', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['disclosure'] === $disclosure
                ) {
                    return $this;
                }

                $value = $modelData['disclosure'] = $disclosure;

                

                

                $this->_rawModelDataInput['disclosure'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of verification.
             *
             * Third-party verification or detection results for this content. Multiple services may independently evaluate the same content. Provenance is a claim — verification results attached by the declaring party are supplementary. The enforcing party (e.g., seller/publisher) should run its own verification via get_creative_features or calibrate_content.
             *
             * @return GetProductsRequest_ItemOfArrayVerificationab0379bc9ff851960f9f645c9916029e[]|GetProductsRequest_ItemOfArrayVerificationab0379bc9ff851960f9f645c9916029eBuilder[]|array|null
             */
            public function getVerification(): mixed
            {
                return $this->_rawModelDataInput['verification'] ?? null;
            }

            /**
             * Set the value of verification.
             *
             * @param GetProductsRequest_ItemOfArrayVerificationab0379bc9ff851960f9f645c9916029e[]|GetProductsRequest_ItemOfArrayVerificationab0379bc9ff851960f9f645c9916029eBuilder[]|array $verification Third-party verification or detection results for this content. Multiple services may independently evaluate the same content. Provenance is a claim — verification results attached by the declaring party are supplementary. The enforcing party (e.g., seller/publisher) should run its own verification via get_creative_features or calibrate_content.
             *
             * {@link GetProductsRequest_Provenance::processVerification}
             * 
             *
             * @return static
             */
            public function setVerification(
                mixed $verification
            ): static {
                if (array_key_exists('verification', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['verification'] === $verification
                ) {
                    return $this;
                }

                $value = $modelData['verification'] = $verification;

                

                

                $this->_rawModelDataInput['verification'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of ext.
             *
             * Extension object for platform-specific, vendor-namespaced parameters. Extensions are always optional and must be namespaced under a vendor/platform key (e.g., ext.gam, ext.roku). Used for custom capabilities, partner-specific configuration, and features being proposed for standardization.
             *
             * @return GetProductsRequest_ExtensionObject|GetProductsRequest_ExtensionObjectBuilder|array|null
             */
            public function getExt(): mixed
            {
                return $this->_rawModelDataInput['ext'] ?? null;
            }

            /**
             * Set the value of ext.
             *
             * @param GetProductsRequest_ExtensionObject|GetProductsRequest_ExtensionObjectBuilder|array $ext Extension object for platform-specific, vendor-namespaced parameters. Extensions are always optional and must be namespaced under a vendor/platform key (e.g., ext.gam, ext.roku). Used for custom capabilities, partner-specific configuration, and features being proposed for standardization.
             *
             * {@link GetProductsRequest_Provenance::processExt}
             * 
             *
             * @return static
             */
            public function setExt(
                mixed $ext
            ): static {
                if (array_key_exists('ext', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['ext'] === $ext
                ) {
                    return $this;
                }

                $value = $modelData['ext'] = $ext;

                

                

                $this->_rawModelDataInput['ext'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
