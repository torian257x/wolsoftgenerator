<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;

    use AdCP\MediaBuy\Enums\SnapshotUnavailableReason;


/**
 * Builder class for GetMediaBuysResponse_PackageStatus
 */
class GetMediaBuysResponse_PackageStatusBuilder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuysResponse_PackageStatus with fully validated properties
     */
    public function validate(): GetMediaBuysResponse_PackageStatus
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysResponse_PackageStatus($this->_rawModelDataInput);
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
             * Get the value of package_id.
             *
             * Seller's package identifier
             *
             * @return string|null
             */
            public function getPackageId(): ?string
            {
                return $this->_rawModelDataInput['package_id'] ?? null;
            }

            /**
             * Set the value of package_id.
             *
             * @param string $packageId Seller's package identifier
             *
             * {@link GetMediaBuysResponse_PackageStatus::processPackageId}
             * 
             *
             * @return static
             */
            public function setPackageId(
                string $packageId
            ): static {
                if (array_key_exists('package_id', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['package_id'] === $packageId
                ) {
                    return $this;
                }

                $value = $modelData['package_id'] = $packageId;

                

                

                $this->_rawModelDataInput['package_id'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of product_id.
             *
             * Product identifier this package is purchased from
             *
             * @return string|null
             */
            public function getProductId(): ?string
            {
                return $this->_rawModelDataInput['product_id'] ?? null;
            }

            /**
             * Set the value of product_id.
             *
             * @param string $productId Product identifier this package is purchased from
             *
             * {@link GetMediaBuysResponse_PackageStatus::processProductId}
             * 
             *
             * @return static
             */
            public function setProductId(
                string $productId
            ): static {
                if (array_key_exists('product_id', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['product_id'] === $productId
                ) {
                    return $this;
                }

                $value = $modelData['product_id'] = $productId;

                

                

                $this->_rawModelDataInput['product_id'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of budget.
             *
             * Package budget amount, denominated in package.currency when present, otherwise media_buy.currency
             *
             * @return float|null
             */
            public function getBudget(): ?float
            {
                return $this->_rawModelDataInput['budget'] ?? null;
            }

            /**
             * Set the value of budget.
             *
             * @param float $budget Package budget amount, denominated in package.currency when present, otherwise media_buy.currency
             *
             * {@link GetMediaBuysResponse_PackageStatus::processBudget}
             * 
             *
             * @return static
             */
            public function setBudget(
                float $budget
            ): static {
                if (array_key_exists('budget', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['budget'] === $budget
                ) {
                    return $this;
                }

                $value = $modelData['budget'] = $budget;

                

                

                $this->_rawModelDataInput['budget'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of currency.
             *
             * ISO 4217 currency code for monetary values at this package level (budget, bid_price, snapshot.spend). When absent, inherit media_buy.currency.
             *
             * @return string|null
             */
            public function getCurrency(): ?string
            {
                return $this->_rawModelDataInput['currency'] ?? null;
            }

            /**
             * Set the value of currency.
             *
             * @param string $currency ISO 4217 currency code for monetary values at this package level (budget, bid_price, snapshot.spend). When absent, inherit media_buy.currency.
             *
             * {@link GetMediaBuysResponse_PackageStatus::processCurrency}
             * 
             *
             * @return static
             */
            public function setCurrency(
                string $currency
            ): static {
                if (array_key_exists('currency', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['currency'] === $currency
                ) {
                    return $this;
                }

                $value = $modelData['currency'] = $currency;

                

                

                $this->_rawModelDataInput['currency'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of bid_price.
             *
             * Current bid price for auction-based packages. Denominated in package.currency when present, otherwise media_buy.currency. Relevant for automated price optimization loops.
             *
             * @return float|null
             */
            public function getBidPrice(): ?float
            {
                return $this->_rawModelDataInput['bid_price'] ?? null;
            }

            /**
             * Set the value of bid_price.
             *
             * @param float $bidPrice Current bid price for auction-based packages. Denominated in package.currency when present, otherwise media_buy.currency. Relevant for automated price optimization loops.
             *
             * {@link GetMediaBuysResponse_PackageStatus::processBidPrice}
             * 
             *
             * @return static
             */
            public function setBidPrice(
                float $bidPrice
            ): static {
                if (array_key_exists('bid_price', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['bid_price'] === $bidPrice
                ) {
                    return $this;
                }

                $value = $modelData['bid_price'] = $bidPrice;

                

                

                $this->_rawModelDataInput['bid_price'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of impressions.
             *
             * Goal impression count for impression-based packages
             *
             * @return float|null
             */
            public function getImpressions(): ?float
            {
                return $this->_rawModelDataInput['impressions'] ?? null;
            }

            /**
             * Set the value of impressions.
             *
             * @param float $impressions Goal impression count for impression-based packages
             *
             * {@link GetMediaBuysResponse_PackageStatus::processImpressions}
             * 
             *
             * @return static
             */
            public function setImpressions(
                float $impressions
            ): static {
                if (array_key_exists('impressions', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['impressions'] === $impressions
                ) {
                    return $this;
                }

                $value = $modelData['impressions'] = $impressions;

                

                

                $this->_rawModelDataInput['impressions'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of targeting_overlay.
             *
             * Targeting overlay applied to this package, echoed from the most recent create_media_buy or update_media_buy. Sellers SHOULD echo any persisted targeting so buyers can verify what was stored without replaying their own request. Sellers claiming the property-lists or collection-lists specialisms MUST include, within this targeting_overlay, the PropertyListReference / CollectionListReference they persisted.
             *
             * @return GetMediaBuysResponse_TargetingOverlay|GetMediaBuysResponse_TargetingOverlayBuilder|array|null
             */
            public function getTargetingOverlay(): mixed
            {
                return $this->_rawModelDataInput['targeting_overlay'] ?? null;
            }

            /**
             * Set the value of targeting_overlay.
             *
             * @param GetMediaBuysResponse_TargetingOverlay|GetMediaBuysResponse_TargetingOverlayBuilder|array $targetingOverlay Targeting overlay applied to this package, echoed from the most recent create_media_buy or update_media_buy. Sellers SHOULD echo any persisted targeting so buyers can verify what was stored without replaying their own request. Sellers claiming the property-lists or collection-lists specialisms MUST include, within this targeting_overlay, the PropertyListReference / CollectionListReference they persisted.
             *
             * {@link GetMediaBuysResponse_PackageStatus::processTargetingOverlay}
             * 
             *
             * @return static
             */
            public function setTargetingOverlay(
                mixed $targetingOverlay
            ): static {
                if (array_key_exists('targeting_overlay', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['targeting_overlay'] === $targetingOverlay
                ) {
                    return $this;
                }

                $value = $modelData['targeting_overlay'] = $targetingOverlay;

                

                

                $this->_rawModelDataInput['targeting_overlay'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of start_time.
             *
             * ISO 8601 flight start time for this package. Use to determine whether the package is within its scheduled flight before interpreting delivery status.
             *
             * @return string|null
             */
            public function getStartTime(): ?string
            {
                return $this->_rawModelDataInput['start_time'] ?? null;
            }

            /**
             * Set the value of start_time.
             *
             * @param string $startTime ISO 8601 flight start time for this package. Use to determine whether the package is within its scheduled flight before interpreting delivery status.
             *
             * {@link GetMediaBuysResponse_PackageStatus::processStartTime}
             * 
             *
             * @return static
             */
            public function setStartTime(
                string $startTime
            ): static {
                if (array_key_exists('start_time', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['start_time'] === $startTime
                ) {
                    return $this;
                }

                $value = $modelData['start_time'] = $startTime;

                

                

                $this->_rawModelDataInput['start_time'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of end_time.
             *
             * ISO 8601 flight end time for this package
             *
             * @return string|null
             */
            public function getEndTime(): ?string
            {
                return $this->_rawModelDataInput['end_time'] ?? null;
            }

            /**
             * Set the value of end_time.
             *
             * @param string $endTime ISO 8601 flight end time for this package
             *
             * {@link GetMediaBuysResponse_PackageStatus::processEndTime}
             * 
             *
             * @return static
             */
            public function setEndTime(
                string $endTime
            ): static {
                if (array_key_exists('end_time', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['end_time'] === $endTime
                ) {
                    return $this;
                }

                $value = $modelData['end_time'] = $endTime;

                

                

                $this->_rawModelDataInput['end_time'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of paused.
             *
             * Whether this package is currently paused by the buyer
             *
             * @return bool|null
             */
            public function getPaused(): ?bool
            {
                return $this->_rawModelDataInput['paused'] ?? null;
            }

            /**
             * Set the value of paused.
             *
             * @param bool $paused Whether this package is currently paused by the buyer
             *
             * {@link GetMediaBuysResponse_PackageStatus::processPaused}
             * 
             *
             * @return static
             */
            public function setPaused(
                bool $paused
            ): static {
                if (array_key_exists('paused', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['paused'] === $paused
                ) {
                    return $this;
                }

                $value = $modelData['paused'] = $paused;

                

                

                $this->_rawModelDataInput['paused'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of canceled.
             *
             * Whether this package has been canceled. Canceled packages stop delivery and cannot be reactivated.
             *
             * @return bool|null
             */
            public function getCanceled(): ?bool
            {
                return $this->_rawModelDataInput['canceled'] ?? null;
            }

            /**
             * Set the value of canceled.
             *
             * @param bool $canceled Whether this package has been canceled. Canceled packages stop delivery and cannot be reactivated.
             *
             * {@link GetMediaBuysResponse_PackageStatus::processCanceled}
             * 
             *
             * @return static
             */
            public function setCanceled(
                bool $canceled
            ): static {
                if (array_key_exists('canceled', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['canceled'] === $canceled
                ) {
                    return $this;
                }

                $value = $modelData['canceled'] = $canceled;

                

                

                $this->_rawModelDataInput['canceled'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of cancellation.
             *
             * Cancellation metadata. Present only when canceled is true.
             *
             * @return GetMediaBuysResponse_Cancellation86dfc7bbdbf088e383309da2d050967f|GetMediaBuysResponse_Cancellation86dfc7bbdbf088e383309da2d050967fBuilder|array|null
             */
            public function getCancellation(): mixed
            {
                return $this->_rawModelDataInput['cancellation'] ?? null;
            }

            /**
             * Set the value of cancellation.
             *
             * @param GetMediaBuysResponse_Cancellation86dfc7bbdbf088e383309da2d050967f|GetMediaBuysResponse_Cancellation86dfc7bbdbf088e383309da2d050967fBuilder|array $cancellation Cancellation metadata. Present only when canceled is true.
             *
             * {@link GetMediaBuysResponse_PackageStatus::processCancellation}
             * 
             *
             * @return static
             */
            public function setCancellation(
                mixed $cancellation
            ): static {
                if (array_key_exists('cancellation', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['cancellation'] === $cancellation
                ) {
                    return $this;
                }

                $value = $modelData['cancellation'] = $cancellation;

                

                

                $this->_rawModelDataInput['cancellation'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of creative_deadline.
             *
             * ISO 8601 timestamp for creative upload or change deadline for this package. After this deadline, creative changes are rejected. When absent, the media buy's creative_deadline applies.
             *
             * @return string|null
             */
            public function getCreativeDeadline(): ?string
            {
                return $this->_rawModelDataInput['creative_deadline'] ?? null;
            }

            /**
             * Set the value of creative_deadline.
             *
             * @param string $creativeDeadline ISO 8601 timestamp for creative upload or change deadline for this package. After this deadline, creative changes are rejected. When absent, the media buy's creative_deadline applies.
             *
             * {@link GetMediaBuysResponse_PackageStatus::processCreativeDeadline}
             * 
             *
             * @return static
             */
            public function setCreativeDeadline(
                string $creativeDeadline
            ): static {
                if (array_key_exists('creative_deadline', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['creative_deadline'] === $creativeDeadline
                ) {
                    return $this;
                }

                $value = $modelData['creative_deadline'] = $creativeDeadline;

                

                

                $this->_rawModelDataInput['creative_deadline'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of creative_approvals.
             *
             * Approval status for each creative assigned to this package. Absent when no creatives have been assigned.
             *
             * @return GetMediaBuysResponse_ItemOfArrayCreative_Approvalsea4cf9200407e5ebf06e7e00e1c175bf[]|GetMediaBuysResponse_ItemOfArrayCreative_Approvalsea4cf9200407e5ebf06e7e00e1c175bfBuilder[]|array|null
             */
            public function getCreativeApprovals(): mixed
            {
                return $this->_rawModelDataInput['creative_approvals'] ?? null;
            }

            /**
             * Set the value of creative_approvals.
             *
             * @param GetMediaBuysResponse_ItemOfArrayCreative_Approvalsea4cf9200407e5ebf06e7e00e1c175bf[]|GetMediaBuysResponse_ItemOfArrayCreative_Approvalsea4cf9200407e5ebf06e7e00e1c175bfBuilder[]|array $creativeApprovals Approval status for each creative assigned to this package. Absent when no creatives have been assigned.
             *
             * {@link GetMediaBuysResponse_PackageStatus::processCreativeApprovals}
             * 
             *
             * @return static
             */
            public function setCreativeApprovals(
                mixed $creativeApprovals
            ): static {
                if (array_key_exists('creative_approvals', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['creative_approvals'] === $creativeApprovals
                ) {
                    return $this;
                }

                $value = $modelData['creative_approvals'] = $creativeApprovals;

                

                

                $this->_rawModelDataInput['creative_approvals'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of format_ids_pending.
             *
             * Format IDs from the original create_media_buy format_ids_to_provide that have not yet been uploaded via sync_creatives. When empty or absent, all required formats have been provided.
             *
             * @return GetMediaBuysResponse_FormatReferenceStructuredObject[]|GetMediaBuysResponse_FormatReferenceStructuredObjectBuilder[]|array|null
             */
            public function getFormatIdsPending(): mixed
            {
                return $this->_rawModelDataInput['format_ids_pending'] ?? null;
            }

            /**
             * Set the value of format_ids_pending.
             *
             * @param GetMediaBuysResponse_FormatReferenceStructuredObject[]|GetMediaBuysResponse_FormatReferenceStructuredObjectBuilder[]|array $formatIdsPending Format IDs from the original create_media_buy format_ids_to_provide that have not yet been uploaded via sync_creatives. When empty or absent, all required formats have been provided.
             *
             * {@link GetMediaBuysResponse_PackageStatus::processFormatIdsPending}
             * 
             *
             * @return static
             */
            public function setFormatIdsPending(
                mixed $formatIdsPending
            ): static {
                if (array_key_exists('format_ids_pending', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['format_ids_pending'] === $formatIdsPending
                ) {
                    return $this;
                }

                $value = $modelData['format_ids_pending'] = $formatIdsPending;

                

                

                $this->_rawModelDataInput['format_ids_pending'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of snapshot_unavailable_reason.
             *
             * Machine-readable reason the snapshot is omitted. Present only when include_snapshot was true and snapshot is unavailable for this package.
             *
             * @return string|SnapshotUnavailableReason|null
             */
            public function getSnapshotUnavailableReason(): string | SnapshotUnavailableReason | null
            {
                return $this->_rawModelDataInput['snapshot_unavailable_reason'] ?? null;
            }

            /**
             * Set the value of snapshot_unavailable_reason.
             *
             * @param string|SnapshotUnavailableReason|null $snapshotUnavailableReason Machine-readable reason the snapshot is omitted. Present only when include_snapshot was true and snapshot is unavailable for this package.
             *
             * {@link GetMediaBuysResponse_PackageStatus::processSnapshotUnavailableReason}
             * 
             *
             * @return static
             */
            public function setSnapshotUnavailableReason(
                string | SnapshotUnavailableReason | null $snapshotUnavailableReason
            ): static {
                if (array_key_exists('snapshot_unavailable_reason', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['snapshot_unavailable_reason'] === $snapshotUnavailableReason
                ) {
                    return $this;
                }

                $value = $modelData['snapshot_unavailable_reason'] = $snapshotUnavailableReason;

                

                

                $this->_rawModelDataInput['snapshot_unavailable_reason'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of snapshot.
             *
             * Near-real-time delivery snapshot for this package. Only present when include_snapshot was true in the request. Represents the latest available entity-level stats from the platform — not billing-grade data.
             *
             * @return GetMediaBuysResponse_Snapshot2308d2a610637988e7da2c8d3b1823de|GetMediaBuysResponse_Snapshot2308d2a610637988e7da2c8d3b1823deBuilder|array|null
             */
            public function getSnapshot(): mixed
            {
                return $this->_rawModelDataInput['snapshot'] ?? null;
            }

            /**
             * Set the value of snapshot.
             *
             * @param GetMediaBuysResponse_Snapshot2308d2a610637988e7da2c8d3b1823de|GetMediaBuysResponse_Snapshot2308d2a610637988e7da2c8d3b1823deBuilder|array $snapshot Near-real-time delivery snapshot for this package. Only present when include_snapshot was true in the request. Represents the latest available entity-level stats from the platform — not billing-grade data.
             *
             * {@link GetMediaBuysResponse_PackageStatus::processSnapshot}
             * 
             *
             * @return static
             */
            public function setSnapshot(
                mixed $snapshot
            ): static {
                if (array_key_exists('snapshot', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['snapshot'] === $snapshot
                ) {
                    return $this;
                }

                $value = $modelData['snapshot'] = $snapshot;

                

                

                $this->_rawModelDataInput['snapshot'] = $value;

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
             * {@link GetMediaBuysResponse_PackageStatus::processExt}
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
        
    
}

// @codeCoverageIgnoreEnd
