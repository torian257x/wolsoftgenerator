<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_ImpairmentResource_Type;

    use AdCP\MediaBuy\Enums\ImpairmentReasonCode;


/**
 * Builder class for GetMediaBuysResponse_Impairment
 */
class GetMediaBuysResponse_ImpairmentBuilder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuysResponse_Impairment with fully validated properties
     */
    public function validate(): GetMediaBuysResponse_Impairment
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysResponse_Impairment($this->_rawModelDataInput);
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
             * Get the value of impairment_id.
             *
             * Stable identifier for this impairment, used as the notification_id when the impairment fires via webhook. Stable across re-emissions of the same open impairment (e.g., the seller re-fires after the buyer's receiver was down) and across the closing fire that signals resolution. A new impairment for the same resource_id after closure receives a new impairment_id. Distinct from the per-fire idempotency_key issued at the webhook transport layer — see snapshot-and-log Rule 1. Receivers correlate webhook fires to current impairments[] state by impairment_id; receivers suppress duplicate transport-layer retries by idempotency_key. Seeing the same impairment_id with different idempotency_keys is a re-emission signal, not a retry — the buyer should treat it as a notice that something may have been missed.
             *
             * @return string|null
             */
            public function getImpairmentId(): ?string
            {
                return $this->_rawModelDataInput['impairment_id'] ?? null;
            }

            /**
             * Set the value of impairment_id.
             *
             * @param string $impairmentId Stable identifier for this impairment, used as the notification_id when the impairment fires via webhook. Stable across re-emissions of the same open impairment (e.g., the seller re-fires after the buyer's receiver was down) and across the closing fire that signals resolution. A new impairment for the same resource_id after closure receives a new impairment_id. Distinct from the per-fire idempotency_key issued at the webhook transport layer — see snapshot-and-log Rule 1. Receivers correlate webhook fires to current impairments[] state by impairment_id; receivers suppress duplicate transport-layer retries by idempotency_key. Seeing the same impairment_id with different idempotency_keys is a re-emission signal, not a retry — the buyer should treat it as a notice that something may have been missed.
             *
             * {@link GetMediaBuysResponse_Impairment::processImpairmentId}
             * 
             *
             * @return static
             */
            public function setImpairmentId(
                string $impairmentId
            ): static {
                if (array_key_exists('impairment_id', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['impairment_id'] === $impairmentId
                ) {
                    return $this;
                }

                $value = $modelData['impairment_id'] = $impairmentId;

                

                

                $this->_rawModelDataInput['impairment_id'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of resource_type.
             *
             * The kind of upstream dependency that transitioned to an offline state. Values are drawn from the x-entity vocabulary (see core/x-entity-types.json) and identify a buyer-referenced object with its own lifecycle that the seller can take offline. This is the subset of x-entity types for which a media buy's serving depends on the resource — not a new typology, just the impairment-relevant slice.
             *
             * @return string|GetMediaBuysResponse_ImpairmentResource_Type|null
             */
            public function getResourceType(): string | GetMediaBuysResponse_ImpairmentResource_Type | null
            {
                return $this->_rawModelDataInput['resource_type'] ?? null;
            }

            /**
             * Set the value of resource_type.
             *
             * @param string|GetMediaBuysResponse_ImpairmentResource_Type $resourceType The kind of upstream dependency that transitioned to an offline state. Values are drawn from the x-entity vocabulary (see core/x-entity-types.json) and identify a buyer-referenced object with its own lifecycle that the seller can take offline. This is the subset of x-entity types for which a media buy's serving depends on the resource — not a new typology, just the impairment-relevant slice.
             *
             * {@link GetMediaBuysResponse_Impairment::processResourceType}
             * 
             *
             * @return static
             */
            public function setResourceType(
                string | GetMediaBuysResponse_ImpairmentResource_Type $resourceType
            ): static {
                if (array_key_exists('resource_type', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['resource_type'] === $resourceType
                ) {
                    return $this;
                }

                $value = $modelData['resource_type'] = $resourceType;

                

                

                $this->_rawModelDataInput['resource_type'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of resource_id.
             *
             * Seller's identifier for the specific resource that transitioned. References the same id space as the corresponding sync_/list_ task responses (e.g., audience_id, creative_id).
             *
             * @return string|null
             */
            public function getResourceId(): ?string
            {
                return $this->_rawModelDataInput['resource_id'] ?? null;
            }

            /**
             * Set the value of resource_id.
             *
             * @param string $resourceId Seller's identifier for the specific resource that transitioned. References the same id space as the corresponding sync_/list_ task responses (e.g., audience_id, creative_id).
             *
             * {@link GetMediaBuysResponse_Impairment::processResourceId}
             * 
             *
             * @return static
             */
            public function setResourceId(
                string $resourceId
            ): static {
                if (array_key_exists('resource_id', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['resource_id'] === $resourceId
                ) {
                    return $this;
                }

                $value = $modelData['resource_id'] = $resourceId;

                

                

                $this->_rawModelDataInput['resource_id'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of package_ids.
             *
             * Packages within this media buy whose delivery is degraded by the impairment. MUST list at least one package — cosmetic effects that do not degrade any package's ability to serve MUST NOT be reported as impairments.
             *
             * @return string[]|null
             */
            public function getPackageIds(): ?array
            {
                return $this->_rawModelDataInput['package_ids'] ?? null;
            }

            /**
             * Set the value of package_ids.
             *
             * @param string[] $packageIds Packages within this media buy whose delivery is degraded by the impairment. MUST list at least one package — cosmetic effects that do not degrade any package's ability to serve MUST NOT be reported as impairments.
             *
             * {@link GetMediaBuysResponse_Impairment::processPackageIds}
             * 
             *
             * @return static
             */
            public function setPackageIds(
                array $packageIds
            ): static {
                if (array_key_exists('package_ids', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['package_ids'] === $packageIds
                ) {
                    return $this;
                }

                $value = $modelData['package_ids'] = $packageIds;

                

                

                $this->_rawModelDataInput['package_ids'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of transition.
             *
             * The resource-level status transition that triggered this impairment.
             *
             * @return GetMediaBuysResponse_Transition3f8df70f425bf231076f2bb72c477f1b|GetMediaBuysResponse_Transition3f8df70f425bf231076f2bb72c477f1bBuilder|array|null
             */
            public function getTransition(): mixed
            {
                return $this->_rawModelDataInput['transition'] ?? null;
            }

            /**
             * Set the value of transition.
             *
             * @param GetMediaBuysResponse_Transition3f8df70f425bf231076f2bb72c477f1b|GetMediaBuysResponse_Transition3f8df70f425bf231076f2bb72c477f1bBuilder|array $transition The resource-level status transition that triggered this impairment.
             *
             * {@link GetMediaBuysResponse_Impairment::processTransition}
             * 
             *
             * @return static
             */
            public function setTransition(
                mixed $transition
            ): static {
                if (array_key_exists('transition', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['transition'] === $transition
                ) {
                    return $this;
                }

                $value = $modelData['transition'] = $transition;

                

                

                $this->_rawModelDataInput['transition'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of reason_code.
             *
             * Categorical reason for the offline transition. Drives buyer-side remediation logic.
             *
             * @return string|ImpairmentReasonCode|null
             */
            public function getReasonCode(): string | ImpairmentReasonCode | null
            {
                return $this->_rawModelDataInput['reason_code'] ?? null;
            }

            /**
             * Set the value of reason_code.
             *
             * @param string|ImpairmentReasonCode $reasonCode Categorical reason for the offline transition. Drives buyer-side remediation logic.
             *
             * {@link GetMediaBuysResponse_Impairment::processReasonCode}
             * 
             *
             * @return static
             */
            public function setReasonCode(
                string | ImpairmentReasonCode $reasonCode
            ): static {
                if (array_key_exists('reason_code', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['reason_code'] === $reasonCode
                ) {
                    return $this;
                }

                $value = $modelData['reason_code'] = $reasonCode;

                

                

                $this->_rawModelDataInput['reason_code'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['reason'] ?? null;
            }

            /**
             * Set the value of reason.
             *
             * @param string $reason Human-readable explanation. Supplements reason_code with seller-specific detail.
             *
             * {@link GetMediaBuysResponse_Impairment::processReason}
             * 
             *
             * @return static
             */
            public function setReason(
                string $reason
            ): static {
                if (array_key_exists('reason', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['reason'] === $reason
                ) {
                    return $this;
                }

                $value = $modelData['reason'] = $reason;

                

                

                $this->_rawModelDataInput['reason'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of observed_at.
             *
             * ISO 8601 timestamp when the seller observed the resource transition to its offline state.
             *
             * @return string|null
             */
            public function getObservedAt(): ?string
            {
                return $this->_rawModelDataInput['observed_at'] ?? null;
            }

            /**
             * Set the value of observed_at.
             *
             * @param string $observedAt ISO 8601 timestamp when the seller observed the resource transition to its offline state.
             *
             * {@link GetMediaBuysResponse_Impairment::processObservedAt}
             * 
             *
             * @return static
             */
            public function setObservedAt(
                string $observedAt
            ): static {
                if (array_key_exists('observed_at', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['observed_at'] === $observedAt
                ) {
                    return $this;
                }

                $value = $modelData['observed_at'] = $observedAt;

                

                

                $this->_rawModelDataInput['observed_at'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['remediation'] ?? null;
            }

            /**
             * Set the value of remediation.
             *
             * @param string $remediation Action the buyer can take to clear the impairment, if any. Free text. Absent when no buyer-side remediation is possible (e.g., seller-initiated withdrawal pending re-publication).
             *
             * {@link GetMediaBuysResponse_Impairment::processRemediation}
             * 
             *
             * @return static
             */
            public function setRemediation(
                string $remediation
            ): static {
                if (array_key_exists('remediation', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['remediation'] === $remediation
                ) {
                    return $this;
                }

                $value = $modelData['remediation'] = $remediation;

                

                

                $this->_rawModelDataInput['remediation'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
