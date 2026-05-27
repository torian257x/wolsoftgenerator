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
 * Class GetProductsResponse_PlatformExtensionReference
 * @package AdCP\MediaBuy 
 *
 * REQUIRED when `format_kind: "custom"`; otherwise MUST be absent. URI+digest reference to a fetchable schema describing this custom shape's actual `params` and `slots`. Same hosting model as `platform_extensions`: open-ecosystem publishers host the artifact at the canonical URI on their subdomain; closed-platform / walled-garden shapes resolve through the AAO mirror at `https://creative.adcontextprotocol.org/translated/...`. Buyer agents fetch by `uri@digest` (immutable per digest, aggressive caching, `Cache-Control: public, max-age=31536000, immutable`), validate `params` and `slots` against the fetched schema, and reason about manifests structurally — same mechanic as platform_extensions but at the format-structure level. Without `format_schema`, custom shapes would be opaque to buyer agents and the protocol would regress to per-seller integration code; that's why the schema is required, not optional.

**Fetch contract (normative)** — `format_schema` is load-bearing for validation (unlike `platform_extensions`, which is informational on the *consumption* side). The *transport* rules below apply identically to BOTH fields — any SDK fetching a `platform-extension-ref.json` URI MUST apply this contract regardless of whether the field name is `format_schema` or `platform_extensions`. A shared SDK fetch path that drops to the weakest bar undermines `format_schema`'s hardening. The consumption distinction (load-bearing vs informational) is about *what the body means*; the transport distinction is `https`-and-allowlisted regardless.

- **Transport**: `https` only. Buyers MUST reject `http://`, `file://`, `data:`, and any non-`https` scheme. The URI MUST resolve to a JSON document that is itself a valid JSON Schema (Draft 07 or 2020-12; producers MUST declare `$schema`).
- **SSRF protection**: buyers MUST resolve the URI hostname and reject if any resolved address is in RFC 1918 private space (`10.0.0.0/8`, `172.16.0.0/12`, `192.168.0.0/16`), loopback (`127.0.0.0/8`, `::1`), link-local (`169.254.0.0/16`, `fe80::/10`), CGNAT (`100.64.0.0/10`), or any RFC 6761 special-use name (`.local`, `.localhost`, `.internal`, `.test`, `.example`, `.invalid`). Cloud metadata endpoints (`169.254.169.254`, `metadata.google.internal`, `kubernetes.default.svc`) are explicitly forbidden — these are credential-leak primitives. Buyers MUST pin the connection to the resolved IP (or re-resolve and re-validate the allowlist per request) to defeat DNS rebinding.
- **HTTP redirects**: MUST be disabled. If a follow is implemented at all, the redirect target MUST pass the same scheme + SSRF + allowlist checks; otherwise the fetch hard-fails. Open redirects on same-origin paths are otherwise a free SSRF primitive.
- **Response size cap**: response body MUST be capped at 1 MiB. Enforce during streaming, not after full buffering. Over-cap hard-fails identically to digest mismatch.
- **Timeout**: SDKs SHOULD apply a fetch timeout ≤5 seconds. Timeout SHOULD be treated identically to an HTTP 5xx response (transient — retry policy at the SDK's discretion; on persistent failure surface as unresolved and skip the declaration for this session).
- **Digest verification**: SHA-256 of the response body MUST equal `digest`. **Digest mismatch is a hard fail** — the buyer MUST treat the format declaration as unresolvable and MUST NOT validate manifests against the mismatched body. A divergent digest is either a malicious substitution or producer error; either way, falling back to the un-verified body breaks the trust model. Digest format: `sha256:` prefix + 64 lowercase hex characters. Cache key is `uri@digest`; digest mismatch MUST NOT be cached as a negative result keyed on `uri` alone (defeats CDN-flap recovery), and MUST be distinguishable in telemetry from network 5xx / 404 (sustained mismatch is a substitution-attack signal, not a flap).
- **Sandboxing of `$ref`**: fetched schemas MAY use `$ref`. Buyers MUST resolve `$ref` only to URIs that are (a) same-origin as the parent `format_schema.uri` after RFC 3986 §6 normalization (lowercase scheme + host, strip default port, normalize path dot-segments, no userinfo component), OR (b) hosted under the AAO catalog domain (`https://creative.adcontextprotocol.org/...`), OR (c) intra-document JSON Pointer refs (`#/...`) bounded to the parent document's parsed tree. Cross-origin `$ref` to arbitrary URIs MUST be rejected. `$ref: file://...` MUST be rejected unconditionally. Transitive `$ref` chains MUST be bounded at depth ≤8 AND `$ref` count ≤256 across the resolved tree (depth 8 with breadth 100 per level is 10^16 nodes — depth alone is not enough). Publishers SHOULD inline rather than $ref where possible.
- **Schema-compile bounds (DoS protection)**: validators MUST bound CPU/memory on fetched schemas. Recommended: compiled-schema keyword count ≤10 000, `pattern` regexes evaluated with a non-backtracking engine (re2) OR under a per-pattern timeout, per-manifest validation budget ≤250 ms (exceeded budget → treat manifest as invalid, surface telemetry signal). Without these, a 'valid' schema with catastrophic regex backtracking or exponential `allOf`/`anyOf` expansion pins a CPU forever.
- **Cache**: buyers cache fetched schemas by `uri@digest` and treat them as immutable (the same hosting contract as `platform_extensions`). On `404`, network partition, or persistent fetch failure, buyers SHOULD degrade gracefully (treat the declaration as unresolved, skip it for the current `get_products` response, surface via `errors[]` with the relevant code) rather than failing the entire session.
- **Schema-not-valid handling**: if the fetched body parses as JSON but is not a valid JSON Schema, the buyer MUST treat the declaration as unresolvable (same as digest mismatch) and surface via `errors[]`. Validators MUST NOT attempt partial validation against an invalid schema.
- **AAO catalog trust**: `https://creative.adcontextprotocol.org/*` is a single trust anchor in the same-origin allowlist; compromise of the catalog domain or its CA compromises every buyer agent. Catalog-served bodies MUST be digest-pinned identically to origin fetches (the digest is on the *parent* `format_schema.uri@digest`, not on the catalog response). Future hardening (signed bodies, transparency log) is tracked separately.
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/products/items/properties/format_options/items/properties/format_schema')]

class GetProductsResponse_PlatformExtensionReference implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/products/items/properties/format_options/items/properties/format_schema/properties/uri')]
        
            #[SchemaName('uri')]
        
            #[Required]
        
        /** @var string HTTPS URL identifying the extension. `https://` is mandatory — `http://`, `file://`, `data:`, and other schemes are rejected at the schema layer (defense-in-depth on top of the fetch-contract normative rules). The URI base is the owning agent's URL; the path identifies the extension within that agent. Example: 'https://creative.adcontextprotocol.org/translated/meta/extensions/meta_pixel'. The full fetch contract — SSRF allowlist, response-size cap, $ref sandbox, schema-compile bounds — is documented on `product-format-declaration.json#format_schema` and applies to ALL fetches of this reference shape regardless of whether the field is named `format_schema` (load-bearing for validation) or `platform_extensions` (informational); the *transport* rules are identical, only the *consumption* semantics differ. */
        protected $uri;
    
        
            #[JsonPointer('/properties/products/items/properties/format_options/items/properties/format_schema/properties/digest')]
        
            #[SchemaName('digest')]
        
            #[Required]
        
        /** @var string SHA-256 content digest of the extension definition (sha256:<hex>). Used to detect drift — if the agent revises the extension, the digest changes and cached definitions become invalid. */
        protected $digest;
    
        
            #[Internal]
        
        /** @var array Collect all additional properties provided to the schema */
        private $_additionalProperties = array (
);
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetProductsResponse_PlatformExtensionReference constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processUri($rawModelDataInput);
            
        
            
                $this->processDigest($rawModelDataInput);
            
        
            
        
            
        

        
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
   'uri',
   'digest',
)) as $propertyKey) {
        

        $this->_additionalProperties[$propertyKey] = $value[$propertyKey];
    }

    return false;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidAdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetProductsResponse_PlatformExtensionReference',
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
                 * Get the value of uri.
                 *
                 * HTTPS URL identifying the extension. `https://` is mandatory — `http://`, `file://`, `data:`, and other schemes are rejected at the schema layer (defense-in-depth on top of the fetch-contract normative rules). The URI base is the owning agent's URL; the path identifies the extension within that agent. Example: 'https://creative.adcontextprotocol.org/translated/meta/extensions/meta_pixel'. The full fetch contract — SSRF allowlist, response-size cap, $ref sandbox, schema-compile bounds — is documented on `product-format-declaration.json#format_schema` and applies to ALL fetches of this reference shape regardless of whether the field is named `format_schema` (load-bearing for validation) or `platform_extensions` (informational); the *transport* rules are identical, only the *consumption* semantics differ.
                 *
                 * @return string
                 */
                public function getUri(): string
                {
                    

                    return $this->uri;
                }
            

            
                /**
                 * Set the value of uri.
                 *
                 * @param string $uri HTTPS URL identifying the extension. `https://` is mandatory — `http://`, `file://`, `data:`, and other schemes are rejected at the schema layer (defense-in-depth on top of the fetch-contract normative rules). The URI base is the owning agent's URL; the path identifies the extension within that agent. Example: 'https://creative.adcontextprotocol.org/translated/meta/extensions/meta_pixel'. The full fetch contract — SSRF allowlist, response-size cap, $ref sandbox, schema-compile bounds — is documented on `product-format-declaration.json#format_schema` and applies to ALL fetches of this reference shape regardless of whether the field is named `format_schema` (load-bearing for validation) or `platform_extensions` (informational); the *transport* rules are identical, only the *consumption* semantics differ.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setUri(
                    string $uri
                ): static {
                    if ($this->uri === $uri) {
                        return $this;
                    }

                    $value = $modelData['uri'] = $uri;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateUri($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->uri = $value;
                    $this->_rawModelDataInput['uri'] = $uri;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property uri
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processUri(array $modelData): void
            {
                

                $value = array_key_exists('uri', $modelData) ? $modelData['uri'] : $this->uri;

                

                $this->uri = $this->validateUri($value, $modelData);
            }

            /**
             * Execute all validators for the property uri
             */
            protected function validateUri($value, array $modelData)
            {
                
                    

if (!array_key_exists('uri', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'uri',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'uri',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && !preg_match(base64_decode('L15odHRwczpcL1wvLw=='), $value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\PatternException($value ?? null, ...array (
  0 => 'uri',
  1 => '^https://',
)));
}

                
                    

if (!\PHPModelGenerator\Format\UriFormatValidator::validate($value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\FormatException($value ?? null, ...array (
  0 => 'uri',
  1 => 'uri',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of digest.
                 *
                 * SHA-256 content digest of the extension definition (sha256:<hex>). Used to detect drift — if the agent revises the extension, the digest changes and cached definitions become invalid.
                 *
                 * @return string
                 */
                public function getDigest(): string
                {
                    

                    return $this->digest;
                }
            

            
                /**
                 * Set the value of digest.
                 *
                 * @param string $digest SHA-256 content digest of the extension definition (sha256:<hex>). Used to detect drift — if the agent revises the extension, the digest changes and cached definitions become invalid.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setDigest(
                    string $digest
                ): static {
                    if ($this->digest === $digest) {
                        return $this;
                    }

                    $value = $modelData['digest'] = $digest;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateDigest($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->digest = $value;
                    $this->_rawModelDataInput['digest'] = $digest;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property digest
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processDigest(array $modelData): void
            {
                

                $value = array_key_exists('digest', $modelData) ? $modelData['digest'] : $this->digest;

                

                $this->digest = $this->validateDigest($value, $modelData);
            }

            /**
             * Execute all validators for the property digest
             */
            protected function validateDigest($value, array $modelData)
            {
                
                    

if (!array_key_exists('digest', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'digest',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'digest',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && !preg_match(base64_decode('L15zaGEyNTY6W2EtZjAtOV17NjR9JC8='), $value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\PatternException($value ?? null, ...array (
  0 => 'digest',
  1 => '^sha256:[a-f0-9]{64}$',
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
    

    
        
            if (array_key_exists('uri', $modelData) &&
                $modelData['uri'] !== $this->uri
            ) {
                

                $rollbackValues['uri'] = $this->uri;
                $this->processUri($modelData);
            }
        
    
        
            if (array_key_exists('digest', $modelData) &&
                $modelData['digest'] !== $this->digest
            ) {
                

                $rollbackValues['digest'] = $this->digest;
                $this->processDigest($modelData);
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
