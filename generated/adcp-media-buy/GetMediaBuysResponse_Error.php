<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use UnitEnum;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_ErrorRecovery;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_ErrorSource;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Required;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetMediaBuysResponse_Error
 * @package AdCP\MediaBuy 
 *
 * Standard error structure for task-specific errors and warnings
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/errors/items')]

class GetMediaBuysResponse_Error implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/errors/items/properties/code')]
        
            #[SchemaName('code')]
        
            #[Required]
        
        /** @var string Error code for programmatic handling. The error-code vocabulary is open: `error.code` is wire-typed `string` (not a closed enum), the standard codes published in `enums/error-code.json` are documentary, and senders MAY emit codes outside that set (platform-specific codes, or codes introduced in a later AdCP version). Receivers MUST decode unknown codes — treat the response as well-formed, read `error.recovery` for the recovery classification, and fall back to `transient` when `recovery` is absent. See `error-handling.mdx#forward-compatible-decoding-normative` for the full forward-compat contract — this rule is what lets future maintenance lines ship new codes additively. */
        protected $code;
    
        
            #[JsonPointer('/properties/errors/items/properties/message')]
        
            #[SchemaName('message')]
        
            #[Required]
        
        /** @var string Human-readable error message */
        protected $message;
    
        
            #[JsonPointer('/properties/errors/items/properties/field')]
        
            #[SchemaName('field')]
        
        /** @var string|null Field path associated with the error in JSONPath-lite format (e.g., 'packages[0].targeting'). When `issues[]` is also present, sellers MUST set this to `issues[0].pointer` translated from RFC 6901 to JSONPath-lite (e.g., '/packages/0/targeting' → 'packages[0].targeting') so pre-3.1 consumers reading `field` only get deterministic behavior. Will be deprecated in a future major version in favor of `issues[].pointer`. */
        protected $field;
    
        
            #[JsonPointer('/properties/errors/items/properties/suggestion')]
        
            #[SchemaName('suggestion')]
        
        /** @var string|null Suggested fix for the error */
        protected $suggestion;
    
        
            #[JsonPointer('/properties/errors/items/properties/retry_after')]
        
            #[SchemaName('retry_after')]
        
        /** @var float|null Seconds to wait before retrying the operation. Sellers MUST return values between 1 and 3600. Clients MUST clamp values outside this range. */
        protected $retryAfter;
    
        
            #[JsonPointer('/properties/errors/items/properties/issues')]
        
            #[SchemaName('issues')]
        
        /** @var GetMediaBuysResponse_ItemOfArrayIssues2483c312456a31ea21c00a2ae7922a10[]|null Structured list of validation failures. Primary use is `VALIDATION_ERROR`, where multi-field rejections are common and `field` (singular) cannot carry the full pointer map. MAY appear on other error codes that reject multiple fields at once. When `issues` is present, sellers MUST also populate `field` from `issues[0]` for backward compatibility with pre-3.1 consumers that read `field` only — translating the RFC 6901 `pointer` format to the JSONPath-lite format `field` uses (e.g., `/packages/0/targeting` → `packages[0].targeting`). MUST (not SHOULD) so consumers reading `field` get deterministic behavior across sellers — the cost is one line of dual-write per seller; the cost of SHOULD is a long tail of seller-A-vs-seller-B inconsistency. Future major versions will deprecate `field` in favor of `issues[].pointer`. */
        protected $issues;
    
        
            #[JsonPointer('/properties/errors/items/properties/details')]
        
            #[SchemaName('details')]
        
        /** @var GetMediaBuysResponse_ExtensionObject|null Additional task-specific error details. Sellers MAY mirror `issues[]` here as `details.issues` for backward compatibility with pre-3.1 consumers reading from `details`; new consumers SHOULD prefer the top-level `issues` field.

**Canonical rejection-set shape (3.1+).** When the error reports a rejected value against a closed set of accepted values (e.g., enum mismatch, unsupported pricing option, invalid signal id), sellers SHOULD use the canonical key `accepted_values: <array>` under `details` rather than seller-specific variants observed in the wild (`available`, `allowed`, `accepted_values` at the error root, etc.). The canonical shape:

```json
{
  "code": "INVALID_PRICING_MODEL",
  "message": "Pricing option not found: po_prism_abandoner_cpm",
  "field": "pricing_option_id",
  "details": {
    "rejected_value": "po_prism_abandoner_cpm",
    "accepted_values": ["po_prism_cart_cpm", "po_prism_view_cpm"]
  }
}
```

- `rejected_value` (optional): the offending value the buyer supplied, echoed for buyer-side diagnostic clarity (especially when the offending field is nested or transformed before validation).
- `accepted_values` (optional): the closed set the seller would have accepted at this field on this call. Sellers MUST NOT enumerate the full ecosystem-wide accepted set if it differs from what's accepted for *this caller in this context* (account, brand, scope) — leaking ecosystem-wide accepted sets to a per-caller rejection turns the error into an enumeration oracle.

This is **SHOULD-level guidance**, not MUST: `details` remains `additionalProperties: true` and pre-3.1 sellers using `available` / `allowed` / `accepted_values` at the error root remain conformant. The canonical shape lets buyer-side diagnostic tooling (SDK runner hints, dashboards, error classifiers) reliably surface the accepted-set without per-seller pattern matching. SDKs SHOULD accept any of the legacy variants and normalize on read; the canonical shape is what new sellers and 3.1+ adopters should emit going forward. */
        protected $details;
    
        
            #[JsonPointer('/properties/errors/items/properties/recovery')]
        
            #[SchemaName('recovery')]
        
        /** @var GetMediaBuysResponse_ErrorRecovery|null Agent recovery classification. transient: retry after delay (rate limit, service unavailable, timeout). correctable: fix the request and resend (invalid field, budget too low, creative rejected). terminal: requires human action (account suspended, payment required, account not found). Senders SHOULD populate `recovery` on every error from 3.1 onward — it is the normative carrier of recovery semantics across version skew. A receiver that does not recognize `error.code` (a newer code, or a platform-specific code) MUST still be able to classify the error from `recovery`. The `enumMetadata.recovery` block in `enums/error-code.json` is the documentary mirror for known codes; `error.recovery` on the wire is authoritative. */
        protected $recovery;
    
        
            #[JsonPointer('/properties/errors/items/properties/source')]
        
            #[SchemaName('source')]
        
        /** @var GetMediaBuysResponse_ErrorSource|null Who emitted this error entry. `producer` (default when absent): emitted by the response's authoring agent (the seller for `get_products`, the creative agent for `build_creative`, etc.). `sdk`: augmented by a consuming SDK that detected a non-fatal advisory condition on consumption (e.g., `FORMAT_PROJECTION_FAILED` when the buyer SDK couldn't project a v1 format to a canonical, or `FORMAT_DECLARATION_DIVERGENT` when the SDK detected a producer bug on read). SDK-augmented entries SHOULD also set `sdk_id` so downstream consumers can identify which intermediate processor inserted the entry.

**Multi-hop propagation (normative).** AdCP is a federated agent network — responses commonly traverse multiple SDKs (e.g., sales agent → interchange → DSP → buyer). When an SDK augments `errors[]` with a consumption-detected entry, the augmented response carries the entry forward to subsequent hops. Each hop that detects the same condition independently SHOULD deduplicate by `(code, field)` rather than re-emit; the existing entry's `sdk_id` identifies which earlier processor saw it first. Producer entries (those without `source: "sdk"`) are authoritative for what the response's authoring agent self-detected; SDK entries are observations made on top.

**Replay/audit safety.** Persisted or replayed responses carry `source` and `sdk_id` so the audit trail can distinguish seller-emitted entries from SDK-augmented ones. Without `source`, a downstream consumer can't tell whether a code came from the seller or an intermediate SDK, which corrupts attribution. */
        protected $source;
    
        
            #[JsonPointer('/properties/errors/items/properties/sdk_id')]
        
            #[SchemaName('sdk_id')]
        
        /** @var string|null Optional identifier for the SDK that augmented this error entry. Format: `<sdk_package_name>@<version>` (e.g., `@adcontextprotocol/adcp@7.3.0`, `adcontextprotocol-adcp-python@1.2.0`). MUST be set when `source: "sdk"`; MUST be absent when `source: "producer"` or absent. Lets downstream consumers identify which intermediate processor inserted the entry, useful for debugging cross-SDK divergence (e.g., one SDK detects a projection failure that another SDK's registry version doesn't). */
        protected $sdkId;
    
        
            #[Internal]
        
        /** @var array Collect all additional properties provided to the schema */
        private $_additionalProperties = array (
);
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  2 => 'field',
  3 => 'suggestion',
  4 => 'retry_after',
  5 => 'issues',
  6 => 'details',
  7 => 'recovery',
  8 => 'source',
  9 => 'sdk_id',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetMediaBuysResponse_Error constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processCode($rawModelDataInput);
            
        
            
                $this->processMessage($rawModelDataInput);
            
        
            
                $this->processField($rawModelDataInput);
            
        
            
                $this->processSuggestion($rawModelDataInput);
            
        
            
                $this->processRetryAfter($rawModelDataInput);
            
        
            
                $this->processIssues($rawModelDataInput);
            
        
            
                $this->processDetails($rawModelDataInput);
            
        
            
                $this->processRecovery($rawModelDataInput);
            
        
            
                $this->processSource($rawModelDataInput);
            
        
            
                $this->processSdkId($rawModelDataInput);
            
        
            
        
            
        

        
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
   'code',
   'message',
   'field',
   'suggestion',
   'retry_after',
   'issues',
   'details',
   'recovery',
   'source',
   'sdk_id',
)) as $propertyKey) {
        

        $this->_additionalProperties[$propertyKey] = $value[$propertyKey];
    }

    return false;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidAdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse_Error',
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
                 * Get the value of code.
                 *
                 * Error code for programmatic handling. The error-code vocabulary is open: `error.code` is wire-typed `string` (not a closed enum), the standard codes published in `enums/error-code.json` are documentary, and senders MAY emit codes outside that set (platform-specific codes, or codes introduced in a later AdCP version). Receivers MUST decode unknown codes — treat the response as well-formed, read `error.recovery` for the recovery classification, and fall back to `transient` when `recovery` is absent. See `error-handling.mdx#forward-compatible-decoding-normative` for the full forward-compat contract — this rule is what lets future maintenance lines ship new codes additively.
                 *
                 * @return string
                 */
                public function getCode(): string
                {
                    

                    return $this->code;
                }
            

            
                /**
                 * Set the value of code.
                 *
                 * @param string $code Error code for programmatic handling. The error-code vocabulary is open: `error.code` is wire-typed `string` (not a closed enum), the standard codes published in `enums/error-code.json` are documentary, and senders MAY emit codes outside that set (platform-specific codes, or codes introduced in a later AdCP version). Receivers MUST decode unknown codes — treat the response as well-formed, read `error.recovery` for the recovery classification, and fall back to `transient` when `recovery` is absent. See `error-handling.mdx#forward-compatible-decoding-normative` for the full forward-compat contract — this rule is what lets future maintenance lines ship new codes additively.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setCode(
                    string $code
                ): static {
                    if ($this->code === $code) {
                        return $this;
                    }

                    $value = $modelData['code'] = $code;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateCode($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->code = $value;
                    $this->_rawModelDataInput['code'] = $code;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property code
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processCode(array $modelData): void
            {
                

                $value = array_key_exists('code', $modelData) ? $modelData['code'] : $this->code;

                

                $this->code = $this->validateCode($value, $modelData);
            }

            /**
             * Execute all validators for the property code
             */
            protected function validateCode($value, array $modelData)
            {
                
                    

if (!array_key_exists('code', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'code',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'code',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && mb_strlen($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\MinLengthException($value ?? null, ...array (
  0 => 'code',
  1 => 1,
)));
}

                
                    

if (is_string($value) && mb_strlen($value) > 64) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\MaxLengthException($value ?? null, ...array (
  0 => 'code',
  1 => 64,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of message.
                 *
                 * Human-readable error message
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
                 * @param string $message Human-readable error message
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
                 * Get the value of field.
                 *
                 * Field path associated with the error in JSONPath-lite format (e.g., 'packages[0].targeting'). When `issues[]` is also present, sellers MUST set this to `issues[0].pointer` translated from RFC 6901 to JSONPath-lite (e.g., '/packages/0/targeting' → 'packages[0].targeting') so pre-3.1 consumers reading `field` only get deterministic behavior. Will be deprecated in a future major version in favor of `issues[].pointer`.
                 *
                 * @return string|null
                 */
                public function getField(): ?string
                {
                    

                    return $this->field;
                }
            

            
                /**
                 * Set the value of field.
                 *
                 * @param string $field Field path associated with the error in JSONPath-lite format (e.g., 'packages[0].targeting'). When `issues[]` is also present, sellers MUST set this to `issues[0].pointer` translated from RFC 6901 to JSONPath-lite (e.g., '/packages/0/targeting' → 'packages[0].targeting') so pre-3.1 consumers reading `field` only get deterministic behavior. Will be deprecated in a future major version in favor of `issues[].pointer`.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setField(
                    string $field
                ): static {
                    if ($this->field === $field) {
                        return $this;
                    }

                    $value = $modelData['field'] = $field;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateField($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->field = $value;
                    $this->_rawModelDataInput['field'] = $field;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property field
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processField(array $modelData): void
            {
                
                    if (!array_key_exists('field', $modelData) && $this->field === null) {
                        return;
                    }
                

                $value = array_key_exists('field', $modelData) ? $modelData['field'] : $this->field;

                

                $this->field = $this->validateField($value, $modelData);
            }

            /**
             * Execute all validators for the property field
             */
            protected function validateField($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'field',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of suggestion.
                 *
                 * Suggested fix for the error
                 *
                 * @return string|null
                 */
                public function getSuggestion(): ?string
                {
                    

                    return $this->suggestion;
                }
            

            
                /**
                 * Set the value of suggestion.
                 *
                 * @param string $suggestion Suggested fix for the error
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setSuggestion(
                    string $suggestion
                ): static {
                    if ($this->suggestion === $suggestion) {
                        return $this;
                    }

                    $value = $modelData['suggestion'] = $suggestion;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateSuggestion($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->suggestion = $value;
                    $this->_rawModelDataInput['suggestion'] = $suggestion;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property suggestion
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processSuggestion(array $modelData): void
            {
                
                    if (!array_key_exists('suggestion', $modelData) && $this->suggestion === null) {
                        return;
                    }
                

                $value = array_key_exists('suggestion', $modelData) ? $modelData['suggestion'] : $this->suggestion;

                

                $this->suggestion = $this->validateSuggestion($value, $modelData);
            }

            /**
             * Execute all validators for the property suggestion
             */
            protected function validateSuggestion($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'suggestion',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of retry_after.
                 *
                 * Seconds to wait before retrying the operation. Sellers MUST return values between 1 and 3600. Clients MUST clamp values outside this range.
                 *
                 * @return float|null
                 */
                public function getRetryAfter(): ?float
                {
                    

                    return $this->retryAfter;
                }
            

            
                /**
                 * Set the value of retry_after.
                 *
                 * @param float $retryAfter Seconds to wait before retrying the operation. Sellers MUST return values between 1 and 3600. Clients MUST clamp values outside this range.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setRetryAfter(
                    float $retryAfter
                ): static {
                    if ($this->retryAfter === $retryAfter) {
                        return $this;
                    }

                    $value = $modelData['retry_after'] = $retryAfter;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateRetryAfter($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->retryAfter = $value;
                    $this->_rawModelDataInput['retry_after'] = $retryAfter;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property retryAfter
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processRetryAfter(array $modelData): void
            {
                
                    if (!array_key_exists('retry_after', $modelData) && $this->retryAfter === null) {
                        return;
                    }
                

                $value = array_key_exists('retry_after', $modelData) ? $modelData['retry_after'] : $this->retryAfter;

                $value = is_int($value) ? (float) $value : $value;

                $this->retryAfter = $this->validateRetryAfter($value, $modelData);
            }

            /**
             * Execute all validators for the property retryAfter
             */
            protected function validateRetryAfter($value, array $modelData)
            {
                
                    

if ((!is_float($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'retry_after',
  1 => 'float',
)));
}

                
                    

if (is_float($value) && $value < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'retry_after',
  1 => 1,
)));
}

                
                    

if (is_float($value) && $value > 3600) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MaximumException($value ?? null, ...array (
  0 => 'retry_after',
  1 => 3600,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of issues.
                 *
                 * Structured list of validation failures. Primary use is `VALIDATION_ERROR`, where multi-field rejections are common and `field` (singular) cannot carry the full pointer map. MAY appear on other error codes that reject multiple fields at once. When `issues` is present, sellers MUST also populate `field` from `issues[0]` for backward compatibility with pre-3.1 consumers that read `field` only — translating the RFC 6901 `pointer` format to the JSONPath-lite format `field` uses (e.g., `/packages/0/targeting` → `packages[0].targeting`). MUST (not SHOULD) so consumers reading `field` get deterministic behavior across sellers — the cost is one line of dual-write per seller; the cost of SHOULD is a long tail of seller-A-vs-seller-B inconsistency. Future major versions will deprecate `field` in favor of `issues[].pointer`.
                 *
                 * @return GetMediaBuysResponse_ItemOfArrayIssues2483c312456a31ea21c00a2ae7922a10[]|null
                 */
                public function getIssues(): ?array
                {
                    

                    return $this->issues;
                }
            

            
                /**
                 * Set the value of issues.
                 *
                 * @param GetMediaBuysResponse_ItemOfArrayIssues2483c312456a31ea21c00a2ae7922a10[] $issues Structured list of validation failures. Primary use is `VALIDATION_ERROR`, where multi-field rejections are common and `field` (singular) cannot carry the full pointer map. MAY appear on other error codes that reject multiple fields at once. When `issues` is present, sellers MUST also populate `field` from `issues[0]` for backward compatibility with pre-3.1 consumers that read `field` only — translating the RFC 6901 `pointer` format to the JSONPath-lite format `field` uses (e.g., `/packages/0/targeting` → `packages[0].targeting`). MUST (not SHOULD) so consumers reading `field` get deterministic behavior across sellers — the cost is one line of dual-write per seller; the cost of SHOULD is a long tail of seller-A-vs-seller-B inconsistency. Future major versions will deprecate `field` in favor of `issues[].pointer`.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setIssues(
                    array $issues
                ): static {
                    if ($this->issues === $issues) {
                        return $this;
                    }

                    $value = $modelData['issues'] = $issues;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateIssues($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->issues = $value;
                    $this->_rawModelDataInput['issues'] = $issues;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property issues
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processIssues(array $modelData): void
            {
                
                    if (!array_key_exists('issues', $modelData) && $this->issues === null) {
                        return;
                    }
                

                $value = array_key_exists('issues', $modelData) ? $modelData['issues'] : $this->issues;

                

                $this->issues = $this->validateIssues($value, $modelData);
            }

            /**
             * Execute all validators for the property issues
             */
            protected function validateIssues($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'issues',
  1 => 'array',
)));
}

                
                    $this->validateIssues_ArrayItem_ec86df47c360c8f593c82796f6efcc83($value, $modelData);
                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of details.
                 *
                 * Additional task-specific error details. Sellers MAY mirror `issues[]` here as `details.issues` for backward compatibility with pre-3.1 consumers reading from `details`; new consumers SHOULD prefer the top-level `issues` field.

**Canonical rejection-set shape (3.1+).** When the error reports a rejected value against a closed set of accepted values (e.g., enum mismatch, unsupported pricing option, invalid signal id), sellers SHOULD use the canonical key `accepted_values: <array>` under `details` rather than seller-specific variants observed in the wild (`available`, `allowed`, `accepted_values` at the error root, etc.). The canonical shape:

```json
{
  "code": "INVALID_PRICING_MODEL",
  "message": "Pricing option not found: po_prism_abandoner_cpm",
  "field": "pricing_option_id",
  "details": {
    "rejected_value": "po_prism_abandoner_cpm",
    "accepted_values": ["po_prism_cart_cpm", "po_prism_view_cpm"]
  }
}
```

- `rejected_value` (optional): the offending value the buyer supplied, echoed for buyer-side diagnostic clarity (especially when the offending field is nested or transformed before validation).
- `accepted_values` (optional): the closed set the seller would have accepted at this field on this call. Sellers MUST NOT enumerate the full ecosystem-wide accepted set if it differs from what's accepted for *this caller in this context* (account, brand, scope) — leaking ecosystem-wide accepted sets to a per-caller rejection turns the error into an enumeration oracle.

This is **SHOULD-level guidance**, not MUST: `details` remains `additionalProperties: true` and pre-3.1 sellers using `available` / `allowed` / `accepted_values` at the error root remain conformant. The canonical shape lets buyer-side diagnostic tooling (SDK runner hints, dashboards, error classifiers) reliably surface the accepted-set without per-seller pattern matching. SDKs SHOULD accept any of the legacy variants and normalize on read; the canonical shape is what new sellers and 3.1+ adopters should emit going forward.
                 *
                 * @return GetMediaBuysResponse_ExtensionObject|null
                 */
                public function getDetails(): ?GetMediaBuysResponse_ExtensionObject
                {
                    

                    return $this->details;
                }
            

            
                /**
                 * Set the value of details.
                 *
                 * @param GetMediaBuysResponse_ExtensionObject $details Additional task-specific error details. Sellers MAY mirror `issues[]` here as `details.issues` for backward compatibility with pre-3.1 consumers reading from `details`; new consumers SHOULD prefer the top-level `issues` field.

**Canonical rejection-set shape (3.1+).** When the error reports a rejected value against a closed set of accepted values (e.g., enum mismatch, unsupported pricing option, invalid signal id), sellers SHOULD use the canonical key `accepted_values: <array>` under `details` rather than seller-specific variants observed in the wild (`available`, `allowed`, `accepted_values` at the error root, etc.). The canonical shape:

```json
{
  "code": "INVALID_PRICING_MODEL",
  "message": "Pricing option not found: po_prism_abandoner_cpm",
  "field": "pricing_option_id",
  "details": {
    "rejected_value": "po_prism_abandoner_cpm",
    "accepted_values": ["po_prism_cart_cpm", "po_prism_view_cpm"]
  }
}
```

- `rejected_value` (optional): the offending value the buyer supplied, echoed for buyer-side diagnostic clarity (especially when the offending field is nested or transformed before validation).
- `accepted_values` (optional): the closed set the seller would have accepted at this field on this call. Sellers MUST NOT enumerate the full ecosystem-wide accepted set if it differs from what's accepted for *this caller in this context* (account, brand, scope) — leaking ecosystem-wide accepted sets to a per-caller rejection turns the error into an enumeration oracle.

This is **SHOULD-level guidance**, not MUST: `details` remains `additionalProperties: true` and pre-3.1 sellers using `available` / `allowed` / `accepted_values` at the error root remain conformant. The canonical shape lets buyer-side diagnostic tooling (SDK runner hints, dashboards, error classifiers) reliably surface the accepted-set without per-seller pattern matching. SDKs SHOULD accept any of the legacy variants and normalize on read; the canonical shape is what new sellers and 3.1+ adopters should emit going forward.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setDetails(
                    GetMediaBuysResponse_ExtensionObject $details
                ): static {
                    if ($this->details === $details) {
                        return $this;
                    }

                    $value = $modelData['details'] = $details;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateDetails($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->details = $value;
                    $this->_rawModelDataInput['details'] = $details;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property details
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processDetails(array $modelData): void
            {
                
                    if (!array_key_exists('details', $modelData) && $this->details === null) {
                        return;
                    }
                

                $value = array_key_exists('details', $modelData) ? $modelData['details'] : $this->details;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_ExtensionObject($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'details',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->details = $this->validateDetails($value, $modelData);
            }

            /**
             * Execute all validators for the property details
             */
            protected function validateDetails($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'details',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_ExtensionObject)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'details',
  1 => 'GetMediaBuysResponse_ExtensionObject',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of recovery.
                 *
                 * Agent recovery classification. transient: retry after delay (rate limit, service unavailable, timeout). correctable: fix the request and resend (invalid field, budget too low, creative rejected). terminal: requires human action (account suspended, payment required, account not found). Senders SHOULD populate `recovery` on every error from 3.1 onward — it is the normative carrier of recovery semantics across version skew. A receiver that does not recognize `error.code` (a newer code, or a platform-specific code) MUST still be able to classify the error from `recovery`. The `enumMetadata.recovery` block in `enums/error-code.json` is the documentary mirror for known codes; `error.recovery` on the wire is authoritative.
                 *
                 * @return GetMediaBuysResponse_ErrorRecovery|null
                 */
                public function getRecovery(): ?GetMediaBuysResponse_ErrorRecovery
                {
                    

                    return $this->recovery;
                }
            

            
                /**
                 * Set the value of recovery.
                 *
                 * @param string|GetMediaBuysResponse_ErrorRecovery|null $recovery Agent recovery classification. transient: retry after delay (rate limit, service unavailable, timeout). correctable: fix the request and resend (invalid field, budget too low, creative rejected). terminal: requires human action (account suspended, payment required, account not found). Senders SHOULD populate `recovery` on every error from 3.1 onward — it is the normative carrier of recovery semantics across version skew. A receiver that does not recognize `error.code` (a newer code, or a platform-specific code) MUST still be able to classify the error from `recovery`. The `enumMetadata.recovery` block in `enums/error-code.json` is the documentary mirror for known codes; `error.recovery` on the wire is authoritative.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setRecovery(
                    string | GetMediaBuysResponse_ErrorRecovery | null $recovery
                ): static {
                    if ($this->recovery === $recovery) {
                        return $this;
                    }

                    $value = $modelData['recovery'] = $recovery;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateRecovery($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->recovery = $value;
                    $this->_rawModelDataInput['recovery'] = $recovery;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property recovery
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processRecovery(array $modelData): void
            {
                
                    if (!array_key_exists('recovery', $modelData) && $this->recovery === null) {
                        return;
                    }
                

                $value = array_key_exists('recovery', $modelData) ? $modelData['recovery'] : $this->recovery;

                

                $this->recovery = $this->validateRecovery($value, $modelData);
            }

            /**
             * Execute all validators for the property recovery
             */
            protected function validateRecovery($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof GetMediaBuysResponse_ErrorRecovery)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'recovery',
  1 => 'GetMediaBuysResponse_ErrorRecovery',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'recovery',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'transient',
   'correctable',
   'terminal',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'recovery',
  1 => 
  array (
    0 => 'transient',
    1 => 'correctable',
    2 => 'terminal',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\GetMediaBuysResponse_ErrorRecovery',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'recovery',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'recovery',
  1 => 'php_model_generator_enum',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of source.
                 *
                 * Who emitted this error entry. `producer` (default when absent): emitted by the response's authoring agent (the seller for `get_products`, the creative agent for `build_creative`, etc.). `sdk`: augmented by a consuming SDK that detected a non-fatal advisory condition on consumption (e.g., `FORMAT_PROJECTION_FAILED` when the buyer SDK couldn't project a v1 format to a canonical, or `FORMAT_DECLARATION_DIVERGENT` when the SDK detected a producer bug on read). SDK-augmented entries SHOULD also set `sdk_id` so downstream consumers can identify which intermediate processor inserted the entry.

**Multi-hop propagation (normative).** AdCP is a federated agent network — responses commonly traverse multiple SDKs (e.g., sales agent → interchange → DSP → buyer). When an SDK augments `errors[]` with a consumption-detected entry, the augmented response carries the entry forward to subsequent hops. Each hop that detects the same condition independently SHOULD deduplicate by `(code, field)` rather than re-emit; the existing entry's `sdk_id` identifies which earlier processor saw it first. Producer entries (those without `source: "sdk"`) are authoritative for what the response's authoring agent self-detected; SDK entries are observations made on top.

**Replay/audit safety.** Persisted or replayed responses carry `source` and `sdk_id` so the audit trail can distinguish seller-emitted entries from SDK-augmented ones. Without `source`, a downstream consumer can't tell whether a code came from the seller or an intermediate SDK, which corrupts attribution.
                 *
                 * @return GetMediaBuysResponse_ErrorSource|null
                 */
                public function getSource(): ?GetMediaBuysResponse_ErrorSource
                {
                    

                    return $this->source;
                }
            

            
                /**
                 * Set the value of source.
                 *
                 * @param string|GetMediaBuysResponse_ErrorSource|null $source Who emitted this error entry. `producer` (default when absent): emitted by the response's authoring agent (the seller for `get_products`, the creative agent for `build_creative`, etc.). `sdk`: augmented by a consuming SDK that detected a non-fatal advisory condition on consumption (e.g., `FORMAT_PROJECTION_FAILED` when the buyer SDK couldn't project a v1 format to a canonical, or `FORMAT_DECLARATION_DIVERGENT` when the SDK detected a producer bug on read). SDK-augmented entries SHOULD also set `sdk_id` so downstream consumers can identify which intermediate processor inserted the entry.

**Multi-hop propagation (normative).** AdCP is a federated agent network — responses commonly traverse multiple SDKs (e.g., sales agent → interchange → DSP → buyer). When an SDK augments `errors[]` with a consumption-detected entry, the augmented response carries the entry forward to subsequent hops. Each hop that detects the same condition independently SHOULD deduplicate by `(code, field)` rather than re-emit; the existing entry's `sdk_id` identifies which earlier processor saw it first. Producer entries (those without `source: "sdk"`) are authoritative for what the response's authoring agent self-detected; SDK entries are observations made on top.

**Replay/audit safety.** Persisted or replayed responses carry `source` and `sdk_id` so the audit trail can distinguish seller-emitted entries from SDK-augmented ones. Without `source`, a downstream consumer can't tell whether a code came from the seller or an intermediate SDK, which corrupts attribution.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setSource(
                    string | GetMediaBuysResponse_ErrorSource | null $source
                ): static {
                    if ($this->source === $source) {
                        return $this;
                    }

                    $value = $modelData['source'] = $source;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateSource($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->source = $value;
                    $this->_rawModelDataInput['source'] = $source;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property source
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processSource(array $modelData): void
            {
                
                    if (!array_key_exists('source', $modelData) && $this->source === null) {
                        return;
                    }
                

                $value = array_key_exists('source', $modelData) ? $modelData['source'] : $this->source;

                

                $this->source = $this->validateSource($value, $modelData);
            }

            /**
             * Execute all validators for the property source
             */
            protected function validateSource($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof GetMediaBuysResponse_ErrorSource)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'source',
  1 => 'GetMediaBuysResponse_ErrorSource',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'source',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'producer',
   'sdk',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'source',
  1 => 
  array (
    0 => 'producer',
    1 => 'sdk',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\GetMediaBuysResponse_ErrorSource',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'source',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'source',
  1 => 'php_model_generator_enum',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of sdk_id.
                 *
                 * Optional identifier for the SDK that augmented this error entry. Format: `<sdk_package_name>@<version>` (e.g., `@adcontextprotocol/adcp@7.3.0`, `adcontextprotocol-adcp-python@1.2.0`). MUST be set when `source: "sdk"`; MUST be absent when `source: "producer"` or absent. Lets downstream consumers identify which intermediate processor inserted the entry, useful for debugging cross-SDK divergence (e.g., one SDK detects a projection failure that another SDK's registry version doesn't).
                 *
                 * @return string|null
                 */
                public function getSdkId(): ?string
                {
                    

                    return $this->sdkId;
                }
            

            
                /**
                 * Set the value of sdk_id.
                 *
                 * @param string $sdkId Optional identifier for the SDK that augmented this error entry. Format: `<sdk_package_name>@<version>` (e.g., `@adcontextprotocol/adcp@7.3.0`, `adcontextprotocol-adcp-python@1.2.0`). MUST be set when `source: "sdk"`; MUST be absent when `source: "producer"` or absent. Lets downstream consumers identify which intermediate processor inserted the entry, useful for debugging cross-SDK divergence (e.g., one SDK detects a projection failure that another SDK's registry version doesn't).
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setSdkId(
                    string $sdkId
                ): static {
                    if ($this->sdkId === $sdkId) {
                        return $this;
                    }

                    $value = $modelData['sdk_id'] = $sdkId;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateSdkId($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->sdkId = $value;
                    $this->_rawModelDataInput['sdk_id'] = $sdkId;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property sdkId
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processSdkId(array $modelData): void
            {
                
                    if (!array_key_exists('sdk_id', $modelData) && $this->sdkId === null) {
                        return;
                    }
                

                $value = array_key_exists('sdk_id', $modelData) ? $modelData['sdk_id'] : $this->sdkId;

                

                $this->sdkId = $this->validateSdkId($value, $modelData);
            }

            /**
             * Execute all validators for the property sdkId
             */
            protected function validateSdkId($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'sdk_id',
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
    

    
        
            if (array_key_exists('code', $modelData) &&
                $modelData['code'] !== $this->code
            ) {
                

                $rollbackValues['code'] = $this->code;
                $this->processCode($modelData);
            }
        
    
        
            if (array_key_exists('message', $modelData) &&
                $modelData['message'] !== $this->message
            ) {
                

                $rollbackValues['message'] = $this->message;
                $this->processMessage($modelData);
            }
        
    
        
            if (array_key_exists('field', $modelData) &&
                $modelData['field'] !== $this->field
            ) {
                

                $rollbackValues['field'] = $this->field;
                $this->processField($modelData);
            }
        
    
        
            if (array_key_exists('suggestion', $modelData) &&
                $modelData['suggestion'] !== $this->suggestion
            ) {
                

                $rollbackValues['suggestion'] = $this->suggestion;
                $this->processSuggestion($modelData);
            }
        
    
        
            if (array_key_exists('retry_after', $modelData) &&
                $modelData['retry_after'] !== $this->retryAfter
            ) {
                

                $rollbackValues['retryAfter'] = $this->retryAfter;
                $this->processRetryAfter($modelData);
            }
        
    
        
            if (array_key_exists('issues', $modelData) &&
                $modelData['issues'] !== $this->issues
            ) {
                

                $rollbackValues['issues'] = $this->issues;
                $this->processIssues($modelData);
            }
        
    
        
            if (array_key_exists('details', $modelData) &&
                $modelData['details'] !== $this->details
            ) {
                

                $rollbackValues['details'] = $this->details;
                $this->processDetails($modelData);
            }
        
    
        
            if (array_key_exists('recovery', $modelData) &&
                $modelData['recovery'] !== $this->recovery
            ) {
                

                $rollbackValues['recovery'] = $this->recovery;
                $this->processRecovery($modelData);
            }
        
    
        
            if (array_key_exists('source', $modelData) &&
                $modelData['source'] !== $this->source
            ) {
                

                $rollbackValues['source'] = $this->source;
                $this->processSource($modelData);
            }
        
    
        
            if (array_key_exists('sdk_id', $modelData) &&
                $modelData['sdk_id'] !== $this->sdkId
            ) {
                

                $rollbackValues['sdkId'] = $this->sdkId;
                $this->processSdkId($modelData);
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
 * serialize the property recovery
 */
protected function serializeRecovery()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->recovery, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\GetMediaBuysResponse_ErrorRecovery',
));
}


/**
 * serialize the property source
 */
protected function serializeSource()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->source, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\GetMediaBuysResponse_ErrorSource',
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


private function validateIssues_ArrayItem_ec86df47c360c8f593c82796f6efcc83(&$value, $modelData): void {
                    $invalidItems_3532cb85352ab9ebec57f4b4037e56e5 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_3532cb85352ab9ebec57f4b4037e56e5, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_ItemOfArrayIssues2483c312456a31ea21c00a2ae7922a10($value) : $value;
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
  0 => 'item of array issues',
  1 => 'object',
)));
}

            
                

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_ItemOfArrayIssues2483c312456a31ea21c00a2ae7922a10)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'item of array issues',
  1 => 'GetMediaBuysResponse_ItemOfArrayIssues2483c312456a31ea21c00a2ae7922a10',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_3532cb85352ab9ebec57f4b4037e56e5[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_3532cb85352ab9ebec57f4b4037e56e5[$index])
                ? $invalidItems_3532cb85352ab9ebec57f4b4037e56e5[$index][] = $e
                : $invalidItems_3532cb85352ab9ebec57f4b4037e56e5[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_3532cb85352ab9ebec57f4b4037e56e5);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'issues',
  1 => $invalidItems_3532cb85352ab9ebec57f4b4037e56e5,
)));
                    }
                }


}

// @codeCoverageIgnoreEnd
