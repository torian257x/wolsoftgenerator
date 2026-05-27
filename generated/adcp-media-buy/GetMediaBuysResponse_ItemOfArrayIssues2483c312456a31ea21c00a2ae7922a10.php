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
 * Class GetMediaBuysResponse_ItemOfArrayIssues2483c312456a31ea21c00a2ae7922a10
 * @package AdCP\MediaBuy 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/errors/items/properties/issues/items')]

class GetMediaBuysResponse_ItemOfArrayIssues2483c312456a31ea21c00a2ae7922a10 implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/errors/items/properties/issues/items/properties/pointer')]
        
            #[SchemaName('pointer')]
        
            #[Required]
        
        /** @var string RFC 6901 JSON Pointer to the offending field in the request payload (e.g., '/packages/0/targeting/geo_countries/2'). Format chosen to match Ajv's native validation output (`instancePath`); standardized and unambiguous on keys containing `/` or `~`. NOTE: this differs from the legacy top-level `field` which uses JSONPath-lite (`packages[0].targeting.geo_countries[2]`). When sellers populate `field` from `issues[0].pointer` for backward compatibility (see `field` description), they MUST translate the format — `/packages/0/x` → `packages[0].x`. Future major versions will deprecate `field` in favor of `issues[].pointer`. */
        protected $pointer;
    
        
            #[JsonPointer('/properties/errors/items/properties/issues/items/properties/message')]
        
            #[SchemaName('message')]
        
            #[Required]
        
        /** @var string Human-readable description of why this specific field was rejected. */
        protected $message;
    
        
            #[JsonPointer('/properties/errors/items/properties/issues/items/properties/keyword')]
        
            #[SchemaName('keyword')]
        
            #[Required]
        
        /** @var string Schema keyword that rejected the payload, drawn from the JSON Schema vocabulary (e.g., 'required', 'type', 'format', 'enum', 'pattern', 'minimum', 'maxLength'). Matches the keyword names emitted by JSON Schema validators (Ajv, jsonschema, etc.) so agents can pattern-match on rejection class without parsing message text. Implementers SHOULD use the validator's native keyword name; do not invent custom values here. */
        protected $keyword;
    
        
            #[JsonPointer('/properties/errors/items/properties/issues/items/properties/schemaPath')]
        
            #[SchemaName('schemaPath')]
        
        /** @var string|null Optional. JSON Schema tree path of the rejecting keyword (e.g. '#/properties/packages/items/oneOf/1'). 3.1+ consumers SHOULD prefer `schema_id`; `schemaPath` is retained for 3.0.x compatibility (renamed to `schema_path` in a future major). See error-handling.mdx for the validator-internals production-emit rules. */
        protected $schemaPath;
    
        
            #[JsonPointer('/properties/errors/items/properties/issues/items/properties/schema_id')]
        
            #[SchemaName('schema_id')]
        
        /** @var string|null Optional. `$id` of the rejecting (sub-)schema (e.g. `/schemas/3.1.0/core/activation-key.json`). MUST resolve to a `$id` published in the spec at the version the seller advertises via `get_adcp_capabilities` — either a deep sub-schema (the typical case) or the response-root `$id` (the bundled-tree fallback for tools served from bundles built before #3868). Sellers MUST NOT emit when the rejection occurred against a private extension, server-only sub-schema, or pre-release element — the public-spec replay rationale only holds when the rejecting element is reachable from the public bundle. Sellers populating `schemaPath` SHOULD also populate `schema_id` when they have it so 3.1+ readers don't get strictly less than 3.0.x readers. See error-handling.mdx for resolution guidance and the bundled-tree caveat. */
        protected $schemaId;
    
        
            #[JsonPointer('/properties/errors/items/properties/issues/items/properties/discriminator')]
        
            #[SchemaName('discriminator')]
        
        /** @var GetMediaBuysResponse_ItemOfArrayDiscriminatordbb0b5aa570d64014a1a640189c32038[]|null Optional. Const-discriminator property/value pair(s) identifying the variant the validator selected from values present in the payload. Sellers MUST populate only when (a) the rejecting schema is a const-discriminated `oneOf` / `anyOf` and (b) the discriminator property is present in the payload — emission on partial-match inference would fingerprint the seller's validator implementation. MUST omit when zero variants survive. Compound discriminators (e.g. `(type, value_type)`) produce multiple entries ordered by declaration in the rejecting schema's `properties` block. Same private-extensions / version-skew carve-out as `schema_id`. See error-handling.mdx. */
        protected $discriminator;
    
        
            #[Internal]
        
        /** @var array Collect all additional properties provided to the schema */
        private $_additionalProperties = array (
);
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  3 => 'schemaPath',
  4 => 'schema_id',
  5 => 'discriminator',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetMediaBuysResponse_ItemOfArrayIssues2483c312456a31ea21c00a2ae7922a10 constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processPointer($rawModelDataInput);
            
        
            
                $this->processMessage($rawModelDataInput);
            
        
            
                $this->processKeyword($rawModelDataInput);
            
        
            
                $this->processSchemaPath($rawModelDataInput);
            
        
            
                $this->processSchemaId($rawModelDataInput);
            
        
            
                $this->processDiscriminator($rawModelDataInput);
            
        
            
        
            
        

        
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
   'pointer',
   'message',
   'keyword',
   'schemaPath',
   'schema_id',
   'discriminator',
)) as $propertyKey) {
        

        $this->_additionalProperties[$propertyKey] = $value[$propertyKey];
    }

    return false;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidAdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse_ItemOfArrayIssues2483c312456a31ea21c00a2ae7922a10',
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
                 * Get the value of pointer.
                 *
                 * RFC 6901 JSON Pointer to the offending field in the request payload (e.g., '/packages/0/targeting/geo_countries/2'). Format chosen to match Ajv's native validation output (`instancePath`); standardized and unambiguous on keys containing `/` or `~`. NOTE: this differs from the legacy top-level `field` which uses JSONPath-lite (`packages[0].targeting.geo_countries[2]`). When sellers populate `field` from `issues[0].pointer` for backward compatibility (see `field` description), they MUST translate the format — `/packages/0/x` → `packages[0].x`. Future major versions will deprecate `field` in favor of `issues[].pointer`.
                 *
                 * @return string
                 */
                public function getPointer(): string
                {
                    

                    return $this->pointer;
                }
            

            
                /**
                 * Set the value of pointer.
                 *
                 * @param string $pointer RFC 6901 JSON Pointer to the offending field in the request payload (e.g., '/packages/0/targeting/geo_countries/2'). Format chosen to match Ajv's native validation output (`instancePath`); standardized and unambiguous on keys containing `/` or `~`. NOTE: this differs from the legacy top-level `field` which uses JSONPath-lite (`packages[0].targeting.geo_countries[2]`). When sellers populate `field` from `issues[0].pointer` for backward compatibility (see `field` description), they MUST translate the format — `/packages/0/x` → `packages[0].x`. Future major versions will deprecate `field` in favor of `issues[].pointer`.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setPointer(
                    string $pointer
                ): static {
                    if ($this->pointer === $pointer) {
                        return $this;
                    }

                    $value = $modelData['pointer'] = $pointer;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validatePointer($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->pointer = $value;
                    $this->_rawModelDataInput['pointer'] = $pointer;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property pointer
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processPointer(array $modelData): void
            {
                

                $value = array_key_exists('pointer', $modelData) ? $modelData['pointer'] : $this->pointer;

                

                $this->pointer = $this->validatePointer($value, $modelData);
            }

            /**
             * Execute all validators for the property pointer
             */
            protected function validatePointer($value, array $modelData)
            {
                
                    

if (!array_key_exists('pointer', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'pointer',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'pointer',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of message.
                 *
                 * Human-readable description of why this specific field was rejected.
                 *
                 * @return string
                 */
                public function getMessage(): string
                {
                    

                    return $this->message;
                }
            

            
                /**
                 * Set the value of message.
                 *
                 * @param string $message Human-readable description of why this specific field was rejected.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setMessage(
                    string $message
                ): static {
                    if ($this->message === $message) {
                        return $this;
                    }

                    $value = $modelData['message'] = $message;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateMessage($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->message = $value;
                    $this->_rawModelDataInput['message'] = $message;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property message
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processMessage(array $modelData): void
            {
                

                $value = array_key_exists('message', $modelData) ? $modelData['message'] : $this->message;

                

                $this->message = $this->validateMessage($value, $modelData);
            }

            /**
             * Execute all validators for the property message
             */
            protected function validateMessage($value, array $modelData)
            {
                
                    

if (!array_key_exists('message', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'message',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'message',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of keyword.
                 *
                 * Schema keyword that rejected the payload, drawn from the JSON Schema vocabulary (e.g., 'required', 'type', 'format', 'enum', 'pattern', 'minimum', 'maxLength'). Matches the keyword names emitted by JSON Schema validators (Ajv, jsonschema, etc.) so agents can pattern-match on rejection class without parsing message text. Implementers SHOULD use the validator's native keyword name; do not invent custom values here.
                 *
                 * @return string
                 */
                public function getKeyword(): string
                {
                    

                    return $this->keyword;
                }
            

            
                /**
                 * Set the value of keyword.
                 *
                 * @param string $keyword Schema keyword that rejected the payload, drawn from the JSON Schema vocabulary (e.g., 'required', 'type', 'format', 'enum', 'pattern', 'minimum', 'maxLength'). Matches the keyword names emitted by JSON Schema validators (Ajv, jsonschema, etc.) so agents can pattern-match on rejection class without parsing message text. Implementers SHOULD use the validator's native keyword name; do not invent custom values here.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setKeyword(
                    string $keyword
                ): static {
                    if ($this->keyword === $keyword) {
                        return $this;
                    }

                    $value = $modelData['keyword'] = $keyword;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateKeyword($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->keyword = $value;
                    $this->_rawModelDataInput['keyword'] = $keyword;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property keyword
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processKeyword(array $modelData): void
            {
                

                $value = array_key_exists('keyword', $modelData) ? $modelData['keyword'] : $this->keyword;

                

                $this->keyword = $this->validateKeyword($value, $modelData);
            }

            /**
             * Execute all validators for the property keyword
             */
            protected function validateKeyword($value, array $modelData)
            {
                
                    

if (!array_key_exists('keyword', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'keyword',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'keyword',
  1 => 'string',
)));
}

                

                return $value;
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
                    

                    return $this->schemaPath;
                }
            

            
                /**
                 * Set the value of schemaPath.
                 *
                 * @param string $schemaPath Optional. JSON Schema tree path of the rejecting keyword (e.g. '#/properties/packages/items/oneOf/1'). 3.1+ consumers SHOULD prefer `schema_id`; `schemaPath` is retained for 3.0.x compatibility (renamed to `schema_path` in a future major). See error-handling.mdx for the validator-internals production-emit rules.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setSchemaPath(
                    string $schemaPath
                ): static {
                    if ($this->schemaPath === $schemaPath) {
                        return $this;
                    }

                    $value = $modelData['schemaPath'] = $schemaPath;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateSchemaPath($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->schemaPath = $value;
                    $this->_rawModelDataInput['schemaPath'] = $schemaPath;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property schemaPath
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processSchemaPath(array $modelData): void
            {
                
                    if (!array_key_exists('schemaPath', $modelData) && $this->schemaPath === null) {
                        return;
                    }
                

                $value = array_key_exists('schemaPath', $modelData) ? $modelData['schemaPath'] : $this->schemaPath;

                

                $this->schemaPath = $this->validateSchemaPath($value, $modelData);
            }

            /**
             * Execute all validators for the property schemaPath
             */
            protected function validateSchemaPath($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'schemaPath',
  1 => 'string',
)));
}

                

                return $value;
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
                    

                    return $this->schemaId;
                }
            

            
                /**
                 * Set the value of schema_id.
                 *
                 * @param string $schemaId Optional. `$id` of the rejecting (sub-)schema (e.g. `/schemas/3.1.0/core/activation-key.json`). MUST resolve to a `$id` published in the spec at the version the seller advertises via `get_adcp_capabilities` — either a deep sub-schema (the typical case) or the response-root `$id` (the bundled-tree fallback for tools served from bundles built before #3868). Sellers MUST NOT emit when the rejection occurred against a private extension, server-only sub-schema, or pre-release element — the public-spec replay rationale only holds when the rejecting element is reachable from the public bundle. Sellers populating `schemaPath` SHOULD also populate `schema_id` when they have it so 3.1+ readers don't get strictly less than 3.0.x readers. See error-handling.mdx for resolution guidance and the bundled-tree caveat.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setSchemaId(
                    string $schemaId
                ): static {
                    if ($this->schemaId === $schemaId) {
                        return $this;
                    }

                    $value = $modelData['schema_id'] = $schemaId;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateSchemaId($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->schemaId = $value;
                    $this->_rawModelDataInput['schema_id'] = $schemaId;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property schemaId
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processSchemaId(array $modelData): void
            {
                
                    if (!array_key_exists('schema_id', $modelData) && $this->schemaId === null) {
                        return;
                    }
                

                $value = array_key_exists('schema_id', $modelData) ? $modelData['schema_id'] : $this->schemaId;

                

                $this->schemaId = $this->validateSchemaId($value, $modelData);
            }

            /**
             * Execute all validators for the property schemaId
             */
            protected function validateSchemaId($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'schema_id',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of discriminator.
                 *
                 * Optional. Const-discriminator property/value pair(s) identifying the variant the validator selected from values present in the payload. Sellers MUST populate only when (a) the rejecting schema is a const-discriminated `oneOf` / `anyOf` and (b) the discriminator property is present in the payload — emission on partial-match inference would fingerprint the seller's validator implementation. MUST omit when zero variants survive. Compound discriminators (e.g. `(type, value_type)`) produce multiple entries ordered by declaration in the rejecting schema's `properties` block. Same private-extensions / version-skew carve-out as `schema_id`. See error-handling.mdx.
                 *
                 * @return GetMediaBuysResponse_ItemOfArrayDiscriminatordbb0b5aa570d64014a1a640189c32038[]|null
                 */
                public function getDiscriminator(): ?array
                {
                    

                    return $this->discriminator;
                }
            

            
                /**
                 * Set the value of discriminator.
                 *
                 * @param GetMediaBuysResponse_ItemOfArrayDiscriminatordbb0b5aa570d64014a1a640189c32038[] $discriminator Optional. Const-discriminator property/value pair(s) identifying the variant the validator selected from values present in the payload. Sellers MUST populate only when (a) the rejecting schema is a const-discriminated `oneOf` / `anyOf` and (b) the discriminator property is present in the payload — emission on partial-match inference would fingerprint the seller's validator implementation. MUST omit when zero variants survive. Compound discriminators (e.g. `(type, value_type)`) produce multiple entries ordered by declaration in the rejecting schema's `properties` block. Same private-extensions / version-skew carve-out as `schema_id`. See error-handling.mdx.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setDiscriminator(
                    array $discriminator
                ): static {
                    if ($this->discriminator === $discriminator) {
                        return $this;
                    }

                    $value = $modelData['discriminator'] = $discriminator;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateDiscriminator($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->discriminator = $value;
                    $this->_rawModelDataInput['discriminator'] = $discriminator;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property discriminator
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processDiscriminator(array $modelData): void
            {
                
                    if (!array_key_exists('discriminator', $modelData) && $this->discriminator === null) {
                        return;
                    }
                

                $value = array_key_exists('discriminator', $modelData) ? $modelData['discriminator'] : $this->discriminator;

                

                $this->discriminator = $this->validateDiscriminator($value, $modelData);
            }

            /**
             * Execute all validators for the property discriminator
             */
            protected function validateDiscriminator($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'discriminator',
  1 => 'array',
)));
}

                
                    $this->validateDiscriminator_ArrayItem_90f6c8467639464359eeb2930de81bb2($value, $modelData);
                

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
    

    
        
            if (array_key_exists('pointer', $modelData) &&
                $modelData['pointer'] !== $this->pointer
            ) {
                

                $rollbackValues['pointer'] = $this->pointer;
                $this->processPointer($modelData);
            }
        
    
        
            if (array_key_exists('message', $modelData) &&
                $modelData['message'] !== $this->message
            ) {
                

                $rollbackValues['message'] = $this->message;
                $this->processMessage($modelData);
            }
        
    
        
            if (array_key_exists('keyword', $modelData) &&
                $modelData['keyword'] !== $this->keyword
            ) {
                

                $rollbackValues['keyword'] = $this->keyword;
                $this->processKeyword($modelData);
            }
        
    
        
            if (array_key_exists('schemaPath', $modelData) &&
                $modelData['schemaPath'] !== $this->schemaPath
            ) {
                

                $rollbackValues['schemaPath'] = $this->schemaPath;
                $this->processSchemaPath($modelData);
            }
        
    
        
            if (array_key_exists('schema_id', $modelData) &&
                $modelData['schema_id'] !== $this->schemaId
            ) {
                

                $rollbackValues['schemaId'] = $this->schemaId;
                $this->processSchemaId($modelData);
            }
        
    
        
            if (array_key_exists('discriminator', $modelData) &&
                $modelData['discriminator'] !== $this->discriminator
            ) {
                

                $rollbackValues['discriminator'] = $this->discriminator;
                $this->processDiscriminator($modelData);
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


private function validateDiscriminator_ArrayItem_90f6c8467639464359eeb2930de81bb2(&$value, $modelData): void {
                    $invalidItems_3b5339d2077219d07e4a747cda4b2ec2 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_3b5339d2077219d07e4a747cda4b2ec2, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_ItemOfArrayDiscriminatordbb0b5aa570d64014a1a640189c32038($value) : $value;
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
  0 => 'item of array discriminator',
  1 => 'object',
)));
}

            
                

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_ItemOfArrayDiscriminatordbb0b5aa570d64014a1a640189c32038)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'item of array discriminator',
  1 => 'GetMediaBuysResponse_ItemOfArrayDiscriminatordbb0b5aa570d64014a1a640189c32038',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_3b5339d2077219d07e4a747cda4b2ec2[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_3b5339d2077219d07e4a747cda4b2ec2[$index])
                ? $invalidItems_3b5339d2077219d07e4a747cda4b2ec2[$index][] = $e
                : $invalidItems_3b5339d2077219d07e4a747cda4b2ec2[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_3b5339d2077219d07e4a747cda4b2ec2);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'discriminator',
  1 => $invalidItems_3b5339d2077219d07e4a747cda4b2ec2,
)));
                    }
                }


}

// @codeCoverageIgnoreEnd
