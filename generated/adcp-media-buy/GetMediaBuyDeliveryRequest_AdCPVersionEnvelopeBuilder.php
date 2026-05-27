<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Builder class for GetMediaBuyDeliveryRequest_AdCPVersionEnvelope
 */
class GetMediaBuyDeliveryRequest_AdCPVersionEnvelopeBuilder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuyDeliveryRequest_AdCPVersionEnvelope with fully validated properties
     */
    public function validate(): GetMediaBuyDeliveryRequest_AdCPVersionEnvelope
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuyDeliveryRequest_AdCPVersionEnvelope($this->_rawModelDataInput);
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
             * Get the value of adcp_version.
             *
             * Release-precision AdCP version (VERSION.RELEASE, e.g. "3.0", "3.1", "3.1-beta"). On a request: the buyer's release pin — the seller validates against its supported_versions and returns VERSION_UNSUPPORTED on cross-major mismatch, or downshifts to the highest supported release within the same major. On a response: the release the seller actually served — clients SHOULD validate the response against that release's schema, not against their pin. Patches are not negotiated; surface them as build_version on capabilities for operational visibility. When omitted, falls back to adcp_major_version (deprecated) or server default. Buyers SHOULD emit both adcp_version and adcp_major_version through 3.x to remain compatible with sellers that only read the legacy field. NORMALIZATION: SDKs that read full-semver values from bundle metadata (e.g. ComplianceIndex.published_version = "3.1.0-beta.1") MUST normalize to release-precision ("3.1-beta.1") before emitting on the wire — meta-field values are NOT valid wire values.
             *
             * @return string|null
             */
            public function getAdcpVersion(): ?string
            {
                return $this->_rawModelDataInput['adcp_version'] ?? null;
            }

            /**
             * Set the value of adcp_version.
             *
             * @param string $adcpVersion Release-precision AdCP version (VERSION.RELEASE, e.g. "3.0", "3.1", "3.1-beta"). On a request: the buyer's release pin — the seller validates against its supported_versions and returns VERSION_UNSUPPORTED on cross-major mismatch, or downshifts to the highest supported release within the same major. On a response: the release the seller actually served — clients SHOULD validate the response against that release's schema, not against their pin. Patches are not negotiated; surface them as build_version on capabilities for operational visibility. When omitted, falls back to adcp_major_version (deprecated) or server default. Buyers SHOULD emit both adcp_version and adcp_major_version through 3.x to remain compatible with sellers that only read the legacy field. NORMALIZATION: SDKs that read full-semver values from bundle metadata (e.g. ComplianceIndex.published_version = "3.1.0-beta.1") MUST normalize to release-precision ("3.1-beta.1") before emitting on the wire — meta-field values are NOT valid wire values.
             *
             * {@link GetMediaBuyDeliveryRequest_AdCPVersionEnvelope::processAdcpVersion}
             * 
             *
             * @return static
             */
            public function setAdcpVersion(
                string $adcpVersion
            ): static {
                if (array_key_exists('adcp_version', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['adcp_version'] === $adcpVersion
                ) {
                    return $this;
                }

                $value = $modelData['adcp_version'] = $adcpVersion;

                

                

                $this->_rawModelDataInput['adcp_version'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['adcp_major_version'] ?? null;
            }

            /**
             * Set the value of adcp_major_version.
             *
             * @param int $adcpMajorVersion DEPRECATED in favor of adcp_version (release-precision string). Servers MUST continue to honor this field through 3.x. Removed in 4.0. Original semantics: the AdCP major version the buyer's payloads conform to. Sellers validate against their supported major_versions and return VERSION_UNSUPPORTED if unsupported. When omitted, the seller assumes its highest supported version.
             *
             * {@link GetMediaBuyDeliveryRequest_AdCPVersionEnvelope::processAdcpMajorVersion}
             * 
             *
             * @return static
             */
            public function setAdcpMajorVersion(
                int $adcpMajorVersion
            ): static {
                if (array_key_exists('adcp_major_version', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['adcp_major_version'] === $adcpMajorVersion
                ) {
                    return $this;
                }

                $value = $modelData['adcp_major_version'] = $adcpMajorVersion;

                

                

                $this->_rawModelDataInput['adcp_major_version'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
