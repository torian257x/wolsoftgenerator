<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

    use UnitEnum;

    use AdCP\MediaBuy\Enums\MediaBuyStatus;

    use AdCP\MediaBuy\Enums\MediaBuyHealth;

    use AdCP\MediaBuy\Enums\MediaBuyValidAction;

    use AdCP\MediaBuy\Enums\AccountStatus;

    use AdCP\MediaBuy\Enums\BillingParty;

    use AdCP\MediaBuy\Enums\PaymentTerms;

    use AdCP\MediaBuy\Enums\AccountScope;

    use AdCP\MediaBuy\Enums\DigitalSourceType;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_ProvenanceHuman_Oversight;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_Declared_By13c986791ce55365e13a7cd5ff90f7dcRole;

    use AdCP\MediaBuy\Enums\EmbeddedProvenanceMethod;

    use AdCP\MediaBuy\Enums\WatermarkMediaType;

    use AdCP\MediaBuy\Enums\C2PAWatermarkAction;

    use AdCP\MediaBuy\Enums\DisclosurePersistence;

    use AdCP\MediaBuy\Enums\DisclosurePosition;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_ItemOfArrayVerificationab0379bc9ff851960f9f645c9916029eResult;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_ItemOfArrayContacts68bbcda7e3595439f5fe2c3176810b51Role;

    use AdCP\MediaBuy\Enums\CloudStorageProtocol;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68Format;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68Compression;

    use AdCP\MediaBuy\Enums\NotificationType;

    use AdCP\MediaBuy\Enums\AuthenticationScheme;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_ImpairmentResource_Type;

    use AdCP\MediaBuy\Enums\ImpairmentReasonCode;

    use AdCP\MediaBuy\Enums\ImpairmentOfflineState;

    use AdCP\MediaBuy\Enums\CanceledBy;

    use AdCP\MediaBuy\Enums\MediaBuyActionMode;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_WebhookActivityRecordStatus;

    use AdCP\MediaBuy\Enums\SnapshotUnavailableReason;

    use AdCP\MediaBuy\Enums\DevicePlatform;

    use AdCP\MediaBuy\Enums\DeviceType;

    use AdCP\MediaBuy\Enums\MetroAreaSystem;

    use AdCP\MediaBuy\Enums\PostalCodeSystem;

    use AdCP\MediaBuy\Enums\DayOfWeek;

    use AdCP\MediaBuy\Enums\ReachUnit;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_DurationUnit;

    use AdCP\MediaBuy\Enums\AgeVerificationMethod;

    use AdCP\MediaBuy\Enums\TransportMode;

    use AdCP\MediaBuy\Enums\TravelTimeUnit;

    use AdCP\MediaBuy\Enums\DistanceUnit;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_Geometryd672d0526b0b5b3b9be11e6e707345f0Type;

    use AdCP\MediaBuy\Enums\MatchType;

    use AdCP\MediaBuy\Enums\CreativeApprovalStatus;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_Snapshot2308d2a610637988e7da2c8d3b1823deDelivery_Status;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_ErrorRecovery;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_ErrorSource;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Required;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetMediaBuysResponse
 * @package AdCP\MediaBuy 
 *
 * Response payload for get_media_buys task. Returns media buy configuration, creative approval state, and optional delivery snapshots.
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('')]

class GetMediaBuysResponse implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/media_buys')]
        
            #[SchemaName('media_buys')]
        
            #[Required]
        
        /** @var GetMediaBuysResponse_ItemOfArrayMedia_Buysc7061807015269c9e91a3f7e8646b5dd[] Array of media buys with status, creative approval state, and optional delivery snapshots */
        protected $mediaBuys;
    
        
            #[JsonPointer('/properties/errors')]
        
            #[SchemaName('errors')]
        
        /** @var GetMediaBuysResponse_Error[]|null Task-specific errors (e.g., media buy not found) */
        protected $errors;
    
        
            #[JsonPointer('/properties/pagination')]
        
            #[SchemaName('pagination')]
        
        /** @var GetMediaBuysResponse_PaginationResponse|null Pagination metadata for the media_buys array. */
        protected $pagination;
    
        
            #[JsonPointer('/properties/sandbox')]
        
            #[SchemaName('sandbox')]
        
        /** @var bool|null When true, this response contains simulated data from sandbox mode. */
        protected $sandbox;
    
        
            #[JsonPointer('/properties/context')]
        
            #[SchemaName('context')]
        
        /** @var GetMediaBuysResponse_ExtensionObject|null Opaque correlation data that is echoed unchanged in responses. Used for internal tracking, UI session IDs, trace IDs, and other caller-specific identifiers that don't affect protocol behavior. Context data is never parsed by AdCP agents - it's simply preserved and returned. */
        protected $context;
    
        
            #[JsonPointer('/properties/ext')]
        
            #[SchemaName('ext')]
        
        /** @var GetMediaBuysResponse_ExtensionObject|null Extension object for platform-specific, vendor-namespaced parameters. Extensions are always optional and must be namespaced under a vendor/platform key (e.g., ext.gam, ext.roku). Used for custom capabilities, partner-specific configuration, and features being proposed for standardization. */
        protected $ext;
    
        
            #[JsonPointer('/allOf/0/properties/adcp_version')]
        
            #[SchemaName('adcp_version')]
        
        /** @var string|null Release-precision AdCP version (VERSION.RELEASE, e.g. "3.0", "3.1", "3.1-beta"). On a request: the buyer's release pin — the seller validates against its supported_versions and returns VERSION_UNSUPPORTED on cross-major mismatch, or downshifts to the highest supported release within the same major. On a response: the release the seller actually served — clients SHOULD validate the response against that release's schema, not against their pin. Patches are not negotiated; surface them as build_version on capabilities for operational visibility. When omitted, falls back to adcp_major_version (deprecated) or server default. Buyers SHOULD emit both adcp_version and adcp_major_version through 3.x to remain compatible with sellers that only read the legacy field. NORMALIZATION: SDKs that read full-semver values from bundle metadata (e.g. ComplianceIndex.published_version = "3.1.0-beta.1") MUST normalize to release-precision ("3.1-beta.1") before emitting on the wire — meta-field values are NOT valid wire values. */
        protected $adcpVersion;
    
        
            #[JsonPointer('/allOf/0/properties/adcp_major_version')]
        
            #[SchemaName('adcp_major_version')]
        
        /** @var int|null DEPRECATED in favor of adcp_version (release-precision string). Servers MUST continue to honor this field through 3.x. Removed in 4.0. Original semantics: the AdCP major version the buyer's payloads conform to. Sellers validate against their supported major_versions and return VERSION_UNSUPPORTED if unsupported. When omitted, the seller assumes its highest supported version. */
        protected $adcpMajorVersion;
    
        
            #[Internal]
        
        /** @var array Track the internal validation state of composed validations */
        private $_propertyValidationState = array (
  0 => 
  array (
  ),
);
    
        
            #[Internal]
        
        /** @var array Collect all additional properties provided to the schema */
        private $_additionalProperties = array (
);
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  1 => 'errors',
  2 => 'pagination',
  3 => 'sandbox',
  4 => 'context',
  5 => 'ext',
  6 => 'adcp_version',
  7 => 'adcp_major_version',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetMediaBuysResponse constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processMediaBuys($rawModelDataInput);
            
        
            
                $this->processErrors($rawModelDataInput);
            
        
            
                $this->processPagination($rawModelDataInput);
            
        
            
                $this->processSandbox($rawModelDataInput);
            
        
            
                $this->processContext($rawModelDataInput);
            
        
            
                $this->processExt($rawModelDataInput);
            
        
            
                $this->processAdcpVersion($rawModelDataInput);
            
        
            
                $this->processAdcpMajorVersion($rawModelDataInput);
            
        
            
        
            
        
            
        

        
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
   'media_buys',
   'errors',
   'pagination',
   'sandbox',
   'context',
   'ext',
)) as $propertyKey) {
        

        $this->_additionalProperties[$propertyKey] = $value[$propertyKey];
    }

    return false;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidAdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse',
)));
}

            

            
                $this->validateComposition_0($modelData);
            
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
                 * Get the value of media_buys.
                 *
                 * Array of media buys with status, creative approval state, and optional delivery snapshots
                 *
                 * @return GetMediaBuysResponse_ItemOfArrayMedia_Buysc7061807015269c9e91a3f7e8646b5dd[]
                 */
                public function getMediaBuys(): array
                {
                    

                    return $this->mediaBuys;
                }
            

            
                /**
                 * Set the value of media_buys.
                 *
                 * @param GetMediaBuysResponse_ItemOfArrayMedia_Buysc7061807015269c9e91a3f7e8646b5dd[] $mediaBuys Array of media buys with status, creative approval state, and optional delivery snapshots
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setMediaBuys(
                    array $mediaBuys
                ): static {
                    if ($this->mediaBuys === $mediaBuys) {
                        return $this;
                    }

                    $value = $modelData['media_buys'] = $mediaBuys;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validateMediaBuys($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->mediaBuys = $value;
                    $this->_rawModelDataInput['media_buys'] = $mediaBuys;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property mediaBuys
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processMediaBuys(array $modelData): void
            {
                

                $value = array_key_exists('media_buys', $modelData) ? $modelData['media_buys'] : $this->mediaBuys;

                

                $this->mediaBuys = $this->validateMediaBuys($value, $modelData);
            }

            /**
             * Execute all validators for the property mediaBuys
             */
            protected function validateMediaBuys($value, array $modelData)
            {
                
                    

if (!array_key_exists('media_buys', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'media_buys',
)));
}

                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'media_buys',
  1 => 'array',
)));
}

                
                    $this->validateMediaBuys_ArrayItem_36b859bb59d359728a7791352951189c($value, $modelData);
                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of errors.
                 *
                 * Task-specific errors (e.g., media buy not found)
                 *
                 * @return GetMediaBuysResponse_Error[]|null
                 */
                public function getErrors(): ?array
                {
                    

                    return $this->errors;
                }
            

            
                /**
                 * Set the value of errors.
                 *
                 * @param GetMediaBuysResponse_Error[] $errors Task-specific errors (e.g., media buy not found)
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setErrors(
                    array $errors
                ): static {
                    if ($this->errors === $errors) {
                        return $this;
                    }

                    $value = $modelData['errors'] = $errors;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validateErrors($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->errors = $value;
                    $this->_rawModelDataInput['errors'] = $errors;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property errors
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processErrors(array $modelData): void
            {
                
                    if (!array_key_exists('errors', $modelData) && $this->errors === null) {
                        return;
                    }
                

                $value = array_key_exists('errors', $modelData) ? $modelData['errors'] : $this->errors;

                

                $this->errors = $this->validateErrors($value, $modelData);
            }

            /**
             * Execute all validators for the property errors
             */
            protected function validateErrors($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'errors',
  1 => 'array',
)));
}

                
                    $this->validateErrors_ArrayItem_c8676cf35bdefd9a768016f0bd4b4ff4($value, $modelData);
                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of pagination.
                 *
                 * Pagination metadata for the media_buys array.
                 *
                 * @return GetMediaBuysResponse_PaginationResponse|null
                 */
                public function getPagination(): ?GetMediaBuysResponse_PaginationResponse
                {
                    

                    return $this->pagination;
                }
            

            
                /**
                 * Set the value of pagination.
                 *
                 * @param GetMediaBuysResponse_PaginationResponse $pagination Pagination metadata for the media_buys array.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setPagination(
                    GetMediaBuysResponse_PaginationResponse $pagination
                ): static {
                    if ($this->pagination === $pagination) {
                        return $this;
                    }

                    $value = $modelData['pagination'] = $pagination;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validatePagination($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->pagination = $value;
                    $this->_rawModelDataInput['pagination'] = $pagination;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property pagination
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processPagination(array $modelData): void
            {
                
                    if (!array_key_exists('pagination', $modelData) && $this->pagination === null) {
                        return;
                    }
                

                $value = array_key_exists('pagination', $modelData) ? $modelData['pagination'] : $this->pagination;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_PaginationResponse($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'pagination',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->pagination = $this->validatePagination($value, $modelData);
            }

            /**
             * Execute all validators for the property pagination
             */
            protected function validatePagination($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'pagination',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_PaginationResponse)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'pagination',
  1 => 'GetMediaBuysResponse_PaginationResponse',
)));
}

                

                return $value;
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
                    

                    return $this->sandbox;
                }
            

            
                /**
                 * Set the value of sandbox.
                 *
                 * @param bool $sandbox When true, this response contains simulated data from sandbox mode.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setSandbox(
                    bool $sandbox
                ): static {
                    if ($this->sandbox === $sandbox) {
                        return $this;
                    }

                    $value = $modelData['sandbox'] = $sandbox;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validateSandbox($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->sandbox = $value;
                    $this->_rawModelDataInput['sandbox'] = $sandbox;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property sandbox
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processSandbox(array $modelData): void
            {
                
                    if (!array_key_exists('sandbox', $modelData) && $this->sandbox === null) {
                        return;
                    }
                

                $value = array_key_exists('sandbox', $modelData) ? $modelData['sandbox'] : $this->sandbox;

                

                $this->sandbox = $this->validateSandbox($value, $modelData);
            }

            /**
             * Execute all validators for the property sandbox
             */
            protected function validateSandbox($value, array $modelData)
            {
                
                    

if ((!is_bool($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'sandbox',
  1 => 'bool',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of context.
                 *
                 * Opaque correlation data that is echoed unchanged in responses. Used for internal tracking, UI session IDs, trace IDs, and other caller-specific identifiers that don't affect protocol behavior. Context data is never parsed by AdCP agents - it's simply preserved and returned.
                 *
                 * @return GetMediaBuysResponse_ExtensionObject|null
                 */
                public function getContext(): ?GetMediaBuysResponse_ExtensionObject
                {
                    

                    return $this->context;
                }
            

            
                /**
                 * Set the value of context.
                 *
                 * @param GetMediaBuysResponse_ExtensionObject $context Opaque correlation data that is echoed unchanged in responses. Used for internal tracking, UI session IDs, trace IDs, and other caller-specific identifiers that don't affect protocol behavior. Context data is never parsed by AdCP agents - it's simply preserved and returned.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setContext(
                    GetMediaBuysResponse_ExtensionObject $context
                ): static {
                    if ($this->context === $context) {
                        return $this;
                    }

                    $value = $modelData['context'] = $context;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validateContext($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->context = $value;
                    $this->_rawModelDataInput['context'] = $context;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property context
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processContext(array $modelData): void
            {
                
                    if (!array_key_exists('context', $modelData) && $this->context === null) {
                        return;
                    }
                

                $value = array_key_exists('context', $modelData) ? $modelData['context'] : $this->context;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_ExtensionObject($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'context',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->context = $this->validateContext($value, $modelData);
            }

            /**
             * Execute all validators for the property context
             */
            protected function validateContext($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'context',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_ExtensionObject)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'context',
  1 => 'GetMediaBuysResponse_ExtensionObject',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of ext.
                 *
                 * Extension object for platform-specific, vendor-namespaced parameters. Extensions are always optional and must be namespaced under a vendor/platform key (e.g., ext.gam, ext.roku). Used for custom capabilities, partner-specific configuration, and features being proposed for standardization.
                 *
                 * @return GetMediaBuysResponse_ExtensionObject|null
                 */
                public function getExt(): ?GetMediaBuysResponse_ExtensionObject
                {
                    

                    return $this->ext;
                }
            

            
                /**
                 * Set the value of ext.
                 *
                 * @param GetMediaBuysResponse_ExtensionObject $ext Extension object for platform-specific, vendor-namespaced parameters. Extensions are always optional and must be namespaced under a vendor/platform key (e.g., ext.gam, ext.roku). Used for custom capabilities, partner-specific configuration, and features being proposed for standardization.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setExt(
                    GetMediaBuysResponse_ExtensionObject $ext
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
        return is_array($value) ? new GetMediaBuysResponse_ExtensionObject($value) : $value;
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

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_ExtensionObject)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'ext',
  1 => 'GetMediaBuysResponse_ExtensionObject',
)));
}

                

                return $value;
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
                 * 
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
                    

                    $this->validateComposition_0($modelData);



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
             * 
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
                 * 
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
                    

                    $this->validateComposition_0($modelData);



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
             * 
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
                

                return $value;
            }
        
    
        
    
        
    
        
    

    /**
 * Validate updated properties which are part of a composition validation
 *
 * @param array $modifiedModelData An array containing all updated data as key-value pairs
 *
 * 
 */
private function validateComposition_0(array &$modifiedModelData): void
{
    $validatorIndex = 0;
    $value = $modelData = array_merge($this->_rawModelDataInput, $modifiedModelData);

    
            $succeededCompositionElements = 0;
            $compositionErrorCollection = [];
        
    if (
(function (&$value) use (
    &$modelData,
    &$modifiedModelData,
    &$compositionErrorCollection,
    &$succeededCompositionElements,
    &$validatorIndex
) {
    $succeededCompositionElements = 1;
    $validatorComponentIndex = 0;
    $originalModelData = $value;
    $proposedValue = null;
    $modifiedValues = [];

    
        $originalPropertyValidationState = $this->_propertyValidationState ?? [];
    

    
        $originalErrorRegistry = $this->_errorRegistry;
    

    
        try {
            
                // check if the state of the validator is already known.
                // If none of the properties affected by the validator are changed the validator must not be re-evaluated
                if (isset($validatorIndex) &&
                    isset($this->_propertyValidationState[$validatorIndex][$validatorComponentIndex]) &&
                    !array_intersect(
                        array_keys($modifiedModelData),
                        [
                            
                                'adcp_version',
                            
                                'adcp_major_version',
                            
                        ]
                    )
                ) {
                    
                        $compositionErrorCollection[] = $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex];
                    

                    if (
                            $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex]->getErrors()
                        
                    ) {
                        throw new \Exception();
                    }
                } else {
            

                
                    // collect errors for each composition element
                    $this->_errorRegistry = new ErrorRegistryException();
                

                

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_AdCPVersionEnvelope($value) : $value;
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
  0 => 'GetMediaBuysResponse',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_AdCPVersionEnvelope)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse',
  1 => 'GetMediaBuysResponse_AdCPVersionEnvelope',
)));
}

                

                
                    $compositionErrorCollection[] = $this->_errorRegistry;

                    
                        if (isset($validatorIndex)) {
                            $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex] = $this->_errorRegistry;
                        }
                    

                    // an error inside the composed validation occurred. Throw an exception to count the validity of the
                    // composition item
                    if ($this->_errorRegistry->getErrors()) {
                        throw new \Exception();
                    }
                

                
                    $proposedValue = $proposedValue ?? $value;
                

                if (is_object($value) && is_array($originalModelData)) {
                    $modifiedValues = array_merge($modifiedValues, $this->_getModifiedValues_888be($originalModelData, $value));
                }
            
                
            }
            
        } catch (\Exception $e) {
            

            $succeededCompositionElements--;
        }

        $value = $originalModelData;
        $validatorComponentIndex++;
    

    
        $value = $proposedValue;
    

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    $result = !($succeededCompositionElements === 1);

    
        if ($result) {
            $this->_propertyValidationState = $originalPropertyValidationState;
        }
    

    return $result;
})($value)
) {
        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\ComposedValue\AllOfException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse',
  1 => $succeededCompositionElements,
  2 => $compositionErrorCollection,
)));
    }

    foreach (array_keys($modifiedModelData) as $property) {
        $modifiedModelData[$property] = $modelData[$property];
    }
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
    

    
        
            if (array_key_exists('media_buys', $modelData) &&
                $modelData['media_buys'] !== $this->mediaBuys
            ) {
                



                $rollbackValues['mediaBuys'] = $this->mediaBuys;
                $this->processMediaBuys($modelData);
            }
        
    
        
            if (array_key_exists('errors', $modelData) &&
                $modelData['errors'] !== $this->errors
            ) {
                



                $rollbackValues['errors'] = $this->errors;
                $this->processErrors($modelData);
            }
        
    
        
            if (array_key_exists('pagination', $modelData) &&
                $modelData['pagination'] !== $this->pagination
            ) {
                



                $rollbackValues['pagination'] = $this->pagination;
                $this->processPagination($modelData);
            }
        
    
        
            if (array_key_exists('sandbox', $modelData) &&
                $modelData['sandbox'] !== $this->sandbox
            ) {
                



                $rollbackValues['sandbox'] = $this->sandbox;
                $this->processSandbox($modelData);
            }
        
    
        
            if (array_key_exists('context', $modelData) &&
                $modelData['context'] !== $this->context
            ) {
                



                $rollbackValues['context'] = $this->context;
                $this->processContext($modelData);
            }
        
    
        
            if (array_key_exists('ext', $modelData) &&
                $modelData['ext'] !== $this->ext
            ) {
                



                $rollbackValues['ext'] = $this->ext;
                $this->processExt($modelData);
            }
        
    
        
            if (array_key_exists('adcp_version', $modelData) &&
                $modelData['adcp_version'] !== $this->adcpVersion
            ) {
                $this->validateComposition_0($modelData);



                $rollbackValues['adcpVersion'] = $this->adcpVersion;
                $this->processAdcpVersion($modelData);
            }
        
    
        
            if (array_key_exists('adcp_major_version', $modelData) &&
                $modelData['adcp_major_version'] !== $this->adcpMajorVersion
            ) {
                $this->validateComposition_0($modelData);



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


private function validateMediaBuys_ArrayItem_36b859bb59d359728a7791352951189c(&$value, $modelData): void {
                    $invalidItems_b55bdd830f50dabbb55977cc628b50e9 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_b55bdd830f50dabbb55977cc628b50e9, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_ItemOfArrayMedia_Buysc7061807015269c9e91a3f7e8646b5dd($value) : $value;
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
  0 => 'item of array media_buys',
  1 => 'object',
)));
}

            
                

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_ItemOfArrayMedia_Buysc7061807015269c9e91a3f7e8646b5dd)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'item of array media_buys',
  1 => 'GetMediaBuysResponse_ItemOfArrayMedia_Buysc7061807015269c9e91a3f7e8646b5dd',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_b55bdd830f50dabbb55977cc628b50e9[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_b55bdd830f50dabbb55977cc628b50e9[$index])
                ? $invalidItems_b55bdd830f50dabbb55977cc628b50e9[$index][] = $e
                : $invalidItems_b55bdd830f50dabbb55977cc628b50e9[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_b55bdd830f50dabbb55977cc628b50e9);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'media_buys',
  1 => $invalidItems_b55bdd830f50dabbb55977cc628b50e9,
)));
                    }
                }

private function validateErrors_ArrayItem_c8676cf35bdefd9a768016f0bd4b4ff4(&$value, $modelData): void {
                    $invalidItems_86cd0109c677b7667d56dc8de3582b6b = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_86cd0109c677b7667d56dc8de3582b6b, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_Error($value) : $value;
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
  0 => 'item of array errors',
  1 => 'object',
)));
}

            
                

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_Error)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'item of array errors',
  1 => 'GetMediaBuysResponse_Error',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_86cd0109c677b7667d56dc8de3582b6b[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_86cd0109c677b7667d56dc8de3582b6b[$index])
                ? $invalidItems_86cd0109c677b7667d56dc8de3582b6b[$index][] = $e
                : $invalidItems_86cd0109c677b7667d56dc8de3582b6b[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_86cd0109c677b7667d56dc8de3582b6b);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'errors',
  1 => $invalidItems_86cd0109c677b7667d56dc8de3582b6b,
)));
                    }
                }


                        private function _getModifiedValues_888be(array $originalModelData, object $nestedCompositionObject): array {
                            $modifiedValues = [];
                            $defaultValueMap = array (
  0 => 'skipNotProvidedPropertiesMap',
);
    
                            foreach (array (
  'adcp_version' => 'getAdcpVersion',
  'adcp_major_version' => 'getAdcpMajorVersion',
  'skipNotProvidedPropertiesMap' => 'get_skipNotProvidedPropertiesMap',
) as $key => $accessor) {
                                if ((isset($originalModelData[$key]) || in_array($key, $defaultValueMap))
                                    && method_exists($nestedCompositionObject, $accessor)
                                    && ($modifiedValue = $nestedCompositionObject->$accessor())
                                        !== ($originalModelData[$key] ?? !$modifiedValue)
                                ) {
                                    $modifiedValues[$key] = $modifiedValue;
                                }
                            }
    
                            return $modifiedValues;
                        }


}

// @codeCoverageIgnoreEnd
