<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Builder class for GetMediaBuysResponse
 */
class GetMediaBuysResponseBuilder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuysResponse with fully validated properties
     */
    public function validate(): GetMediaBuysResponse
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysResponse($this->_rawModelDataInput);
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
             * Get the value of media_buys.
             *
             * Array of media buys with status, creative approval state, and optional delivery snapshots
             *
             * @return GetMediaBuysResponse_ItemOfArrayMedia_Buysc7061807015269c9e91a3f7e8646b5dd[]|GetMediaBuysResponse_ItemOfArrayMedia_Buysc7061807015269c9e91a3f7e8646b5ddBuilder[]|array|null
             */
            public function getMediaBuys(): mixed
            {
                return $this->_rawModelDataInput['media_buys'] ?? null;
            }

            /**
             * Set the value of media_buys.
             *
             * @param GetMediaBuysResponse_ItemOfArrayMedia_Buysc7061807015269c9e91a3f7e8646b5dd[]|GetMediaBuysResponse_ItemOfArrayMedia_Buysc7061807015269c9e91a3f7e8646b5ddBuilder[]|array $mediaBuys Array of media buys with status, creative approval state, and optional delivery snapshots
             *
             * {@link GetMediaBuysResponse::processMediaBuys}
             * 
             *
             * @return static
             */
            public function setMediaBuys(
                mixed $mediaBuys
            ): static {
                if (array_key_exists('media_buys', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['media_buys'] === $mediaBuys
                ) {
                    return $this;
                }

                $value = $modelData['media_buys'] = $mediaBuys;

                

                

                $this->_rawModelDataInput['media_buys'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of errors.
             *
             * Task-specific errors (e.g., media buy not found)
             *
             * @return GetMediaBuysResponse_Error[]|GetMediaBuysResponse_ErrorBuilder[]|array|null
             */
            public function getErrors(): mixed
            {
                return $this->_rawModelDataInput['errors'] ?? null;
            }

            /**
             * Set the value of errors.
             *
             * @param GetMediaBuysResponse_Error[]|GetMediaBuysResponse_ErrorBuilder[]|array $errors Task-specific errors (e.g., media buy not found)
             *
             * {@link GetMediaBuysResponse::processErrors}
             * 
             *
             * @return static
             */
            public function setErrors(
                mixed $errors
            ): static {
                if (array_key_exists('errors', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['errors'] === $errors
                ) {
                    return $this;
                }

                $value = $modelData['errors'] = $errors;

                

                

                $this->_rawModelDataInput['errors'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of pagination.
             *
             * Pagination metadata for the media_buys array.
             *
             * @return GetMediaBuysResponse_PaginationResponse|GetMediaBuysResponse_PaginationResponseBuilder|array|null
             */
            public function getPagination(): mixed
            {
                return $this->_rawModelDataInput['pagination'] ?? null;
            }

            /**
             * Set the value of pagination.
             *
             * @param GetMediaBuysResponse_PaginationResponse|GetMediaBuysResponse_PaginationResponseBuilder|array $pagination Pagination metadata for the media_buys array.
             *
             * {@link GetMediaBuysResponse::processPagination}
             * 
             *
             * @return static
             */
            public function setPagination(
                mixed $pagination
            ): static {
                if (array_key_exists('pagination', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['pagination'] === $pagination
                ) {
                    return $this;
                }

                $value = $modelData['pagination'] = $pagination;

                

                

                $this->_rawModelDataInput['pagination'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of sandbox.
             *
             * When true, this response contains simulated data from sandbox mode.
             *
             * @return bool|null
             */
            public function getSandbox(): ?bool
            {
                return $this->_rawModelDataInput['sandbox'] ?? null;
            }

            /**
             * Set the value of sandbox.
             *
             * @param bool $sandbox When true, this response contains simulated data from sandbox mode.
             *
             * {@link GetMediaBuysResponse::processSandbox}
             * 
             *
             * @return static
             */
            public function setSandbox(
                bool $sandbox
            ): static {
                if (array_key_exists('sandbox', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['sandbox'] === $sandbox
                ) {
                    return $this;
                }

                $value = $modelData['sandbox'] = $sandbox;

                

                

                $this->_rawModelDataInput['sandbox'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of context.
             *
             * Opaque correlation data that is echoed unchanged in responses. Used for internal tracking, UI session IDs, trace IDs, and other caller-specific identifiers that don't affect protocol behavior. Context data is never parsed by AdCP agents - it's simply preserved and returned.
             *
             * @return GetMediaBuysResponse_ExtensionObject|GetMediaBuysResponse_ExtensionObjectBuilder|array|null
             */
            public function getContext(): mixed
            {
                return $this->_rawModelDataInput['context'] ?? null;
            }

            /**
             * Set the value of context.
             *
             * @param GetMediaBuysResponse_ExtensionObject|GetMediaBuysResponse_ExtensionObjectBuilder|array $context Opaque correlation data that is echoed unchanged in responses. Used for internal tracking, UI session IDs, trace IDs, and other caller-specific identifiers that don't affect protocol behavior. Context data is never parsed by AdCP agents - it's simply preserved and returned.
             *
             * {@link GetMediaBuysResponse::processContext}
             * 
             *
             * @return static
             */
            public function setContext(
                mixed $context
            ): static {
                if (array_key_exists('context', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['context'] === $context
                ) {
                    return $this;
                }

                $value = $modelData['context'] = $context;

                

                

                $this->_rawModelDataInput['context'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of ext.
             *
             * Extension object for platform-specific, vendor-namespaced parameters. Extensions are always optional and must be namespaced under a vendor/platform key (e.g., ext.gam, ext.roku). Used for custom capabilities, partner-specific configuration, and features being proposed for standardization.
             *
             * @return GetMediaBuysResponse_ExtensionObject|GetMediaBuysResponse_ExtensionObjectBuilder|array|null
             */
            public function getExt(): mixed
            {
                return $this->_rawModelDataInput['ext'] ?? null;
            }

            /**
             * Set the value of ext.
             *
             * @param GetMediaBuysResponse_ExtensionObject|GetMediaBuysResponse_ExtensionObjectBuilder|array $ext Extension object for platform-specific, vendor-namespaced parameters. Extensions are always optional and must be namespaced under a vendor/platform key (e.g., ext.gam, ext.roku). Used for custom capabilities, partner-specific configuration, and features being proposed for standardization.
             *
             * {@link GetMediaBuysResponse::processExt}
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
             * {@link GetMediaBuysResponse::processAdcpVersion}
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
             * {@link GetMediaBuysResponse::processAdcpMajorVersion}
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
