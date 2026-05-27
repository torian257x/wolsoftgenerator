<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Builder class for GetMediaBuysResponse_ItemOfArrayIssues2483c312456a31ea21c00a2ae7922a10
 */
class GetMediaBuysResponse_ItemOfArrayIssues2483c312456a31ea21c00a2ae7922a10Builder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuysResponse_ItemOfArrayIssues2483c312456a31ea21c00a2ae7922a10 with fully validated properties
     */
    public function validate(): GetMediaBuysResponse_ItemOfArrayIssues2483c312456a31ea21c00a2ae7922a10
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysResponse_ItemOfArrayIssues2483c312456a31ea21c00a2ae7922a10($this->_rawModelDataInput);
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
             * Get the value of pointer.
             *
             * RFC 6901 JSON Pointer to the offending field in the request payload (e.g., '/packages/0/targeting/geo_countries/2'). Format chosen to match Ajv's native validation output (`instancePath`); standardized and unambiguous on keys containing `/` or `~`. NOTE: this differs from the legacy top-level `field` which uses JSONPath-lite (`packages[0].targeting.geo_countries[2]`). When sellers populate `field` from `issues[0].pointer` for backward compatibility (see `field` description), they MUST translate the format — `/packages/0/x` → `packages[0].x`. Future major versions will deprecate `field` in favor of `issues[].pointer`.
             *
             * @return string|null
             */
            public function getPointer(): ?string
            {
                return $this->_rawModelDataInput['pointer'] ?? null;
            }

            /**
             * Set the value of pointer.
             *
             * @param string $pointer RFC 6901 JSON Pointer to the offending field in the request payload (e.g., '/packages/0/targeting/geo_countries/2'). Format chosen to match Ajv's native validation output (`instancePath`); standardized and unambiguous on keys containing `/` or `~`. NOTE: this differs from the legacy top-level `field` which uses JSONPath-lite (`packages[0].targeting.geo_countries[2]`). When sellers populate `field` from `issues[0].pointer` for backward compatibility (see `field` description), they MUST translate the format — `/packages/0/x` → `packages[0].x`. Future major versions will deprecate `field` in favor of `issues[].pointer`.
             *
             * {@link GetMediaBuysResponse_ItemOfArrayIssues2483c312456a31ea21c00a2ae7922a10::processPointer}
             * 
             *
             * @return static
             */
            public function setPointer(
                string $pointer
            ): static {
                if (array_key_exists('pointer', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['pointer'] === $pointer
                ) {
                    return $this;
                }

                $value = $modelData['pointer'] = $pointer;

                

                

                $this->_rawModelDataInput['pointer'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of message.
             *
             * Human-readable description of why this specific field was rejected.
             *
             * @return string|null
             */
            public function getMessage(): ?string
            {
                return $this->_rawModelDataInput['message'] ?? null;
            }

            /**
             * Set the value of message.
             *
             * @param string $message Human-readable description of why this specific field was rejected.
             *
             * {@link GetMediaBuysResponse_ItemOfArrayIssues2483c312456a31ea21c00a2ae7922a10::processMessage}
             * 
             *
             * @return static
             */
            public function setMessage(
                string $message
            ): static {
                if (array_key_exists('message', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['message'] === $message
                ) {
                    return $this;
                }

                $value = $modelData['message'] = $message;

                

                

                $this->_rawModelDataInput['message'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of keyword.
             *
             * Schema keyword that rejected the payload, drawn from the JSON Schema vocabulary (e.g., 'required', 'type', 'format', 'enum', 'pattern', 'minimum', 'maxLength'). Matches the keyword names emitted by JSON Schema validators (Ajv, jsonschema, etc.) so agents can pattern-match on rejection class without parsing message text. Implementers SHOULD use the validator's native keyword name; do not invent custom values here.
             *
             * @return string|null
             */
            public function getKeyword(): ?string
            {
                return $this->_rawModelDataInput['keyword'] ?? null;
            }

            /**
             * Set the value of keyword.
             *
             * @param string $keyword Schema keyword that rejected the payload, drawn from the JSON Schema vocabulary (e.g., 'required', 'type', 'format', 'enum', 'pattern', 'minimum', 'maxLength'). Matches the keyword names emitted by JSON Schema validators (Ajv, jsonschema, etc.) so agents can pattern-match on rejection class without parsing message text. Implementers SHOULD use the validator's native keyword name; do not invent custom values here.
             *
             * {@link GetMediaBuysResponse_ItemOfArrayIssues2483c312456a31ea21c00a2ae7922a10::processKeyword}
             * 
             *
             * @return static
             */
            public function setKeyword(
                string $keyword
            ): static {
                if (array_key_exists('keyword', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['keyword'] === $keyword
                ) {
                    return $this;
                }

                $value = $modelData['keyword'] = $keyword;

                

                

                $this->_rawModelDataInput['keyword'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of schemaPath.
             *
             * Optional. JSON Schema tree path of the rejecting keyword (e.g. '#/properties/packages/items/oneOf/1'). 3.1+ consumers SHOULD prefer `schema_id`; `schemaPath` is retained for 3.0.x compatibility (renamed to `schema_path` in a future major). See error-handling.mdx for the validator-internals production-emit rules.
             *
             * @return string|null
             */
            public function getSchemaPath(): ?string
            {
                return $this->_rawModelDataInput['schemaPath'] ?? null;
            }

            /**
             * Set the value of schemaPath.
             *
             * @param string $schemaPath Optional. JSON Schema tree path of the rejecting keyword (e.g. '#/properties/packages/items/oneOf/1'). 3.1+ consumers SHOULD prefer `schema_id`; `schemaPath` is retained for 3.0.x compatibility (renamed to `schema_path` in a future major). See error-handling.mdx for the validator-internals production-emit rules.
             *
             * {@link GetMediaBuysResponse_ItemOfArrayIssues2483c312456a31ea21c00a2ae7922a10::processSchemaPath}
             * 
             *
             * @return static
             */
            public function setSchemaPath(
                string $schemaPath
            ): static {
                if (array_key_exists('schemaPath', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['schemaPath'] === $schemaPath
                ) {
                    return $this;
                }

                $value = $modelData['schemaPath'] = $schemaPath;

                

                

                $this->_rawModelDataInput['schemaPath'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of schema_id.
             *
             * Optional. `$id` of the rejecting (sub-)schema (e.g. `/schemas/3.1.0/core/activation-key.json`). MUST resolve to a `$id` published in the spec at the version the seller advertises via `get_adcp_capabilities` — either a deep sub-schema (the typical case) or the response-root `$id` (the bundled-tree fallback for tools served from bundles built before #3868). Sellers MUST NOT emit when the rejection occurred against a private extension, server-only sub-schema, or pre-release element — the public-spec replay rationale only holds when the rejecting element is reachable from the public bundle. Sellers populating `schemaPath` SHOULD also populate `schema_id` when they have it so 3.1+ readers don't get strictly less than 3.0.x readers. See error-handling.mdx for resolution guidance and the bundled-tree caveat.
             *
             * @return string|null
             */
            public function getSchemaId(): ?string
            {
                return $this->_rawModelDataInput['schema_id'] ?? null;
            }

            /**
             * Set the value of schema_id.
             *
             * @param string $schemaId Optional. `$id` of the rejecting (sub-)schema (e.g. `/schemas/3.1.0/core/activation-key.json`). MUST resolve to a `$id` published in the spec at the version the seller advertises via `get_adcp_capabilities` — either a deep sub-schema (the typical case) or the response-root `$id` (the bundled-tree fallback for tools served from bundles built before #3868). Sellers MUST NOT emit when the rejection occurred against a private extension, server-only sub-schema, or pre-release element — the public-spec replay rationale only holds when the rejecting element is reachable from the public bundle. Sellers populating `schemaPath` SHOULD also populate `schema_id` when they have it so 3.1+ readers don't get strictly less than 3.0.x readers. See error-handling.mdx for resolution guidance and the bundled-tree caveat.
             *
             * {@link GetMediaBuysResponse_ItemOfArrayIssues2483c312456a31ea21c00a2ae7922a10::processSchemaId}
             * 
             *
             * @return static
             */
            public function setSchemaId(
                string $schemaId
            ): static {
                if (array_key_exists('schema_id', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['schema_id'] === $schemaId
                ) {
                    return $this;
                }

                $value = $modelData['schema_id'] = $schemaId;

                

                

                $this->_rawModelDataInput['schema_id'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of discriminator.
             *
             * Optional. Const-discriminator property/value pair(s) identifying the variant the validator selected from values present in the payload. Sellers MUST populate only when (a) the rejecting schema is a const-discriminated `oneOf` / `anyOf` and (b) the discriminator property is present in the payload — emission on partial-match inference would fingerprint the seller's validator implementation. MUST omit when zero variants survive. Compound discriminators (e.g. `(type, value_type)`) produce multiple entries ordered by declaration in the rejecting schema's `properties` block. Same private-extensions / version-skew carve-out as `schema_id`. See error-handling.mdx.
             *
             * @return GetMediaBuysResponse_ItemOfArrayDiscriminatordbb0b5aa570d64014a1a640189c32038[]|GetMediaBuysResponse_ItemOfArrayDiscriminatordbb0b5aa570d64014a1a640189c32038Builder[]|array|null
             */
            public function getDiscriminator(): mixed
            {
                return $this->_rawModelDataInput['discriminator'] ?? null;
            }

            /**
             * Set the value of discriminator.
             *
             * @param GetMediaBuysResponse_ItemOfArrayDiscriminatordbb0b5aa570d64014a1a640189c32038[]|GetMediaBuysResponse_ItemOfArrayDiscriminatordbb0b5aa570d64014a1a640189c32038Builder[]|array $discriminator Optional. Const-discriminator property/value pair(s) identifying the variant the validator selected from values present in the payload. Sellers MUST populate only when (a) the rejecting schema is a const-discriminated `oneOf` / `anyOf` and (b) the discriminator property is present in the payload — emission on partial-match inference would fingerprint the seller's validator implementation. MUST omit when zero variants survive. Compound discriminators (e.g. `(type, value_type)`) produce multiple entries ordered by declaration in the rejecting schema's `properties` block. Same private-extensions / version-skew carve-out as `schema_id`. See error-handling.mdx.
             *
             * {@link GetMediaBuysResponse_ItemOfArrayIssues2483c312456a31ea21c00a2ae7922a10::processDiscriminator}
             * 
             *
             * @return static
             */
            public function setDiscriminator(
                mixed $discriminator
            ): static {
                if (array_key_exists('discriminator', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['discriminator'] === $discriminator
                ) {
                    return $this;
                }

                $value = $modelData['discriminator'] = $discriminator;

                

                

                $this->_rawModelDataInput['discriminator'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
