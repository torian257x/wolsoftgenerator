<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_ErrorRecovery;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_ErrorSource;


/**
 * Builder class for GetMediaBuysResponse_Error
 */
class GetMediaBuysResponse_ErrorBuilder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuysResponse_Error with fully validated properties
     */
    public function validate(): GetMediaBuysResponse_Error
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysResponse_Error($this->_rawModelDataInput);
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
             * Get the value of code.
             *
             * Error code for programmatic handling. The error-code vocabulary is open: `error.code` is wire-typed `string` (not a closed enum), the standard codes published in `enums/error-code.json` are documentary, and senders MAY emit codes outside that set (platform-specific codes, or codes introduced in a later AdCP version). Receivers MUST decode unknown codes — treat the response as well-formed, read `error.recovery` for the recovery classification, and fall back to `transient` when `recovery` is absent. See `error-handling.mdx#forward-compatible-decoding-normative` for the full forward-compat contract — this rule is what lets future maintenance lines ship new codes additively.
             *
             * @return string|null
             */
            public function getCode(): ?string
            {
                return $this->_rawModelDataInput['code'] ?? null;
            }

            /**
             * Set the value of code.
             *
             * @param string $code Error code for programmatic handling. The error-code vocabulary is open: `error.code` is wire-typed `string` (not a closed enum), the standard codes published in `enums/error-code.json` are documentary, and senders MAY emit codes outside that set (platform-specific codes, or codes introduced in a later AdCP version). Receivers MUST decode unknown codes — treat the response as well-formed, read `error.recovery` for the recovery classification, and fall back to `transient` when `recovery` is absent. See `error-handling.mdx#forward-compatible-decoding-normative` for the full forward-compat contract — this rule is what lets future maintenance lines ship new codes additively.
             *
             * {@link GetMediaBuysResponse_Error::processCode}
             * 
             *
             * @return static
             */
            public function setCode(
                string $code
            ): static {
                if (array_key_exists('code', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['code'] === $code
                ) {
                    return $this;
                }

                $value = $modelData['code'] = $code;

                

                

                $this->_rawModelDataInput['code'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of message.
             *
             * Human-readable error message
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
             * @param string $message Human-readable error message
             *
             * {@link GetMediaBuysResponse_Error::processMessage}
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
             * Get the value of field.
             *
             * Field path associated with the error in JSONPath-lite format (e.g., 'packages[0].targeting'). When `issues[]` is also present, sellers MUST set this to `issues[0].pointer` translated from RFC 6901 to JSONPath-lite (e.g., '/packages/0/targeting' → 'packages[0].targeting') so pre-3.1 consumers reading `field` only get deterministic behavior. Will be deprecated in a future major version in favor of `issues[].pointer`.
             *
             * @return string|null
             */
            public function getField(): ?string
            {
                return $this->_rawModelDataInput['field'] ?? null;
            }

            /**
             * Set the value of field.
             *
             * @param string $field Field path associated with the error in JSONPath-lite format (e.g., 'packages[0].targeting'). When `issues[]` is also present, sellers MUST set this to `issues[0].pointer` translated from RFC 6901 to JSONPath-lite (e.g., '/packages/0/targeting' → 'packages[0].targeting') so pre-3.1 consumers reading `field` only get deterministic behavior. Will be deprecated in a future major version in favor of `issues[].pointer`.
             *
             * {@link GetMediaBuysResponse_Error::processField}
             * 
             *
             * @return static
             */
            public function setField(
                string $field
            ): static {
                if (array_key_exists('field', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['field'] === $field
                ) {
                    return $this;
                }

                $value = $modelData['field'] = $field;

                

                

                $this->_rawModelDataInput['field'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['suggestion'] ?? null;
            }

            /**
             * Set the value of suggestion.
             *
             * @param string $suggestion Suggested fix for the error
             *
             * {@link GetMediaBuysResponse_Error::processSuggestion}
             * 
             *
             * @return static
             */
            public function setSuggestion(
                string $suggestion
            ): static {
                if (array_key_exists('suggestion', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['suggestion'] === $suggestion
                ) {
                    return $this;
                }

                $value = $modelData['suggestion'] = $suggestion;

                

                

                $this->_rawModelDataInput['suggestion'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['retry_after'] ?? null;
            }

            /**
             * Set the value of retry_after.
             *
             * @param float $retryAfter Seconds to wait before retrying the operation. Sellers MUST return values between 1 and 3600. Clients MUST clamp values outside this range.
             *
             * {@link GetMediaBuysResponse_Error::processRetryAfter}
             * 
             *
             * @return static
             */
            public function setRetryAfter(
                float $retryAfter
            ): static {
                if (array_key_exists('retry_after', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['retry_after'] === $retryAfter
                ) {
                    return $this;
                }

                $value = $modelData['retry_after'] = $retryAfter;

                

                

                $this->_rawModelDataInput['retry_after'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of issues.
             *
             * Structured list of validation failures. Primary use is `VALIDATION_ERROR`, where multi-field rejections are common and `field` (singular) cannot carry the full pointer map. MAY appear on other error codes that reject multiple fields at once. When `issues` is present, sellers MUST also populate `field` from `issues[0]` for backward compatibility with pre-3.1 consumers that read `field` only — translating the RFC 6901 `pointer` format to the JSONPath-lite format `field` uses (e.g., `/packages/0/targeting` → `packages[0].targeting`). MUST (not SHOULD) so consumers reading `field` get deterministic behavior across sellers — the cost is one line of dual-write per seller; the cost of SHOULD is a long tail of seller-A-vs-seller-B inconsistency. Future major versions will deprecate `field` in favor of `issues[].pointer`.
             *
             * @return GetMediaBuysResponse_ItemOfArrayIssues2483c312456a31ea21c00a2ae7922a10[]|GetMediaBuysResponse_ItemOfArrayIssues2483c312456a31ea21c00a2ae7922a10Builder[]|array|null
             */
            public function getIssues(): mixed
            {
                return $this->_rawModelDataInput['issues'] ?? null;
            }

            /**
             * Set the value of issues.
             *
             * @param GetMediaBuysResponse_ItemOfArrayIssues2483c312456a31ea21c00a2ae7922a10[]|GetMediaBuysResponse_ItemOfArrayIssues2483c312456a31ea21c00a2ae7922a10Builder[]|array $issues Structured list of validation failures. Primary use is `VALIDATION_ERROR`, where multi-field rejections are common and `field` (singular) cannot carry the full pointer map. MAY appear on other error codes that reject multiple fields at once. When `issues` is present, sellers MUST also populate `field` from `issues[0]` for backward compatibility with pre-3.1 consumers that read `field` only — translating the RFC 6901 `pointer` format to the JSONPath-lite format `field` uses (e.g., `/packages/0/targeting` → `packages[0].targeting`). MUST (not SHOULD) so consumers reading `field` get deterministic behavior across sellers — the cost is one line of dual-write per seller; the cost of SHOULD is a long tail of seller-A-vs-seller-B inconsistency. Future major versions will deprecate `field` in favor of `issues[].pointer`.
             *
             * {@link GetMediaBuysResponse_Error::processIssues}
             * 
             *
             * @return static
             */
            public function setIssues(
                mixed $issues
            ): static {
                if (array_key_exists('issues', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['issues'] === $issues
                ) {
                    return $this;
                }

                $value = $modelData['issues'] = $issues;

                

                

                $this->_rawModelDataInput['issues'] = $value;

                return $this;
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
             * @return GetMediaBuysResponse_ExtensionObject|GetMediaBuysResponse_ExtensionObjectBuilder|array|null
             */
            public function getDetails(): mixed
            {
                return $this->_rawModelDataInput['details'] ?? null;
            }

            /**
             * Set the value of details.
             *
             * @param GetMediaBuysResponse_ExtensionObject|GetMediaBuysResponse_ExtensionObjectBuilder|array $details Additional task-specific error details. Sellers MAY mirror `issues[]` here as `details.issues` for backward compatibility with pre-3.1 consumers reading from `details`; new consumers SHOULD prefer the top-level `issues` field.

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
             * {@link GetMediaBuysResponse_Error::processDetails}
             * 
             *
             * @return static
             */
            public function setDetails(
                mixed $details
            ): static {
                if (array_key_exists('details', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['details'] === $details
                ) {
                    return $this;
                }

                $value = $modelData['details'] = $details;

                

                

                $this->_rawModelDataInput['details'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of recovery.
             *
             * Agent recovery classification. transient: retry after delay (rate limit, service unavailable, timeout). correctable: fix the request and resend (invalid field, budget too low, creative rejected). terminal: requires human action (account suspended, payment required, account not found). Senders SHOULD populate `recovery` on every error from 3.1 onward — it is the normative carrier of recovery semantics across version skew. A receiver that does not recognize `error.code` (a newer code, or a platform-specific code) MUST still be able to classify the error from `recovery`. The `enumMetadata.recovery` block in `enums/error-code.json` is the documentary mirror for known codes; `error.recovery` on the wire is authoritative.
             *
             * @return string|GetMediaBuysResponse_ErrorRecovery|null
             */
            public function getRecovery(): string | GetMediaBuysResponse_ErrorRecovery | null
            {
                return $this->_rawModelDataInput['recovery'] ?? null;
            }

            /**
             * Set the value of recovery.
             *
             * @param string|GetMediaBuysResponse_ErrorRecovery|null $recovery Agent recovery classification. transient: retry after delay (rate limit, service unavailable, timeout). correctable: fix the request and resend (invalid field, budget too low, creative rejected). terminal: requires human action (account suspended, payment required, account not found). Senders SHOULD populate `recovery` on every error from 3.1 onward — it is the normative carrier of recovery semantics across version skew. A receiver that does not recognize `error.code` (a newer code, or a platform-specific code) MUST still be able to classify the error from `recovery`. The `enumMetadata.recovery` block in `enums/error-code.json` is the documentary mirror for known codes; `error.recovery` on the wire is authoritative.
             *
             * {@link GetMediaBuysResponse_Error::processRecovery}
             * 
             *
             * @return static
             */
            public function setRecovery(
                string | GetMediaBuysResponse_ErrorRecovery | null $recovery
            ): static {
                if (array_key_exists('recovery', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['recovery'] === $recovery
                ) {
                    return $this;
                }

                $value = $modelData['recovery'] = $recovery;

                

                

                $this->_rawModelDataInput['recovery'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of source.
             *
             * Who emitted this error entry. `producer` (default when absent): emitted by the response's authoring agent (the seller for `get_products`, the creative agent for `build_creative`, etc.). `sdk`: augmented by a consuming SDK that detected a non-fatal advisory condition on consumption (e.g., `FORMAT_PROJECTION_FAILED` when the buyer SDK couldn't project a v1 format to a canonical, or `FORMAT_DECLARATION_DIVERGENT` when the SDK detected a producer bug on read). SDK-augmented entries SHOULD also set `sdk_id` so downstream consumers can identify which intermediate processor inserted the entry.

**Multi-hop propagation (normative).** AdCP is a federated agent network — responses commonly traverse multiple SDKs (e.g., sales agent → interchange → DSP → buyer). When an SDK augments `errors[]` with a consumption-detected entry, the augmented response carries the entry forward to subsequent hops. Each hop that detects the same condition independently SHOULD deduplicate by `(code, field)` rather than re-emit; the existing entry's `sdk_id` identifies which earlier processor saw it first. Producer entries (those without `source: "sdk"`) are authoritative for what the response's authoring agent self-detected; SDK entries are observations made on top.

**Replay/audit safety.** Persisted or replayed responses carry `source` and `sdk_id` so the audit trail can distinguish seller-emitted entries from SDK-augmented ones. Without `source`, a downstream consumer can't tell whether a code came from the seller or an intermediate SDK, which corrupts attribution.
             *
             * @return string|GetMediaBuysResponse_ErrorSource|null
             */
            public function getSource(): string | GetMediaBuysResponse_ErrorSource | null
            {
                return $this->_rawModelDataInput['source'] ?? null;
            }

            /**
             * Set the value of source.
             *
             * @param string|GetMediaBuysResponse_ErrorSource|null $source Who emitted this error entry. `producer` (default when absent): emitted by the response's authoring agent (the seller for `get_products`, the creative agent for `build_creative`, etc.). `sdk`: augmented by a consuming SDK that detected a non-fatal advisory condition on consumption (e.g., `FORMAT_PROJECTION_FAILED` when the buyer SDK couldn't project a v1 format to a canonical, or `FORMAT_DECLARATION_DIVERGENT` when the SDK detected a producer bug on read). SDK-augmented entries SHOULD also set `sdk_id` so downstream consumers can identify which intermediate processor inserted the entry.

**Multi-hop propagation (normative).** AdCP is a federated agent network — responses commonly traverse multiple SDKs (e.g., sales agent → interchange → DSP → buyer). When an SDK augments `errors[]` with a consumption-detected entry, the augmented response carries the entry forward to subsequent hops. Each hop that detects the same condition independently SHOULD deduplicate by `(code, field)` rather than re-emit; the existing entry's `sdk_id` identifies which earlier processor saw it first. Producer entries (those without `source: "sdk"`) are authoritative for what the response's authoring agent self-detected; SDK entries are observations made on top.

**Replay/audit safety.** Persisted or replayed responses carry `source` and `sdk_id` so the audit trail can distinguish seller-emitted entries from SDK-augmented ones. Without `source`, a downstream consumer can't tell whether a code came from the seller or an intermediate SDK, which corrupts attribution.
             *
             * {@link GetMediaBuysResponse_Error::processSource}
             * 
             *
             * @return static
             */
            public function setSource(
                string | GetMediaBuysResponse_ErrorSource | null $source
            ): static {
                if (array_key_exists('source', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['source'] === $source
                ) {
                    return $this;
                }

                $value = $modelData['source'] = $source;

                

                

                $this->_rawModelDataInput['source'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['sdk_id'] ?? null;
            }

            /**
             * Set the value of sdk_id.
             *
             * @param string $sdkId Optional identifier for the SDK that augmented this error entry. Format: `<sdk_package_name>@<version>` (e.g., `@adcontextprotocol/adcp@7.3.0`, `adcontextprotocol-adcp-python@1.2.0`). MUST be set when `source: "sdk"`; MUST be absent when `source: "producer"` or absent. Lets downstream consumers identify which intermediate processor inserted the entry, useful for debugging cross-SDK divergence (e.g., one SDK detects a projection failure that another SDK's registry version doesn't).
             *
             * {@link GetMediaBuysResponse_Error::processSdkId}
             * 
             *
             * @return static
             */
            public function setSdkId(
                string $sdkId
            ): static {
                if (array_key_exists('sdk_id', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['sdk_id'] === $sdkId
                ) {
                    return $this;
                }

                $value = $modelData['sdk_id'] = $sdkId;

                

                

                $this->_rawModelDataInput['sdk_id'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
