<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use UnitEnum;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_ImpairmentResource_Type;

    use AdCP\MediaBuy\Enums\ImpairmentReasonCode;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

    use AdCP\MediaBuy\Enums\ImpairmentOfflineState;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Required;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetMediaBuysResponse_Impairment
 * @package AdCP\MediaBuy 
 *
 * A single upstream dependency state change that affects delivery for one or more packages within a media buy. An impairment is open until the underlying resource returns to a serviceable state. Materiality: an impairment MUST list at least one package whose ability to serve is degraded; cosmetic-only effects (e.g., one rejected creative when peers remain serviceable in the same package) MUST NOT be reported as impairments. Sellers MAY report conservatively when uncertain (list a package when the materiality join is expensive to compute); sellers MUST NOT report when serving is provably unaffected. Materiality is required (MUST) for resource types where the resource→buy join is cheap and 1:N — audience, event_source, property; SHOULD-strength for creative and catalog_item, where the resource is shared across a larger pool and the join cost is higher.
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/media_buys/items/properties/impairments/items')]

class GetMediaBuysResponse_Impairment implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/media_buys/items/properties/impairments/items/properties/impairment_id')]
        
            #[SchemaName('impairment_id')]
        
            #[Required]
        
        /** @var string Stable identifier for this impairment, used as the notification_id when the impairment fires via webhook. Stable across re-emissions of the same open impairment (e.g., the seller re-fires after the buyer's receiver was down) and across the closing fire that signals resolution. A new impairment for the same resource_id after closure receives a new impairment_id. Distinct from the per-fire idempotency_key issued at the webhook transport layer — see snapshot-and-log Rule 1. Receivers correlate webhook fires to current impairments[] state by impairment_id; receivers suppress duplicate transport-layer retries by idempotency_key. Seeing the same impairment_id with different idempotency_keys is a re-emission signal, not a retry — the buyer should treat it as a notice that something may have been missed. */
        protected $impairmentId;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/impairments/items/properties/resource_type')]
        
            #[SchemaName('resource_type')]
        
            #[Required]
        
        /** @var GetMediaBuysResponse_ImpairmentResource_Type The kind of upstream dependency that transitioned to an offline state. Values are drawn from the x-entity vocabulary (see core/x-entity-types.json) and identify a buyer-referenced object with its own lifecycle that the seller can take offline. This is the subset of x-entity types for which a media buy's serving depends on the resource — not a new typology, just the impairment-relevant slice. */
        protected $resourceType;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/impairments/items/properties/resource_id')]
        
            #[SchemaName('resource_id')]
        
            #[Required]
        
        /** @var string Seller's identifier for the specific resource that transitioned. References the same id space as the corresponding sync_/list_ task responses (e.g., audience_id, creative_id). */
        protected $resourceId;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/impairments/items/properties/package_ids')]
        
            #[SchemaName('package_ids')]
        
            #[Required]
        
        /** @var string[] Packages within this media buy whose delivery is degraded by the impairment. MUST list at least one package — cosmetic effects that do not degrade any package's ability to serve MUST NOT be reported as impairments. */
        protected $packageIds;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/impairments/items/properties/transition')]
        
            #[SchemaName('transition')]
        
            #[Required]
        
        /** @var GetMediaBuysResponse_Transition3f8df70f425bf231076f2bb72c477f1b The resource-level status transition that triggered this impairment. */
        protected $transition;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/impairments/items/properties/reason_code')]
        
            #[SchemaName('reason_code')]
        
            #[Required]
        
        /** @var ImpairmentReasonCode Categorical reason for the offline transition. Drives buyer-side remediation logic. */
        protected $reasonCode;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/impairments/items/properties/reason')]
        
            #[SchemaName('reason')]
        
        /** @var string|null Human-readable explanation. Supplements reason_code with seller-specific detail. */
        protected $reason;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/impairments/items/properties/observed_at')]
        
            #[SchemaName('observed_at')]
        
            #[Required]
        
        /** @var string ISO 8601 timestamp when the seller observed the resource transition to its offline state. */
        protected $observedAt;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/impairments/items/properties/remediation')]
        
            #[SchemaName('remediation')]
        
        /** @var string|null Action the buyer can take to clear the impairment, if any. Free text. Absent when no buyer-side remediation is possible (e.g., seller-initiated withdrawal pending re-publication). */
        protected $remediation;
    
        
            #[Internal]
        
        /** @var array Collect all additional properties provided to the schema */
        private $_additionalProperties = array (
);
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  6 => 'reason',
  8 => 'remediation',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetMediaBuysResponse_Impairment constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processImpairmentId($rawModelDataInput);
            
        
            
                $this->processResourceType($rawModelDataInput);
            
        
            
                $this->processResourceId($rawModelDataInput);
            
        
            
                $this->processPackageIds($rawModelDataInput);
            
        
            
                $this->processTransition($rawModelDataInput);
            
        
            
                $this->processReasonCode($rawModelDataInput);
            
        
            
                $this->processReason($rawModelDataInput);
            
        
            
                $this->processObservedAt($rawModelDataInput);
            
        
            
                $this->processRemediation($rawModelDataInput);
            
        
            
        
            
        

        
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
   'impairment_id',
   'resource_type',
   'resource_id',
   'package_ids',
   'transition',
   'reason_code',
   'reason',
   'observed_at',
   'remediation',
)) as $propertyKey) {
        

        $this->_additionalProperties[$propertyKey] = $value[$propertyKey];
    }

    return false;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidAdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse_Impairment',
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
                 * Get the value of impairment_id.
                 *
                 * Stable identifier for this impairment, used as the notification_id when the impairment fires via webhook. Stable across re-emissions of the same open impairment (e.g., the seller re-fires after the buyer's receiver was down) and across the closing fire that signals resolution. A new impairment for the same resource_id after closure receives a new impairment_id. Distinct from the per-fire idempotency_key issued at the webhook transport layer — see snapshot-and-log Rule 1. Receivers correlate webhook fires to current impairments[] state by impairment_id; receivers suppress duplicate transport-layer retries by idempotency_key. Seeing the same impairment_id with different idempotency_keys is a re-emission signal, not a retry — the buyer should treat it as a notice that something may have been missed.
                 *
                 * @return string
                 */
                public function getImpairmentId(): string
                {
                    

                    return $this->impairmentId;
                }
            

            
                /**
                 * Set the value of impairment_id.
                 *
                 * @param string $impairmentId Stable identifier for this impairment, used as the notification_id when the impairment fires via webhook. Stable across re-emissions of the same open impairment (e.g., the seller re-fires after the buyer's receiver was down) and across the closing fire that signals resolution. A new impairment for the same resource_id after closure receives a new impairment_id. Distinct from the per-fire idempotency_key issued at the webhook transport layer — see snapshot-and-log Rule 1. Receivers correlate webhook fires to current impairments[] state by impairment_id; receivers suppress duplicate transport-layer retries by idempotency_key. Seeing the same impairment_id with different idempotency_keys is a re-emission signal, not a retry — the buyer should treat it as a notice that something may have been missed.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setImpairmentId(
                    string $impairmentId
                ): static {
                    if ($this->impairmentId === $impairmentId) {
                        return $this;
                    }

                    $value = $modelData['impairment_id'] = $impairmentId;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateImpairmentId($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->impairmentId = $value;
                    $this->_rawModelDataInput['impairment_id'] = $impairmentId;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property impairmentId
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processImpairmentId(array $modelData): void
            {
                

                $value = array_key_exists('impairment_id', $modelData) ? $modelData['impairment_id'] : $this->impairmentId;

                

                $this->impairmentId = $this->validateImpairmentId($value, $modelData);
            }

            /**
             * Execute all validators for the property impairmentId
             */
            protected function validateImpairmentId($value, array $modelData)
            {
                
                    

if (!array_key_exists('impairment_id', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'impairment_id',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'impairment_id',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of resource_type.
                 *
                 * The kind of upstream dependency that transitioned to an offline state. Values are drawn from the x-entity vocabulary (see core/x-entity-types.json) and identify a buyer-referenced object with its own lifecycle that the seller can take offline. This is the subset of x-entity types for which a media buy's serving depends on the resource — not a new typology, just the impairment-relevant slice.
                 *
                 * @return GetMediaBuysResponse_ImpairmentResource_Type
                 */
                public function getResourceType(): GetMediaBuysResponse_ImpairmentResource_Type
                {
                    

                    return $this->resourceType;
                }
            

            
                /**
                 * Set the value of resource_type.
                 *
                 * @param string|GetMediaBuysResponse_ImpairmentResource_Type $resourceType The kind of upstream dependency that transitioned to an offline state. Values are drawn from the x-entity vocabulary (see core/x-entity-types.json) and identify a buyer-referenced object with its own lifecycle that the seller can take offline. This is the subset of x-entity types for which a media buy's serving depends on the resource — not a new typology, just the impairment-relevant slice.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setResourceType(
                    string | GetMediaBuysResponse_ImpairmentResource_Type $resourceType
                ): static {
                    if ($this->resourceType === $resourceType) {
                        return $this;
                    }

                    $value = $modelData['resource_type'] = $resourceType;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateResourceType($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->resourceType = $value;
                    $this->_rawModelDataInput['resource_type'] = $resourceType;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property resourceType
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processResourceType(array $modelData): void
            {
                

                $value = array_key_exists('resource_type', $modelData) ? $modelData['resource_type'] : $this->resourceType;

                

                $this->resourceType = $this->validateResourceType($value, $modelData);
            }

            /**
             * Execute all validators for the property resourceType
             */
            protected function validateResourceType($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof GetMediaBuysResponse_ImpairmentResource_Type)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'resource_type',
  1 => 'GetMediaBuysResponse_ImpairmentResource_Type',
)));
}

                
                    

if (!array_key_exists('resource_type', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'resource_type',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'resource_type',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'audience',
   'creative',
   'catalog_item',
   'event_source',
   'property',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'resource_type',
  1 => 
  array (
    0 => 'audience',
    1 => 'creative',
    2 => 'catalog_item',
    3 => 'event_source',
    4 => 'property',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\GetMediaBuysResponse_ImpairmentResource_Type',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'resource_type',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'resource_type',
  1 => 'php_model_generator_enum',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of resource_id.
                 *
                 * Seller's identifier for the specific resource that transitioned. References the same id space as the corresponding sync_/list_ task responses (e.g., audience_id, creative_id).
                 *
                 * @return string
                 */
                public function getResourceId(): string
                {
                    

                    return $this->resourceId;
                }
            

            
                /**
                 * Set the value of resource_id.
                 *
                 * @param string $resourceId Seller's identifier for the specific resource that transitioned. References the same id space as the corresponding sync_/list_ task responses (e.g., audience_id, creative_id).
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setResourceId(
                    string $resourceId
                ): static {
                    if ($this->resourceId === $resourceId) {
                        return $this;
                    }

                    $value = $modelData['resource_id'] = $resourceId;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateResourceId($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->resourceId = $value;
                    $this->_rawModelDataInput['resource_id'] = $resourceId;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property resourceId
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processResourceId(array $modelData): void
            {
                

                $value = array_key_exists('resource_id', $modelData) ? $modelData['resource_id'] : $this->resourceId;

                

                $this->resourceId = $this->validateResourceId($value, $modelData);
            }

            /**
             * Execute all validators for the property resourceId
             */
            protected function validateResourceId($value, array $modelData)
            {
                
                    

if (!array_key_exists('resource_id', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'resource_id',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'resource_id',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of package_ids.
                 *
                 * Packages within this media buy whose delivery is degraded by the impairment. MUST list at least one package — cosmetic effects that do not degrade any package's ability to serve MUST NOT be reported as impairments.
                 *
                 * @return string[]
                 */
                public function getPackageIds(): array
                {
                    

                    return $this->packageIds;
                }
            

            
                /**
                 * Set the value of package_ids.
                 *
                 * @param string[] $packageIds Packages within this media buy whose delivery is degraded by the impairment. MUST list at least one package — cosmetic effects that do not degrade any package's ability to serve MUST NOT be reported as impairments.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setPackageIds(
                    array $packageIds
                ): static {
                    if ($this->packageIds === $packageIds) {
                        return $this;
                    }

                    $value = $modelData['package_ids'] = $packageIds;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validatePackageIds($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->packageIds = $value;
                    $this->_rawModelDataInput['package_ids'] = $packageIds;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property packageIds
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processPackageIds(array $modelData): void
            {
                

                $value = array_key_exists('package_ids', $modelData) ? $modelData['package_ids'] : $this->packageIds;

                

                $this->packageIds = $this->validatePackageIds($value, $modelData);
            }

            /**
             * Execute all validators for the property packageIds
             */
            protected function validatePackageIds($value, array $modelData)
            {
                
                    

if (!array_key_exists('package_ids', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'package_ids',
)));
}

                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'package_ids',
  1 => 'array',
)));
}

                
                    $this->validatePackageIds_ArrayItem_b70e55113bfb2c6ee121b9b56fe75fce($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'package_ids',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of transition.
                 *
                 * The resource-level status transition that triggered this impairment.
                 *
                 * @return GetMediaBuysResponse_Transition3f8df70f425bf231076f2bb72c477f1b
                 */
                public function getTransition(): GetMediaBuysResponse_Transition3f8df70f425bf231076f2bb72c477f1b
                {
                    

                    return $this->transition;
                }
            

            
                /**
                 * Set the value of transition.
                 *
                 * @param GetMediaBuysResponse_Transition3f8df70f425bf231076f2bb72c477f1b $transition The resource-level status transition that triggered this impairment.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setTransition(
                    GetMediaBuysResponse_Transition3f8df70f425bf231076f2bb72c477f1b $transition
                ): static {
                    if ($this->transition === $transition) {
                        return $this;
                    }

                    $value = $modelData['transition'] = $transition;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateTransition($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->transition = $value;
                    $this->_rawModelDataInput['transition'] = $transition;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property transition
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processTransition(array $modelData): void
            {
                

                $value = array_key_exists('transition', $modelData) ? $modelData['transition'] : $this->transition;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_Transition3f8df70f425bf231076f2bb72c477f1b($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'transition',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->transition = $this->validateTransition($value, $modelData);
            }

            /**
             * Execute all validators for the property transition
             */
            protected function validateTransition($value, array $modelData)
            {
                
                    

if (!array_key_exists('transition', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'transition',
)));
}

                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'transition',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_Transition3f8df70f425bf231076f2bb72c477f1b)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'transition',
  1 => 'GetMediaBuysResponse_Transition3f8df70f425bf231076f2bb72c477f1b',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of reason_code.
                 *
                 * Categorical reason for the offline transition. Drives buyer-side remediation logic.
                 *
                 * @return ImpairmentReasonCode
                 */
                public function getReasonCode(): ImpairmentReasonCode
                {
                    

                    return $this->reasonCode;
                }
            

            
                /**
                 * Set the value of reason_code.
                 *
                 * @param string|ImpairmentReasonCode $reasonCode Categorical reason for the offline transition. Drives buyer-side remediation logic.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setReasonCode(
                    string | ImpairmentReasonCode $reasonCode
                ): static {
                    if ($this->reasonCode === $reasonCode) {
                        return $this;
                    }

                    $value = $modelData['reason_code'] = $reasonCode;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateReasonCode($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->reasonCode = $value;
                    $this->_rawModelDataInput['reason_code'] = $reasonCode;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property reasonCode
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processReasonCode(array $modelData): void
            {
                

                $value = array_key_exists('reason_code', $modelData) ? $modelData['reason_code'] : $this->reasonCode;

                

                $this->reasonCode = $this->validateReasonCode($value, $modelData);
            }

            /**
             * Execute all validators for the property reasonCode
             */
            protected function validateReasonCode($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof ImpairmentReasonCode)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'reason_code',
  1 => 'ImpairmentReasonCode',
)));
}

                
                    

if (!array_key_exists('reason_code', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'reason_code',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'reason_code',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'policy_violation',
   'consent_expired',
   'ttl_expired',
   'pii_audit_failed',
   'seller_removed',
   'content_rejected',
   'source_offline',
   'property_depublished',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'reason_code',
  1 => 
  array (
    0 => 'policy_violation',
    1 => 'consent_expired',
    2 => 'ttl_expired',
    3 => 'pii_audit_failed',
    4 => 'seller_removed',
    5 => 'content_rejected',
    6 => 'source_offline',
    7 => 'property_depublished',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\ImpairmentReasonCode',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'reason_code',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'reason_code',
  1 => 'php_model_generator_enum',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of reason.
                 *
                 * Human-readable explanation. Supplements reason_code with seller-specific detail.
                 *
                 * @return string|null
                 */
                public function getReason(): ?string
                {
                    

                    return $this->reason;
                }
            

            
                /**
                 * Set the value of reason.
                 *
                 * @param string $reason Human-readable explanation. Supplements reason_code with seller-specific detail.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setReason(
                    string $reason
                ): static {
                    if ($this->reason === $reason) {
                        return $this;
                    }

                    $value = $modelData['reason'] = $reason;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateReason($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->reason = $value;
                    $this->_rawModelDataInput['reason'] = $reason;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property reason
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processReason(array $modelData): void
            {
                
                    if (!array_key_exists('reason', $modelData) && $this->reason === null) {
                        return;
                    }
                

                $value = array_key_exists('reason', $modelData) ? $modelData['reason'] : $this->reason;

                

                $this->reason = $this->validateReason($value, $modelData);
            }

            /**
             * Execute all validators for the property reason
             */
            protected function validateReason($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'reason',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && mb_strlen($value) > 500) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\MaxLengthException($value ?? null, ...array (
  0 => 'reason',
  1 => 500,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of observed_at.
                 *
                 * ISO 8601 timestamp when the seller observed the resource transition to its offline state.
                 *
                 * @return string
                 */
                public function getObservedAt(): string
                {
                    

                    return $this->observedAt;
                }
            

            
                /**
                 * Set the value of observed_at.
                 *
                 * @param string $observedAt ISO 8601 timestamp when the seller observed the resource transition to its offline state.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setObservedAt(
                    string $observedAt
                ): static {
                    if ($this->observedAt === $observedAt) {
                        return $this;
                    }

                    $value = $modelData['observed_at'] = $observedAt;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateObservedAt($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->observedAt = $value;
                    $this->_rawModelDataInput['observed_at'] = $observedAt;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property observedAt
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processObservedAt(array $modelData): void
            {
                

                $value = array_key_exists('observed_at', $modelData) ? $modelData['observed_at'] : $this->observedAt;

                

                $this->observedAt = $this->validateObservedAt($value, $modelData);
            }

            /**
             * Execute all validators for the property observedAt
             */
            protected function validateObservedAt($value, array $modelData)
            {
                
                    

if (!array_key_exists('observed_at', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'observed_at',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'observed_at',
  1 => 'string',
)));
}

                
                    

if (!\PHPModelGenerator\Format\FormatValidatorFromRegEx::validate($value, '/^\\d{4}-\\d{2}-\\d{2}[Tt]\\d{2}:\\d{2}:\\d{2}(\\.\\d+)?([Zz]|[+\\-]\\d{2}:\\d{2})$/')) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\FormatException($value ?? null, ...array (
  0 => 'observed_at',
  1 => 'date-time',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of remediation.
                 *
                 * Action the buyer can take to clear the impairment, if any. Free text. Absent when no buyer-side remediation is possible (e.g., seller-initiated withdrawal pending re-publication).
                 *
                 * @return string|null
                 */
                public function getRemediation(): ?string
                {
                    

                    return $this->remediation;
                }
            

            
                /**
                 * Set the value of remediation.
                 *
                 * @param string $remediation Action the buyer can take to clear the impairment, if any. Free text. Absent when no buyer-side remediation is possible (e.g., seller-initiated withdrawal pending re-publication).
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setRemediation(
                    string $remediation
                ): static {
                    if ($this->remediation === $remediation) {
                        return $this;
                    }

                    $value = $modelData['remediation'] = $remediation;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateRemediation($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->remediation = $value;
                    $this->_rawModelDataInput['remediation'] = $remediation;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property remediation
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processRemediation(array $modelData): void
            {
                
                    if (!array_key_exists('remediation', $modelData) && $this->remediation === null) {
                        return;
                    }
                

                $value = array_key_exists('remediation', $modelData) ? $modelData['remediation'] : $this->remediation;

                

                $this->remediation = $this->validateRemediation($value, $modelData);
            }

            /**
             * Execute all validators for the property remediation
             */
            protected function validateRemediation($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'remediation',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && mb_strlen($value) > 500) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\MaxLengthException($value ?? null, ...array (
  0 => 'remediation',
  1 => 500,
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
    

    
        
            if (array_key_exists('impairment_id', $modelData) &&
                $modelData['impairment_id'] !== $this->impairmentId
            ) {
                

                $rollbackValues['impairmentId'] = $this->impairmentId;
                $this->processImpairmentId($modelData);
            }
        
    
        
            if (array_key_exists('resource_type', $modelData) &&
                $modelData['resource_type'] !== $this->resourceType
            ) {
                

                $rollbackValues['resourceType'] = $this->resourceType;
                $this->processResourceType($modelData);
            }
        
    
        
            if (array_key_exists('resource_id', $modelData) &&
                $modelData['resource_id'] !== $this->resourceId
            ) {
                

                $rollbackValues['resourceId'] = $this->resourceId;
                $this->processResourceId($modelData);
            }
        
    
        
            if (array_key_exists('package_ids', $modelData) &&
                $modelData['package_ids'] !== $this->packageIds
            ) {
                

                $rollbackValues['packageIds'] = $this->packageIds;
                $this->processPackageIds($modelData);
            }
        
    
        
            if (array_key_exists('transition', $modelData) &&
                $modelData['transition'] !== $this->transition
            ) {
                

                $rollbackValues['transition'] = $this->transition;
                $this->processTransition($modelData);
            }
        
    
        
            if (array_key_exists('reason_code', $modelData) &&
                $modelData['reason_code'] !== $this->reasonCode
            ) {
                

                $rollbackValues['reasonCode'] = $this->reasonCode;
                $this->processReasonCode($modelData);
            }
        
    
        
            if (array_key_exists('reason', $modelData) &&
                $modelData['reason'] !== $this->reason
            ) {
                

                $rollbackValues['reason'] = $this->reason;
                $this->processReason($modelData);
            }
        
    
        
            if (array_key_exists('observed_at', $modelData) &&
                $modelData['observed_at'] !== $this->observedAt
            ) {
                

                $rollbackValues['observedAt'] = $this->observedAt;
                $this->processObservedAt($modelData);
            }
        
    
        
            if (array_key_exists('remediation', $modelData) &&
                $modelData['remediation'] !== $this->remediation
            ) {
                

                $rollbackValues['remediation'] = $this->remediation;
                $this->processRemediation($modelData);
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
 * serialize the property resourceType
 */
protected function serializeResourceType()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->resourceType, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\GetMediaBuysResponse_ImpairmentResource_Type',
));
}


/**
 * serialize the property reasonCode
 */
protected function serializeReasonCode()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->reasonCode, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\ImpairmentReasonCode',
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


private function validatePackageIds_ArrayItem_b70e55113bfb2c6ee121b9b56fe75fce(&$value, $modelData): void {
                    $invalidItems_54f52ca64da9805d9a7fe1132703a178 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_54f52ca64da9805d9a7fe1132703a178, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            

            
                

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array package_ids',
  1 => 'string',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_54f52ca64da9805d9a7fe1132703a178[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_54f52ca64da9805d9a7fe1132703a178[$index])
                ? $invalidItems_54f52ca64da9805d9a7fe1132703a178[$index][] = $e
                : $invalidItems_54f52ca64da9805d9a7fe1132703a178[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_54f52ca64da9805d9a7fe1132703a178);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'package_ids',
  1 => $invalidItems_54f52ca64da9805d9a7fe1132703a178,
)));
                    }
                }


}

// @codeCoverageIgnoreEnd
