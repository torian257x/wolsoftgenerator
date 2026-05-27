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

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetMediaBuyDeliveryRequest_AdCPVersionEnvelope
 * @package AdCP\MediaBuy 
 *
 * Release-precision AdCP protocol version negotiation fields. Composed via `allOf` into every AdCP request and response schema so the version semantics live in exactly one place. Distinct from `core/protocol-envelope.json`, which wraps responses at the transport layer (context_id / task_id / status / payload). This envelope is part of the payload itself.
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/allOf/0')]

class GetMediaBuyDeliveryRequest_AdCPVersionEnvelope implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/allOf/0/properties/adcp_version')]
        
            #[SchemaName('adcp_version')]
        
        /** @var string|null Release-precision AdCP version (VERSION.RELEASE, e.g. "3.0", "3.1", "3.1-beta"). On a request: the buyer's release pin — the seller validates against its supported_versions and returns VERSION_UNSUPPORTED on cross-major mismatch, or downshifts to the highest supported release within the same major. On a response: the release the seller actually served — clients SHOULD validate the response against that release's schema, not against their pin. Patches are not negotiated; surface them as build_version on capabilities for operational visibility. When omitted, falls back to adcp_major_version (deprecated) or server default. Buyers SHOULD emit both adcp_version and adcp_major_version through 3.x to remain compatible with sellers that only read the legacy field. NORMALIZATION: SDKs that read full-semver values from bundle metadata (e.g. ComplianceIndex.published_version = "3.1.0-beta.1") MUST normalize to release-precision ("3.1-beta.1") before emitting on the wire — meta-field values are NOT valid wire values. */
        protected $adcpVersion;
    
        
            #[JsonPointer('/allOf/0/properties/adcp_major_version')]
        
            #[SchemaName('adcp_major_version')]
        
        /** @var int|null DEPRECATED in favor of adcp_version (release-precision string). Servers MUST continue to honor this field through 3.x. Removed in 4.0. Original semantics: the AdCP major version the buyer's payloads conform to. Sellers validate against their supported major_versions and return VERSION_UNSUPPORTED if unsupported. When omitted, the seller assumes its highest supported version. */
        protected $adcpMajorVersion;
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  0 => 'adcp_version',
  1 => 'adcp_major_version',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetMediaBuyDeliveryRequest_AdCPVersionEnvelope constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        

        
            
                $this->processAdcpVersion($rawModelDataInput);
            
        
            
                $this->processAdcpMajorVersion($rawModelDataInput);
            
        
            
        

        
            if (count($this->_errorRegistry->getErrors())) {
                throw $this->_errorRegistry;
            }
        

        $this->_rawModelDataInput = $rawModelDataInput;

        
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
                 * Get the value of adcp_version.
                 *
                 * Release-precision AdCP version (VERSION.RELEASE, e.g. "3.0", "3.1", "3.1-beta"). On a request: the buyer's release pin — the seller validates against its supported_versions and returns VERSION_UNSUPPORTED on cross-major mismatch, or downshifts to the highest supported release within the same major. On a response: the release the seller actually served — clients SHOULD validate the response against that release's schema, not against their pin. Patches are not negotiated; surface them as build_version on capabilities for operational visibility. When omitted, falls back to adcp_major_version (deprecated) or server default. Buyers SHOULD emit both adcp_version and adcp_major_version through 3.x to remain compatible with sellers that only read the legacy field. NORMALIZATION: SDKs that read full-semver values from bundle metadata (e.g. ComplianceIndex.published_version = "3.1.0-beta.1") MUST normalize to release-precision ("3.1-beta.1") before emitting on the wire — meta-field values are NOT valid wire values.
                 * @example 3.0
                 * @example 3.1
                 * @example 3.1-beta
                 * @example 3.1-rc.1
                 *
                 * @return string|null
                 */
                public function getAdcpVersion(): ?string
                {
                    

                    return $this->adcpVersion;
                }
            

            
                /**
                 * Set the value of adcp_version.
                 *
                 * @param string $adcpVersion Release-precision AdCP version (VERSION.RELEASE, e.g. "3.0", "3.1", "3.1-beta"). On a request: the buyer's release pin — the seller validates against its supported_versions and returns VERSION_UNSUPPORTED on cross-major mismatch, or downshifts to the highest supported release within the same major. On a response: the release the seller actually served — clients SHOULD validate the response against that release's schema, not against their pin. Patches are not negotiated; surface them as build_version on capabilities for operational visibility. When omitted, falls back to adcp_major_version (deprecated) or server default. Buyers SHOULD emit both adcp_version and adcp_major_version through 3.x to remain compatible with sellers that only read the legacy field. NORMALIZATION: SDKs that read full-semver values from bundle metadata (e.g. ComplianceIndex.published_version = "3.1.0-beta.1") MUST normalize to release-precision ("3.1-beta.1") before emitting on the wire — meta-field values are NOT valid wire values.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setAdcpVersion(
                    string $adcpVersion
                ): static {
                    if ($this->adcpVersion === $adcpVersion) {
                        return $this;
                    }

                    $value = $modelData['adcp_version'] = $adcpVersion;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateAdcpVersion($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->adcpVersion = $value;
                    $this->_rawModelDataInput['adcp_version'] = $adcpVersion;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property adcpVersion
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processAdcpVersion(array $modelData): void
            {
                
                    if (!array_key_exists('adcp_version', $modelData) && $this->adcpVersion === null) {
                        return;
                    }
                

                $value = array_key_exists('adcp_version', $modelData) ? $modelData['adcp_version'] : $this->adcpVersion;

                

                $this->adcpVersion = $this->validateAdcpVersion($value, $modelData);
            }

            /**
             * Execute all validators for the property adcpVersion
             */
            protected function validateAdcpVersion($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'adcp_version',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && !preg_match(base64_decode('L15cZCtcLlxkKygtW2EtekEtWjAtOS4tXSspPyQv'), $value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\PatternException($value ?? null, ...array (
  0 => 'adcp_version',
  1 => '^\\d+\\.\\d+(-[a-zA-Z0-9.-]+)?$',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of adcp_major_version.
                 *
                 * DEPRECATED in favor of adcp_version (release-precision string). Servers MUST continue to honor this field through 3.x. Removed in 4.0. Original semantics: the AdCP major version the buyer's payloads conform to. Sellers validate against their supported major_versions and return VERSION_UNSUPPORTED if unsupported. When omitted, the seller assumes its highest supported version.
                 *
                 * @return int|null
                 */
                public function getAdcpMajorVersion(): ?int
                {
                    

                    return $this->adcpMajorVersion;
                }
            

            
                /**
                 * Set the value of adcp_major_version.
                 *
                 * @param int $adcpMajorVersion DEPRECATED in favor of adcp_version (release-precision string). Servers MUST continue to honor this field through 3.x. Removed in 4.0. Original semantics: the AdCP major version the buyer's payloads conform to. Sellers validate against their supported major_versions and return VERSION_UNSUPPORTED if unsupported. When omitted, the seller assumes its highest supported version.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setAdcpMajorVersion(
                    int $adcpMajorVersion
                ): static {
                    if ($this->adcpMajorVersion === $adcpMajorVersion) {
                        return $this;
                    }

                    $value = $modelData['adcp_major_version'] = $adcpMajorVersion;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateAdcpMajorVersion($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->adcpMajorVersion = $value;
                    $this->_rawModelDataInput['adcp_major_version'] = $adcpMajorVersion;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property adcpMajorVersion
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processAdcpMajorVersion(array $modelData): void
            {
                
                    if (!array_key_exists('adcp_major_version', $modelData) && $this->adcpMajorVersion === null) {
                        return;
                    }
                

                $value = array_key_exists('adcp_major_version', $modelData) ? $modelData['adcp_major_version'] : $this->adcpMajorVersion;

                

                $this->adcpMajorVersion = $this->validateAdcpMajorVersion($value, $modelData);
            }

            /**
             * Execute all validators for the property adcpMajorVersion
             */
            protected function validateAdcpMajorVersion($value, array $modelData)
            {
                
                    

if ((!is_int($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'adcp_major_version',
  1 => 'int',
)));
}

                
                    

if (is_int($value) && $value < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'adcp_major_version',
  1 => 1,
)));
}

                
                    

if (is_int($value) && $value > 99) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MaximumException($value ?? null, ...array (
  0 => 'adcp_major_version',
  1 => 99,
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

    

    
        
            if (array_key_exists('adcp_version', $modelData) &&
                $modelData['adcp_version'] !== $this->adcpVersion
            ) {
                

                $rollbackValues['adcpVersion'] = $this->adcpVersion;
                $this->processAdcpVersion($modelData);
            }
        
    
        
            if (array_key_exists('adcp_major_version', $modelData) &&
                $modelData['adcp_major_version'] !== $this->adcpMajorVersion
            ) {
                

                $rollbackValues['adcpMajorVersion'] = $this->adcpMajorVersion;
                $this->processAdcpMajorVersion($modelData);
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





}

// @codeCoverageIgnoreEnd
